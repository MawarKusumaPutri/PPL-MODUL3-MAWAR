<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testRegist(): void
    {
        $this->browse(function (Browser $browser) {
            $browser -> visit('/')
            -> assertSee('Modul 3')
                -> clickLink('Register')
                -> type ('name', 'mawar')
                -> type ('email', 'mawarkusuma694@gmail.com')
                -> type ('password', 'password')
                -> type ('password_confirmation', 'password')
                -> press('REGISTER')
                ->assertPathIs('/dashboard');
        });
    }
}
