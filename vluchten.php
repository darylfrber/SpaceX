<?php



$pagina = "Flights";
include_once('app/header.php');

$settings = $pdo->query("SELECT * FROM onderhoud");
foreach ($settings as $setting) {
    $onderhoud = $setting['onderhoud'];
}

if ($onderhoud == "on") {
    header('location: maintenance');
}

?>

<style>
    .table td {
        width: 50px;
        height: 75px;
        cursor: pointer;
        /* background-color: #fff; */
        border: solid #495057;
    }

    #current-month-year {
        margin-top: 20px;
    }

    .btn {
        margin: 5px;
    }

    td,
    tr {
        color: #fff;
        text-align: center;
    }

    td:hover {
        background-color: #5b5b5b7a;
    }

    th {
        background-color: #d42a2a !important;
    }
</style>

<body>
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1 id="current-month-year" class=""></h1>
            <div class="text-center">
                <button id="previous-month-btn" class="btn btn-light">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5ZM10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5Z" />
                    </svg>
                    Previous Month
                </button>
                <button id="next-month-btn" class="btn btn-light">
                    Next Month
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8Zm-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5Z" />
                    </svg>
                </button>
            </div>
        </div>
        <a href="/settings" style="float: right;" id="next-month-btn" class="btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-plus" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 5.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 .5-.5z" />
                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
            </svg>
            Add Flight (crew)
        </a>
        <table class="table rounded">
            <thead>
                <tr>
                    <th>Mon</th>
                    <th>Tue</th>
                    <th>Wed</th>
                    <th>Thu</th>
                    <th>Fri</th>
                    <th>Sat</th>
                    <th>Sun</th>
                </tr>
            </thead>
            <tbody id="calendar-body">
            </tbody>
        </table>
        <h3 id="geselecteerde-dag" class="text-center text-white mb-3"></h3>
        <div id="vluchten">
        </div>
        <template class="d-flex flex-row" id="vlucht-info">
            <div class="border p-3 mb-3 rounded" id="vlucht-box">
                <p id="vlucht-id"></p>
                <p id="vlucht-passagiers"></p>
                <p id="vlucht-vertrek_datum"></p>
                <p id="vlucht-aankomst_datum"></p>
                <p id="vlucht-type"></p>
                <p id="vlucht-vertrek_faciliteit"></p>
                <p id="vlucht-aankomst_faciliteit"></p>
            </div>
        </template>
    </div>


    <script src="javascript/calender.js"></script>

    <?php

    include_once('app/footer.php');
    ?>