<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepositoryInterface;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    protected $userRepositoryInterface;
    public function __construct(UserRepositoryInterface $userRepositoryInterface)
    {
        $this->userRepositoryInterface = $userRepositoryInterface;
    }
    //
    public function login(Request $request)
    {
        $user = Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ], $request->remember);

        if ($user) {
            return redirect()->back();
        } else {
            return redirect()->back()->with('auth_message', 'Sai tài khoản hoặc mật khảu!');
        }
    }
    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required:email',
            'name' => 'required|min:2',
            'password' => 'required|min:8',
        ]);
        $user = $this->userRepositoryInterface->findExistedUSer('email', $request->email);
        // dd($user);
        try {
            if (!$user) {

                $this->userRepositoryInterface->create($request->all());
                return redirect()->back()->with('auth_message', 'Tạo tài khoản thành công!');
            }
            return redirect()->back()->with('auth_message', 'Tài khoản này đã có người đăng ký rồi!');
        } catch (\Throwable $th) {
            dd($$th);
        }

    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('index');
    }
}