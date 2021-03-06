<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\{ User, Employee };

class EmployeeTest extends TestCase
{
    /** @test */
    public function view_employees_with_users_authenticated()
    {
        $employee = $this->createEmployee();
        $this->assertTrue(true);
    }

    /** @test */
    public function view_employees_with_users_()
    {
        $this->assertTrue(true);
    }


    protected function createUser(Employee $employee)
    {
        return factory(User::class)->employee_id($employee)->create();
    }

    protected function createEmployee()
    {
        return factory(Employee::class)->create();
    }
}
