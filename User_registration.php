<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="user_reg.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
</style>
</head>
<body>


<div id="id01" class="modal">
  
  <form class="modal-content animate" action="index.php" method="post">
  
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

	
    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required> <br> <br>
  
	  <label for="phone"><b>Phone number </b></label>
      <input type="tel" placeholder="Enter Phone Number" name="pno" > <br> <br>

	  <label for="email"><b>Email </b></label>
      <input type="email" placeholder="Enter Email" name="email" > <br> <br>

	  <label for="add"><b>Address </b></label>
      <input type="textarea" placeholder="Enter Addres" name="add" > <br> <br>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" > <br><br>

	  <label for="psw"><b>Confirm Password</b></label>
      <input type="password" placeholder="Confirm Password" name="cpsw" > <br><br>

  	  <label for="gender"><b>Gender</b></label>
      <input type="radio" name="gen" required> Male 
      <input type="radio" name="gen" required> Female <br><br>

      
	  <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
	  <div id="login">Already have an account? <a href="User_login.html"> Login </a> </style> </div>
	  <br><br>
      
	  <button type="submit" name="register" action="index.html"> Register </button> 
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
	  
  </form>
</div>

<script>

</script>

</body>
</html>
