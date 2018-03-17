<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>

</head>

<body>
	
	<div class="container">
		
		<div class="text-center display-3">
			Student Registration
		</div><br>
		<h2 class="text-center text-dark">Enter your details</h2>
		<form action="" method="post" class="form-inline text-dark" style="width:85%; margin-left: 100px; margin-top: 20px; font-weight: 600;">
			<label for="#firstName">First Name</label>
			<input type="text" name="firstName" class="form-control" style="margin: 20px";" id="firstName">
			<label for="#lastName">Last Name</label> 
			<input type="text" name="lastname" class="form-control" style="margin: 20px";" id="lastName">
			<br><label for="#stuContact">Contact</label>
			<input type="text" name="stuContact" class="form-control" style="margin: 20px;";" id="stuContact">
			<div class="input-group" style="margin-top : 20px; margin-left: 55px;">
				<div class="input-group-prepend">
					<span class="input-group-text">@</span>
				</div>
				<input type="email" name="stuEmail" placeholder="student@xyz.com" class="form-control">
			</div>

			<label for="#city" style="margin-top: 20px; margin-right: 20px ;margin-left: 60px;">Select the city</label>
			<select name="city" id="city" class="form-control" style="margin-top: 20px;">
				<option value="Bhopal">Bhopal</option>
				<option value="Bhopal">Indore</option>
				<option value="Bhopal">Gwalior</option>
			</select>

			<label for="#board" style="margin-top: 20px; margin-right: 20px ;margin-left: 60px;">Select the board</label>
			<select name="board" id="board" class="form-control" style="margin-top: 20px;">
				<option value="CBSE">CBSE</option>
				<option value="MP BOARD">MP BOARD</option>
			</select>

			<label for="#parentName" style="margin-left: 100px;margin-top: 50px; margin-right: 20px;">Parent's Name</label>
			<input type="text" name="parentName" id="parentName" class="form-control mr-sm-2" style="margin-top: 50px;">

			<label for="#parentContact" style="margin-left: 20px;margin-top: 50px; margin-right: 20px;">Parent's Contact</label>
			<input type="text" name="parentContact" id="parentContact" class="form-control mr-sm-2" style="margin-top: 50px;">

			<div class="input-group" style="margin-top : 20px; margin-left: 380px;">
				<div class="input-group-prepend">
					<span class="input-group-text">@</span>
				</div>
				<input type="email" name="stuEmail" placeholder="parent@xyz.com" class="form-control">
			</div>

			<input type="submit" value="Register" class="btn btn-success btn-block" style="margin-top: 30px; width : 90%; margin-left: 20px">
		</form>

	</div>

</body>