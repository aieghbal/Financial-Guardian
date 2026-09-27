<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_register(): void
    {
        $response = $this->postJson('/api/register', [
            'name' => 'Amir',
            'email' => 'amir_test@example.com',
            'password' => 'password123',
            'password_confirmation' => 'password123',
        ]);

        $response
            ->assertCreated()
            ->assertJson([
                'message' => 'User registered successfully.',
            ]);

        $this->assertDatabaseHas('users', [
            'name' => 'Amir',
            'email' => 'amir@example.com',
        ]);
    }

    public function test_email_must_be_unique(): void
    {
        User::factory()->create([
            'email' => 'amir@example.com',
        ]);

        $response = $this->postJson('/api/register', [
            'name' => 'Another Amir',
            'email' => 'amir@example.com',
            'password' => 'password123',
            'password_confirmation' => 'password123',
        ]);

        $response
            ->assertUnprocessable()
            ->assertJsonValidationErrors(['email']);
    }

    public function test_password_confirmation_is_required(): void
    {
        $response = $this->postJson('/api/register', [
            'name' => 'Amir',
            'email' => 'another@example.com',
            'password' => 'password123',
            'password_confirmation' => 'wrong-password',
        ]);

        $response
            ->assertUnprocessable()
            ->assertJsonValidationErrors(['password']);
    }
}