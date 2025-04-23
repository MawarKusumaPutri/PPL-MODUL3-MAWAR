<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NodesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser -> visit('/')
            //Mengunjungi halaman web dengan route//
                -> clickLink('Log in')
                -> type ('email', 'mawarkusuma694@gmail.com')
                -> type ('password', '1202220082')
                -> press('Login')
                ->assertPathIs('/dashboard')
                -> visit('/notes')
                -> clickLink('Create Note')
                -> type ('title', 'Modul3')
                -> type ('description', 'Modul 3 Susah bet ihh')
                -> press('CREATE')
                ->visit('/notes')
                ->assertSee('Modul 3');
        });
    }
}
