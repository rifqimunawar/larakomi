<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Password;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Request as Requesttttt;

/**
 * Summary of LoginController
 */
class LoginController extends Controller
{
    public function login()
    {
        if (auth()->check()) {
            return redirect('/profile');
        }
    
        return view('auth.login');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            Alert::success('Mantap Sahabat', 'Anda Berhasil Masuk');
            return redirect()->intended('/profile');
        } else {
            // Authentication failed...
            $user = User::where('email', $credentials['email'])->first();

            if (!$user) {
                return redirect()->back()->with('error', 'Email atau Password Salah');
            } else {
                return redirect()->back()->with('error', 'Email atau Password Salah');
            }
        }
    }


    public function register()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        // Rule validasi untuk username dan password
        $rules = [
            'username' => 'required|unique:users,username',
            'email' => 'required|unique:users,email',
            'nim' => 'required|min:14|unique:users,nim',
            'password' => 'required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
        ];
    
        $messages = [
          'username.required' => 'Username wajib diisi.',
          'username.unique' => 'Username sudah digunakan.',
          'email.unique' => 'email sudah digunakan.',
          'nim.required' => 'Nim wajib diisi.',
          'nim.unique' => 'Nim sudah digunakan.',
          'nim.min' => 'Nim kurang ajg minimal 14 Angka.',
          'password.required' => 'Password wajib diisi.',
          'password.min' => 'Password minimal 8 karakter.',
          'password.regex' => 'Password harus terdiri dari huruf kapital, huruf kecil, dan angka.',
      ];
    
        // Validasi input
        $validator = Validator::make($request->all(), $rules, $messages);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        // Buat user baru
        $user = User::create([
            'name'=>$request->name,
            'nim'=>$request->nim,
            'username'=>$request->username,
            'email'=>$request->email,
            'rayon_id'=>$request->rayon_id,
            'role_id'=>$request->role_id,
            'password'=>bcrypt($request->password),
        ]);
    
        Alert::success('Mantap Sahabat', 'Anda Berhasil Register');
        return redirect()->to('/login');
    }
    

    /**
     * Summary of logout
     * @param Request $request
     * @return RedirectResponse
     */
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect ('/');
    }

    // fitru reset passsword
    public function ForgotPassword()
    {
        return view('auth.forgot-password');
    }

    public function ResetLinkEmail(Requesttttt $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    }
}
