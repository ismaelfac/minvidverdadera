<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use App\ {User, Employee };

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected function createUser(Employee $employee)
    {
        return factory(User::class)->employee_id($employee)->create();
    }

    protected function createEmployee()
    {
        return factory(Employee::class)->create();
    }
}
