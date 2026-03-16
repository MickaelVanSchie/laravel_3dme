<?php

namespace Tests\Feature;

use App\Models\BasketOrder;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CmsDashboardTest extends TestCase
{
    use RefreshDatabase;

    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_authenticated_user_with_cms_access(): void
    {
        $user = User::factory()->create(['role' => 2]);
        $basketOrders = BasketOrder::factory()->count(3)->create();

        $response = $this->actingAs($user)->get('/cms/dashboard');

        $response->assertOk();
        $response->assertViewIs('cms/dashboard');
        $response->assertViewHas('totalOrders', 3);
        $response->assertViewHas('basketOrders');
    }
}
