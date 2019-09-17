<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RegisterTest extends DuskTestCase
{

    use RefreshDatabase;
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                    ->type('email', 'taylor@laravel.com')
                    ->type('name','Nombre')
                    ->type('lastname','Apellido')
                    ->type('password','12345678')
                    ->type('password_confirmation','12345678')
                    ->press('Register')
                    ->waitForText('Dashboard')
                    ->assertSee('Dashboard');
        });


    }
    
}
