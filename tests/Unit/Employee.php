<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class Employee extends TestCase
{
    /** @test */
    public function view_employees_with_users_authenticated()
    {
        $employee = $this->createEmployee();
        dd($employee);
        $this->assertTrue(true);
    }

    /** @test */
    public function view_employees_with_users_()
    {
        $this->assertTrue(true);
    }
}
