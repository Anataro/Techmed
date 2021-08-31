<?php

require("connect.php");
$firstName = $_POST['imie'];
$secondName = $_POST['nazwisko'];
$pesel = $_POST['pesel'];
$nip = $_POST['nip'];

$sql = "INSERT INTO pacjent ( id, imie, nazwisko, pesel, nip) VALUES ('','$firstName','$secondName','$pesel','$nip')";

$resul = $conn->query($sql);

echo "<br> Nowy rekord zostal utworzony";


?>