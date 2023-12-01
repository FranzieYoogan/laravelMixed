<!DOCTYPE html>
<html lang="en">
<head>
   
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>

        <?php include('/testingLaravel/testing-app/resources/css/logo.css') ?>
    <?php include('/testingLaravel/testing-app/resources/css/dashboard.css') ?>

    </style>

</head>


<body>




    <?php include('/testingLaravel/testing-app/resources/views/header.blade.php') ?>

        <section class="containerDashboardStyle">

    <div style="position: relative;">
        <img class='questionStyle' id='questionMark1' onclick="questionInteraction()" src="/img/dashboard/questionMark.png" alt="">
        <img class='interactionStyle1' id="interaction" onclick="" src="/img/dashboard/event1.gif" alt="" style="visibility: hidden">
    </div>

    <script>
        function questionInteraction() {
            document.getElementById('questionMark1').style.transition = '0s';
            document.getElementById('questionMark1').style.visibility = 'hidden';
            document.getElementById('interaction').style.visibility = 'visible';

         

        }

    </script>

    
    <div style="position: relative;">
        <img class='questionStyle2' id="questionMark2" onclick="questionInteraction2()" src="/img/dashboard/questionMark.png" alt="">
        <img class='interactionStyle2' id="interaction2" onclick="" src="/img/dashboard/event2.gif" alt="" style="visibility: hidden">
    </div>


    <script>
        function questionInteraction2() {
            document.getElementById('questionMark2').style.transition = '0s';
            document.getElementById('questionMark2').style.visibility = 'hidden';
            document.getElementById('interaction2').style.visibility = 'visible';

         

        }

    </script>


<div style="position: relative;">
    <img class='questionStyle3' id="questionMark3" onclick="questionInteraction3()" src="/img/dashboard/questionMark.png" alt="">
    <img class='interactionStyle3' id="interaction3" onclick="" src="/img/dashboard/event3.gif" alt="" style="visibility: hidden">
</div>


<script>
    function questionInteraction3() {
        document.getElementById('questionMark3').style.transition = '0s';
        document.getElementById('questionMark3').style.visibility = 'hidden';
        document.getElementById('interaction3').style.visibility = 'visible';
        document.getElementById('interaction3').style.transition = '6s';
        document.getElementById('interaction3').style.left = '130%';

     

    }

</script>


<div style="position: relative;">
    <img class='questionStyle4' id="questionMark4" onclick="questionInteraction4()" src="/img/dashboard/questionMark.png" alt="">
    <img class='interactionStyle4' id="interaction4" onclick="" src="/img/dashboard/event4.gif" alt="" style="visibility: hidden">
</div>


<script>
    function questionInteraction4() {
        document.getElementById('questionMark4').style.transition = '0s';
        document.getElementById('questionMark4').style.visibility = 'hidden';
        document.getElementById('interaction4').style.visibility = 'visible';
        document.getElementById('interaction4').style.transition = '6s';
        document.getElementById('interaction4').style.left = '60%';
        document.getElementById('interaction4').style.top = '20em';
        document.getElementById('interaction4').style.minWidth = '0px';
        document.getElementById('interaction4').style.maxWidth = '0px';

    }

</script>


</section>

<div style="position: relative;">
    <img class='questionStyle5' id="questionMark5" onclick="questionInteraction5()" src="/img/dashboard/questionMark.png" alt="">
    <img class='interactionStyle5' id="interaction5" onclick="" src="/img/dashboard/hadoukein.gif" alt="" style="visibility: hidden">
    <img class='interactionStyle5Explosion' id="interaction5Explosion" onclick="" src="/img/dashboard/explosion.gif" alt="" style="visibility: hidden">
    <img class='interactionStyle5Explosion2' id="interaction5Explosion2" onclick="" src="/img/dashboard/explosion.gif" alt="" style="visibility: hidden">
    <img class='interactionStyle5Explosion3' id="interaction5Explosion3" onclick="" src="/img/dashboard/explosion.gif" alt="" style="visibility: hidden">
    <img class='interactionStyle5Explosion4' id="interaction5Explosion4" onclick="" src="/img/dashboard/explosion.gif" alt="" style="visibility: hidden">
</div>


<script>
    function questionInteraction5() {
        document.getElementById('questionMark5').style.transition = '0s';
        document.getElementById('questionMark5').style.visibility = 'hidden';
        document.getElementById('interaction5').style.visibility = 'visible';
        document.getElementById('interaction5').style.transition = '3s';
        document.getElementById('interaction5').style.left = '45%';
        document.getElementById('interaction5').style.top = '20em';
        document.getElementById('interaction5').style.minWidth = '150px';
        document.getElementById('interaction5').style.maxWidth = '150px';  

        setTimeout(() => {
            document.getElementById('interaction5').style.visibility = 'hidden';

  
        }, 1000);


        setTimeout(() => {

            document.getElementById('interaction5Explosion').style.visibility = 'visible';
        document.getElementById('interaction5Explosion').style.minWidth = '150px';
        document.getElementById('interaction5Explosion').style.maxWidth = '150px';  
  
        }, 3000);
    
        setTimeout(() => {

document.getElementById('interaction5Explosion2').style.visibility = 'visible';
document.getElementById('interaction5Explosion2').style.minWidth = '150px';
document.getElementById('interaction5Explosion2').style.maxWidth = '150px';  

}, 4000);

setTimeout(() => {

document.getElementById('interaction5Explosion3').style.visibility = 'visible';
document.getElementById('interaction5Explosion3').style.minWidth = '150px';
document.getElementById('interaction5Explosion3').style.maxWidth = '150px';  

}, 5000);

setTimeout(() => {

document.getElementById('interaction5Explosion4').style.visibility = 'visible';
document.getElementById('interaction5Explosion4').style.minWidth = '150px';
document.getElementById('interaction5Explosion4').style.maxWidth = '150px';  

}, 6000);

setTimeout(() => {

document.getElementById('interaction5Explosion').style.visibility = 'hidden';
document.getElementById('interaction5Explosion2').style.visibility = 'hidden';
document.getElementById('interaction5Explosion3').style.visibility = 'hidden';
document.getElementById('interaction5Explosion4').style.visibility = 'hidden';
document.querySelector('body').style.background = 'url(/img/dashboard/worldEvent.jpg)';
document.querySelector('body').style.backgroundSize = '100%';







}, 8000);


setTimeout(() => {

    document.getElementById('questionMark1').style.visibility = 'hidden';
document.getElementById('questionMark2').style.visibility = 'hidden';
document.getElementById('questionMark3').style.visibility = 'hidden';
document.getElementById('questionMark4').style.visibility = 'hidden';
document.getElementById('questionMark5').style.visibility = 'hidden';

document.getElementById('interaction').style.visibility = 'hidden';
document.getElementById('interaction2').style.visibility = 'hidden';
document.getElementById('interaction3').style.visibility = 'hidden';
document.getElementById('interaction4').style.visibility = 'hidden';
document.getElementById('interaction5').style.visibility = 'hidden';


}, 7000);


    }

</script>


</section>



</body>
</html>