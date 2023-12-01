

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>


        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

            <style>

          <?php include('/testingLaravel/testing-app/resources/css/login.css'); ?>
          
          </style>
  
       
    </head>
    <body>
     

           <?php include('/testingLaravel/testing-app/resources/views/header.blade.php'); ?>
    
           
            <form action="/dashboard" method="POST" class="containerLogin" id="containerLogin">

                <div class='borderStyle'>
               
            <div  style="position: relative">
                <img  class='yetiImg' id='yeti' src="/img/login/yeti.gif" alt="" style="visibility: hidden">
                <label style="color: white; font-weight: 900; text-shadow: 2px 2px 2px black" for="input1" class=" block mb-2 text-sm font-medium text-gray-900 dark:text-white">User name</label>
                <input onfocus="yetiEvent1()" onfocusout="yeti1EventOut()" type="text" id="input1" name="input1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Type your user name" required>
            </div>

            <script>
         
                function yetiEvent1() {
             
                    document.getElementById("yeti").style.visibility = 'visible';
           
                    document.getElementById("yeti").style.transition = '6s';

             
                        document.getElementById("yeti").style.left = '0%';

                   


                }

                function yeti1EventOut() {

                    document.getElementById("yeti").style.transition = '0s';
                    document.getElementById("yeti").style.visibility = 'hidden';
                    document.getElementById("yeti").style.left = '85%';
                }


                function yetiEvent2() {
             
             document.getElementById("yeti2").style.visibility = 'visible';
    
             document.getElementById("yeti2").style.transition = '6s';

      
                 document.getElementById("yeti2").style.left = '0%';

            


         }

         function yeti2EventOut() {

             document.getElementById("yeti2").style.transition = '0s';
             document.getElementById("yeti2").style.visibility = 'hidden';
             document.getElementById("yeti2").style.left = '85%';
         }



        </script>

<div  style="position: relative">
    <img  class='yetiImg2' id='yeti2' src="/img/login/yeti.gif" alt="" style="visibility: hidden">
                <label style="color: white; font-weight: 900; text-shadow: 2px 2px 2px black" for="input2" class="input2Style block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                <input onfocus="yetiEvent2()" onfocusout="yeti2EventOut()" type="password" id="input2" name="input2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Type your passsword" required>
            </div>

            <button type="submit" name="submit" id="submit" class="buttonLoginStyle text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">LOGIN</button>

        </div>

                </form>

           

            


            
         
        </div>
    </body>
</html>
