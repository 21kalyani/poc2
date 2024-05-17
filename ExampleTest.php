<?php
 
namespace Tests\Browser;
 
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Laravel\Dusk\Concerns\WaitsForElements;
use Tests\DuskTestCase;
 
class ExampleTest extends DuskTestCase
{
 
    /**
     * A basic browser test example.
     */

     //Login With :Invalid Email and Invalid Password.

    //  public function test_failed_login_Invalid_Email(): void
    // { 
    //     $this->browse(function (Browser $browser) {
    //         $browser->visit('/login')
    //                 ->type('email', 'sdsddsdsdsdsd')
    //                 ->type('password', 'password')
    //                 ->press('login')
    //                 ->assertPathIs('/login');
    //     });
    // }

    //   //Login With :Valid Email and InValid Password.

    //   public function test_failed_login_Invalid_Password(): void
    //   { 
    //     $user = User::factory()->create([
    //         'email' => 'taylor@laravel.com',
    //     ]);
    //       $this->browse(function (Browser $browser) use ($user) {
    //           $browser->visit('/login')
    //                   ->type('email', $user->email)
    //                   ->type('password', 'bdnccjddjk')
    //                   ->press('login')
    //                   ->assertPathIs('/login');
                      
    //       });
    //   }


    //   //Login With :InValid Email and InValid Password.

    //   public function test_failed_login_Invalid_Email_and_Invalid_Password(): void
    //   { 
    //       $this->browse(function (Browser $browser) {
    //           $browser->visit('/login')
    //                   ->type('email', 'sdsddsdsdsdsd')
    //                   ->type('password', 'nfnfnjnfndsnk')
    //                   ->press('login')
    //                   ->assertPathIs('/login');
    //       });
    //   }

    
     //Login With :Valid Email and Valid Password.

     public function test_successfull_login(): void
     {
         $user = User::factory()->create([
             'email' => 'taylor@laravel.com',
         ]);
  
         $this->browse(function (Browser $browser) use ($user) {
             $browser->visit('/login')
                     ->type('email', $user->email)
                     ->type('password', 'password')
                     ->press('login')
                     //->assertSee('Encrypt Password')
                   //->screenshot('example');
                     ->assertPathIs('/password/encryption');
                    
         });
     }


    //  public function test_Logout(): void
    //  {
    //      $user = User::factory()->create([
    //          'email' => 'taylor@laravel.com',
    //      ]);
  
    //      $this->browse(function (Browser $browser) use ($user) {
    //          $browser->visit('/login')
    //                  ->type('email', $user->email)
    //                  ->type('password', 'password')
    //                  ->press('login')
    //                  ->info('Page visited successfully!')
    //                  //->click('.nav-item dropdown')
    //                  ->clickLink('Configuration') 
                     
    //                  ->info('Page visited again successfully!')
                   
                   
                   
                     //->clickLink("http://mdmpoc.local:8082/logout")
                    //  ->pause(10000);
                     //->assertPathIs('/');
                    
                     
                   
              
                 
                    
    //      });
    //  }






     
    //  public function testDropdownMenu()
    // {
    //     $this->browse(function (Browser $browser) {
    //         $browser->visit('/')

    //              ->click('.nav-item dropdown');
                    //->clickLink('Configuration') ;// Selector for the dropdown toggle button/link
                  //  ->clickLinkInList('Link Text', 'ul', 1);
                    // ->waitFor('navbarDropdown_6') // Wait for the dropdown menu to appear
                    // ->clickLink('Dropdown Option') // Text of the dropdown option
                    // ->assertPathIs('/expected-url'); // Assert that the correct action is triggered
                    #navbarDropdown_6
                    //*[@id="navbarDropdown_6"]
        // });
        // echo "Page visited successfully!";


        // }




              //Main Method

        // public function test_configure_Click(): void
        // {
        //     $email='info@desino.be';
     
        //     $this->browse(function (Browser $browser) use ($email) 
        //     {
        //         $browser->visit('/login')
        //                 ->type('email', $email)
        //                 ->type('password', 'password')
        //                 ->press('login')  
                       
        //                 ->assertSee('Healthcare')

                     
                       
        //                 ->click('#navbarDropdown_6')
        //                 ->clickLink('Configure tables')
        //                 ->pause(1000);





        //                 //  ->clickLink('Languages')
        //                 //  ->assertSee('Configure languages for columns ')
        //                 // ->click('#logout-btn')
                      
        //                  //->assertSee('Healthcare');
                       
        //                // ->click('.btn btn-dark border-0 d-block');






        //                 // ->pause(1000)
        //                // ->click('@product_admin_language') ;      
                        
                        


        //                // ->assertSee('Configure languages for columns ')
                      
        //                 // ->pause(10000)
        //                 // ->select('#navbarDropdown_6', '');

                      







        //                 // ->waitFor('#navbarDropdown_9',200)
                         
        //                 //->click('#navbarDropdown_9')
                        
        //               //  ->visit('/listing/T_Test_Composite')
        //                 //->pause(10000);




        //                 // ->waitFor('#navbarDropdown_9',200)
        //                 // ->pause(1000)
        //                 // //->click('#navbarDropdown_9')
        //                 // ->pause(1000);

        //                 // ->waitFor('.dropdown-menu p-0 show')    
        //                 // ->click('.dropdown-menu-item');

    
                        
        //               //  ->clickLink('Menu item 3');
                        
        //                 // ->clickLink('Multi tenant testing')
        //                 // ->assertSee('multi');
                  



        //                // ->visit("listing/product_admin_configuration_table")
                         
        //                //  ->pause(100000);
                       
        //                 //->assertPathIs('/listing/product_admin_configuration_table');
        //                 //->click('button[type="button"]');
        //                 //->assertSee('Manage');
        //                  // ->assertPathIs('/product_admin_configuration_table')
        //                 //->assertSee('Configure');

        //      });
        //    }


       
        }
        