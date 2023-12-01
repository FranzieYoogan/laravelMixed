<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

use function Termwind\style;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function exhbit()
    {

    
        

 

        if (isset($_POST['submit'])) {
            $input1 = $_POST['input1'];
            $input2 = $_POST['input2'];
    
            $result = DB::select("select * from users WHERE userName = '$input1' and userPassword = '$input2'");

            if($result) {
                session_start();
                $_SESSION['userName'] = $input1;

                @include('/testingLaravel/testing-app/resources/views/welcome.blade.php');


         
                 
                
                    
                    echo " 
                    <div class='containerAlert'>
                    <div class='containerAlert2 flex items-center p-4 mb-4 text-sm text-blue-800 border border-blue-300 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400 dark:border-blue-800' role='alert'>
  <svg class='flex-shrink-0 inline w-4 h-4 me-3' aria-hidden='true' xmlns='http://www.w3.org/2000/svg' fill='currentColor' viewBox='0 0 20 20'>
    <path d='M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z'/>
  </svg>
  <span class='sr-only'>Info</span>
  <div>
                   <span class='font-medium'>LOGGED SUCCESSFULLY</span> .
                   </div>
                   </div>
                    <script>
                    document.querySelector('body').style.background = 'url(/img/login/snow.gif)';
                    document.getElementById('dropdownNavbarLink').style.visibility ='hidden';
                    setTimeout(() => {
                
                        window.location.href = '/dashboard';
                 
                      }, 3000);

                    </script>
                    
                  
                    
                    ";

                   
                  
                }

              


        }

     

    


    }

    public function exhbit2() {
        session_start();
        include('/testingLaravel/testing-app/resources/views/dashboard.blade.php');

        echo "WELCOME $_SESSION[userName]";

    }

    public function header() {
        session_start();

        return $_SESSION['userName'];

    }

    public function destroy() {
        session_start();
       session_destroy();

    }
    



}




