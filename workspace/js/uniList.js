$(function () {
    $.ajax({
        url: "universityList.json",
        type: "get",
        datatype: "json",
        success: display
    });

    function display(data) {
        console.log(data);
        var arrayL = data.length;
        var ul = $('<ul />');
        for (var i = 0; i < arrayL; i++) {
            var uniTitle = $('<li />', {
                text: data[i].name,
                href: data[i].web_pages
            });

            // var uniUrl = $('<a />',{
            // });
            ul.append(uniTitle);
            $("#showUniList").append(ul);
        }

    }
});