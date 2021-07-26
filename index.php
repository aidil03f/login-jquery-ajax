<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div style="margin: auto; width: 40%;">
        <br>
        <button type="button" class="btn btn-secondary btn-sm" id="login">Login</button>
        <br><br>
        <form id="login_form" name="form1" method="post" autocomplete="off"> 
            <div class="form-group">
                <label>Email:</label>
                <input type="email" class="form-control" id="email_log" placeholder="Email" name="email" required>
            </div>
            <div class="form-group">
                <label>Password:</label>
                <input type="password" class="form-control" id="password_log" placeholder="Password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary" id="loginButton" name="save">Login</button>
        </form>
    </div>
</div>
<script src="js/jquery.min.js"></script>
<script>
$(document).ready(function() {
	$('#login').on('click', function() {
		$("#login_form").show();
	});
	
	$('#loginButton').on('click', function() {
		var email = $('#email_log').val();
		var password = $('#password_log').val();
		if(email!="" && password!="" ){
			$.ajax({
				url: "save.php",
				type: "POST",
				data: {
					type:1,
					email: email,
					password: password						
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						location.href = "welcome.php";		
					}
					else if(dataResult.statusCode==201){
                        return alert('Invalid Email ID or password!');
					}
				}
			});
		}
		else{
			alert('Please fill all the field !');
		}
	});
});
</script>
</body>
</html>    