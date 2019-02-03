<!DOCTYPE html>
<html>
<head>
	<title>Hackit!</title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
		integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
		crossorigin="anonymous"></script>
	<link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="investor.css">
</head>
<body>
	<div id = "bg">
		<div id = "topNav">
			<div id = "categories">
				<div class = "genre"><input type="checkbox" class="chk" name="Consumer Internet" value = "cons" checked>Consumer Internet</div>
				<div class = "genre"><input type="checkbox" class="chk" value="fin" name="Finance" checked>Finance</div>
				<div class = "genre"><input type="checkbox" class="chk" value="health" name="HealthCare" checked>HealthCare</div>
				<div class = "genre"><input type="checkbox" class="chk" value="log" name="Logistics" checked>Logistics</div>
				<div class = "genre"><input type="checkbox" class="chk" value="food" name="Food & Beverage" checked>Food & Beverage</div>		
			</div>
			<!-- <div id = "registerNow">
				<p id = "registerModalOpen">Want to get notified when there are more projects?</p>
			</div> -->
		</div>
		<?php
		$connection = new mysqli("localhost", "root", ""); // Establishing Connection with Server
		$db = mysqli_select_db( $connection, "hackit"); // Selecting Database
		//MySQL Query to read data
		$sql = "select * from student";
		$query = mysqli_query( $connection, $sql) or die( mysqli_error($connection));
		while ($row = mysqli_fetch_array($query)) {
		// echo "<b><a href=\"readphp.php?id={$row['employee_id']}\">{$row['employee_name']}</a></b>";
		// echo "<br />";
		echo '<div class = "card" style="margin-top: 90px;">
			<div class = "img child">
				<img src="penguins.jpg">
			</div><div class = "details child"><h2 style = "text-align: center;">'.$row['title'].'</h2><h3 id = "genre">'.$row['genre'].'</h3>
				<p>'.$row['description'].'</p>
				<p class = "link" id = '.$row['ID'].'>Click here to know more</p>
			</div>
		</div>';
		
		}

		?>
<!-- 		<div class = "card cons" style="margin-top: 90px;">
			<div class = "img child">
				<img src="penguins.jpg">
			</div>
			<div class = "details child">
				<h3>Consumer Internet</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p class = "link">Click here to know more</p>
			</div>
		</div>
		<div class = "card cons">
			<div class = "img child">
				<img src="penguins.jpg">
			</div>
			<div class = "details child">
				<h3>Consumer Internet</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p class = "link">Click here to know more</p>
			</div>
		</div>
		<div class = "card fin">
			<div class = "img child">
				<img src="penguins.jpg">
			</div>
			<div class = "details child">
				<h3>Finance</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p class = "link">Click here to know more</p>
			</div>
		</div>
		<div class = "card fin">
			<div class = "img child">
				<img src="penguins.jpg">
			</div>
			<div class = "details child">
				<h3>Finance</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p class = "link">Click here to know more</p>
			</div>
		</div>
		<div class = "card log">
			<div class = "img child">
				<img src="penguins.jpg">
			</div>
			<div class = "details child">
				<h3>Logistics</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p class = "link">Click here to know more</p>
			</div>
		</div> -->
		<a id="back2Top" title="Back to top" href="#"><img src="to-top.png" style="width: 50px;"></a>
	</div>
	
	<div id = "detailsModal">
		<span class="close">&times;</span>
		<h3 style="text-align: center;"></h3>
		<img src="penguins.jpg">
		<p id = "desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<p style="display: inline;">Cost:</p>
		<p style="display: inline;" id = "cost">Rs. 456</p>
		<p id = "donateButton">Donate Now!</p>
	</div>	
	<script type="text/javascript">

		var viewportHeight = document.documentElement.clientHeight;

		viewportHeight = 0.95 * viewportHeight;

		$(window).scroll(function() {
		var height = $(window).scrollTop();
		if (height > 100) {
		$('#back2Top').fadeIn();
		} else {
		$('#back2Top').fadeOut();
		}
		});
		$(document).ready(function() {

		$("#registerModal, #detailsModal").hide();

		$("#detailsModal").css("max-height", viewportHeight);

		$(".card").each(function(){
			var x = $(this).find("h3").text();
			if (x == "Consumer Internet")
				$(this).addClass("cons");
			else if (x == "Finance")
				$(this).addClass("fin");
			else if (x == "Logistics")
				$(this).addClass("log");
			else if (x == "Food & Beverage")
				$(this).addClass("food");	
			else if (x == "HealthCare")
				$(this).addClass("health");

		});

		$('.link').on('click', function(){
			window.open("donation.php?query=" + $(this).attr('id'),"_self");
		});

		// $('.link').on('click', function(){
		// 	$("#bg").css("opacity",0.5);

		// 	document.cookie = "id = " + $(this).attr('id');

		// 	 var h3Text = <?php 
		// 	 $id = $_COOKIE['id'];

		// 	$sql2 = "select * from student WHERE ID=$id";
		// 	$query = mysqli_query( $connection, $sql2);

		// 	$row2 = mysqli_fetch_array($query);

		// 	$ans = $row2['title'];

		// 	$ans = "\"".$ans."\"";

		// 	echo $ans;
		// 	 ?>

		// 	 var descText = <?php 
		// 	 $id = $_COOKIE['id'];

		// 	$sql2 = "select * from student WHERE ID=$id";
		// 	$query = mysqli_query( $connection, $sql2);

		// 	$row2 = mysqli_fetch_array($query);

		// 	$ans = $row2['description'];

		// 	$ans = "\"".$ans."\"";

		// 	echo $ans;
		// 	 ?>

		// 	 var costText = <?php 
		// 	 $id = $_COOKIE['id'];

		// 	$sql2 = "select * from student WHERE ID=$id";
		// 	$query = mysqli_query( $connection, $sql2);

		// 	$row2 = mysqli_fetch_array($query);

		// 	$ans = $row2['ecost'];

		// 	$ans = "\"".$ans."\"";

		// 	echo $ans;
		// 	 ?>

		// 	$("#detailsModal").find("h3").text(h3Text);
		// 	$("#detailsModal").find("#desc").text(descText);
		// 	$("#detailsModal").find("#cost").text(costText);
		// 	$("#detailsModal").fadeIn(500);
		// });

		 $.each($("input[name='sport']:checked"), function(){            
                favorite.push($(this).val());
            });

		$("#back2Top").click(function(event) {
		event.preventDefault();
		$("html, body").animate({ scrollTop: 0 }, "slow");
		return false;
		});

		$("#registerModalOpen").click(function(){
			$("#bg").css("opacity",0.5);
			$("#registerModal").fadeIn(500);
		});

		$(".close").click(function(){
				$("#detailsModal").hide(500);
				$("#bg").css("opacity",1);
				});

		$('input[class="chk"]').click(function () {
	    // var chkArray = [];
	    $(".chk:checked").each(function() {
		
		var x = $(this).val();
		console.log(x);
		x = "." + x;
		$(x).slideDown(1000);
	   });

	    $(".chk:not(:checked)").each(function() {
		
		var x = $(this).val();
		console.log(x);
		x = "." + x;
		$(x).slideUp(1000);
	   });
	
	});
	});
	</script>
</body>
</html>