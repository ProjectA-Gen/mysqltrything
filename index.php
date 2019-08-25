<?php
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "1234";
 $db = "example";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>

<html>
<head>
<style>
body {background-color:#2C2F33;}
p {color:white;}

.gap-1 {width:0%;height:150px;}
.gap-2 {width:0%;height:30px;}
.gap-3 {width:0%;height:10px;}

.p-1 {font-size: 30px; margin: 0; padding: 0;}
.p-2 {font-size: 15px; margin: 0; padding: 0;}

@font-face {
        font-family: R;
        src: url(fonts/SourceSansPro-Regular.otf);
}
@font-face {
        font-family: B;
        src: url(fonts/SourceSansPro-Bold.otf);
}

.block-1 {
  background-color: #23272A;
  width:700px;
  height:180px;
  text-align: center;
  display: inline-block;
 }
 
textarea {
   resize: none;
   high: 100px;
   width: 300px;
   font: 10px;
   text-align: center;
}
</style>
</head>
<body>
<center>
<div class="gap-1"></div>
<div class="block-1">
<div class="gap-2"></div>
<p style="font-family:B;" class="p-1"><?php echo 'Your ' . htmlspecialchars($_GET["gen"]) . ' Account'; ?></p>
<br>
<textarea readonly rows="1" id="account"><?php echo '' . htmlspecialchars($_GET["account"]) . ''; ?></textarea>
<div class="gap-3"></div>
<p style="font-family:R;" class="p-2">The account is in a email:password format</p>
</div>

</center>
</body>
</html>
