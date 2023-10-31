<?php

include_once 'config.php';

if (isset($_POST['teller'])) {
    $data = [
        'passagiers' => $_POST['teller'],
        'id' => $_POST['id'],
    ];
    $sql = "UPDATE vluchten SET passagiers = :passagiers WHERE id = :id";
    $pdo->prepare($sql)->execute($data);
    exit();
}

$date = $_GET['date'];
$vluchten = $pdo->query("SELECT * FROM vluchten WHERE DATE(vertrek_datum) = '$date'");
$result = [];
foreach ($vluchten as $vlucht) {
    $raket = $pdo->prepare("SELECT * FROM raket WHERE id=:id");
    $raket->execute(['id' => $vlucht['raket_id']]);
    $raket = $raket->fetch();

    $vertrek_faciliteit = $pdo->prepare("SELECT * FROM faciliteit WHERE id=:id");
    $vertrek_faciliteit->execute(['id' => $vlucht['vertrek_faciliteit']]);
    $vertrek_faciliteit = $vertrek_faciliteit->fetch();

    $aankomst_faciliteit = $pdo->prepare("SELECT * FROM faciliteit WHERE id=:id");
    $aankomst_faciliteit->execute(['id' => $vlucht['aankomst_faciliteit']]);
    $aankomst_faciliteit = $aankomst_faciliteit->fetch();

    $result[] = [
        'id' => $vlucht['id'],
        'passagiers' => $vlucht['passagiers'],
        'vertrek_datum' => $vlucht['vertrek_datum'],
        'aankomst_datum' => $vlucht['aankomst_datum'],
        'vertrek_faciliteit' => $vertrek_faciliteit['naam'],
        'aankomst_faciliteit' => $aankomst_faciliteit['naam'],
        'vlucht_type' => $vlucht['vlucht_type'],
        'raket' => [
            'id' => $raket['id'],
            'max_passagiers' => $raket['max_passagiers']
        ]
    ];
}

header("Content-Type: application/json");
echo json_encode($result);
exit();
