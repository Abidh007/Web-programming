<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "airdb";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn)    {
        die("connection failed". mysqli_connect_error());
    }
    else
        {
            echo"<br><h2 align=center>FLIGHT DETAILS</h2><br/>";
        }
  $sql1="INSERT INTO air(from,Departure Date,Arrival Date,To,Flight Number,Terminal)
        VALUES('cardinal','stavenge','Norway','2025-12-10','Norway',76766,1)";
       
       if (mysqli_query($conn, $sql1)) {
        echo "Record instead successfully.<br>";
       }else {
        echo "Error inserting record:" .mysqli_error($conn)."<br>";
       } 
        $sql="SELECT*FROM air";
        $res=mysqli_query($conn,$sql);
        if(mysqli_num_rows($res)>0)
        {
            echo"<table boder=2 align=center>";
            echo"<tr><th>from</th>";
            echo"<th>Departure Date</th>";
            echo"<th>Arrival Date</th>";
            echo"<th>To</th>";
            echo"<th>Flight Number</th>";
            echo"<th>Terminal</th>";
            while ($row=mysqli_fetch_assoc($res))
                 {
                echo"<tr><td>$row[fro]</td>";
                echo"<tr><td>$row[airline]</td>";
                echo"<tr><td>$row[dd]</td>";
                echo"<tr><td>$row[dd]</td>";
                echo"<tr><td>$row[too]</td>";
                echo"<tr><td>$row[fn]</td>";
                echo"<tr><td>$row[ter]</td>";
                
            }
            
        }
        
         else
            {
            echo"0 results";
             }
mysqli_close($conn);
?>