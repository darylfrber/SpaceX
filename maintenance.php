<?php include_once('app/header.php'); ?>
<br>
<div class="container d-flex flex-column justify-content-center align-items-center vh-50">
<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
        <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
        <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
      </svg>
        <h1 class="mb-4">Under Maintenance</h1>
        <p class="mb-5">
We apologize for the inconvenience, but our rockets are currently undergoing maintenance and are temporarily unavailable. Our team is working diligently to complete the necessary repairs and ensure the rockets are back in service as soon as possible. We appreciate your understanding and patience during this maintenance period. Stay tuned for updates on our progress.</p>
<p>maintenace countdown <p> <div id="timer"></div>
  <p> what you could expect from the maintenace <p>
    <p> 1.  mechanical difficulties <p>
        <p class="mb-0">For any urgent matters, please contact us at <a href="mailto:169710@student.horizoncollege.nl">ronnie</a>.</p>
      </div>
      <script>
        var countdownDate = new Date("May 26, 2023 14:30:00").getTime();
        var timerElement = document.getElementById("timer");

        function updateTimer() {
            var now = new Date().getTime();
            var distance = countdownDate - now;

            if (distance < 0) {
                timerElement.innerHTML = "Countdown expired!";
            } else {
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                timerElement.innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";
            }
        }

        setInterval(updateTimer, 1000);
    </script>


<?php include_once('app/footer.php'); ?>