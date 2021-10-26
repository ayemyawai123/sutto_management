<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\DuskTestCase;
use Tests\TestCase;

class NotificationTest extends DuskTestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function test_Noti_index(){
        $this->browse(
            function ($second) {
                $second->visit('/login')
                    ->type('mailaddress','demo@jsat.com')
                    ->type('password','1111')
                    ->press('Login')
                  //  ->loginAs(Admin::find(1))
                    ->visit('/noti_manage')
                    ->assertSee('Sutto Manage');
    });
}
}
