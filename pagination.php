<?php
// Paging
include_once("conn.php");
// Rezultata po strani koliko zelimo da se prikaze
$rezultata_str=2;
// Rezultata u bazi
$sql="SELECT* FROM model";
$rezultata_baza = mysqli_query($db,$sql);
$rezultata_ukupno= mysqli_num_rows($rezultata_baza);
/*while ($row = mysqli_fetch_array($rezultata_baza)){
    $row['model_id'] . ' ' .$row['naziv'] . ' ' .$row['cena']. '<br>';
}*/
// Broj Stranica rezultata
$rezultata_postr = ceil($rezultata_ukupno/$rezultata_str);

// Koja Stranica je trenutno aktivna
if (!isset($_GET['strana'])) {
  $strana=0;
}else {
  $strana = $_GET['strana'];
}
//Limit prikaza podataka iz baze
$rezultat_upita = ($strana-1) * $rezultata_postr;
//Upit ka bazi i prikaz podataka
$sql = "SELECT * FROM model limit " . $rezultat_upita . ',' .$rezultata_postr;
$rezultata_baza = mysqli_query($db,$sql);
while ($row = mysqli_fetch_array($rezultata_baza)) {
  echo $row['model_id'] . ' ' .  $row['naziv']. ' ' . $row['cena'] . '<br>';
}
//kretanje po pejdzingu
for ($strana=1;$strana<=$rezultata_postr;$strana++) {
  echo'<a href=" pagination.php?strana= ' . $strana . '">' . $strana. '</a> ';
}
