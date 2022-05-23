<?php include "header.php"; ?> 

<head>
  <title>Registration system PHP and MySQL</title>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style2.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>

	
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1> REGISTRATION </h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Contact -->
	
	<div class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
      <table cellpadding="10" cellspacing="12" align="left	">
     <form action="" onsubmit="return validation()" method="POST"> 

  <tr>
  	<td>
  <input type="text" name="uid" value="" placeholder="Enter user id" required=""style="padding: 10px; width: 300%"> <br>  </td>
    </tr>
   
   <tr>	
 <td> <input type="password" name="pass" id="passwords" value="" placeholder=" Enter Your password" required="" style="padding: 10px; width: 300%"> <br> </td>
   </tr>

  <tr>  
 <td> <input type="email" name="email" id="e1" value="" placeholder="Enter Your Email Address" required="" style="padding: 10px; width: 300%">  <br> </td>
</tr>
         
      <tr>   
<td align="center"> <input type="submit" name="sb" value="Registration " style="color:red; background: lightgreen; font-size: 1.3em; font-family: times new roman">  <br> </td>
   </tr>
    	
    
 </table>

					<?php
					if(isset($_POST['sb']))
					{
						
						$uid = $_POST['uid'];
						$pass = $_POST['pass'];
						$email = $_POST['email'];
						include "connect.php";
						mysqli_query($con,"insert into registration(userid, password,email) values('$uid','$pass','$email')");
						echo "<script>alert('Registration SuccessFully');</script>";
						echo "<center>Click to <a href='login.php'>login</a></center>";
					}	

					?>





				</div>
			</div>
		
		</div>
	</div>
	
<script type="text/javascript">
function validation()
{
	var emailid=document.getElementById('e1').value;
	var p1=document.getElementById('passwords').value;
	





if(emailid==""){
swal("Please Enter email-id", "", "warning", {
  button: "ok",
});

	return false;
}

if(emailid.indexOf('@')<=0)
{
swal("Invalid Email-id", "plaese Enter valid email-id", "warning", {
  button: "ok",
});

	return false;
}
	 if(p1==""){
swal("Please Enter Password", "", "warning", {
  button: "ok",
});

	return false;}

if((p1.length<=7)){
	swal("Password should contain atleast 8 chars", "Enter valid password", "warning", {
  button: "ok",
});

	return false;}



	
	

}

</script></form></body></html>
	<!-- End Contact -->
<?php include "footer.php"; ?>