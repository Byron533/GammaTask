<!DOCTYPE html>
<html>
<head>
	<title>Sign Up Page</title>
    <style>
      h1 {
      	color: yellow;
      	text-shadow: -1px 0 brown, 0 1px brown, 1px 0 brown, 0 -1px brown;
      }
      label {
      	color: brown;
      }
      body {
      	background-color: burlywood;
      }
      html {
      	font-family: Verdana, Geneva, sans-serif;
      }
      div {
      	border-style: outset;
      	padding: 15px 20px 20px 15px;
      }
    </style>

</head>

<body>

  <div class="container" align="center">
    
    <h1> Sign Up </h1>
    
<form action="index.php" method="post" id="show_signup_form">
  <input type="hidden" name="action" value="submit_signup">
<div>  
    <label><b>First Name</b></label>
    <input type="text" name="fname">
</div>
  
<div>
    <label><b>Last Name</b></label>
    <input type="text" name="lname">
</div>

<div>
    <label><b>E-mail</b></label>
    <input type="text" name="email">
</div>

<div>
    <label><b>Phone #</b></label>
    <input type="text" name="phone">
</div>

<div>
    <label><b>Birthday</b></label>
    <input type="text" name="bday">
</div>

<div>
    <label><b>Gender</b></label>
    <input type="radio" name="gender" value="Male" checked>
    <label>Male</label><br/>

    <input type="radio" name="gender" value="Female" checked>
    <label>Female</label><br/>

</div>
    <input type="submit" value="Submit">
     <input class="btn register" type="submit" name="submit" value="Login"/></div>
</form>
</html>