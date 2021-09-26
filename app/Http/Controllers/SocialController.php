<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function redirectToProvider($driver)
    {
        return $this->isProviderAllowed($driver) ?
        Socialite::driver($driver)->redirect() :
        $this->sendFailedResponse("{$driver} is not currently supported");
    }

    public function handleProviderCallback($driver)
    {
        $user = Socialite::driver($driver)->user();
        return empty( $user->email )
            ? $this->sendFailedResponse("No email id returned from {$driver} provider.")
            : $this->loginOrCreateAccount($user, $driver);
    }

    protected function sendFailedResponse($msg = null)
    {
        return redirect()->route('login')
            ->withErrors(['msg' => $msg ?: 'Unable to login, try with another provider to login.']);
    }

    protected function loginOrCreateAccount($providerUser, $driver)
    {
        $user = User::where('email', $providerUser->getEmail())->first();
        if($user){
            $user = $this->loginSocial($user, $providerUser, $driver);
        } else {
            $user = $this->createSocial($providerUser, $driver);
        }

        Auth::login($user, true);
        return redirect()->route('home');
    }

    private function isProviderAllowed($driver)
    {
        return config()->has("services.{$driver}");
    }

    public function loginSocial($user, $providerUser, $driver)
    {
        $user->update([
            'avatar' => $providerUser->avatar,
            'provider' => $driver,
            'provider_id' => $providerUser->id,
            'access_token' => $providerUser->token
        ]);
        return $user;
    }

    public function createSocial($providerUser, $driver)
    {
        $fullName = explode(" ",$providerUser->getName());
        $user = User::create([
            'first_name' => $fullName[0],
            'last_name' => array_pop($fullName),
            'email' => $providerUser->getEmail(),
            'avatar' => $providerUser->getAvatar(),
            'provider' => $driver,
            'provider_id' => $providerUser->getId(),
            'access_token' => $providerUser->token,
        ]);
        return $user;
    }
}
