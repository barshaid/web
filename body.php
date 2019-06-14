<?php include("eventDetails.php"); ?>
<div class="bg">
    <div class="bg container-fluid mycontainer flex-wrap scrollcont">

        <p id="description" onmouseover="incDesc(this.id)">First annual SSBU tournament in Haifa</p>


        <h3>August 10th, 2020</h3>

        <div class="container row">
            <!--Itinerary-->
            <div class="container col">
                <ul class="itn">
                    <?php
                    foreach($agenda as $x => $y){
                        echo '<li>' . $agenda[$x]["time"] . " - " . $agenda[$x]["title"] . '</li>';
                    } ?>

                </ul>
            </div>

            <!--Registration form-->
            <div class="container col">
                <a href="rsvp.php" id="button">Registration</a>
                <iframe src="rsvp.php" id="iform"></iframe>
            </div>
        </div>

        <div class="container row">
            <div class="row-5">
                <!--iFrame gMap-->
                <iframe id="gmap_canvas" class="rounded"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3354.0349603154377!2d34.96307821477121!3d32.79133228096765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151dbb6910f841c9%3A0x6ecf7c4d46ba5f4!2sInternational+Convention+Center+Haifa!5e0!3m2!1sen!2sil!4v1554898423699!5m2!1sen!2sil">
                </iframe>
            </div>

            <!--Shuttle instruction table-->
            <div class="container row-8 d-flex">
                <table class="table table-bordered table-hover-cells">
                    <thead>
                    <tr class="table-dark">
                        <th>Line</th>
                        <th>Address</th>
                        <th>Time</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach($shuttles as $x => $y){
                        echo '<tr><td class="font-weight-bold">' . $shuttles[$x]['line'] . '</td>';
                        echo '<td>' . $shuttles[$x]['address'] . '</td>';
                        echo '<td>' . $shuttles[$x]['time'] . '</td></tr>';
                    }
                    ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</div>