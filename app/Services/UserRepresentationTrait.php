<?php

namespace App\Services;

use App\Models\User;

trait UserRepresentationTrait
{
    protected function identifyUserRepresentation(?User $user): string
    {
        return $user ? "user with id {$user->id}" : "Unknown user";

    }
}
