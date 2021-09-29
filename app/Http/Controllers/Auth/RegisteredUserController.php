<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $attributes = request()->validate([
            'first_name' => ['required', 'string', 'max:255', 'regex:/^\S*$/u'],
            'last_name' => ['required', 'string', 'max:255', 'regex:/^\S*$/u'], 
            'username' => ['required', 'string', 'max:255', 'min:3', Rule::unique('users', 'username'), 'regex:/^\S*$/u'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users', 'email')],
            'password' => ['required', 'max:255', 'confirmed', Rules\Password::defaults()],
            'date_of_birth' => ['required', 'date_format:Y-m-d', 'before:today']
        ]);

        // $user = User::create([
        //     'first_name' => $request->first_name,
        //     'last_name' => $request->last_name,
        //     'username' => $request->username,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        //     'date_of_birth' =>$request->date_of_birth
        // ]);

        // event(new Registered($user));

        $user = User::create($attributes);

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
