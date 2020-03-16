<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;


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
        return factory(App\User::class)->create([
            'employee_id' -> $employee->id
        ]);
    }

    protected function createEmployee($num)
    {
        return factory(App\Employee::class, $num)->create();
    }
}
