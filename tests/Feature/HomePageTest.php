<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomePageTest extends TestCase
{
    public function test_portfolio_renders_on_root_path(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSee('Michael Quattrochi Portfolio')
            ->assertSee("Hello, I'm", false);
    }

    public function test_home_redirects_guests_to_login(): void
    {
        $this->get('/home')->assertRedirect('/login');
    }
}
