<!DOCTYPE html>
<html>
	<head>
		<title>Login form</title>
		<link rel="stylesheet" href="Login.css">
	</head>
	<body>
		<div class="login-page">
			<div class="form" >
				<fieldset>
					<h1 style="color:white">Admin Login</h1>
					<form action="loginbe.php" class="login-form" id="form-log">		
						<input type="text" placeholder="user-name" id="username" name="username"/>
						<input type="password" placeholder="password"id="password" name="password"/>
						<select name="option">
							<option>Student</option>
							<option>Investor</option>
						</select> 
						<button class="btn" type="submit" id='form-log' onClick="login()">Login</button>
						<div class="alert" id="msg" style="color:red"></div>
					</form>
				</fieldset>
			</div>
		</div>
		<script>
			// function login(){
			// 	var username=document.getElementById('username').value;
			// 	var password=document.getElementById('password').value;
			// 	var msg=document.getElementById('msg');
			// 	if(username!='username'&&password=='password'){
			// 		msg.className='alert alert-danger';
			// 		msg.innerHTML='Invalid username';
			// 	}
			// 	if(username=='username'&&password!='password'){
			// 		msg.className='alert alert-danger';
			// 		msg.innerHTML='Invalid password';
			// 	}
			// 	if(username!='username'&&password!='password'){
			// 		msg.className='alert alert-danger';
			// 		msg.innerHTML='Invalid username and password';
			// 	}
			// 	if(username=='username'&&password=='password'){
			// 		msg.className='alert alert-danger';
			// 		msg.innerHTML='Success';
			// 	}
			// }
			// document.getElementById('form-log').addEventListener('Login',login,true);
		</script>
	</body>
</html>