<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class DeleteNotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group logouttest
     */
    public function testLogoutTest(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->Clicklink('Log in')
                    ->assertPathIs(path: '/login')
                    ->type(field: 'email', value: 'ario@gmail.com')
                    ->type(field: 'password', value: '123')
                    ->press(button: 'LOG IN')
                    ->assertPathIs(path: '/dashboard')
                    ->waitFor('#click-dropdown', 5)
                    ->clickLink('Log Out')
                    ->assertPathIs(path: '/')
                    ;

        });
    }
}
