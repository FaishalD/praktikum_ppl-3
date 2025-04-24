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
            $browser->visit('/login')
                ->type('email', 'user@gmail.com') //mengisi input email
                ->type('password', 'password') //mengisi input password
                ->press('LOG IN') //menekan tombol submit LOG IN
                ->assertPathIs('/dashboard') //memastikan url ke /dashboard
                ->click('#click-dropdown');
        });
    }
}
