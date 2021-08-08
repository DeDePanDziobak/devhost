<?php

$kod = $_POST['kod'];

if (strlen((trim($kod) < 0))) {
  echo "Nie podales zadnego kodu";
}
else // else
{
  //========================tworzenie plikow css========================
  $i = rand(0,10000000000);
  echo "twoj plik znajduje sie pod linkiem https://dev-host.pl/pliki/".$i.".css";
  file_put_contents('pliki/'.$i.'.css', $kod);
}

?>