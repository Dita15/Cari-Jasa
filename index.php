<style>
html,
body {
  font-family: 'Open Sans', sans-serif;
  text-align: center;
}
* {
  margin: 0;
  padding: 0;
}
.intro {
  top: 0;
  background: #B0E0E6;
  min-height: 55vh;
  padding-top: 45vh;
  text-align: center;
  /*   line-height: 100vh; */
  /*   width:100%;
  height:96vh;
border:solid; */
}
.intro p {
	color : red;
}
.intro label {
	height:800px;
	min-height:800px;
	font-weight: bold;
}

.intro button {
	text-align: center;
	width: 20%;
	background-color: #FFF0DC;
}

nav ul {
  text-align: left;
  position: fixed;
  width: 100%;
  background-color: #000000;
}
nav ul {
  text-align: left;
  position: fixed;
  width: 100%;
  background-color: #000000;
}
nav ul li {
  display: inline-block;
  margin: 55px;
  margin-bottom: 15px;
  margin-top: 25px;
}
nav ul li a {
  color: #F5F5DC;
  text-decoration: none;
}

.contact {
  /*   height:800px; */
  /*   min-height:800px; */
  background: #FFF0F5;
  padding-bottom: auto;
}
.header {
  text-align:center;
}
.contact-details {
  display: inet_pton;
  font-weight: bold;
  margin: 35px 35px 35px 35px;
  list-style-type: none;
  border: 2px solid #90C695;
  border-radius: 100%;
  width: 100px;
  height: 100px;
  line-height: 100px;
  background: #e0ebe8;
  color: #008080;
  text-decoration: none;
}
.contact-details:hover {
  background: #E4F1FE;
  color: green;
}
footer {
  padding: 20px;
  background: #22313F;
  color: white;
  line-height: 40px;
}
footer a {
  color: white;
}
.welcome-section {
    text-align: center;
}
@media only screen and (max-width: 367px) {
  /*    #contact{
    min-height:1100px;
  } */
  .contact-details {
    border: 2px solid #90C695;
    border-radius: 0;
    width: 90px;
    height: 20px;
    padding: 10px;
    line-height: normal;
  }
}</style>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cari Jasa Lampung</title>
	
<nav>
  <ul id='navbar'>
    <li><a href="#welcome-section">Home</a></li>
    <li><a href="#contact">Contact</a></li>
  </ul>
</nav>

<div id="welcome-section" class="intro">
<?php
include 'configdbs.php';
?>

<div align='center'>
<form action="index.php" method="get">
  <table>
  <tbody>
	<h1>Selamat Datang di sistem pencari Jasa</h1>
	<p>Silahkan cari Jasa yang Anda inginkan Atau dapat bergabung dengan pilih "Daftar"</p>
	<br><label>Cari Jasa : </label><input type="text" name="cari"><input type="submit" value="Cari"></br>
</form>
</tbody>
</table>
</div>
 
<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>

<div align='center'>
<form action="masuk.html" method="get">
	<button type="submit">Masuk</button>
</form>
<form action="daftar.html" method="get">
	<button type="submit">Daftar</button>
</form>

</div>

</div>

<div id="contact" class="contact">
  <div class="header">
    <h1>Contacts</h1>
  </div>
  <a href="https://www.facebook.com/dita.nicely" target="_blank" class="contact-details">Facebook</a>
  <a href="tel:+62853-6802-0169" class="contact-details">Call me</a>
  <a id='profile-link' href="https://github.com/dita15" target="_blank" class="contact-details">GitHub</a>
  <a href="mailto:dita.isnayni15gmail.com" class="contact-details">Send a mail</a>
</div>
<footer>
  <p>&copy; Created for <a href="https://github.com/fitriani1021" target="_blank">GitHub</a></p>
</footer>
</body>