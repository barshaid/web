<?php
// define variables and set to empty values
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$guests = $name = $email = $phone = "";
$check = 1;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $phone = test_input($_POST["phone"]);
    $guests = test_input($_POST["guests"]);
    if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        echo "<div class='alert alert-danger' role='alert'>Name must only contain English letters and spaces.</div>";
        $check = 0;
    } else if ($name == "") {
        echo "<div class='alert alert-danger' role='alert'>Name is a required field</div>";
        $check = 0;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<div class='alert alert-danger' role='alert'>Invalid E-mail address</div>";
        $check = 0;
    } else if ($email == "") {
        echo "<div class='alert alert-danger' role='alert'>E-mail is a required field</div>";
        $check = 0;
    }

    if (!preg_match("/^[0-9]{9,10}$/", $phone)) {
        echo "<div class='alert alert-danger' role='alert'>Phone number must only contain numbers.</div>";
        $check = 0;
    } else if ($phone == "") {
        echo "<div class='alert alert-danger' role='alert'>Phone is a required field</div>";
        $check = 0;
    }
    if ($check == 1) {
        echo "<div class='alert alert-success' role='alert'>Thnak you for registering, " . $name . "<br> Number of guests: " . $guests . "<br>Good luck!</div>";
    }
}
?>


<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Registration Form</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <script src="indexJS.js"></script>
</head>
<body onload="count()">
<form class="form-horizontal" method="post">
    <fieldset>

        <legend>Tournament Registration</legend>

        <div class="form-group">
            <label class="col-md-4 control-label">Full Name</label>
            <div class="col-md-4">
                <input name="name" type="text" class="form-control input-md">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Email</label>
            <div class="col-md-4">
                <input type="text" name="email" class="form-control input-md">

            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Phone</label>
            <div class="col-md-4">
                <input type="text" name="phone" class="form-control input-md">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Spectator guests</label>
            <div class="col-md-4">
                <select class="form-control" name="guests">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Will you be arriving by shuttlebus?</label>
            <div class="col-md-4">
                <label class="radio-inline" for="radios-0">
                    <input type="radio" name="radios" id="radios-0" value="0" checked="checked">
                    No
                </label>
                <label class="radio-inline" for="radios-1">
                    <input type="radio" name="radios" id="radios-1" value="1">
                    Yes
                </label>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Select shuttle station</label>
            <div class="col-md-4">
                <select name="selectbasic" class="form-control">
                    <option value="0">None</option>
                    <option value="1">Lev Ha-Mifratz</option>
                    <option value="2">Hof Ha-Carmel Central</option>
                    <option value="3">Bat Galim</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Additional information</label>
            <div class="col-md-4">
                <textarea class="form-control"
                          maxlength="200"

                          id="textarea"
                          name="textarea"
                          placeholder=""></textarea>
                <span id="chars">200</span> characters remaining
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label"></label>
            <div class="col-md-4">
                <input type="submit" value="SEND">
            </div>
        </div>
    </fieldset>
</form>

</body>
</html>