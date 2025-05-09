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
                -> type ('password', '1202220082')
                -> type ('password_confirmation', '1202220082')
                -> press('REGISTER')
                ->assertPathIs('/dashboard');
        });
    }
}
