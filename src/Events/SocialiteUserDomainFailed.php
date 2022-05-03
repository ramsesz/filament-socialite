<?php

namespace DutchCodingCompany\FilamentSocialite\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Laravel\Socialite\Contracts\User;

class SocialiteUserDomainFailed
{
    use Dispatchable, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(public User $socialiteUser)
    {}
}
