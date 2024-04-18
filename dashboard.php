<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  include ('tampilan/header.php');
  include ('tampilan/sidebar.php');
  include ('tampilan/footer.php');
?>
 <!-- Main Content -->
 <html>

<head>

<script>

function getCookie(c_nama)
{
var i,x,y,ARRcookies=document.cookie.split(";");
for (i=0;i<ARRcookies.length;i++)
  {
  x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
  y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
  x=x.replace(/^\s+|\s+$/g,"");
  if (x==c_nama)
    {
    return unescape(y);
    }
  }
}

function setCookie(c_nama,value,exdays)
{
var exdate=new Date();
exdate.setDate(exdate.getDate() + exdays);
var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
document.cookie=c_nama + "=" + c_value;
}

function checkCookie()
{
var nama=getCookie("nama");
if (nama!=null && nama!="")
  {
  alert("Hai, " + nama + "\n\nSelamat Datang di Website Saya");
  }
else
  {
  nama=prompt("Silahkan, Tulis Nama Anda Terlebih Dahulu :","");
  if (nama!=null && nama!="")
    {
    setCookie("nama",nama,365);
    }
  }
}

</script>

</head>
 
<body>

<body onload="checkCookie()">

</body>

</html>