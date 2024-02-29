<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
  public function index()
  {
    return view('pages.auth.login');
  }

  public function cekLogin(Request $request)
  {
    $input = $request->validate([
      'username' => ['required'],
      'password' => ['required'],
    ]);

    if (Auth::attempt($input)) {
        return redirect(route('dashboard.index'))->withInfo('Anda berhasil masuk!');
    } else {
      return back()->withFailed('Username atau password salah!');
    }
  }
}
