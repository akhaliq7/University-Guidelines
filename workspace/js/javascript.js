/*
  This javascript file first takes in the value of the dropdown option field and takes its value
  e.g. "UIS.FOSEP.56.F600" and puts that value into the  variable stat it then uses the .change funtion
  so when a option selected is changed then then the value in the variable also changes. then this value is inserted
  into the url in the ajax function and then the returned data is displayed into the table
  then a bar graph and then a line chart, using the chart.js library

  in this file i then have the burger icon for the mobile device navigation to hide the navigation elements
  and only display once the burger icon is clicked on.
*/
//document . ready function
$(function () {
    $('#statistics').change(function () {
        //if the values is empty like the default value then display alertbox
        if ($(this).val() == "") {
            alert('Please select a program from this menu.');
        }
        var stat = $('#statistics :selected').val();
        //ajax function, values url, type, datatype, function outputting the values
        $.ajax({
            url: "https://api.worldbank.org/v2/countries/GBR/indicators/" + stat + "?date=2009:2015&format=json",
            type: "get",
            datatype: "jsonp",
            success: function (data) {
                console.log(data);
                console.log(data[1][0].value);
                //jquery to addclass to table and create table element.
                var table = $("<table />").addClass('statsTable');
                //table elements created using jquery 
                var th1 = $("<th />").text('Year');
                var th2 = $("<th />").text('Value');
                var tr = $("<tr />");
                tr.append(th1).append(th2);
                table.append(tr);
                //charts.js arrays for bar graph and line chart
                var label = [];
                var number = [];
                //loop through data element array and return each value based on the index of the multi dimensional array
                for (var i = 6; i > -1; i--) {
                    var Title = $('<p />', {
                        text: data[1][i].indicator.value
                    });
                    var row = $("<tr />");
                    var date = data[1][i].date;
                    var value = data[1][i].value;
                    //insert data into charts variables
                    label.push(data[1][i].date);
                    number.push(data[1][i].value);


                    var year = $("<td />", {
                        text: date
                    });
                    var value = $("<td />", {
                        text: value
                    });
                    row.append(year).append(value);
                    table.append(row);
                }//end for loop
                var line = $('#myChart');

                var bar = $('#myBarChart');
                //create new instance of chart, line chart
                var graph = new Chart(line, {
                    type: 'line',
                    data: {
                        labels: label,
                        datasets: [{
                            label: "Line Graph",
                            data: number,
                            borderColor: '#A491D3',
                            borderWidth: 3
                        }],
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Number/Percentage'
                                }
                            }],
                            xAxes: [{
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Year'
                                }
                            }]
                        },
                        legend: {
                            display: false
                        }
                    }


                });
                //create new instance of bar chart
                var graphi = new Chart(bar, {
                    type: 'bar',
                    data: {
                        labels: label,
                        datasets: [{
                            label: "Bar Chart",
                            data: number,
                            backgroundColor: [
                                '#D3CFB6',
                                '#889696',
                                '#FCF6B5',
                                '#FFB7A5',
                                '#576772',
                                '#D4F2D2',
                                '#BEB7DF'
                            ],
                            borderWidth: 1,
                            borderColor: '#000'
                        }]
                    },
                    layout: {
                        padding: {
                            left: 50,
                            right: 0,
                            bottom: 0,
                            top: 0
                        }
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Number/Percentage'
                                }
                            }],
                            xAxes: [{
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Year'
                                }
                            }]
                        },
                        legend: {
                            display: false
                        }
                    },

                });
                $('#myBarChart').append(graphi);
                $('#myChart').append(graph);
                $("#sec2").html(Title).append(table);
            }
        });//ajax request

    });//change event hanfler

//burger icon for mobile responsive navigation
    $(".b").on("click", function () {
        $("#nav ul").toggleClass("open");
    });//burger menu function


});//end function ready

