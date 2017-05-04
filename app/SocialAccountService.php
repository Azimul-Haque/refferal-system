<?php

namespace App;

use Laravel\Socialite\Contracts\User as ProviderUser;
use App\SocialProvider;

class SocialAccountService
{
    public function createOrGetUser(ProviderUser $providerUser, $provider)
    {
        $account = SocialProvider::whereProvider($provider)
            ->whereProviderId($providerUser->getId())
            ->first();

        if ($account) {
            return $account->user;
        } else {

            $account = new SocialProvider([
                'provider_id' => $providerUser->getId(),
                'provider' => $provider,
            ]);

            $user = User::whereEmail($providerUser->getEmail())->first();

            if (!$user) {

                if($provider == 'facebook') {
                    $avatarUrl = 'http://graph.facebook.com/'.$providerUser->getId().'/picture?width=1920';
                } elseif($provider == 'google') {
                    $avatarUrl = preg_replace('/\?sz=[\d]*$/', '', $providerUser->getAvatar());
                }
                 

                $user = User::create([
                    'email' => $providerUser->getEmail(),
                    'name' => $providerUser->getName(),
                    'role' => 'user',
                    'password' => str_random(20),
                    'activated' => true,
                    'image' => $avatarUrl,
                    
                ]);
            }

            $account->user()->associate($user);
            $account->save();

            return $user;

        }

    }
}