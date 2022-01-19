<?php

namespace App\Services;

use App\Models\Membership;

trait MembershipTrait
{
    protected function identifyTypeOfMembership(?Membership $membership): string
    {
        return $membership ? "membership with id {$membership->id}" : "Unknown membership";

    }
}