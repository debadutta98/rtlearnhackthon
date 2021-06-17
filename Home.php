<html>
  <head>
    <title>rtlearn</title>
    <!--rtlearn favicon-->
    <link rel="icon" href="rtlearn-logo.svg" type="image/svg">
 <link rel="stylesheet" type="text/css" href="index.css" />
<!--Bootstrao css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!--bootstrap Js link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<!--End of bootstarp links-->
  </head>
  <body style="background:black;color:white;">
<div style="background-color:white;height:70px;">
  <a href="https://learn.rtcamp.com/" style="text-decoration:none;padding-left:50px;"><img src="rtlearn-logo.svg" width="70px" height="70px" ></a>
</div>
  <!-- login page -->
  <seciton id="text-center" class="container">
  <div style="display:inline;">
<div class="text-center title">
Title</div><span id="time" style="float:right;margin-right:20%;margin-top:-25px;position:relative;">&nbsp; &nbsp; dd:mm:yyyy</span>
</div>
<br>
<div class="text-center" id="alt">
Here I am
</div>
</section>
<section id="image">
<div style="display:flex;justify-content:center;" class="container">
<image src="download.png" width="300" height="300" style="margin-top:6%;" id="xcdd">
</div>
</section>
<section id="des">
<div class="container">
<div class="form-group">
    <label for="exampleFormControlTextarea1">Describtion</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" columns="5"  disabled>value="heloo"</textarea>
</div>
</div>
</section>
<?php
require 'connect.php';
require 'send.php';
$num=rand(1,500);
$api_url = "http://xkcd.com/{$num}/info.0.json";
$json_data = file_get_contents($api_url);
$response_data = json_decode($json_data, true);
$time=$response_data["day"].":".$response_data["month"].":".$response_data["year"];
$des=$response_data["transcript"];
$des=str_replace("[[","",$des);
$des=str_replace("]]","",$des);
$des=str_replace("{{","",$des);
$des=str_replace("}}","",$des);

echo "<script type='text/javascript'>
window.onload=function(){
document.querySelector('.title').innerHTML=`{$response_data["title"]}`;
document.querySelector('#time').innerHTML=`{$time}`;
document.querySelector('#xcdd').setAttribute('src', '{$response_data["img"]}');
document.querySelector('#alt').innerHTML=`{$response_data["alt"]}`;
document.querySelector('.form-control').innerHTML=`{$des}`;

const urlSearchParams = new URLSearchParams(window.location.search);
const params = Object.fromEntries(urlSearchParams.entries());
  if(typeof(params)!='undefined')
  {
      if(typeof(params.massage)!='undefined')
      {
         alert(params.massage);

      }
  }

}
</script>";

if(isset($_COOKIE['email']))
{
$to=$_COOKIE['email'];
$sql = "SELECT email,verify FROM user where email='{$to}'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
if($result->num_rows >0 && $row['verify']=='1')
{
$subject=$response_data["title"];
$massage='<!doctype html><html> <head> <meta name="viewport" content="width=device-width" /> <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> <title>Simple Transactional Email</title> <style> /* ------------------------------------- GLOBAL RESETS ------------------------------------- */ img { border: none; -ms-interpolation-mode: bicubic; max-width: 100%; } body { background-color: #f6f6f6; font-family: sans-serif; -webkit-font-smoothing: antialiased; font-size: 14px; line-height: 1.4; margin: 0; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; } table { border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; } table td { font-family: sans-serif; font-size: 14px; vertical-align: top; } /* ------------------------------------- BODY & CONTAINER ------------------------------------- */ .body { background-color: #f6f6f6; width: 100%; } /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */ .container { display: block; Margin: 0 auto !important; /* makes it centered */ max-width: 580px; padding: 10px; width: 580px; } /* This should also be a block element, so that it will fill 100% of the .container */ .content { box-sizing: border-box; display: block; Margin: 0 auto; max-width: 580px; padding: 10px; } /* ------------------------------------- HEADER, FOOTER, MAIN ------------------------------------- */ .main { background: #fff; border-radius: 3px; width: 100%; } .wrapper { box-sizing: border-box; padding: 20px; } .footer { clear: both; padding-top: 10px; text-align: center; width: 100%; } .footer td, .footer p, .footer span, .footer a { color: #999999; font-size: 12px; text-align: center; } /* ------------------------------------- TYPOGRAPHY ------------------------------------- */ h1, h2, h3, h4 { color: #000000; font-family: sans-serif; font-weight: 400; line-height: 1.4; margin: 0; Margin-bottom: 30px; } h1 { font-size: 35px; font-weight: 300; text-align: center; text-transform: capitalize; } p, ul, ol { font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px; } p li, ul li, ol li { list-style-position: inside; margin-left: 5px; } a { color: #3498db; text-decoration: underline; } /* ------------------------------------- BUTTONS ------------------------------------- */ .btn { box-sizing: border-box; width: 100%; } .btn > tbody > tr > td { padding-bottom: 15px; } .btn table { width: auto; } .btn table td { background-color: #ffffff; border-radius: 5px; text-align: center; } .btn a { background-color: #ffffff; border: solid 1px #3498db; border-radius: 5px; box-sizing: border-box; color: #3498db; cursor: pointer; display: inline-block; font-size: 14px; font-weight: bold; margin: 0; padding: 12px 25px; text-decoration: none; text-transform: capitalize; } .btn-primary table td { background-color: #3498db; } .btn-primary a { background-color: #3498db; border-color: #3498db; color: #ffffff; } /* ------------------------------------- OTHER STYLES THAT MIGHT BE USEFUL ------------------------------------- */ .last { margin-bottom: 0; } .first { margin-top: 0; } .align-center { text-align: center; } .align-right { text-align: right; } .align-left { text-align: left; } .clear { clear: both; } .mt0 { margin-top: 0; } .mb0 { margin-bottom: 0; } .preheader { color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0; } .powered-by a { text-decoration: none; } hr { border: 0; border-bottom: 1px solid #f6f6f6; Margin: 20px 0; } /* ------------------------------------- RESPONSIVE AND MOBILE FRIENDLY STYLES ------------------------------------- */ @media only screen and (max-width: 620px) { table[class=body] h1 { font-size: 28px !important; margin-bottom: 10px !important; } table[class=body] p, table[class=body] ul, table[class=body] ol, table[class=body] td, table[class=body] span, table[class=body] a { font-size: 16px !important; } table[class=body] .wrapper, table[class=body] .article { padding: 10px !important; } table[class=body] .content { padding: 0 !important; } table[class=body] .container { padding: 0 !important; width: 100% !important; } table[class=body] .main { border-left-width: 0 !important; border-radius: 0 !important; border-right-width: 0 !important; } table[class=body] .btn table { width: 100% !important; } table[class=body] .btn a { width: 100% !important; } table[class=body] .img-responsive { height: auto !important; max-width: 100% !important; width: auto !important; }} @media all { .ExternalClass { width: 100%; } .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div { line-height: 100%; } .apple-link a { color: inherit !important; font-family: inherit !important; font-size: inherit !important; font-weight: inherit !important; line-height: inherit !important; text-decoration: none !important; } .btn-primary table td:hover { background-color: #34495e !important; } .btn-primary a:hover { background-color: #34495e !important; border-color: #34495e !important; } } </style> </head> <body class=""> <table border="0" cellpadding="0" cellspacing="0" class="body"> <tr> <td>&nbsp;</td> <td class="container"> <div class="content">'.
"<img src='' width='100px' height='100px'/>"."<table class='main'> <!-- START MAIN CONTENT AREA --> <tr> <td class='wrapper'> <table border='0' cellpadding='0' cellspacing='0'> <tr> <td>".
"<span style='font-weight:bold;font-size:20px;'>{$response_data["title"]}</span>
<br>
<span style='font-weight:bold;font-size:15px;'>{$response_data["alt"]}</span>
<br>".
"<img src='{$response_data["img"]}' width='400px' height='400px'/>

 <table border='0' cellpadding='0' cellspacing='0' class='btn btn-primary'> <tbody> <tr> <td align='left'> <table border='0' cellpadding='0' cellspacing='0'> <tbody> <tr> <td>
 </td> </tr> </tbody> </table> </td> </tr> </tbody> </table>
 <br><p>{$des}</p> </td> </tr> </table> </td> </tr> <!-- END MAIN CONTENT AREA --> </table> <!-- START FOOTER --> <div class='footer'> <table border='0' cellpadding='0' cellspacing='0'> <tr> <td class='content-block'> <span class='apple-link'>rtlearn.com | Feminism | Culture | Law | Feminists Rising</span> <br>Do not like these emails?
 <a href='{$local_url}/unsubscrib.php?email={$to}'>Unsubscribe</a>. </td> </tr> <tr> <td class='content-block powered-by'> Powered by <a href='https://rtlearn.com'>rtlearn</a>. </td> </tr> </table> </div> <!-- END FOOTER --> <!-- END CENTERED WHITE CONTAINER --> </div> </td> <td>&nbsp;</td> </tr> </table> </body></html>";
sendTO($massage,$to,$subject);
}
else
 {
  echo "<script> var i='{$local_url}/checklogin.php';window.location.href=i; </script>";
}
}
else
{
   echo "<script> var i='{$local_url}/checklogin.php';window.location.href=i; </script>";
}
?>
  </body>
</html>
