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
            $browser->visit('/')
                    ->Clicklink('Log in')
                    ->assertPathIs(path: '/login')
                    ->type(field: 'email', value: 'ario@gmail.com')
                    ->type(field: 'password', value: '123')
                    ->press(button: 'LOG IN')
                    ->assertPathIs(path: '/dashboard')
                    ->clickLink('Notes')
                    ->assertPathIs(path: '/notes')
                    ->click(selector: '@edit-1')
                    ->assertPathIs(path: '/edit-note-page/1')
                    ->type('description', 'testing note pertama ini tapi edit')
                    ->press('UPDATE')
                    ->assertPathIs('/notes');
        });
    }
} 
