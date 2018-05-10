<?php
session_start();

var_dump($_SESSION);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VSystem_01</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/navigations.css">
    <link rel="stylesheet" href="assets/css/alwaysInclude.css">
    <link rel="stylesheet" href="assets/css/hoverableImages.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js"></script>
</head>

<body>
<?php require 'includes/html/sidebar.inc.php'; ?>

<div class="container" style="margin-top:100px;">
    <h2 class="ui center aligned icon header">
        <i class="circular inverted globe icon"></i>
        Manage the elections
    </h2>
    <div class="sub ui center aligned header">As the administrator, you are going to create and manage the upcoming elections</div>
</div>

<div class="ui grid container stackable" style="margin-top:70px;margin-bottom:300px;">
    <div class="four wide column stackable">
        <div class="ui fluid vertical tiny steps">  
            <div class="active step">
                <i class="clock icon"></i> 
                <div class="content">
                    <div class="title">Step 1</div>
                    <div class="description">Set your elections</div>
                </div>
            </div>
            
            <div class="disabled step">
                <i class="user icon"></i> 
                <div class="content">
                    <div class="title">Step 2</div>
                    <div class="description">Upload the candidates</div>
                </div>
            </div>
            
            <div class="disabled step">
                <i class="users icon"></i> 
                <div class="content">
                    <div class="title">Step 3</div>
                    <div class="description">Choose participants</div>
                </div>
            </div>

            <div class="disabled step">
                <i class="flag checkered icon"></i> 
                <div class="content">
                    <div class="title">Step 4</div>
                    <div class="description">Summary</div>
                </div>
            </div>
        </div>
    </div>
    <div class="six wide column stackable fluid">

        <h2 class="ui huge black segment inverted header">
            <i class="calendar icon"></i>
            <div class="content">
                Date
                <div class="sub header">Set the date of your elections</div>
            </div>
        </h2>
        <h3>From</h3>
            <div class="ui calendar" id="example1">
                <div class="ui input fluid left icon">
                    <i class="calendar icon"></i>
                    <input type="date" placeholder="Date/Time" name="from_date" id="from_date">
                </div>
            </div>
            <h3>To</h3>
            <div class="ui calendar" id="example2">
                <div class="ui input fluid left icon">
                    <i class="calendar icon"></i>
                    <input type="date" placeholder="Date/Time" name="to_date" id="to_date">
                </div>
            </div>
    </div>

    <div class="six wide column stackable fluid">
        <h2 class="ui huge inverted grey segment header">
        <i class="time icon"></i>
        <div class="content">
            Time
            <div class="sub header">Set the time of your elections</div>
        </div>
        </h2>
        <h3>From</h3>
        <div class="ui" id="example1">
            <div class="ui input fluid left icon">
                <i class="time icon"></i>
                <input type="time" placeholder="Date/Time" name="from_time" id="from_time">
            </div>
        </div>
        <h3>To</h3>
        <div class="ui" id="example2">
            <div class="ui input fluid left icon">
                <i class="time icon"></i>
                <input type="time" placeholder="Date/Time" name="to_time" id="to_time">
            </div>
        </div>
        <br><br><br>
        <h3 class="ui right floated header">
            <a href="createPoll2.html">
                <div class="ui animated positive button" tabindex="0" id="step1_next">
                    <div class="visible content">Next</div>
                    <div class="hidden content"><i class="right arrow icon"></i></div>
                </div>
            </a>
        </h3>
    </div>
</div>
<div class="ui basic top fixed huge icon menu inverted">
    <a id="toggle" class="item"><i class="sidebar icon"></i>Menu</a>
</div>

<script>
$('#toggle').click(function() {
    $('.ui.sidebar').sidebar('toggle');
});
</script>
<script>
$('#example1').calendar();
</script>
<script>
$('#example2').calendar();
</script>
<script>
    $(document).ready(function() {
        $("#step1_next").click(function() {
            sessionStorage.setItem("from_date", document.getElementById("from_date").value);
            sessionStorage.setItem("to_date", document.getElementById("to_date").value);
            sessionStorage.setItem("from_time", document.getElementById("from_time").value);
            sessionStorage.setItem("to_time", document.getElementById("to_time").value);
        });
    });
</script>
</body>
</html>
