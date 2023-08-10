<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\blog;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog_hot = blog::inRandomOrder()->paginate(3);
        $blog_new = Blog::orderBy('created_at', 'desc')->paginate(6);
        return view('welcome', ['blog_hot' => $blog_hot, 'blog_new' => $blog_new]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'email' => 'required|unique:users',
                'password' => 'required|min:6',
            ],
            [
                'value.required' => "Điểm không được để trống.",
                'email.unique' => 'Email đã tồn tại.',
                'password.required' => 'Mật khẩu không được để trống.',
                'email.required' => 'Email không được để trống.',
                'password.min' => 'Mật khẩu tối thiểu 6 ký tự.',
            ]
        );
        if ($validator->passes()) {
            $data =  User::Create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
            ]);
            // Mail::to($request->email)->send(new SendMail($data));
            // Mail::to($request->email)->send(new SendMail($data));
            Mail::send('email.email', compact('data'), function ($email) use ($data) {
                $email->subject('Xác nhận tài khoản');
                $email->to($data->email, $data->name);
            });
            return response()->json(['success' => 'Tạo tài khoản thành công.', 'data' => $data]);
        }
        return response()->json(['message' => array_combine($validator->errors()->keys(), $validator->errors()->all())]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('email.verymail');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        if ($user->activate_email == null) {
            $user->update([
                'activate_email' => Carbon::now()
            ]);
            return redirect('/');
        }
        return abort(404);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function login()
    {
        return view('auth.login');
    }
    public function authlogin(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
            if (auth()->user()->activate_email != null) {
                return redirect('blogs');
            } else {
                auth()->logout();
                return redirect('login');
            }
        }
        return redirect('login');
    }
    public function logout(){
        auth()->logout();
        return redirect()->back();
    }
}
