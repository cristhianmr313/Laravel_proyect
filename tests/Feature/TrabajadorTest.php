<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;


class TrabajadorTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_index_with_auth_user(): void
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->get('/admin/trabajadores');
        $response->assertStatus(200);
    }

    public function test_index_with_unauthorized_user(): void
    {
        $response = $this->get('/admin/trabajadores');
        $response->assertStatus(301);
    }
    public function test_create_with_auth_user(): void
    {
        $response = $this->get('/admin/trabajadores/create');
        $response->assertStatus(200);
    }
    public function test_store_with_auth_user(): void
    {
        $response = $this->get('/admin/trabajadores');
        $response->assertStatus(200);
    }
    public function test_show_with_auth_user(): void
    {
        $response = $this->get('/admin/trabajadores');
        $response->assertStatus(200);
    }
    public function test_edit_with_auth_user(): void
    {
        $response = $this->get('/admin/trabajadores');
        $response->assertStatus(200);
    }
    public function test_update_with_auth_user(): void
    {
        $response = $this->get('/admin/trabajadores');
        $response->assertStatus(200);
    }
    public function test_delete_with_auth_user(): void
    {
        $response = $this->get('/admin/trabajadores');
        $response->assertStatus(200);
    }


   /*  public function test_delete_worker_with_auth_user(): void
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->call('DELETE','/admin/trabajadores.destroy/2');
        $response->assertStatus(200);
    } */
}
