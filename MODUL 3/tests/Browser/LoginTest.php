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
                    -> type ('password', '1202220082')
                    -> type ('password_confirmation', '1202220082')
                    -> press('Login')
                    ->assertPathIs('/dashboard');

        });
    }
}
