<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Electricity Bill</h1>
    <form method="post" action="#">
        consumer ID:<input type="number" name="user_id"><br>
        Name:<input type="name" name="user_name"><br>
        previous reading <input type="number" name="prev"><br>
        previous reading <input type="number" name="pres"><br><br>
        <input type="submit">
</form>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $id=$_POST['user_id'];
    $NAME=$_POST['user_name'];
    $prev=$_POST['prev'];
    $pres=$_POST['pres'];
    $units=$pres-$prev;
    echo"___________________________________________________________";
    echo"<h3>KERALA STATE ELECRICITY BOARD(KSEB)</h3>";
    echo "<br><br>";
    echo "Consumer ID:".$id."<br>";
    echo "consumer name:".$NAME."<br>";
    echo "Unit consumed:".$units."<br>";
    if($units<=100)
    {
        $amt=$units*3;
        }
        elseif($units>100&&$units<=200)
        {
            $AMT=$units*4;
        }
        elseif($units>200&&$units<=300)
        {
            $amt=$units*5;
        }
        else{
            $amt=$units*6;
        }
        echo"<h4>TOTAL:RS.".($amt)."</h4><br>";
        echo"____________________________";
    }
    ?>
</body>
</html>
