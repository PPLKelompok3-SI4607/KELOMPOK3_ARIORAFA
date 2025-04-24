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
            $browser->visit('/')
                ->Clicklink('Log in')
                ->assertPathIs(path: '/login')
                ->type(field: 'email', value: 'ario@gmail.com')
                ->type(field: 'password', value: '123')
                ->press(button: 'LOG IN')
                ->assertPathIs(path: '/dashboard')
                ->clickLink('Notes')
                ->assertPathIs(path: '/notes')
                ->clickLink('Create Note')
                ->assertPathIs(path: '/create-note')
                ->type('title', 'note1')
                ->type('description', 'testing note pertama ini')
                ->press('CREATE')
                ->assertPathIs('/notes');
        });
    }
}