<!DOCTYPE html>
<html>
<head>
<style>
* {
    box-sizing: border-box;
}

body {
    font-family: Arial;
    padding: 10px;
    background: #f1f1f1;
}

/* Header/Blog Title */
.header {
    padding: 30px;
    text-align: center;
    background: white;
}

.header h1 {
    font-size: 50px;
}

/* Style the top navigation bar */
.topnav {
    overflow: hidden;
    background-color: #333;
}

/* Style the topnav links */
.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
    float: left;
    width: 75%;
}

/* Right column */
.rightcolumn {
    float: left;
    width: 25%;
    background-color: #f1f1f1;
    padding-left: 20px;
}

/*  image 1 */
.img1 {
    background-color: #aaa;
    width: 100%;
    padding: 20px;
}

/* Add a card effect for articles */
.card {
    background-color: white;
    padding: 20px;
    margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Footer */
.footer {
    padding: 20px;
    text-align: center;
    background: #ddd;
    margin-top: 20px;
}


}


}
</style>
</head>
<body>

<div class="header">
  <h1>ZERO RESTURANT</h1>
  <p>ENJOY DELICIOUS FOOD ONLY AT ZERO</p>
</div>

<div class="topnav">
  <a href="iwp proj menu.php">Menu</a>
  <a href="hourslocs.php">Hours & Locations of zero</a>
  <a href="catser.php">Catering services</a>
  <a href="login.php" style="float:right">Login</a>
  <a href="signup.php" style="float:right">Sign up</a>
  
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>best dish of month</h2>
	  <h4>Barbeque chicken burger with peri-peri fries</h4>
      <h5> november 3, 2018</h5>
	  
      <div><img src="1.jpg"></div>
      </div>
    <div class="card">
      <h2>PREPARTIONS</h2>
   
      <p>we use freshly baked buns,and fresh vegetables for your food items.<br>
	  every dish of ours are prepared by specialised chefs.
	  <br>we take a lot of care hygeine and cleanliness also.</p>
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>About our team</h2>
      <div><img src="2.jpg" width="250 px" height="230 px"></div>
      <p>we have a team of highly specialised chefs,which our best at their works.</p>
    </div>
  
    <div class="card">
      <h3>Follow us</h3>
      <p>Follow us on:- instagram,facebook,twitter to get latest
	  updates on dishes,offers and recent happenings.</p>
    </div>
  </div>
</div>

<div class="footer">
  <h2>Main restaurant</h2>
  <h4>Address: 12, Ring Rd, Scheme No 94 Sector EB, Indore, Madhya Pradesh 452010<br>
     Phone: 0731 473 8888</h4>
</div>

</body>
</html>
