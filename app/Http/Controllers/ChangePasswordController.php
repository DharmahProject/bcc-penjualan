<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

class ChangePasswordController extends Controller
{
    public function changePassword(Request $request)
    {
        try {

            if ($request->email == null) {
                return back()->withErrors(['email' => 'Email should not be null.']);
            }
            if ($request->password == null) {
                return back()->withErrors(['password' => 'password should not be null.']);
            }
            if ($request->password_confirmation == null) {
                return back()->withErrors(['password_confirmation' => 'password confirmation should not be null.']);
            }

            if ($request->password != $request->password_confirmation) {
                return back()->withErrors([
                    'password' => 'password and password confirmation does not match',
                    'password_confirmation' => 'password and password confirmation does not match'
                ]);
            }

            // Retrieve the user by email
            $user = \App\Models\User::where('email', $request->email)->first();

            if (!$user) {
                return back()->withErrors(['email' => 'Email not found']);
            }

            // Update the user's password
            $user->forceFill([
                'password' => bcrypt($request->password),
                'remember_token' => Str::random(60),
            ])->save();

            event(new PasswordReset($user));

            return redirect()->route('login')->with('status', 'Password has been reset successfully.');
        } catch (Exception $ex) {
        }
    }
}
