<?php
include "../include/header.php";
$currentPage = 'universityList';
include "../include/nav_pages.php";
?>



    <main id="uniContent">
        <h2>University List Page</h2>

        <div id ="showUniList"></div>


    </main>
    <aside>
        <figure>
            <img class="UniPageImages" src="../images/pic1.jpg" alt="music orchestra" />
            <figcaption>Fig.1 - Music orchestra</figcaption>
        </figure>
        <figure>
            <img class="UniPageImages" src="../images/pic2.jpg" alt="sitting area"/>
            <figcaption>Fig.2 - Students socialising outside the university.</figcaption>
        </figure>
        <ul id ="TopTen">
            <li><h2>Top 10 Universities in the UK</h2></li>
            <li>1. University of Cambridge</li>
            <li>2. University of Oxford</li>
            <li>3. London School of Economics and Political Science</li>
            <li>4. Imperial College London</li>
            <li>5. University of St Andrews</li>
            <li>6. Durham University</li>
            <li>7. Loughborough University</li>
            <li>8. Lancaster University</li>
            <li>9. University of Warwick</li>
            <li>10. University College London</li>
        </ul>
        <ul id ="Top11">
            <li><h2>Top 11 Universities in Scotland</h2></li>
            <li>1. University of St Andrews</li>
            <li>2. Edinburgh University</li>
            <li>3. Glasgow University</li>
            <li>4. Aberdeen University</li>
            <li>5. Dundee University</li>
            <li>6. Heriot-Watt University</li>
            <li>7. Strathclyde University</li>
            <li>8. Stirling University</li>
            <li>9. Queen Margaret University</li>
            <li>10. Robert Gordon University</li>
            <li>11. Glasgow Caledonian University</li>
        </ul>
    </aside>

<?php
include "../include/footer.php";
?>