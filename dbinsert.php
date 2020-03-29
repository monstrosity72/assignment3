<?php
	$conn = mysqli_connect("localhost", "root", "", "car_appointment");

	$username = $_POST['username'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$license = $_POST['license'];
	$enginenumber = $_POST['enginenumber'];
	
	$dates1 =$_POST['dates'];
 	$dates2 = date("yy-m-d", strtotime($dates1));

	$mechanic = $_POST['mechanic'];

	

  $count=0;
  $usercount=0;
  $query="SELECT * FROM users WHERE PREFERRED_DATE='$dates2' AND MECHANIC='$mechanic';";
  $result=$conn->query($query);
  while($rows=$result->fetch_assoc()){
      $count=$count+1;
  }
  $query="SELECT * FROM users WHERE PREFERRED_DATE='$dates2' AND NAME='$username';";
  $result=$conn->query($query);
  while($rows=$result->fetch_assoc()){
      $usercount=$usercount+1;
  }


  if($count>=4) {
    echo "Appointment Cannot be Made. Mechanic is busy on that day. Please chose another mechanic. <a href='http://localhost/assignment3/user_panel.html'>Click Here to return to appointment page</a>";
  } else if($usercount==1){
    echo "Appointment already made for that day. <a href='http://localhost/assignment3/user_panel.html'>Click Here to return to appointment page</a>";
  }else{
    $query2 = "INSERT INTO users (NAME, ADDRESS, PHONE, CAR_LICENCE, CAR_ENGINE_NO, MECHANIC, PREFERRED_DATE)VALUES ('$username', '$address', '$phone','$license','$enginenumber','$mechanic','$dates2');";
    mysqli_query($conn,$query2);
    if($query2)
      echo"Appointment has been made. <a href='http://localhost/assignment3/user_panel.html'>Click Here to return to appointment page</a>";
  }
  
?>