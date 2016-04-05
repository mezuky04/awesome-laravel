<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

/**
 * Handle user authentication.
 *
 * @author Alexandru Bugarin <alexandru.bugarin@gmail.com>
 */
class LoginController extends Controller {

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Handle user log out.
     *
     * @return mixed
     */
    public function logout() {
        Auth::logout();
        return redirect('/');
    }

    public function redirectToProvider() {
        return Socialite::driver('github')->redirect();
    }

    public function handleProviderCallback() {

        $githubUser = Socialite::driver('github')->user();

        // Register user if is not already registered
        if (!User::where('github_id', $githubUser->getId())->count()) {
            // Register new user
            $user = User::create([
                'github_id' => $githubUser->getId(),
                'email' => $githubUser->getEmail()
            ]);

            // First application user will have admin role
            if (User::count() === 1) {
                $admin = new Role();
                $admin->name = 'admin';
                $admin->display_name = 'Administrator';
                $admin->description = 'Application administrator';
                $admin->save();
                $user->attachRole($admin);
            } else {
                $simpleUser = new Role();
                $simpleUser->name = 'simple-user';
                $simpleUser->display_name = 'Simple user';
                $simpleUser->description = 'Application user';
                $simpleUser->save();
                $user->attachRole($simpleUser);
            }
        } else {
            $user = User::where('github_id', $githubUser->getId())->first();
        }

        Auth::login($user);
        return redirect('/submit-resource');
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