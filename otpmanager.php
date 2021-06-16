<?php
include 'connect.php';
include 'Log.php'
$url=$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$url_components = parse_url($url);
parse_str($url_components['query'], $params);
$otp=$_POST["otp"];
$email=$params['email'];
$sql="SELECT email,verify FROM user where otp='$otp' and email='$email'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
if ($result->num_rows >0 && $row['verify']=='0')
{
 $sql1 = "UPDATE user SET verify='1' WHERE email='$email'";
if ($conn->query($sql1) === TRUE)
{
  echo "<script>
    function setCookie(cname, cvalue, exdays)
{
  var d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  var expires = 'expires='+ d.toUTCString();
  document.cookie = cname + '=' + cvalue + ';' + expires + ';path=/';
}
setCookie('email',`{$email}`);
    var i='{$local_url}/Home.php?massage=You are successfully logedin';window.location.href=i; </script>";
} else
{
  echo "Error updating record: " . $conn->error;
}
}
else if($result->num_rows >0 && $row['verify']=='1')
{
    if(isset($_COOKIE['email']))
    {
     echo "<script> var i='{$local_url}/Home.php?massage=You are successfully logedin';window.location.href=i; </script>";
    }
    else
    {
         echo "<script>
    function setCookie(cname, cvalue, exdays)
{
  var d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  var expires = 'expires='+ d.toUTCString();
  document.cookie = cname + '=' + cvalue + ';' + expires + ';path=/';
}
setCookie('email',`{$email}`);
    var i='{$local_url}/Home.php?massage=You are successfully logedin';window.location.href=i; </script>";
    }
}
else
{
$str="<script> var i='{$local_url}/verification.php?massage=Incorrect OTP&email={$email}';window.location.href=i; </script>";
 echo $str;
}
?>
