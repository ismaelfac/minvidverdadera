<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\{Employee, User};

class EmployeeTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function view_employees_with_users_authenticated()
    {
        $employee = $this->createEmployee(30);
        $this->assertTrue(true);
    }

    /** @test */
    public function view_employees_with_users_()
    {
        $this->assertTrue(true);
    }


    protected function createUser(Employee $employee)
    {
        return factory(User::class)->create([
            'employee_id' -> $employee->id
        ]);
    }

    protected function createEmployee($num)
    {
        return factory(Employee::class, $num)->create();
    }
}
