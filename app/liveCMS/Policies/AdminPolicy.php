<?php

namespace App\liveCMS\Policies;

use App\liveCMS\Models\Users\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AdminPolicy extends ModelPolicy
{
    public function before(User $user)
    {
        return $user->is_admin;
    }
}