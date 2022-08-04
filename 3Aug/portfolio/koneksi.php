<?php
$conn = mysqli_connect("localhost", "root", "", "portfolio");
if (!$conn) {
  die("MySQL Error !<br>");
}
$Koneksi = mysqli_select_db($conn, "portfolio");
if (!$Koneksi) {
  die("DBase Error !");
}
