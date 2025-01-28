<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AskQ | Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="icon" href="img/AskQ-Logo.png" size = "128x128">
</head>
<body>
<div class = "header">


<div class = "header-right">
    <button type ="button" class="btn btn-outline-info" id = "Login_Button">Log in</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="register.php" style='text-decoration:none;'><button type="button" class="btn btn-outline-info" id = "Register_Button">Register</button></a>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6 text-left">
            <img src="pixsels.jpg" class="img-fluid float-left" alt="left image" >
        </div>  
<div class ="wrapper">
<div class="inner-warpper text-center">
<h2 class="title">Welcome Back!</h2>
<p>Login to manage your account.</p>
<from action = "php/login.php" method = "post" id = "formvalidate">
<div class ="input-group">
    <label class="placeholder" for="userName"> User Name</label>
    <input class="from-contral" name="email" id="userName" type="text" placeholder=""/>            
    <span class="lighting"></span>
</div>

<div class="input-group">
        <label class="palceholder" for="userPassword">Password</label>
        <input class="form-control" name="password" id="userPassword" type="password" placeholder="" />
        <span class="lighting"></span>
      </div>






<button type="submit" name='sign_in' id="login">login</button>
<div class="clearfix supporter">
    <div class="pull-left remember-me">
        <input id="rememberme" type="checkbox">
        <label for="rememberme">remember Me</label>
</div>
<a class="forgot pull-right" herf ="#">Forget Password?</a>
</div>
</form>
</div>
<div class="signup-wrapper text-center">
    <a herf="register.php">Don't have an account?<span class="text-primary">create one</span></a>
</div>
</div>
<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js'></script>
<script src="js/script.js"></script>
</body>
</html>        


