<html>
<head>
<script src="jquerypart.js" type="text/javascript"></script>
<link rel="stylesheet" href="adminmain.css"> 
<script>
function getState(val) {
	$.ajax({
	type: "POST",
	url: "getclinic.php",
	data:'city='+val,
	success: function(data){
		$("#clinic-list").html(data);
	}
	});
}
function getManagerRegion(val) {
	$.ajax({
	type: "POST",
	url: "getmanagerregion.php",
	data:'city='+val,
	success: function(data){
		$("#manager-list").html(data);
	}
	});
}

</script>
</head>
<body background= "clinicview.jpg">
<ul>
<li class="dropdown"><font color="yellow" size="10">ADMIN MODE</font></li>
<br>
<h2>
  <li class="dropdown">    
  <a href="javascript:void(0)" class="dropbtn">DOCTOR</a>
    <div class="dropdown-content">
      <a href="adddoctor.php">ADD DOCTORr</a>
      <a href="deletedoctor.php">DELETE DOCTOR</a>
      <a href="showdoctor.php">SHOW DOCTOR</a>
	  <a href="showdoctorschedule.php">SHOW DOCTOR SCHEDULE</a>
    </div>
  </li>
  
  <li class="dropdown">
  <a href="javascript:void(0)" class="dropbtn">CLINIC</a>
    <div class="dropdown-content">
      <a href="addclinic.php">ADD CLINIC</a>
      <a href="deleteclinic.php">DELETE CLINIC</a>
      <a href="adddoctorclinic.php">ASSIGN DOCTOR TO CLINIC</a>
	  <a href="addmanagerclinic.php">ASSIGN MANAGER TO CLINIC</a>
	  <a href="deletedoctorclinic.php">DELETE DOCTOR FROM CLINIC</a>
	  <a href="deletemanagerclinic.php">DELETE MANAGER FROM CLINIC</a>
	  <a href="showclinic.php">SHOW CLINIC</a>
    </div>
  </li>
  <li class="dropdown">    
  <a href="javascript:void(0)" class="dropbtn">MANAGER</a>
    <div class="dropdown-content">
      <a href="addmanager.php">ADD MANAGER</a>
      <a href="deletemanager.php">DELETE MANAGER</a>
	  <a href="showmanager.php">SHOW MANAGER</a>
    </div>
  </li>
   <li>  
	<form method="post" action="../cover.php">	
	<button type="submit" class="cancelbtn" name="logout" style="float:right;font-size:22px"><b>LOG OUT</b></button>
	</form>
  </li>
	
</ul>
</h2>
<center><h1>ASSIGN MANAGER TO A CLINIC</h1><hr>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
<label style="font-size:20px" >City:</label>
		<select name="city" id="city-list" class="demoInputBox"  onChange="getState(this.value);getManagerRegion(this.value);">
		<option value="">Select City</option>
		<?php
		include 'dbconfig.php';
		$sql1="SELECT distinct City FROM clinic";
         $results=$conn->query($sql1); 
		while($rs=$results->fetch_assoc()) { 
		?>
		<option value="<?php echo $rs["City"]; ?>"><?php echo $rs["City"]; ?></option>
		<?php
		}
		?>
		</select>
        
	
		<label style="font-size:20px" >Clinic:</label>
		<select id="clinic-list" name="clinic" >
		<option value="">Select Clinic</option>
		</select>
		
		<label style="font-size:20px" >Manager:</label>
		<select name="manager" id="manager-list">
		<option value="">Select Manager</option>
		</select>

		<button name="Submit" type="submit">Submit</button>
	</form>
<?php
session_start();
if(isset($_POST['logout'])){
		session_unset();
		session_destroy();
		header( "Refresh:1; url=alogin.php"); 
	}
if(isset($_POST['Submit']))
{
		include 'dbconfig.php';
		$cid=$_POST['clinic'];
		$mid=$_POST['manager'];
		
				$sql = "INSERT INTO manager_clinic (`CID`, `MID`) VALUES ('$cid','$mid')";
				$sql1="update clinic set MID=$mid where CID=$cid";
				if (mysqli_query($conn, $sql)) 
				{
							echo "<h2>Record created successfully( CID=$cid MID=$mid )!!</h2>";
							echo "Please wait...Refreshing...";
						//	header( "Refresh:2; url=addmanagerclinic.php");
							 echo "<script type='text/javascript'>document.location='addmanagerclinic.php';</script>";

				} 
				else
				{
					echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
				if (mysqli_query($conn, $sql1)) 
				{
							echo "<h2>Record created successfully( CID=$cid MID=$mid )in CLINIC TABLE!!</h2>";
							echo "Please wait...Refreshing...";
						//	header( "Refresh:2; url=addmanagerclinic.php");
							 echo "<script type='text/javascript'>document.location='addmanagerclinic.php';</script>";

				} 
				else
				{
					echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
				}
				
}

?>

</body>
</html>