<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser-> clickLink('Login')
                    -> type ('name', 'mawar')
                    -> type ('email', 'mawarkusuma694@gmail.com')
                    -> type ('password', 'password')
                    -> type ('password_confirmation', 'password')
                    -> press('Login')
                    ->assertPathIs('/dashboard');

        });
    }
}
