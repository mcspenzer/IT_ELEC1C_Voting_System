<?php 
session_start();
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

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
		google.charts.load('current', {'packages':['bar']});
		google.charts.setOnLoadCallback(drawChart);

		function drawChart() {
			var data = google.visualization.arrayToDataTable([
				['Student voters per year', 'Registered Student Voters', 
				'Students who voted for the candidates', 'Students who voted for abstain',],

				['2015', 1170, 460, 250],
				['2016', 894, 589, 298],
				['2017', 1000, 400, 200],
				
			]);

			var options = {
				chart: {
				title: 'Past Elections',
				subtitle: 'AY 2015-2017',
			
				},
				bars: 'vertical' // Required for Material Bar Charts.
			};

			var chart = new google.charts.Bar(document.getElementById('previousElections'));

			chart.draw(data, google.charts.Bar.convertOptions(options));
		}
    </script>
</head>
<body>

<?php require 'includes/html/sidebar.inc.php'?>

<div class="pusher">
	<div class="container" style="margin-top:100px;">
		<div class="ui two column grid stackable">
			<div class="row">
				<div class="eight wide column">
					<h2 class="ui huge black segment inverted header">
						<i class="home icon"></i>
						<div class="content">
							Welcome <?php echo $_SESSION['admin_first_name']." ".$_SESSION['admin_last_name'];?>
							<div class="sub header">What would you like to do?</div>
						</div>
					</h2>
				</div>
				<div class="eight wide column">
					<h2 class="ui huge black segment inverted header">
						<i class="chart line icon"></i>
						<div class="content">
							Statistical representation of all the student voters
							<div class="sub header">per department</div>
							
						</div>
					</h2>
					<div class="ui horizontal statistics ">
						<div class="green statistic ">
							<div class="value">423</div>
							<div class="label">Information Technology</div>
						</div>
						<div class="orange statistic">
							<div class="value">158</div>
							<div class="label">Information Systems</div>
						</div>
						<div class="teal statistic">
							<div class="value">267</div>
							<div class="label">Computer Science</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row"> 
				<div class="eight wide column"></div>
				<div class="eight wide column">
					<div id="previousElections" class="fluid" style="height: 500px;"></div>
				</div>
			</div>
		</div>
	</div>
</div>

<br><br><br><br><br><br>

<div class="ui basic top fixed huge icon menu inverted">
	<a id="toggle" class="item">
		<i class="sidebar icon"></i>Menu
    </a>
</div>
<script>
	$('#toggle').click(function() {
		$('.ui.sidebar').sidebar('toggle');
	});
</script>
</body>
</html>
