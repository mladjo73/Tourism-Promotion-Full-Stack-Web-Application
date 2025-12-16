<?php
include("connection.php");

if (isset($_GET['kamp_id'])) {
    $kamp_id = intval($_GET['kamp_id']);

    $query = "SELECT datum_dolaska, datum_odlaska 
              FROM rezervacije 
              WHERE kamp_id = $kamp_id";
    $result = mysqli_query($conn, $query);

    $datumi = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $datumi[] = $row;
    }

    header('Content-Type: application/json');
    echo json_encode($datumi);
}
?>