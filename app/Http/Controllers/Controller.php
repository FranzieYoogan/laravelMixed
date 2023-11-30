<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;


class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function exhbit()
    {

      
  

        $input1 = $_POST['input1'];
        $input2 = $_POST['input2'];

        $result = DB::select("select * from users WHERE userName = '$input1' and userPassword = '$input2'");

        if (isset($_POST['submit'])) {

                @include('/testingLaravel/testing-app/resources/views/welcome.blade.php');


                if($result) {

                    echo " <h1> $input1 LOGGED!!</h1>
                    
                    <script>

                    document.querySelector('body').style.background = 'url(/img/login/snow.gif)';
                    
                    </script>
                    ";
                }

         


        }



    }



}




