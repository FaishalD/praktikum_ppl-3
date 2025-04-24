<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group notes
     */
    public function testNotes(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->type('email', 'user@gmail.com') //mengisi input email
                ->type('password', 'password') //mengisi input password
                ->press('LOG IN') //menekan tombol submit LOG IN
                ->assertPathIs('/dashboard') //memastikan url ke /dashboard
                ->clickLink('Notes')
                ->assertPathIs('/notes')
                ->clickLink('Create Note')
                ->assertPathIs('/create-note')
                ->type('title', 'Lorem Ipmsum') //mengisi input email
                ->type('description', 'Lorem Ipmsum dot color') //mengisi input password
                ->press('CREATE')
                ->assertPathIs('/notes');
        });
    }
}
