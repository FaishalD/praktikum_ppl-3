<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class DeleteNotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group deletenotes
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->type('email', 'user@gmail.com') //mengisi input email
                ->type('password', 'password') //mengisi input password
                ->press('LOG IN') //menekan tombol submit LOG IN
                ->assertPathIs('/dashboard') //memastikan url ke /dashboard
                ->clickLink('Notes')
                ->assertPathIs('/notes')
                ->press('Delete')
                ->assertPathIs('/notes');
        });
    }
}
