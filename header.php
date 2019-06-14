<?php
$titlecard = ["https://i.imgur.com/l6hkIrO.jpg", "https://i.imgur.com/NhYJU2B.jpg"];

$event = mktime(12,30,0,8,10,2019);
$countdown = round(($event - time())/86400);
?>

<header>
    <div class="container-fluid bg-secondary d-flex justify-content-center">
        <span id="date">Today is<br><?php echo date("d-m-y"); ?></span>

<a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">

    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
</a>
<span id="countdown"><?php echo $countdown; ?><br>Days until event</span>
<div id="carouselControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <!--Main title card -->
        <div class="carousel-item active">
            <img class="d-block" src="https://i.imgur.com/a2j5y3Z.png">
        </div>
        <!--Additional cards-->
        <?php foreach($titlecard as $x => $y){
            echo '<div class="carousel-item"> 
                            <img class="d-block" src="' . $titlecard[$x] . '"></div>';
        }?>

    </div>
</div>

</div>

</div>


<!-- Left and right controls -->
<a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
</a>
</div>
</header>
