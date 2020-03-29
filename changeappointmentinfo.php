<?php
    $conn = mysqli_connect("localhost", "root", "", "car_appointment");
    
    $appid=$_POST['appointmentID'];
  	$mech =$_POST['mechanic'];
  	$dates=$_POST['dates'];
    $btn=$_POST['btn'];
    if($btn=="Update Appointment"){
      $dates= date("yy-m-d", strtotime($dates));
      $query = "UPDATE users SET MECHANIC= '$mech', PREFERRED_DATE='$dates' WHERE APPOINTMENT_ID='$appid';";
      mysqli_query($conn,$query);
      if($query)
        echo "Appointment Updated Successfully. <a href='http://localhost/assignment3/adminlog.php'>Click Here to Continue</a>";
    } else {
      $query="DELETE FROM users WHERE APPOINTMENT_ID='$appid';";
      mysqli_query($conn,$query);
      if($query)
        echo "Appointment Deleted Successfully. <a href='http://localhost/assignment3/adminlog.php'>Click Here to Continue</a>";
    }

?>