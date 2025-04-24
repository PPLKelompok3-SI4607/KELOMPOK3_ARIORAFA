<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    /**
     * Registration Fuctionality.
     * @group register
     */
    public function testRegister(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Enterprise Application Development')
                    ->clickLink(link: 'Register')
                    ->assertPathIs(path: '/register')
                    ->type(field:'email', value: 'ariorafa@gmail.com')
                    ->type(field: 'password', value: '123')
                    ->type(field: 'password_confirmation', value: '123')
                    ->press(button: 'REGISTER');
                    // ->assertPathIs(path: '/dashboard');
        });
    }
}
