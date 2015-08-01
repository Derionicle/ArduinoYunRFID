<?php 
$Fname = $_POST["Fname"];
$Lname = $_POST["Lname"];
if (!isset($_POST["submit"])){
echo "<head>"; 
echo "<title>Personal INFO</title>";

echo "</head>";
echo "<body>";
echo "<form method=\"post\" action=\"$PHP_SELF\">";
echo "First Name:<input type=\"text\" size=\"12\" maxlength=\"12\" name=\"Fname\">:<br />";
echo "Last Name:<input type=\"text\" size=\"12\" maxlength=\"36\" name=\"Lname\">:<br />";
echo "<input type=\"submit\" value=\"submit\" name=\"submit\"><br />";
echo "</form><br />";
}
else { 
echo "Hello, ".$Fname." ".$Lname.".<br />";
echo "<a href=\"http://arduino.local/arduino/$Fname\"	) class=\"button\">Comfirm</a>";
}
?>
