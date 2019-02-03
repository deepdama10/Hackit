<!DOCTYPE html>
<html>
<head>
	<title>Jquery</title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
		integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
		crossorigin="anonymous"></script>
	<link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<div id="already">
<p>Already Registered? <input type="button" class="personalButton" value="Login" id="LoginButton"></p>
</div>
	<div class = "opening">
		<h1 style="margin-top: 15%;">Are you a...</h1>
		<div class = "choices">
			<p style="background: #95b900;" id = "stud">STUDENT</p>
			<p style="background: #e49c00;" id = "invst">INVESTOR</p>
		</div>
	</div>
	<div id = "studSec">
		<h2>Welcome to Student Section</h2>
		<div id= "personalDetails">
		<form action="submit.php" id="personalForm">
		<h3>Enter your personal details</h3>
		<p><input type="text" size="35" class="personalTextBox" id="personalNameBox" name="sname" placeholder=" Enter your full name"/></p>
		<p><input type="text" size="35" class="personalTextBox" id="personalContactBox" name="scno" placeholder=" Phone No"/></p>
		<p>
			<select name="sloc" class="personalSelect" id="personalLocation">
			<option value="delhi">Delhi</option>
			<option value="mumbai">Mumbai</option>
			<option value="pune">Pune</option>
			<option value="chennai">Chennai</option>
			<option value="kolkata">Kolkata</option>
			<option value="bangalore">Bangalore</option>
			<option value="hyderabad">Hyderabad</option>
			<option value="other">Other</option>
		</select></p>
		<p><input type="text" size="35" name="semail" class="personalTextBox" id="personalMailBox" placeholder=" Enter your email address"/></p>
		<p><input type="password" size="35" name="spass" class="personalTextBox" id="personalPassBox" placeholder=" Set a password"/></p>
		<p><input type="password" size="35" name="spass" class="personalTextBox" id="personalConfirmPassBox" placeholder=" Confirm your password"/>
			<div id="passwordCheck"> Passwords do not match!</div></p>
		<!-- <input type="button" value="Verify Email" class="personalButton" id="personalEmailVerify"/>  -->
		<input type="submit" value="Submit Form" class="personalButton" id="personalSubmit"/>&nbsp
		<input type="reset" value="Clear Form" class="personalButton" id="personalClear"/>
	   </form>
	</div>
	
		<!-- <div id="myModal" class="modal">
 		 <div class="modal-body">
 		<span class="close">&times;</span>
    	<h2>Verify Email</h2>
 		 <p><input type="text" id="otp" class="personalTextBox" placeholder=" Enter OTP"/> </p>
    	<input type="button" value="Verify" class="otpVerifyButton" id="personalVerify"/>
  		</div>
		</div> -->
	</div>
	<div id = "invstSec">
		<div id= "ipersonalDetails">
		<!-- <form action="submit.php" id="personalForm"> -->
		<form action="submitinvest.php" id="ipersonalForm">
		<h3>Enter your personal details</h3>
		<p><input type="text" size="35" class="personalTextBox" id="ipersonalNameBox" name="iname" placeholder=" Enter your full name"/></p>
		<p><input type="text" size="35" class="personalTextBox" id="ipersonalContactBox" name="icno" placeholder=" Phone No"/></p>
		<p>
			<select name="iloc" class="personalSelect" id="ipersonalLocation">
			<option value="delhi">Delhi</option>
			<option value="mumbai">Mumbai</option>
			<option value="pune">Pune</option>
			<option value="chennai">Chennai</option>
			<option value="kolkata">Kolkata</option>
			<option value="bangalore">Bangalore</option>
			<option value="hyderabad">Hyderabad</option>
			<option value="other">Other</option>
		</select></p>
		<p><input type="text" size="35" name="iemail" class="personalTextBox" id="ipersonalMailBox" placeholder=" Enter your email address"/></p>
		<p><input type="password" size="35" name="ipass" class="personalTextBox" id="ipersonalPassBox" placeholder=" Set a password"/></p>
		<p><input type="password" size="35"  class="personalTextBox" id="ipersonalConfirmPassBox" placeholder=" Confirm your password"/>
			<div id="ipasswordCheck"> Passwords do not match!</div></p>
		<input type="submit" value="Submit Form" class="personalButton" id="ipersonalSubmit"/>&nbsp
		<input type="reset" value="Clear Form" class="personalButton" id="ipersonalClear"/>
	   </form>
	</div>
	</div>
	<!--Gaurav -->
	<script type="text/javascript"> 

		$(function(){

            $("body").css("display", "none");
            $("body").fadeIn(2000);

			$("#studSec, #invstSec, #genreModal").hide();

			$("#cityDisplay").text($("#citySelect option:selected").text());

			$("#ipersonalSubmit").hide();
			 $("#ipasswordCheck").hide();
            
            $("#LoginButton").click(function(){
            	window.open("Login.php","_self");
            });

			$(".close").click(function(){
				$(".modal").hide(1000);
			});


		    function checkPasswordMatch() {
    	var password = $("#ipersonalPassBox").val();
    	var confirmPassword = $("#ipersonalConfirmPassBox").val();

    	if (password != confirmPassword)
    	{
         $("#ipasswordCheck").show();
   		 $("#ipasswordCheck").text("Passwords do not Match!");
   		}
   		 else
   		 {
   		 $("#ipasswordCheck").show();
   		 $("#ipasswordCheck").text("Passwords Match!");
   		 $("#ipersonalSubmit").show();
   		 }
        // $("#divCheckPasswordMatch").html("Passwords match.");
     }

     	$(document).ready(function () {
   		$("#ipersonalConfirmPassBox").keyup(checkPasswordMatch);
});


			$("#stud").click(function(){
				$("#studSec").show(1000);
				$(".opening").hide(1000);
			})

			$("#invst").click(function(){
				$("#invstSec").show(1000);
				$(".opening").hide(1000);
			})

			$("#chooseGenre").click(function(){
				$("#bg").css("opacity",0.5);
				$("#genreModal").fadeIn(500);
			})			

			$("#done").click(function(){
				$("#bg").css("opacity",1);
				$("#genreModal").fadeOut(500);
			})

			$("#citySelect").change(function(){
				$("#cityDisplay").text($("#citySelect option:selected").text());
			});

			// $(document).on('submit', '#locationForm', function() {
			// 	window.location.href = '../Investor View/investor.html';
   //    			return false;
     		});

     		// $("chooseGenre").click(function(){
     		// 	// $("#genreModal").show(500);
     		// 	console.log("xyz");
     		// })
	</script>

	<!--Abdeali -->
	<script type="text/javascript">
		$(function(){
			 $("#passwordCheck").hide();
			 $("#personalSubmit").hide();

			});

			$(".close").click(function(){
				$(".modal").hide(1000);
			});

		    // $("#otp").click(function(){
		    // 	//$("#personalSubmit").show(500);
		    // 	$("#personalEmailVerify").hide();
		    // });

		    function checkPasswordMatch() {
    	var password = $("#personalPassBox").val();
    	var confirmPassword = $("#personalConfirmPassBox").val();

    	if (password != confirmPassword)
    	{
         $("#passwordCheck").show();
   		 $("#passwordCheck").text("Passwords do not Match!");
   		}
   		 else
   		 {
   		 $("#passwordCheck").show();
   		 $("#passwordCheck").text("Passwords Match!");
   		 $("#personalSubmit").show();
   		 }
        // $("#divCheckPasswordMatch").html("Passwords match.");
     }

     	$(document).ready(function () {
   		$("#personalConfirmPassBox").keyup(checkPasswordMatch);
});

	</script>

</body>
</html>