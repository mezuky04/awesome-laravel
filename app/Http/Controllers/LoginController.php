<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Handle user authentication.
 *
 * @author Alexandru Bugarin <alexandru.bugarin@gmail.com>
 */
class LoginController extends Controller {

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;
    
    /**
     * Render login page.
     *
     * @return mixed
     */
    public function index() {
        return view('pages.login');
    }

    /**
     * Handle login.
     *
     * @param Request $request
     * @return mixed
     */
    public function login(Request $request) {

        // Validate credentials
        $this->validate($request, [
            'email' => ['required', 'email'],
            'password' => ['required', 'between:6,128']
        ]);

        $credentials = $request->only('email', 'password');
        $throttles = $this->isUsingThrottlesLoginsTrait();

        // Check if user has too many login attempts
        if ($throttles && $this->hasTooManyLoginAttempts($request)) {
            return response()->json(['lockout_time' => $this->lockoutTime()]);
        }

        // Check if credentials are correct
        if (Auth::attempt($credentials)) {
            return response()->json(['success' => true]);
        }

        // If we arrive here email/password combination is wrong
        if ($throttles) {
            $this->incrementLoginAttempts($request);
        }

        return response()->json([
            'success' => false,
            'error' => 'Invalid email or password.'
        ], 422);
    }

    /**
     * Handle user log out.
     *
     * @return mixed
     */
    public function logout() {
        Auth::logout();
        return redirect('/');
    }

    /**
     * Custom format for validation errors.
     *
     * @param Validator $validator
     * @return array
     */
    protected function formatValidationErrors(Validator $validator) {

        $validatedFields = ['email', 'password'];

        $messages = $validator->messages();
        $errors = [];

        foreach ($validatedFields as $field) {
            if ($messages->has($field)) {
                $errors[$field] = $messages->first($field);
            }
        }

        return [
            'success' => false,
            'errors' => $errors
        ];
    }
}