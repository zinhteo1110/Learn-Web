<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../css/login.css">
<style>
body {margin: 0;}

ul.topnav {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    border: 1px solid #e7e7e7;
    background-color: #f3f3f3;
    weight:80%;
}

ul.topnav li {float: left;border-right: 1px solid #ffffff}

ul.topnav li a {
    display: block;
    color: #666;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

ul.topnav li a:hover:not(.active) {background-color: #111;}

ul.topnav li a.active {background-color: #4CAF50;}

ul.topnav li.right {float: right;}

li a, .dropbtn {
    display: inline-block;
    color: #00ff00;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: #4CAF50;
}

li.dropdown {
    display: inline-block;
}

.dropdown-subunits {
    display: none;
    position:absolute;
    background-color: #f3f3f3;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-subunits a {
    color: #00ff00;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-subunits a:hover {background-color: #999966}

.dropdown:hover .dropdown-subunits {
    display: block;
}

@media screen and (max-width: 600px){
    ul.topnav li.right,
    ul.topnav li {float: none;}
}

</style>
</head>
<body>
<ul class="topnav">
  <li><a class="active" href="#Contents">Contents</a></li>
  <li><a href="#Documents">Documents</a></li>
  <li><a href="#Vocabulary">Vocabulary</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Units</a>
    <div class="dropdown-subunits">
      <a href="#">Unit 4</a>
      <a href="#">Unit 5</a>
      <a href="#">Unit 6</a>
    </div>
  </li>
  <li><a href="#Other">Other</a></li>
</ul>
  <div style="float:right" id="wrap" weight=20%>
  <div id="regbar">
    <div id="navthing">
      <h4><a href="#" id="loginform">Login</a> | <a href="#">Register</a></h4>
    <div class="login">
      <div class="arrow-up"></div>
      <div class="formholder">
        <div class="randompad">
           <fieldset>
             <label name="email">Email</label>
             <input type="email" value="example@example.com" />
             <label name="password">Password</label>
             <input type="password" />
             <input type="submit" value="Login" />

           </fieldset>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/login.js"></script>


</body>
</html>
