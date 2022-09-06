<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
 
class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        //dd('teste');
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ],
            [
                'email.required'=>"O campo email é obrigatorio",
                'password.required'=>"O campo senha é obrigatorio"
            ]
        );
 
        if (Auth::attempt($credentials)) {
          //  dd('logou');
            $request->session()->regenerate();
            return redirect()->intended('home');
        }
 
        return back()->withErrors([
            'email' => 'As credenciais fornecidas não correspondem aos nossos registros.',
        ])->onlyInput('email');
    }
}