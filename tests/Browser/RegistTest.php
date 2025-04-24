<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegistTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group regist
     */
    public function testRegist(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register') //mengunjungi web /register
                ->type('name', 'user') //mengisi input name
                ->type('email', 'user@gmail.com') //mengisi input email
                ->type('password', 'password') //mengisi input password
                ->type('password_confirmation', 'password') //mengisi input password
                ->press('REGISTER') //menekan tombol submit
                ->assertPathIs('/dashboard'); //memastikan url ke /dashboard
        });
    }
}
