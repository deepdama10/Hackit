<!DOCTYPE html>
<html>
<head>
	<title>Jquery</title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
		integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
		crossorigin="anonymous"></script>
	<link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="projectDetails.css">
</head>
<body>
    <div id="projectDetails">
       <form action="projectd.php" id="projectForm">
        <h2>Enter your project details</h2>
       	<p ><input type="text" size="35" name="ptitle" class="projectTextBox" id="projectTitleBox" placeholder=" Enter your project title"/></p>
		<p > <input type="text" size="35" name="pcategory" class="projectTextBox" id="projectCatagoryBox" placeholder=" Enter your project's category"/></p>
		<p > <textarea class="projectDescription" name="pdescription" id="projectDescription" rows="3.5" cols="40" placeholder="Enter a brief description of your project"></textarea></p>
		<p > <input type="text" size="35" name="pcost" class="projectTextBox" id="projectCostBox" placeholder=" Enter estimated project cost"/></p>
		<p>Project Image &nbsp;<input type="file" name="projectImage" id="fileupload"/></p>
        <input type="submit" value="Submit" id="projectSubmit"/> 
        <input type="reset" value="Clear" id="projectClear"/><br><br>
		<div id="dvPreview">
       </div>
    </form>
    </div>

    <!-- The Modal -->
		<div id="myModal" class="modal">
        <!-- Modal content -->
 		 <div class="modal-body">
 		<span class="close">&times;</span>
    	<h2>Project Idea Submitted!</h2>
    	<p>Your project idea has been submitted. If any investor is interested in your idea, you will contacted soon.</p>		 
  		</div>
		</div>
</body>

<script type="text/javascript">
	$(function () {
    $("#fileupload").change(function () {
        $("#dvPreview").html("");
        var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
        if (regex.test($(this).val().toLowerCase())) {
            if ($.browser.msie && parseFloat(jQuery.browser.version) <= 9.0) {
                $("#dvPreview").show();
                $("#dvPreview")[0].filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = $(this).val();
            }
            else {
                if (typeof (FileReader) != "undefined") {
                    $("#dvPreview").show();
                    $("#dvPreview").append("<img />");
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $("#dvPreview img").attr("src", e.target.result);
                    }
                    reader.readAsDataURL($(this)[0].files[0]);
                } else {
                    alert("This browser does not support FileReader.");
                }
            }
        } else {
            alert("Please upload a valid image file.");
        }
    });

    		$("#projectSubmit").click(function(){
				$(".modal").show(500);
			});

			$(".close").click(function(){
				$(".modal").hide(500);
                window.open("index.html","_self");
			});

});
</script>
</html>