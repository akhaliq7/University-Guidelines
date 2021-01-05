/*
This page is for the careerdev page which allows users to send the search term to the
lmiforall databank api and return the data we are looking for.
- The first area is an ajax call to the api.
- The second function is to output the data into the paragraph tag with the id jobInfo

*/
$(function () {

    // var jobs = jobField.val();

    $.ajax({
        url: "https://api.lmiforall.org.uk/api/v1/soc/search?q=<?php echo $q; ?>",
        type: "get",
        datatype: "jsonp",
        success: displayJobs
    });


    function displayJobs(data) {
        console.log(data);

        var html = '';
        $.each(data, function (index, entry) {
            html += '<div>';
            html += '<h3>' + entry.title + '</h3>';
            html += '<div class="descr">' + entry.description + '</div>';
            html += '<div class="qualifications">';
            html += entry.qualifications;
            html += '</div>';
            html += '</div>';
        });
        $('#jobInfo').html(html);
    }//func displayjobs (Sub Function)


});//function getJobs (Main Function)
