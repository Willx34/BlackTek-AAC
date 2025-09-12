<?php

namespace App\Services;

use App\Models\AuthProvider;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;

class UserRegistrationService
{
    public function createUser(array $userData): User
    {
        $user = User::create($userData);

        event(new Registered($user));

        return $user;
    }

    public function createUserWithProvider(array $userData, array $providerData): User
    {
        $user = $this->createUser($userData);

        AuthProvider::create([
            'user_id' => $user->id,
            'provider' => $providerData['provider'],
            'nickname' => $providerData['nickname'],
            'avatar' => $providerData['avatar'],
            'provider_id' => $providerData['provider_id'],
            'token' => $providerData['token'],
            'login_at' => now(),
        ]);

        return $user;
    }

    public function loginAndRedirect(User $user, string $redirectRoute = '/')
    {
        Auth::login($user);

        return redirect()->intended($redirectRoute)->with('flash', [
            'success',
            'Account created successfully'
        ]);
    }
}
