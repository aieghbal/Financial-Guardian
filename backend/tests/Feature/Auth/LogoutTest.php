<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Support\Facades\Auth;

class LogoutTest extends TestCase
{
    use RefreshDatabase;

    public function test_authenticated_user_can_logout(): void
    {
        $user = User::factory()->create();

        $token = $user->createToken('auth-token')->plainTextToken;

        $response = $this
            ->withToken($token)
            ->postJson('/api/logout');

        $response
            ->assertSuccessful()
            ->assertJson([
                'message' => 'Logged out successfully.',
            ]);

        $this->assertDatabaseCount('personal_access_tokens', 0);
    }

    public function test_logged_out_token_cannot_access_protected_route(): void
    {
        $user = User::factory()->create();

        $token = $user->createToken('auth-token')->plainTextToken;

        $this
            ->withToken($token)
            ->postJson('/api/logout')
            ->assertSuccessful();

        $this->assertDatabaseMissing('personal_access_tokens', [
            'tokenable_id' => $user->id,
        ]);

        Auth::forgetGuards();

        $response = $this
            ->withToken($token)
            ->getJson('/api/user');

        $response->assertUnauthorized();
    }
}