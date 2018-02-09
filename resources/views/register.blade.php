<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="/css/style.css">

</head>
<body>
<?php ?>

<div id="wrapper">
	<div id="main">
		<div class="main-img">
			<img src="https://otakukart.com/animeblog/wp-content/uploads/2017/02/Minato_Edo_Tensei-e1486491145715.png">
		</div>
		<div class="main-header">
			<h2>Sign Up Form</h2>
		</div>
		<div class="main-form">
			<form action="/register" name="form" method="post">
			{{ csrf_field() }}
				<div class="form-login">
					<span><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
					<input type="text" name="name" id="name" placeholder="name">
					<div class="clearfix"></div>
				</div>
				<div class="form-login">
					<span><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
					<input type="email" name="email" id="email" placeholder="email">
					<div class="clearfix"></div>
				</div>
				<div class="form-password">
					<span><i class="fa fa-lock" aria-hidden="true"></i></span>
					<input type="password" name="password" id="password" placeholder="Password">
					<div class="clearfix"></div>
				</div>
				<div class="form-confrim">
					<span><i class="fa fa-lock" aria-hidden="true"></i></span>
					<input type="password" name="confrim" id="confrim" placeholder="Confrim Password">
					<div class="clearfix"></div>
				</div>
				<div class="form-button">
				<button type="submit" class="btn" id="submit">REGISTER NOW</button>
				</div>
			</form>
		</div>
		<p>Have an Account? Please <a href="login">Login</a> now!</p>
	</div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script type="text/javascript">

var usernameDOM = document.getElementById("username");
var passwordDOM = document.getElementById("password");
var confrimDOM = document.getElementById("confrim");
var submitDOM = document.getElementById("submit");

submitDOM.addEventListener('click', function(){
	var username = usernameDOM.value;
	var password = passwordDOM.value;
	var confrim = confrimDOM.value;

	if(username == "" || password == "" || confrim == ""){
		alert("Form Kurang Lengkap");
		return false;
	}if(password != confrim){
		alert("Password tidak sama");
		return;
	}else{
		alert("Berhasil Daftar"); 
		window.open('login.html');
	}
});

</script>

</body>
</html>