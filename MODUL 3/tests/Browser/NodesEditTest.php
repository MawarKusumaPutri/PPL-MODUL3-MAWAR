<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NodesEditTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser -> visit('/')
            //Mengunjungi halaman web dengan route//
            -> clickLink('Login')
            -> type ('email', 'mawarkusuma694@gmail.com')
            -> type ('password', '1202220082')
            -> press('Login')
            ->assertPathIs('/dashboard')
            -> visit('/notes')
            -> assertSee('Modul 3')
            -> clicklink ('Edit')
            -> type ('description', 'Untungnya deadline malem')
            -> type ('title', 'Selesai')
            -> press('UPDATE')
            ->visit('/notes');
        });
    }
}
