<?php

namespace Tests\Feature;
use App\{ User, Employee };
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DashboardTest extends TestCase
{
    /** @test */
    function it_shows_the_dashboard_page_to_authenticated_users()
    {
       $employee = factory(Employee::class)->create();
       $user = factory(User::class)->create([
           $employee_id => $employee->id
       ]);

       $this->actingAs($user)
            ->get(route('api/'))
            ->assertJson(['title' => 'Dashboard'])
            ->assertStatus(200);
    }
}
