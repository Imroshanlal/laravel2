<h1 style ="color:blue; weight:bolder;">bar</h1>
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
<nav class="navbar navbar-default " role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
	  	<div class="horizontal-menu">
        <ul>
          <br>
            <li><a href="home1" class="active" style="color:red">HOME</a></li>
            <br>
            <li><a href="about1" style="color:red">ABOUT US</a></li>
            <br>
            <li><a href="login1" style="color:red">LOGIN</a></li>
            <form name="myForm" action="home1" method="post">
              <input type="hidden" name="_token" value="<?php echo csrf_token() ?>"/>
<br>First name: <input type="text" name="firstname"><br>
<br>Last name: <input type="text" name="lastname"><br><br>
<br>
phone no:<input type="number" name="phone no"><br>
<br>email: <input type="text" name="email"><br><br>

<input type="button" onclick="formSubmit()" value="Send to home !">
</form>
            <br>
           <li><a href="contact1" style="color:red">CONTACT US</a></li>
            <br>
            <div class="dropdown">
   <div class="dropdown-content">
    
    <p style ="color:blue; weight:bolder;>PHONE NUMBER</p>
    <P>EMAIL id </P>
    <p>and information</p>
  </div>
</div>
        </ul>
    </div>
    </div>
  </div>
</nav>


