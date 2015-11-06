<?php
include 'baglan.php';
//select a database to work with
$selected = mysql_select_db("lib",$dbhandle)
  or die("Could not select examples");

//execute the SQL query and return records
$result = mysql_query("SELECT ad, sifre FROM login");

//fetch tha data from the database
while ($row = mysql_fetch_array($result)) {
  

  if(($_POST["ad"]==$row{'ad'}) and ($_POST['sifre']==$row{'sifre'}))
  {
   
    header("Location:yonet.php");
  }
  else
  {
  echo "<font color=#FF0033>Kullanici adi veya sifre yanlis.!<br>Otomatik olarak geri yonlendiriliyorsunuz.</font>";
  header('Refresh: 5; url=login.php');
  }
}
//close the connection
mysql_close($dbhandle);
?> 