<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LogoutTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser-> visit('/')
            -> clickLink('Login')
            -> type ('email', 'mawarkusuma694@gmail.com')
            -> type ('password', '1202220082')
            -> press('Login')
            ->assertPathIs('/dashboard')
            -> press('mawar')
            -> clicklink ('LogOut')
            -> assertPathIs('/');
        });
    }
}
