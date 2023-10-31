<?php

$pagina = "Home";
include_once('app/header.php');

?>

<style>
    .list-group-item:first-child {
        border-top-left-radius: unset;
        border-top-right-radius: unset;
    }
</style>


<div id="carouselCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-pause="false">
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
            <img src="images/blueprints.png" class="d-block w-100" height="400" alt="blueprints" />
            <div class="carousel-caption d-none d-md-block bg-white bg-opacity-75">
                <h5>Blueprint of the rocket</h5>
                <p>In this blueprint you see how the rocket parts look</p>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="10000">
            <img src="images/LiftOff.png" class="d-block w-100" height="400" alt="LiftOff" />
            <div class="carousel-caption d-none d-md-block bg-white bg-opacity-50">
                <h5>Rocket launch</h5>
                <p>Here you see the rocket in live action</p>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="10000">
            <img src="images/secretpope.png" class="d-block w-100" height="400" alt="elon" />
            <div class="carousel-caption d-none d-md-block bg-white bg-opacity-50">
                <h5>Worker of the month</h5>
                <p>This is our worker of the month Pope Franciscus</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselCaptions" data-bs-slide="prev">
        <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff' class="h-25 w-25" style="filter: invert(1);">
            <path d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z' />
        </svg>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselCaptions" data-bs-slide="next">
        <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff' class="h-25 w-25" style="filter: invert(1);">
            <path d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z' />
        </svg>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- Primary information -->
<div class="container text-center pt-3">
    <div class="row">
        <div class="col-md-4 col-sm-12">
            <h4 class="fw-bold">Travel</h4>
            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-1-circle-fill" viewBox="0 0 16 16">
                <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0ZM2.04 4.326c.325 1.329 2.532 2.54 3.717 3.19.48.263.793.434.743.484-.08.08-.162.158-.242.234-.416.396-.787.749-.758 1.266.035.634.618.824 1.214 1.017.577.188 1.168.38 1.286.983.082.417-.075.988-.22 1.52-.215.782-.406 1.48.22 1.48 1.5-.5 3.798-3.186 4-5 .138-1.243-2-2-3.5-2.5-.478-.16-.755.081-.99.284-.172.15-.322.279-.51.216-.445-.148-2.5-2-1.5-2.5.78-.39.952-.171 1.227.182.078.099.163.208.273.318.609.304.662-.132.723-.633.039-.322.081-.671.277-.867.434-.434 1.265-.791 2.028-1.12.712-.306 1.365-.587 1.579-.88A7 7 0 1 1 2.04 4.327Z" />
            </svg>
            <hr />
            In an era where technology and innovation are transforming our daily lives,
            people dream of faster and more efficient ways of travel. Commercial rocket flights offer a promising solution.
            In this article, we explore how this revolutionary form of transportation has the potential to transform our way of traveling on Earth.

        </div>
        <div class="col-md-4 col-sm-12">
            <h4 class="fw-bold">Technology</h4>
            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-2-square-fill" viewBox="0 0 16 16">
                <path d="M12.496 8a4.491 4.491 0 0 1-1.703 3.526L9.497 8.5l2.959-1.11c.027.2.04.403.04.61Z" />
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-1 0a7 7 0 1 0-13.202 3.249l1.988-1.657a4.5 4.5 0 0 1 7.537-4.623L7.497 6.5l1 2.5 1.333 3.11c-.56.251-1.18.39-1.833.39a4.49 4.49 0 0 1-1.592-.29L4.747 14.2A7 7 0 0 0 15 8Zm-8.295.139a.25.25 0 0 0-.288-.376l-1.5.5.159.474.808-.27-.595.894a.25.25 0 0 0 .287.376l.808-.27-.595.894a.25.25 0 0 0 .287.376l1.5-.5-.159-.474-.808.27.596-.894a.25.25 0 0 0-.288-.376l-.808.27.596-.894Z" />
            </svg>
            <hr />
            Safety and reliability have improved through stringent protocols,
            testing, and reusable rocket technology. The environmental benefits of rockets, with cleaner fuel options and the potential for offshore spaceports,
            are also discussed. However, challenges such as infrastructure development and passenger safety remain to be addressed.
            The future of global mobility holds promises of efficient business travel and expanded tourism opportunities. In conclusion,
            commercial rocket travel has the potential to reshape the world by offering unprecedented speed and efficiency in intercontinental travel.
        </div>
        <div class="col-md-4 col-sm-12">
            <h4 class="fw-bold">The Future</h4>
            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-airplane-engines" viewBox="0 0 16 16">
                <path d="M9.752 6.193c.599.6 1.73.437 2.528-.362.798-.799.96-1.932.362-2.531-.599-.6-1.73-.438-2.528.361-.798.8-.96 1.933-.362 2.532Z" />
                <path d="M15.811 3.312c-.363 1.534-1.334 3.626-3.64 6.218l-.24 2.408a2.56 2.56 0 0 1-.732 1.526L8.817 15.85a.51.51 0 0 1-.867-.434l.27-1.899c.04-.28-.013-.593-.131-.956a9.42 9.42 0 0 0-.249-.657l-.082-.202c-.815-.197-1.578-.662-2.191-1.277-.614-.615-1.079-1.379-1.275-2.195l-.203-.083a9.556 9.556 0 0 0-.655-.248c-.363-.119-.675-.172-.955-.132l-1.896.27A.51.51 0 0 1 .15 7.17l2.382-2.386c.41-.41.947-.67 1.524-.734h.006l2.4-.238C9.005 1.55 11.087.582 12.623.208c.89-.217 1.59-.232 2.08-.188.244.023.435.06.57.093.067.017.12.033.16.045.184.06.279.13.351.295l.029.073a3.475 3.475 0 0 1 .157.721c.055.485.051 1.178-.159 2.065Zm-4.828 7.475.04-.04-.107 1.081a1.536 1.536 0 0 1-.44.913l-1.298 1.3.054-.38c.072-.506-.034-.993-.172-1.418a8.548 8.548 0 0 0-.164-.45c.738-.065 1.462-.38 2.087-1.006ZM5.205 5c-.625.626-.94 1.351-1.004 2.09a8.497 8.497 0 0 0-.45-.164c-.424-.138-.91-.244-1.416-.172l-.38.054 1.3-1.3c.245-.246.566-.401.91-.44l1.08-.107-.04.039Zm9.406-3.961c-.38-.034-.967-.027-1.746.163-1.558.38-3.917 1.496-6.937 4.521-.62.62-.799 1.34-.687 2.051.107.676.483 1.362 1.048 1.928.564.565 1.25.941 1.924 1.049.71.112 1.429-.067 2.048-.688 3.079-3.083 4.192-5.444 4.556-6.987.183-.771.18-1.345.138-1.713a2.835 2.835 0 0 0-.045-.283 3.078 3.078 0 0 0-.3-.041Z" />
                <path d="M7.009 12.139a7.632 7.632 0 0 1-1.804-1.352A7.568 7.568 0 0 1 3.794 8.86c-1.102.992-1.965 5.054-1.839 5.18.125.126 3.936-.896 5.054-1.902Z" />
            </svg>
            <hr />
            The future of commercial rocket travel around the world holds immense potential and excitement.
            As space technology continues to advance, we can envision a world where intercontinental travel becomes faster,
            more efficient, and accessible to a broader audience.Commercial space companies are investing in the development of reusable rockets,
            reducing costs and opening up new possibilities for space tourism and global mobility.
            With rockets capable of reaching speeds several times faster than airplanes, long-haul journeys could be completed in a fraction of the time.
            Imagine traveling from one side of the globe to another in just a few hours instead of enduring lengthy flights.
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="card-header">
                    Recent flights
                </div>
                <ul class="list-group">
                    <?php

                    $upcoming_flights = $pdo->query("SELECT * FROM vluchten WHERE vertrek_datum <= NOW() ORDER BY vertrek_datum DESC LIMIT 3");
                    foreach ($upcoming_flights as $u_flight) {
                        // Plaats van aankomst
                        $auflight = $u_flight['aankomst_faciliteit'];
                        $a_u_flights = $pdo->query("SELECT * FROM faciliteit WHERE id = $auflight");
                        foreach ($a_u_flights as $a_u_flight) {
                            $auflight = $a_u_flight['naam'];
                        }

                        // Plaats van vertrek
                        $uaflight = $u_flight['vertrek_faciliteit'];
                        $u_a_flights = $pdo->query("SELECT * FROM faciliteit WHERE id = $uaflight");
                        foreach ($u_a_flights as $u_a_flight) {
                            $uaflight = $u_a_flight['naam'];
                        }
                    ?>

                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">From <?php echo $uaflight; ?></div>
                                Departing at: <?php echo substr($u_flight['vertrek_datum'], 0, -3);; ?>
                            </div>
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Towards <?php echo $auflight; ?></div>
                                Arriving at: <?php echo substr($u_flight['aankomst_datum'], 0, -3);; ?>
                            </div>
                            <span class="badge bg-primary rounded-pill"><?php echo ucfirst($u_flight['vlucht_type']); ?></span>
                        </li>

                    <?php
                    }

                    ?>
                </ul>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="card-header">
                    Upcoming flights
                </div>
                <ul class="list-group">
                    <?php

                    $upcoming_flights = $pdo->query("SELECT * FROM vluchten WHERE vertrek_datum >= NOW() ORDER BY vertrek_datum ASC LIMIT 3");
                    foreach ($upcoming_flights as $u_flight) {
                        // Plaats van aankomst
                        $auflight = $u_flight['aankomst_faciliteit'];
                        $a_u_flights = $pdo->query("SELECT * FROM faciliteit WHERE id = $auflight");
                        foreach ($a_u_flights as $a_u_flight) {
                            $auflight = $a_u_flight['naam'];
                        }

                        // Plaats van vertrek
                        $uaflight = $u_flight['vertrek_faciliteit'];
                        $u_a_flights = $pdo->query("SELECT * FROM faciliteit WHERE id = $uaflight");
                        foreach ($u_a_flights as $u_a_flight) {
                            $uaflight = $u_a_flight['naam'];
                        }
                    ?>

                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">From <?php echo $uaflight; ?></div>
                                Departing at: <?php echo substr($u_flight['vertrek_datum'], 0, -3);; ?>
                            </div>
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Towards <?php echo $auflight; ?></div>
                                Arriving at: <?php echo substr($u_flight['aankomst_datum'], 0, -3);; ?>
                            </div>
                            <span class="badge bg-primary rounded-pill"><?php echo ucfirst($u_flight['vlucht_type']); ?></span>
                        </li>

                    <?php
                    }

                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php

include_once('app/footer.php');
?>