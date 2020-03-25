<?php 

if(isset($_POST["submit"])) 
{
echo $_POST["full_name"] . "<br />";

echo $_POST["email"] . "<br />";

echo $_POST["phone_number"] . "<br />";

echo $_POST["gender"] . "<br />";

echo $_POST["tracks"] . "<br />";

echo $_POST["message"] . "<br />";

}

extract($_REQUEST);
$file=fopen($full_name .".txt", "a");
fwrite($file, "Name:");
fwrite($file, $full_name ."\n");
fwrite($file, "Email:");
fwrite($file, $email ."\n");
fwrite($file, "Phone number:");
fwrite($file, $phone_number ."\n");
fwrite($file, "Gender:");
fwrite($file, $gender ."\n");
fwrite($file, "Tracks:");
fwrite($file, $tracks ."\n");
fwrite($file, "Comment:");
fwrite($file, $message ."\n");
fclose($file);

?>
