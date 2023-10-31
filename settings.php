<?php

session_start();
$pagina = "Settings";
include_once('app/header.php');

if (!isset($_SESSION['loggedIn'])) {
    header("location: login");
}

if (isset($_POST['save_settings'])) {
    if (!isset($_POST['maintenance'])) {
        $_POST['maintenance'] = "off";
    }
    $data = [
        'onderhoud' => $_POST['maintenance'],
    ];
    $sql = "UPDATE onderhoud SET onderhoud = :onderhoud";
    $pdo->prepare($sql)->execute($data);
    $_SESSION['succes_message'] = "Settings have been changed.";
}

if (isset($_POST['vertrek_faciliteit'])) {
    if ($_POST['vertrek_faciliteit'] == $_POST['aankomst_faciliteit']) {
        $_SESSION['error_message'] = "The departure facility cannot be the same as the arrival facility.";
    } else {
        $data = [
            'vertrek_faciliteit' => $_POST['vertrek_faciliteit'],
            'aankomst_faciliteit' => $_POST['aankomst_faciliteit'],
            'vertrek_datum' => $_POST['vertrek_datum'],
            'aankomst_datum' => $_POST['aankomst_datum'],
            'raket_id' => $_POST['raket_id'],
            'vlucht_type' => $_POST['vlucht_type'],
        ];
        $sql = "INSERT INTO vluchten (vertrek_faciliteit, aankomst_faciliteit, vertrek_datum, aankomst_datum, raket_id, vlucht_type) 
    VALUES (:vertrek_faciliteit, :aankomst_faciliteit, :vertrek_datum, :aankomst_datum, :raket_id, :vlucht_type)";
        $pdo->prepare($sql)->execute($data);
        $_SESSION['succes_message'] = "The flight has been added.";
    }
}

$settings = $pdo->query("SELECT * FROM onderhoud");
foreach ($settings as $setting) {
    $onderhoud = $setting['onderhoud'];
}

?>

<div class="container mt-5">

    <ul class="nav nav-pills mb-3 d-flex justify-content-center" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Settings <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                    <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
                    <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
                </svg></button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Add flight <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-airplane" viewBox="0 0 16 16">
                    <path d="M6.428 1.151C6.708.591 7.213 0 8 0s1.292.592 1.572 1.151C9.861 1.73 10 2.431 10 3v3.691l5.17 2.585a1.5 1.5 0 0 1 .83 1.342V12a.5.5 0 0 1-.582.493l-5.507-.918-.375 2.253 1.318 1.318A.5.5 0 0 1 10.5 16h-5a.5.5 0 0 1-.354-.854l1.319-1.318-.376-2.253-5.507.918A.5.5 0 0 1 0 12v-1.382a1.5 1.5 0 0 1 .83-1.342L6 6.691V3c0-.568.14-1.271.428-1.849Zm.894.448C7.111 2.02 7 2.569 7 3v4a.5.5 0 0 1-.276.447l-5.448 2.724a.5.5 0 0 0-.276.447v.792l5.418-.903a.5.5 0 0 1 .575.41l.5 3a.5.5 0 0 1-.14.437L6.708 15h2.586l-.647-.646a.5.5 0 0 1-.14-.436l.5-3a.5.5 0 0 1 .576-.411L15 11.41v-.792a.5.5 0 0 0-.276-.447L9.276 7.447A.5.5 0 0 1 9 7V3c0-.432-.11-.979-.322-1.401C8.458 1.159 8.213 1 8 1c-.213 0-.458.158-.678.599Z" />
                </svg></button>
        </li>
    </ul>
    <?php if (isset($_SESSION['succes_message'])) { ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Succes!</strong> <?php echo $_SESSION['succes_message']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php }
    unset($_SESSION['succes_message']); ?>
    <?php if (isset($_SESSION['error_message'])) { ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> <?php echo $_SESSION['error_message']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php }
    unset($_SESSION['error_message']); ?>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
            <form method="POST" action="">
                <label class="form-check-label text-white" for="flexSwitchCheckDefault">Turn maintenance on</label>
                <div class="form-check form-switch">
                    <input class="form-check-input" name="maintenance" type="checkbox" role="switch" id="flexSwitchCheckDefault" <?php if ($onderhoud == "on") {
                                                                                                                                        echo "checked";
                                                                                                                                    } ?>>
                </div>
                <button type="submit" name="save_settings" class="btn btn-success w-100 mt-3">Save settings</button>
            </form>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
            <div id="add-flight" class="">
                <form id="addflight" method="POST" action="">
                    <label class="text-white" for="vertrek_faciliteit">Departure Facility</label>
                    <select class="form-select" name="vertrek_faciliteit" aria-label="vertrek_faciliteit">
                        <?php

                        $facilities = $pdo->query("SELECT * FROM faciliteit");
                        foreach ($facilities as $facility) {
                            $facility_id = $facility['id'];
                            $facility_name = $facility['naam'];
                            echo "<option value='$facility_id'>Facility ID: $facility_id / Facility Name: $facility_name</option>";
                        }

                        ?>
                    </select>
                    <label class="text-white mt-3" for="aankomst_faciliteit">Arrival Facility</label>
                    <select class="form-select" name="aankomst_faciliteit" aria-label="aankomst_faciliteit">
                        <?php

                        $facilities = $pdo->query("SELECT * FROM faciliteit");
                        foreach ($facilities as $facility) {
                            $facility_id = $facility['id'];
                            $facility_name = $facility['naam'];
                            echo "<option value='$facility_id'>Facility ID: $facility_id / Facility Name: $facility_name</option>";
                        }

                        ?>
                    </select>
                    <div class="form-group text-white mt-3 mb-3">
                        <label for="vertrek_datum">Time Departure</label>
                        <input type="datetime-local" class="form-control" id="vertrek_datum" name="vertrek_datum" required>
                    </div>
                    <div class="form-group text-white mb-3">
                        <label for="aankomst_datum">Time Arrival</label>
                        <input type="datetime-local" class="form-control" id="aankomst_datum" name="aankomst_datum" required>
                    </div>
                    <label class="text-white" for="raket_id">Rocket</label>
                    <select class="form-select" name="raket_id" aria-label="raket_id">
                        <?php

                        $rockets = $pdo->query("SELECT * FROM raket");
                        foreach ($rockets as $rocket) {
                            $rocket_id = $rocket['id'];
                            $rocket_usage = $rocket['verbruik'];
                            $rocket_passengers = $rocket['max_passagiers'];
                            echo "<option value='$rocket_id'>Rocket ID: $rocket_id / Rocket Usage: $rocket_usage CO₂ / Passengers: $rocket_passengers</option>";
                        }

                        ?>
                    </select>
                    <label class="text-white mt-3" for="vlucht_type">Flight Type:</label>
                    <select class="form-select" name="vlucht_type" aria-label="vlucht_type">
                        <option value="passenger">Passenger</option>
                        <option value="repair">Repair</option>
                    </select>
                    <button type="submit" name="add_flight" class="btn btn-success w-100 mt-3">Add flight</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<?php

include_once('app/footer.php');
?>