<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;

class AdminPanelTest extends TestCase
{
    public function test_admin_login_page_renders_with_enterprise_branding(): void
    {
        $response = $this->get('/admin/login');

        $response->assertStatus(200);
        $response->assertSee('Senior Case Directorate Portal');
        $response->assertSee('Authenticate & Enter Case Control Room');
        $response->assertSee('Indore Directorate Bureau HQ');
        $response->assertSee('+91 9004145251');
    }

    public function test_admin_dashboard_renders_with_widgets_and_navigation_groups(): void
    {
        $user = User::first();
        if (!$user) {
            $user = User::factory()->create([
                'email' => 'info@deeptracedetective.com',
            ]);
        }

        $response = $this->actingAs($user)->get('/admin');

        $response->assertStatus(200);
        $response->assertSee('Welcome to Deep Trace Directorate');
        $response->assertSee('Operational Control Active');
        $response->assertSee('Client Intake Inquiries');
        $response->assertSee('Active Practice Areas');
        $response->assertSee('Confidential Client Inquiries');
        $response->assertSee('Case Operations');
        $response->assertSee('Investigation Catalog');
        $response->assertSee('Advisory &amp; Intelligence', false);
    }
}

