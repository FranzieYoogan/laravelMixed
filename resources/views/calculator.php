<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>


        <style>

            <?php include('/testingLaravel/testing-app/resources/css/calculator.css') ?>

        </style>


</head>
<body onload="headerEvent()">

<script>

        function headerEvent() {

            
                setTimeout(() => {
                    document.getElementById('logoNameStyle').style.fontSize = '150%';
                    document.getElementById('logoStyle').style.transition = '0.5s';
                    document.getElementById('logoStyle').style.right = '0px';
                }, 300);

              
    }


  


    </script>



<?php session_start();
      include('/testingLaravel/testing-app/resources/views/header.blade.php'); ?>

        <section class="containerCalculator" id='containerCalculator'>
 


        </section>

    
</body>
</html>