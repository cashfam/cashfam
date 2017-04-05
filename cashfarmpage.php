<?php 

header("Access-Control-Allow-Origin: http://localhost");
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type');
// Allow CORS
if (isset($_SERVER['HTTP_ORIGIN'])) {
    header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
    header('Access-Control-Allow-Credentials: true');    
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS"); 
}   
// Access-Control headers are received during OPTIONS requests
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    header("Access-Control-Allow-Headers: *");
}

session_start();


$username = $_POST['name'];
echo "alert('$username'); ";
     return;
     
$pzlink = mysqli_connect( "160.153.162.8", "ponzidatabase", "xTrafen1029384756", "pzi" );


$username = $_POST['name'];
$password = $_POST['pass'];
$password2 = $_POST['pass2'];
$fullname = $_POST['fullname'];
$phone = $_POST['phoneno'];
$bank = $_POST['bank'];
$accname = $_POST['accname'];
$accno = $_POST['accno'];
$project = "farm1";
$email = $_POST["email"];

$payment = 1;
$agree = $_POST['agree'];

$Username = trim(strtoupper($username));
$password = trim($password);
$password2 = trim($password2);


if ($agree == "" ){

echo "alert('Please agree to our Terms and Condition to continue');";
     return;

}

if ($username == "" ){

echo "alert('Please Enter A Username');";
  
}

if ($password == "" ){

echo "alert('Please Enter Your Password');";
     return;

}

if ($password2 == "" ){

echo "alert('Please Confirm Your Password');";
     return;

}

if ($password != $password2 ){

echo "alert('The Password you confirmed is not the same as the original password you created');alert('Please enter a password and confirm that same password, making sure they are the same.');";
     return;

}

if ($fullname == "" ){

echo "alert('Please Enter Your Fullname');";
     return;

}


if ($phone == "" or !is_numeric($phone) or strlen($phone) != 11){

echo "alert('Please enter a valid Phone Number');";
     return;

}

if ($email == "" or !filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "alert('Please enter a valid email address');";
     return;
}

if ($bank == "" ){

echo "alert('Please the name of your bank');";
     return;

}

if ($accname == "" ){

echo "alert('Please the name of your account');";
     return;

}

if ($accno == "" or !is_numeric($accno) or strlen($accno) != 10){

echo "alert('Please enter a valid Account Number');";
     return;

}


if ($payment == "" or $payment == "0"){

	echo " alert('Please Select A Payment Plan $payment');";
                                     return;
}


$sql2 = "SELECT * FROM `cf10k` WHERE `username` = '$username'";
$result2 = mysqli_query($pzlink, $sql2);
// var_dump($username);
// var_dump($result2);
if ( mysqli_num_rows ($result2) != 0  ){

		
	echo " alert('User already exist');";
                                     return;
}

$sql2 = "SELECT * FROM `cf20k` WHERE `username` = '$username'";
$result2 = mysqli_query($pzlink, $sql2);


if ( mysqli_num_rows ($result2) != 0 ){
	echo " alert('User already exist');";
                                     return;
}
$sql2 = "SELECT * FROM `cf50k` WHERE `username` = '$username'";
$result2 = mysqli_query($pzlink, $sql2);
if ( mysqli_num_rows ($result2) != 0 ){
	echo " alert('User already exist');";
                                     return;
}
$sql2 = "SELECT * FROM `cf100k` WHERE `username` = '$username'";
$result2 = mysqli_query($pzlink, $sql2);
if ( mysqli_num_rows ($result2) != 0 ){
	echo " alert('User already exist');";
                                     return;
}
$sql2 = "SELECT * FROM `cf200k` WHERE `username` = '$username'";
$result2 = mysqli_query($pzlink, $sql2);
if ( mysqli_num_rows ($result2) != 0 ){
	echo " alert('User already exist');";
                                     return;
}



$sql2 = "SELECT * FROM `cf10k` WHERE `email` = '$email'";
$result2 = mysqli_query($pzlink, $sql2);
if ( mysqli_num_rows ($result2) != 0 ){
	echo " alert('User already exist');";
                                     return;
}
$sql2 = "SELECT * FROM `cf20k` WHERE `email` = '$email'";
$result2 = mysqli_query($pzlink, $sql2);
if ( mysqli_num_rows ($result2) != 0 ){
	echo " alert('User already exist');";
                                     return;
}
$sql2 = "SELECT * FROM `cf50k` WHERE `email` = '$email'";
$result2 = mysqli_query($pzlink, $sql2);
if ( mysqli_num_rows ($result2) != 0 ){
	echo " alert('User already exist');";
                                     return;
}
$sql2 = "SELECT * FROM `cf100k` WHERE `email` = '$email'";
$result2 = mysqli_query($pzlink, $sql2);
if ( mysqli_num_rows ($result2) != 0 ){
	echo " alert('User already exist');";
                                     return;
}
$sql2 = "SELECT * FROM `cf200k` WHERE `email` = '$email'";
$result2 = mysqli_query($pzlink, $sql2);
if ( mysqli_num_rows ($result2) != 0 ){
	echo " alert('User already exist');";
                                     return;
}


 


// $accno = strval($accno);

// unset ($result2);

$sql2 = "SELECT * FROM cf10k WHERE accnum = '$accno'";
$result2 = mysqli_query($pzlink, $sql2);
if ( mysqli_num_rows ($result2) != 0 ){
	// $obj = mysqli_fetch_object($result2);
	// $sid = $obj->id;
	// // var_dump($result2);
	// echo "<script type='text/javascript'>
	// alert('$accno');</script>";
	// echo "<script type='text/javascript'>
 	//alert('User already exist');</script>";
 	//return;


    echo "alert('User already exist');";
    return;
}
$sql2 = "SELECT * FROM `cf20k` WHERE `accnum` = '$accno'";
$result2 = mysqli_query($pzlink, $sql2);
if ( mysqli_num_rows ($result2) != 0 ){
	echo " alert('User already exist');";
                                     return;
}
$sql2 = "SELECT * FROM `cf50k` WHERE `accnum` = '$accno'";
$result2 = mysqli_query($pzlink, $sql2);
if ( mysqli_num_rows ($result2) != 0 ){
	echo " alert('User already exist');";
                                     return;
}
$sql2 = "SELECT * FROM `cf100k` WHERE `accnum` = '$accno'";
$result2 = mysqli_query($pzlink, $sql2);
if ( mysqli_num_rows ($result2) != 0 ){
	echo " alert('User already exist');";
                                     return;
}
$sql2 = "SELECT * FROM `cf200k` WHERE `accnum` = '$accno'";
$result2 = mysqli_query($pzlink, $sql2);
if ( mysqli_num_rows ($result2) != 0 ){
	echo " alert('User already exist');";
    return;
}



$sql2 = "SELECT * FROM `cf10k` WHERE `phoneno` = '$phone'";
$result2 = mysqli_query($pzlink, $sql2);
if ( mysqli_num_rows ($result2) != 0 ){
	// $obj = mysqli_fetch_object($result2);
	// $sid = $obj->accnum;
	// var_dump($result2);
	// echo "<script type='text/javascript'>
	// alert('$accno');</script>";
	// echo "<script type='text/javascript'>
 //    alert('User already exist');</script>";
 //    return;

    echo "alert('User already exist');";
    return;
}
$sql2 = "SELECT * FROM `cf20k` WHERE `phoneno` = '$phone'";
$result2 = mysqli_query($pzlink, $sql2);
if ( mysqli_num_rows ($result2) != 0 ){
	echo "alert('User already exist');";
                                     return;
}
$sql2 = "SELECT * FROM `cf50k` WHERE `phoneno` = '$phone'";
$result2 = mysqli_query($pzlink, $sql2);
if ( mysqli_num_rows ($result2) != 0 ){
	echo "alert('User already exist');";
                                     return;
}
$sql2 = "SELECT * FROM `cf100k` WHERE `phoneno` = '$phone'";
$result2 = mysqli_query($pzlink, $sql2);
if ( mysqli_num_rows ($result2) != 0 ){
	echo "alert('User already exist');";
                                     return;
}
$sql2 = "SELECT * FROM `cf200k` WHERE `phoneno` = '$phone'";
$result2 = mysqli_query($pzlink, $sql2);
if ( mysqli_num_rows ($result2) != 0 ){
	echo "alert('User already exist');";
    return;
}

///////////////hashpassword

if ($payment == 1){

$sql2 = "SELECT `id` FROM `cf10k` WHERE `username` = '' and `ousername` != '' ";
$result2 = mysqli_query($pzlink, $sql2);

if (mysqli_num_rows ($result2) == 0){
//////////////put admin
	$query = "INSERT INTO `cf10k`( `project`, `username`, `password`, `phoneno`, `email`, `accname`, `accnum`, `bank`, `oi`, `oproject`, `ousername`, `opassword`, `ophoneno`, `oemail`, `oaccname`, `oaccnum`, `obank`, `confirmed`, `veri`, `stamp`, `con` ) VALUES ('$project','$username','$password','$phone','$email','$accname','$accno','$bank', '0','Baby cloths','Mom','asdfghjkl','07064652616','xtramercabi@yahoo.com','Mercy Uloko','0019842674','GTB','0','0',NOW(),'new')";
	$result = mysqli_query($pzlink, $query);

	if ( $result ){
		$sql2 = "SELECT id FROM cf10k WHERE con = 'new'";
		$result2 = mysqli_query($pzlink, $sql2);
		$obj = mysqli_fetch_object($result2);
		$newid = $obj->id;

		$sql2 = "SELECT con FROM con10 WHERE id = $newid";
		$result2 = mysqli_query($pzlink, $sql2);
		$obj = mysqli_fetch_object($result2);
		$conid = $obj->con;

		$sql2 = "UPDATE `cf10k` SET `con` = $conid WHERE `id` = $newid";
		$result2 = mysqli_query($pzlink, $sql2);
		

	}

}else{

$obj = mysqli_fetch_object($result2);
$enter = $obj->id;

	$query = "SELECT con FROM con10 WHERE id = $enter";
	$result = mysqli_query($pzlink, $query);
	$obj = mysqli_fetch_object($result);
	$conid = $obj->con;


	$query5 = "UPDATE `cf10k` SET `project` = '$project', `username` = '$username', `password` = '$password', `phoneno` =  '$phone', `email` = '$email', `accname` = '$accname', `accnum` = '$accno', `bank` = '$bank', stamp = NOW(), `con` = '$conid' WHERE id='$enter'";
	$result5 = mysqli_query($pzlink, $query5);



}



}elseif ($payment == 2){

	$sql2 = "SELECT id FROM cf20k WHERE username = '' and ousername != ''";
$result2 = mysqli_query($pzlink, $sql2);
if (mysqli_num_rows ($result2) == 0){
//////////////put admin
	$query = "INSERT INTO `cf20k`( `project`, `username`, `password`, `phoneno`, `email`, `accname`, `accnum`, `bank`, `oi`, `oproject`, `ousername`, `opassword`, `ophoneno`, `oemail`, `oaccname`, `oaccnum`, `obank`, `confirmed`, `veri`, `stamp`, `con` ) VALUES ('$project','$username','$password','$phone','$email','$accname','$accno','$bank', '0','Baby cloths','Mom','1234567890','07064652616','xtramercabi@yahoo.com','Mercy Uloko','0019842674','GTB','0','0',NOW(),'new')";
	$result = mysqli_query($pzlink, $query);

	if ( $result ){
		$sql2 = "SELECT id FROM cf20k WHERE con = 'new'";
		$result2 = mysqli_query($pzlink, $sql2);
		$obj = mysqli_fetch_object($result2);
		$newid = $obj->id;

		$sql2 = "SELECT con FROM con25 WHERE id = $newid";
		$result2 = mysqli_query($pzlink, $sql2);
		$obj = mysqli_fetch_object($result2);
		$conid = $obj->con;

		$sql2 = "UPDATE `cf20k` SET `con` = $conid WHERE id = $newid";
		$result2 = mysqli_query($pzlink, $sql2);
		

	}

}else{

$obj = mysqli_fetch_object($result2);
$enter = $obj->id;

	$query = "SELECT con FROM con25 WHERE id = $enter";
	$result = mysqli_query($pzlink, $query);
	$obj = mysqli_fetch_object($result);
	$conid = $obj->con;

	$query5 = "UPDATE `cf20k` SET `project` = '$project', `username` = '$username', `password` = '$password', `phoneno` =  '$phone', `email` = '$email', `accname` = '$accname', `accnum` = '$accno', `bank` = '$bank', stamp = NOW(), `con` = '$conid' WHERE id='$enter'";
	$result5 = mysqli_query($pzlink, $query5);

	

}

}elseif ($payment == 3){

$sql2 = "SELECT id FROM cf50k WHERE username = '' and ousername != ''";
$result2 = mysqli_query($pzlink, $sql2);
if (mysqli_num_rows ($result2) == 0){
//////////////put admin
	$query = "INSERT INTO `cf50k`( `project`, `username`, `password`, `phoneno`, `email`, `accname`, `accnum`, `bank`, `oi`, `oproject`, `ousername`, `opassword`, `ophoneno`, `oemail`, `oaccname`, `oaccnum`, `obank`, `confirmed`, `veri`, `stamp`, `con` ) VALUES ('$project','$username','$password','$phone','$email','$accname','$accno','$bank', '0','Baby cloths','Mom','1234567890','07064652616','xtramercabi@yahoo.com','Mercy Uloko','0019842674','GTB','0','0',NOW(),'new')";
	$result = mysqli_query($pzlink, $query);

	if ( $result ){
		$sql2 = "SELECT id FROM cf50k WHERE con = 'new'";
		$result2 = mysqli_query($pzlink, $sql2);
		$obj = mysqli_fetch_object($result2);
		$newid = $obj->id;

		$sql2 = "SELECT con FROM con50 WHERE id = $newid";
		$result2 = mysqli_query($pzlink, $sql2);
		$obj = mysqli_fetch_object($result2);
		$conid = $obj->con;

		$sql2 = "UPDATE `cf50k` SET `con` = $conid WHERE id = $newid";
		$result2 = mysqli_query($pzlink, $sql2);
		

	}


}else{

$obj = mysqli_fetch_object($result2);
$enter = $obj->id;

	$query = "SELECT con FROM con50 WHERE id = $enter";
	$result = mysqli_query($pzlink, $query);
	$obj = mysqli_fetch_object($result);
	$conid = $obj->con;


	$query5 = "UPDATE `cf50k` SET `project` = '$project', `username` = '$username', `password` = '$password', `phoneno` =  '$phone', `email` = '$email', `accname` = '$accname', `accnum` = '$accno', `bank` = '$bank', stamp = NOW(), `con` = '$conid' WHERE id='$enter'";
	$result5 = mysqli_query($pzlink, $query5);

	

}


}elseif ($payment == 4){


$sql2 = "SELECT id FROM cf100k WHERE username = '' and ousername != ''";
$result2 = mysqli_query($pzlink, $sql2);
if (mysqli_num_rows ($result2) == 0){
//////////////put admin
	$query = "INSERT INTO `cf100k`( `project`, `username`, `password`, `phoneno`, `email`, `accname`, `accnum`, `bank`, `oi`, `oproject`, `ousername`, `opassword`, `ophoneno`, `oemail`, `oaccname`, `oaccnum`, `obank`, `confirmed`, `veri`, `stamp`, `con` ) VALUES ('$project','$username','$password','$phone','$email','$accname','$accno','$bank', '0','Baby cloths','Mom','1234567890','07064652616','xtramercabi@yahoo.com','Mercy Uloko','0019842674','GTB','0','0',NOW(),'new')";
	$result = mysqli_query($pzlink, $query);

	if ( $result ){
		$sql2 = "SELECT id FROM cf100k WHERE con = 'new'";
		$result2 = mysqli_query($pzlink, $sql2);
		$obj = mysqli_fetch_object($result2);
		$newid = $obj->id;

		$sql2 = "SELECT con FROM con100 WHERE id = $newid";
		$result2 = mysqli_query($pzlink, $sql2);
		$obj = mysqli_fetch_object($result2);
		$conid = $obj->con;

		$sql2 = "UPDATE `cf100k` SET `con` = $conid WHERE id = $newid";
		$result2 = mysqli_query($pzlink, $sql2);
		

	}


}else{

$obj = mysqli_fetch_object($result2);
$enter = $obj->id;

	$query = "SELECT con FROM con100 WHERE 'id' = $enter";
	$result = mysqli_query($pzlink, $query);
	$obj = mysqli_fetch_object($result);
	$conid = $obj->con;

	$query5 = "UPDATE `cf100k` SET `project` = '$project', `username` = '$username', `password` = '$password', `phoneno` =  '$phone', `email` = '$email', `accname` = '$accname', `accnum` = '$accno', `bank` = '$bank', stamp = NOW(), `con` = '$conid' WHERE id='$enter'";
	$result5 = mysqli_query($pzlink, $query5);

	

}


}elseif ($payment == 5){


$sql2 = "SELECT id FROM cf200k WHERE username = '' and ousername != ''";
$result2 = mysqli_query($pzlink, $sql2);
if (mysqli_num_rows ($result2) == 0){
//////////////put admin
	$query = "INSERT INTO `cf200k`( `project`, `username`, `password`, `phoneno`, `email`, `accname`, `accnum`, `bank`, `oi`, `oproject`, `ousername`, `opassword`, `ophoneno`, `oemail`, `oaccname`, `oaccnum`, `obank`, `confirmed`, `veri`, `stamp`, `con` ) VALUES ('$project','$username','$password','$phone','$email','$accname','$accno','$bank', '0','Baby cloths','Mom','1234567890','07064652616','xtramercabi@yahoo.com','Mercy Uloko','0019842674','GTB','0','0',NOW(),'new')";
	$result = mysqli_query($pzlink, $query);


if ( $result ){
		$sql2 = "SELECT id FROM cf200k WHERE con = 'new'";
		$result2 = mysqli_query($pzlink, $sql2);
		$obj = mysqli_fetch_object($result2);
		$newid = $obj->id;

		$sql2 = "SELECT con FROM con250 WHERE id = $newid";
		$result2 = mysqli_query($pzlink, $sql2);
		$obj = mysqli_fetch_object($result2);
		$conid = $obj->con;

		$sql2 = "UPDATE `cf200k` SET `con` = $conid WHERE id = $newid";
		$result2 = mysqli_query($pzlink, $sql2);
		

	}



}else{

$obj = mysqli_fetch_object($result2);
$enter = $obj->id;
	
	$query = "SELECT con FROM con250 WHERE id = $enter";
	$result = mysqli_query($pzlink, $query);
	$obj = mysqli_fetch_object($result);
	$conid = $obj->con;


	$query5 = "UPDATE `cf200k` SET `project` = '$project', `username` = '$username', `password` = '$password', `phoneno` =  '$phone', `email` = '$email', `accname` = '$accname', `accnum` = '$accno', `bank` = '$bank', stamp = NOW(), `con` = '$conid' WHERE id='$enter'";
	$result5 = mysqli_query($pzlink, $query5);

	

}


}





$query10 = "SELECT * FROM cf10k WHERE username = '$username'";
$resultcf10k = mysqli_query($pzlink, $query10);
if ($resultcf10k){ 
$projects = array();
while ($projectarray = mysqli_fetch_assoc($resultcf10k)) $projects[] = $projectarray;
$str10farms = serialize($projects);
}

$query25 = "SELECT * FROM cf20k WHERE username = '$username'";
$resultcf20k = mysqli_query($pzlink, $query25);
if ($resultcf20k){ 
$projects = array();
while ($projectarray = mysqli_fetch_assoc($resultcf20k)) $projects[] = $projectarray;
$str20farms = serialize($projects);
}


$query50 = "SELECT * FROM cf50k WHERE username = '$username'";
$resultcf50k = mysqli_query($pzlink, $query50);

if ($resultcf50k){ 
$projects = array();
while ($projectarray = mysqli_fetch_assoc($resultcf50k)) $projects[] = $projectarray;
$str50farms = serialize($projects);
}


$query100 = "SELECT * FROM cf100k WHERE username = '$username'";
$resultcf100k = mysqli_query($pzlink, $query100);

if ($resultcf100k){ 
$projects = array();
while ($projectarray = mysqli_fetch_assoc($resultcf100k)) $projects[] = $projectarray;
$str100farms = serialize($projects);
}

$query250 = "SELECT * FROM cf200k WHERE username = '$username'";
$resultcf200k = mysqli_query($pzlink, $query250);


if ($resultcf200k){ 
$projects = array();
while ($projectarray = mysqli_fetch_assoc($resultcf200k)) $projects[] = $projectarray;
$str200farms = serialize($projects);
}


$obj ->username = $username;
$obj ->farm10 = $str10farms;
$obj ->farm20 = $str20farms;
$obj ->farm50 = $str50farms;
$obj ->farm100 = $str100farms;
$obj ->farm200 = $str200farms;

$json = json_encode($obj);

// echo "localStorage.cffarms = $json;";
echo "window.location.href='farm.html';";



?>


