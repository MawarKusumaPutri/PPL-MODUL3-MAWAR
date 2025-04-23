<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class DeleteTest extends DuskTestCase
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
            -> assertPathIs('/dashboard')
            -> visit('/notes')
            -> assertSee('Selesai')
            -> press ('Delete');
        });
    }
}
