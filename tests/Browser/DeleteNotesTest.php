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
            $browser->visit('/')
                    ->Clicklink('Log in')
                    ->assertPathIs(path: '/login')
                    ->type(field: 'email', value: 'ario@gmail.com')
                    ->type(field: 'password', value: '123')
                    ->press(button: 'LOG IN')
                    ->assertPathIs(path: '/dashboard')
                    ->clickLink('Notes')
                    ->assertPathIs(path: '/notes')
                    ->click(selector: '@delete-1')
                    ->assertPathIs(path: '/notes');

        });
    }
}
