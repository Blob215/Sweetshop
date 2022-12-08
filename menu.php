<!DOCTYPE html>
<html>
<title>Pupils</title>
    
</head>
<body>
   <h1>MENU</h1>


    <a href="buystuff.php">Create order</a><br>
    <a href="vieworders.php">view orders</a><br>
    <a href="Statspupils.php">View Total purchases</a><br>
    <a href="logout.php">log out</a>
    <?php
session_start();

if ($_SESSION["Role"]==1){
    echo("<br>");
    echo("<br>");
    echo("Admin Functions <br>");
    echo ('<a href="tuck.php">Add Tuck</a><br>');
    echo('<a href="pupil.php">Add pupil</a><br><br>');
}
?>
</body>
</html>