<?php ob_start() ?>

<html>
<head>
    <title>Future | Registration Form</title>
    <link rel="stylesheet" type="text/css" href="css/customer_reg_form.css"/>
    <link rel="icon" href="img/shortcut.png" type="image/gif"/>
	
	<?php include'header.php';  ?>
    </head>
    <body>
    <div class="container_regfrm_container_parent">
	<h3>Online Account Opening Form</h3>
	<div class="container_regfrm_container_parent_child">
		<form method="post">
				 <input type="text" name="name" placeholder="Name" required />
				 <select name ="gender" required >
					  <option class="default" value="" disabled selected>Gender</option>
					  <option value="Male" required >Male</option>
					  <option value="Female">Female</option>
					  <option value="Others">Others</option>
				</select>
				 <input type="text" name="mobile" placeholder="Mobile no" required />
				 <input type="text" name="email" placeholder="Email id" />
				 <input type="text" name="landline" placeholder="Landline no" />
				 <input type="text" name="dob" placeholder="Date of Birth" onfocus="(this.type='date')" required />
				 <input type="text" name="pan_no" placeholder="PAN Number" required />
				 <input type="text" name="citizenship" placeholder="Aadhaar Number" required />
				 <input class="address" type="text" name="homeaddrs" placeholder="Home Address" required  />
				 <input class="address" type="text" name="officeaddrs" placeholder="Office Address" />
				 <input type="text" name="country" placeholder="India" value="India" readonly="readonly" />



				 <select name ="state" required >
					  <option class="default" value="" disabled selected>State</option>
					  <option value="Telangana">Telangana</option>
					  <option value="Andhra Pradesh">Andhra Pradesh</option>
					  <option value="TamilNadu">Tamil Nadu</option>
					  <option value="Karnataka">Karnataka</option>
					  <option value="Kerala">Kerala</option>
					  <option value="Maharashtra">Maharashtra</option>
					  <option value="Delhi">Delhi</option>
					  <option value="Goa">Goa</option>
				</select>



				 <select name ="city" required >
					  <option class="default" value="" disabled selected>City</option>
					  <option value="Telangana" disabled>--Telangana--</option>
					  <option value="Nizamabad">Nizamabad</option>
					  <option value="Hyderabad">Hyderabad</option>
					  <option value="Medak">Medak</option>
					  <option value="Jagtial">Jagtial</option>
					  <option value="Nirmal">Nirmal</option>
					  <option value="Kamareddy">Kamareddy</option>
					  <option value="Andhra Pradesh" disabled>--Andhra Pradesh--</option>
					  <option value="Tirupati">Tirupati</option>
					  <option value="Kurnool">Kurnool</option>
					  <option value="Kakinada">Kakinada</option>
					  <option value="Tamil Nadu" disabled>--Tamil Nadu--</option>
					  <option value="Chennai">Chennai</option>
					  <option value="Vellore">Vellore</option>
					  <option value="Karnataka" disabled>--Karnataka--</option>
					  <option value="Bengaluru">Bengaluru</option>
					  <option value="Bidar">Bidar</option>
					  <option value="Maharashtra" disabled>--Maharashtra--</option>
					  <option value="Nagpur">Nagpur</option>
					  <option value="Pune">Pune</option>
					  <option value="Nashik">Nashik</option>
					  <option value="Delhi" disabled>--Delhi--</option>
					  <option value="New Delhi">New Delhi</option>
					  <option value="Central Delhi">Central Delhi</option>
					  <option value="North Delhi">North Delhi</option>
					  <option value="South Delhi">South Delhi</option>
					  <option value="Goa" disabled>--Goa--</option>
					  <option value="North Goa">North Goa</option>
					  <option value="South Goa">South Goa</option>			  
				</select>



				 
				 <input type="text" name="pin" placeholder="Pin Code" required />
				 <input type="text" name="arealoc" placeholder="Area/Locality" required />
				 <input type="text" name="nominee_name" placeholder="Nominee Name (If any)" />
				 <input type="text" name="nominee_ac_no" placeholder="Nominee Account no"  />
				 
				 <select name ="acctype" required >
					  <option class="default" value="" disabled selected>Account Type</option>
					  <option value="Saving">Saving</option>
					  <option value="Current">Current</option>
				</select>
				<input type="submit" name="submit" value="Submit">
				</form>
         </div>
		 </div>
		 
<?php include'footer.php';?>
    
</body>
</html>


<?php 

if(isset($_POST['submit'])){
	
	session_start();
	$_SESSION['$cust_acopening'] = TRUE;
	$_SESSION['cust_name']=$_POST['name'];
	$_SESSION['cust_gender']=$_POST['gender'];
	$_SESSION['cust_mobile']=$_POST['mobile'];
	$_SESSION['cust_email']=$_POST['email'];
	$_SESSION['cust_landline']=$_POST['landline'];
	$_SESSION['cust_dob']=$_POST['dob'];
	$_SESSION['cust_pan=']=$_POST['pan_no'];
	$_SESSION['cust_citizenship']=$_POST['citizenship'];
	$_SESSION['cust_homeaddrs']=$_POST['homeaddrs'];
	$_SESSION['cust_officeaddrs']=$_POST['officeaddrs'];
	$_SESSION['cust_country']=$_POST['country'];
	$_SESSION['cust_state']=$_POST['state'];
	$_SESSION['cust_city']=$_POST['city'];
	$_SESSION['cust_pin']=$_POST['pin'];
	$_SESSION['arealoc']=$_POST['arealoc'];
	$_SESSION['nominee_name']=$_POST['nominee_name'];
	$_SESSION['nominee_ac_no']=$_POST['nominee_ac_no'];
	$_SESSION['cust_acctype']=$_POST['acctype'];
	
	header('location:cust_regfrm_confirm.php');	
}
?>