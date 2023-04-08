<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>Randevular</h1>

<table id="customers">
  <tr>
    <th>Ad Soyad</th>
    <th>Telefon</th>
    <th>Email</th>
    <th>Randevu Tarihi</th>
    <th>Halı Saha</th>
  </tr>

  <?php
include("baglan.php");
$sec = "select * from rndvu_tab";
$sonuc = $baglan->query($sec);
if($sonuc->num_rows>0){
  while($cek=$sonuc->fetch_assoc()){
    echo "
    <tr>
        <td>".$cek['uye_ad']."</td>
        <td>".$cek['telefon']."</td>
        <td>".$cek['email']."</td>
        <td>".$cek['rantar']."</td>
         <td>".$cek['saha_no']."</td>
    </tr>
    ";
  }
}
else{
  echo "veri tababnına kayıtlı hiçbir veri bulunmamaktadır";
}
?>


</table>

</body>
</html>
