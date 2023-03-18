<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
  // Login v1
  public function login_v1()
  {
    $pageConfigs = ['blankPage' => true];

    return view('/content/authentication/auth-login-v1', ['pageConfigs' => $pageConfigs]);
  }

  // Login v2
  public function login_v2()
  {
    $pageConfigs = ['blankPage' => true];

    return view('/auth/auth-login', ['pageConfigs' => $pageConfigs]);
  }

  
  // Forgot Password v1
  public function forgot_password_v1()
  {
    $pageConfigs = ['blankPage' => true];

    return view('/content/authentication/auth-forgot-password-v1', ['pageConfigs' => $pageConfigs]);
  }

}
