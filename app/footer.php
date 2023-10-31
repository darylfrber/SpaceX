
<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <style>
        .ceo-image {
            display: none;
            max-width: 500px;
            max-height: 500px;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 9999;
        }

        .ceo-link:hover .ceo-image {
            display: block;
        }
    </style>
<body>
    <div class="container py-5">

        <footer class="">
            <div class="row">
                <hr>
                <div class="col text-center"><p class="fw-bold py-2"><a class="link-underline link-underline-opacity-0"
                            href="https://www.spacex.com/">Company information</a></p></div>
                <div class="col text-center">
                    <p class="fw-bold py-2">
                        <a class="link-underline link-underline-opacity-0 ceo-link" href="#" onmouseover="playAudio()">
                            <img src="images\elon.png" alt="Elon Musk" class="ceo-image">
                            Our CEO
                        </a>
                    </p>
                </div>

            </div>
            <div class="row">
                <div class="col text-center py-3">2023 © Bit-Academy & SpaceX</div>
                <div class="col text-center "><img src="./images/spaceXlogo.png" alt="SpaceX" height="64px" style="position: relative; left: 51px;" /></div>
                <div class="col text-center py-3">Team Ronnie</div>
            </div>
        </footer>
    </div>

    <script>
        function playAudio() {
            var audio = new Audio('audio/this-is-elon-musk.mp3');
            audio.play();
        }
    </script>
    <script src="app/quoteScript.js"></script>
</body>

</html>
