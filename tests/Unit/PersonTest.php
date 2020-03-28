<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\{User, Person};

class PersonTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    function it_show_persons_to_authenticated_users()
    {
        $person = $this->createPerson(50);
        $this->assertTrue(true);
    }

    protected function createPerson($num)
    {
        dd(Person::all());
        return;
    }
}
