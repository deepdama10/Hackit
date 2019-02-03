<!DOCTYPE html>
<html>
<head>
	<title>Jquery</title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
		integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
		crossorigin="anonymous"></script>
	<link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="donation.css">
</head>
<body>
	<?php
		$connection = new mysqli("localhost", "root", ""); // Establishing Connection with Server
		$db = mysqli_select_db( $connection, "hackit");
	?>

	<h1 style="text-align: center;"></h1>
	<div id = "card">
		<div id="parent">
			<div class = "child img">
				<img src="xyz.png">			
			</div>
			<div class = "child detail">
				<div id = "donation">
					<p id = "raised">452$</p>
					<p id = "goal">raised of 2400$ goal</p>
				</div>
				<div id = "donor-no">
					<p id = "donor">21</p>
					<p id = "down">donors</p>
				</div>
				<div id = "projectBack">
					<p>Back this project</p>
				</div>
			</div>
		</div>
		<div id = "donationSite">
			<input type="text" name="donationAmt" placeholder="Amount in $">
			<br>
			<input type="button" name="Donate" id = "donateBtn" value="Donate">
		</div>
	</div>
	<div class = "description">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</div>

		</script>
	<script type="text/javascript">
		$(function(){

		var getQueryString = function ( field, url ) {
	    var href = url ? url : window.location.href;
	    var reg = new RegExp( '[?&]' + field + '=([^&#]*)', 'i' );
	    var string = reg.exec(href);
	    return string ? string[1] : null;
	    };
	    var id = getQueryString('query');

			$("#donationSite").hide();

			$("#projectBack").click(function(){
				$("#donationSite").slideDown(1000);
			});

		var title = <?php
		
		$id = 1001;

		$sql2 = "select * from student WHERE ID=$id";
		$query = mysqli_query( $connection, $sql2);

		$row2 = mysqli_fetch_array($query);

		$ans = $row2['title'];

		$ans = "\"".$ans."\"";

		echo $ans;
		?>

		var desc = <?php
		
		$id = 1001;

		$sql2 = "select * from student WHERE ID=$id";
		$query = mysqli_query( $connection, $sql2);

		$row2 = mysqli_fetch_array($query);

		$ans = $row2['description'];

		$ans = "\"".$ans."\"";

		echo $ans;
		?>

		var raised = <?php
		
		$id = 1001;

		$sql2 = "select * from student WHERE ID=$id";
		$query = mysqli_query( $connection, $sql2);

		$row2 = mysqli_fetch_array($query);

		$ans = $row2['amountreceived'];

		$ans = "\"".$ans."\"";

		echo $ans;
		?>

		var donor = <?php
		
		$id = 1001;

		$sql2 = "select * from student WHERE ID=$id";
		$query = mysqli_query( $connection, $sql2);

		$row2 = mysqli_fetch_array($query);

		$ans = $row2['nodonor'];

		$ans = "\"".$ans."\"";

		echo $ans;
		?>

		$("h1").text(title);
		$(".description").text(desc);
		$("#raised").text(raised);
		$("#donor").text(donor);

			$("#donateBtn").click(function(){
				alert("Donation Successful");
		    $('html, body').animate({
		        scrollTop: $("h1").offset().top
		    }, 1000);				
			});

		});
	</script>
</body>
</html>