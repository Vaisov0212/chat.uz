<?
include 'forma_html.php';
$nick=$_POST['nick'];
$sms=$_POST['sms'];


// faylga yozish
$myfile = fopen("sms.txt", "w") or die("Unable to open file!");

fwrite($myfile, "$nick:$sms");

fclose($myfile);
// faylni o'qish
$myfile = fopen("sms.txt", "r") or die("Unable to open file!");
$a=fread($myfile,filesize("sms.txt"));
echo "$a";

fclose($myfile);

// sana
echo   date("Y/m/d"); 


?>