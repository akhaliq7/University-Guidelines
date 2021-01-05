<?php
include "../include/header.php";
$currentPage = 'courses'; 
include "../include/nav_pages.php";
?>

    <!-- courses -->

    <main id="statsContent">
        <section id="sec1">
            <!-- Dropdown list -->
            <h2>Program Statistics Page</h2>
            <label for="statistics">Choose Program Statistics</label>
            <select name="statistics" id="statistics" class="statistics">
                <option value="">--Please select one--</option>
                <option value="SE.TER.ENRL">Number of Male and Female Students in the UK </option>
                <option value="UIS.FOSEP.56.F800">Agriculture</option>
                <option value="UIS.FOSEP.56.F400">Business and Law</option>
                <option value="UIS.FOSEP.56.F140">Education</option>
                <option value="UIS.FOSEP.56.F700">Engineering, Manufacturing and Construction</option>
                <option value="UIS.FOSEP.56.F200">Humanities and Arts</option>
                <option value="UIS.FOSEP.56.F600">Information Technology</option>
                <option value="UIS.FOSEP.56.F500">Science and Maths</option>
                <option value="UIS.FOSEP.56.F300">Social Sciences and Journalism</option>
            </select>
        </section>
        <section id="sec2">
            <h2 id="statsResult">statistics</h2>
            <p id="statsDisplay"></p>
        </section>
        <div class="container">
            <canvas id="myBarChart"></canvas>
        </div>
        <div class="container2">
            <canvas id="myChart"></canvas>
        </div>
    </main>
    <script>
        var myChart =document.getElementById('myChart').getContext('2d');
        myChart.canvas.width = 300;
        myChart.canvas.height = 150;
        var myBarChart =document.getElementById('myChart').getContext('2d');
        myBarChart.canvas.width= 300;
        myBarChart.canvas.height= 150;
    </script>




<?php
include "../include/footer.php";
?>