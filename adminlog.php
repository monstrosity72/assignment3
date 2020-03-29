<?php
    $conn = mysqli_connect("localhost", "root", "", "car_appointment");
    $query="SELECT * FROM users";
    $result= $conn->query($query);
?>



<!DOCTYPE html>
<html lang="en">
    <head>
	    <meta charset="utf-8">
        <meta http-equiv="refresh" content="20">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
    </head>
    <body  onload="getFiles()">
    	<div class="head" style="width: 100%; padding: 10px; padding-bottom: 20px; margin: 0 auto; margin-bottom: 10px; font-family: sans-serif; color: white; background-color: black">
            <h1>Admin Log page for Car Shop House 2.0</h1>
        </div>


    	<table align="center"  style=" line-height: 20px; ">
    		<tr>
    			<th colspan="8"><h2>Current Appointments</h2></th>
    		</tr>
    		<t>
    			<th>Appointment ID</th>
    			<th>Client Name</th>
                <th>Phone</th>
    			<th>Licence Number</th>
                <th>Appointment Date</th>
    			<th>Preferred Mechanic</th>	
    		</t>
    	<?php
    	    while($rows=$result->fetch_assoc()) {
    	?>
    	    	 <tr>
                    <td><?php echo $rows['APPOINTMENT_ID'];?></td>
    	    	 	<td><?php echo $rows['NAME'];?></td>
                    <td><?php echo $rows['PHONE'];?></td>
    	    	 	<td><?php echo $rows['CAR_LICENCE'];?></td>
    	    	 	<td><?php echo $rows['PREFERRED_DATE']?></td>
    	    	 	<td><?php echo $rows['MECHANIC'];?></td>
    	    	 </tr>
    	<?php
    	    }
    	    $conn->close();
    	 ?>
    	</table>
        
        <div id="frm">

        <form name="update_appointment" action="changeappointmentinfo.php" method="POST">
            <p>
                <label style="padding-left: 5px; padding-right: 120px">Appointment ID:</label>
                <input type="number" id="appointmentID" name="appointmentID" required />
            </p>
            <p>
                

                <label style="padding-left: 5px; padding-right: 63px" for="fname">Select Desired Mechanic:</label>
                <select id="mechanic" name="mechanic">
                    <option value="">Pick desired mechanic</option>
                    <option value="Kamrul">Kamrul</option>
                    <option value="Pallab">Pallab</option>
                    <option value="Rafiul">Rafiul</option>
                    <option value="Joven">Joven</option>
                    <option value="Durjoy">Durjoy</option>
                </select>
            </p>
             <p>
                <label style="padding-left: 5px; padding-right: 192px">Date: </label>
                <input type="date" id="dates" name="dates"/>
            </p>
            
            <p>
                <input style="margin-left: 200px" type="submit" id="btn" name="btn" value="Update Appointment"/>
            </p>
            
            <p>
                <input style="margin-left: 200px" type="submit" id="btn" name="btn" value="Delete Appointment"/>
            </p>
    
            </form>
        </div>

    </body>
    <style type="text/css">
    body{
    	background: #FFFFFF;
    }
    h1{
    	font-weight: bold;
    	font-size: 30px;
    	font-family: "calibri", Garamond, 'Comic Sans MS';
    	text-align: center;
    	margin-top:30px;
    }
    th,td{
    	padding:10px; 
    	text-align: center;
        border-bottom: 1px solid #ddd;
    }
    #frm{
            border: solid gray 5px;
            width: 50%;
            border-radius: 5px;
            margin: 50px auto;
            background: black;
            padding: 50px;
            color: white;
            margin-bottom: 0px;
    }
    #btn{
        background-color: #cd6155 ;
        border: none;
        color: white;
        padding: 5px 14px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 20px;
        margin: 4px 2px;
        cursor: pointer;
    }
    </style>

    <script type="text/javascript">
      </script>

</html>