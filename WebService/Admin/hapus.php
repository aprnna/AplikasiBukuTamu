 <?php
  include '../koneksi.php';

  //Query 
  var_dump($_GET['id']);
  $sql = "DELETE FROM produk WHERE id_produk = " . $_GET["id"];
  if ($conn->query($sql) === TRUE) {

    header("Location: http://localhost/Matkul-Penerapan-Teknologi-Internet/WebService/cimahi");
  }
