<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AskQ | register</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/register.css">
  <link rel="icon" href="img/AskQ-Logo.png" size = "128x128">

</head>
<body>
<div class="split-screen">
    <div class="left">
        <slection class="copy">
            <h1>Explore your creativity</h1>
            <p>all new students are create accounts</p>
        </slection>
</div>  
<div class="right">
  <form>
    <selection class="copy">
      <h2>sign up</h2>
      <div class="login-container">
        <p>Already have an account? <a href="#">
          
      </div>
    </selection>
    <div class="input-container name">
      <label for="fname">Full Name</label>
      <input id="fname" name="fname" type="text">
</div>
   <div class="input-container email">
    <label for="email">Email</label>
    <input id="email" name="email" type="email">
</div>
    <div class="input-container password">
    <label for="password">password</label>
    <input id="password" name="password" placeholder="Must be at least 6 characters" type="password"> 
    <i class="for fa-eye-slash"></i>
</div>
    <div class="input-container cta">
      <lable class="checkbox-container">
        <input type="checkbox">
        <span class="checkmark"></span>
        sign up for email updates.
      </lable>
    </div>
    <button class="signup-btn" type="submit">signup</button>
    
 
  </form>
</div>  
<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js'></script>
<script src="js/script.js"></script>
</body>
</html>
