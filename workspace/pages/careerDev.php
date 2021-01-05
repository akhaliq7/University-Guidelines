<?php
include "../php_database/connect.php"; //file connects to a database
include "../php_database/functions.php"; //file calls the php functions
$currentPage = 'careerDev'; 
include "../include/header.php";
include "../include/nav_pages.php";
?>

<!-- career development -->
<?php insertJobs(); ?>

<?php
if (isset($_POST['search'])){
    $q = $_POST["search"];
}
else{
    $q = ALL;
}


?>

<main id="jobsContent">

    <h2>Job Search</h2>
    <p id="note">Frequently Searched!</p>
    <?php displayJobs(); ?>
    <div id="jobSearch">
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
            <input type="text" id="jobField" placeholder = "Search.." name="search">
            <button type="submit" id="searchJobs" name="submit">Search</button>
        </form>
    </div>

    <h2>Results</h2>
    <p id ="jobInfo"></p>

</main>



<?php
include "../include/footer.php";
?>


