<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditNotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group editnotes
     */
    public function testEditNotes(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->type('email', 'user@gmail.com') //mengisi input email
                ->type('password', 'password') //mengisi input password
                ->press('LOG IN') //menekan tombol submit LOG IN
                ->assertPathIs('/dashboard') //memastikan url ke /dashboard
                ->clickLink('Notes')
                ->assertPathIs('/notes')
                ->clickLink('Edit')
                ->assertPathIs('/edit-note-page/2')
                ->type('title', 'Lorem Ipmsum Punya IKN') //mengisi input email
                ->type('description', 'Lorem Ipmsum dot color IKN PAKE INI BANG') //mengisi input password
                ->press('UPDATE')
                ->assertPathIs('/notes');
        });
    }
}
