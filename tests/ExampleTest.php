<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\File;
use App\User;
use App\Libraries\Sanitize as Santitize;
use Carbon\Carbon;
class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testIfNameInRootPath()
    {
        $this->visit('/') //visit homepage
             ->see('Michael Quattrochi Portfolio'); //except to see the text "laravel"
    }


    public function testCanOnlyViewDashboardIfLoggedIn(){
        $this->visit('/dashboard')
            ->seePageIs('/login');
    }






    /*
    public function testAddPostFormValidation(){
        $user = new User(['name'=>'admin']);
        $this->be($user);
        $this->visit('blog/add_post')
            ->attach('/home/michael/Documents/WebStuff/Portfolio/public/Images/background.jpg','post_image')
            ->type('Test','post_title')
            ->type('Test Body','post_body')
            ->press('Add Post')
            ->seePageIs('blog/dashboard');
    }
    */

    public function testCarbonFetchesMonth(){
        $date = Carbon::now();
        $this->assertEquals(10,$date->month);
    }

    public function testCarbonFetchesYear(){
        $date = Carbon::now();
        $this->assertEquals(2016,$date->year);
    }

    public function testPostTitleIsSanitized(){
        $cleaned = Santitize::clean('This! Is* a weird title');
        $this->assertEquals('This-Is-a-weird-title',$cleaned);
    }

    public function testLoginRedirectToDashboard(){
        $this->visit('login')
            ->type('mquattrochi@gmail.com','email')
            ->type('L2jh432n!@#','password')
            ->press('Login')
            ->seePageIs('/blog');
    }






}
