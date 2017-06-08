<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use JWTAuth;
use App\Employee;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('guest')->except('logout');
    }

    public function login(Request $request) {

        $employee = Employee::where('employee_number', $request->get('employee_number'))->first();

        if (!$employee) {
            return response()->json(['message' => 'no employee found', 'status' => 404], 404);
        }

        try {
            if (!$token = JWTAuth::fromUser($employee)) {
                return response()->json(['message' => 'unable to get the token', 'status' => 400], 400);
            }
        } catch (Exception $e) {
                return response()->json(['errors' => 'error creating a token'], 500);
        }

        return response()->json(['status' => 'success', 'token_type' => 'bearer' ,'access_token' => $token, 'user' => $employee], 200);

    }
}

