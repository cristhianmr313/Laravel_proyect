<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class TransporteTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_index_with_auth_user_for_transporte(): void
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->get('/admin/transportes');
        $response->assertStatus(200);
    }
    public function test_create_with_auth_user(): void
    {
        $response = $this->get('/admin/transportes/create');
        $response->assertStatus(200);
    }
    public function test_store_with_auth_user(): void
    {
        $response = $this->get('/admin/transportes');
        $response->assertStatus(200);
    }
    public function test_show_with_auth_user(): void
    {
        $response = $this->get('/admin/transportes');
        $response->assertStatus(200);
    }
    public function test_edit_with_auth_user(): void
    {
        $response = $this->get('/admin/transportes');
        $response->assertStatus(200);
    }
    public function test_update_with_auth_user(): void
    {
        $response = $this->get('/admin/transportes');
        $response->assertStatus(200);
    }
    public function test_delete_with_auth_user(): void
    {
        $response = $this->get('/admin/transportes');
        $response->assertStatus(200);
    }
}
