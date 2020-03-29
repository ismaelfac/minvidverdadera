<?php

namespace App\Repositories;

use App\Contracts\Members;
use App\Repositories\PersonRepository;
use App\Models\{ Member, Church };

class MemberRepository extends PersonRepository implements Members
{
    protected $church = '';

    public function __construct($dni)
    {
        $this->setChurch($dni);
    }

    private function setChurch(Member $member)
    {
        $this->church = new Church;

    }
}
