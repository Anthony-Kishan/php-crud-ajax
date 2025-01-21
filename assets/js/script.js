$(document).ready(function () {

    function loadtable() {
        $.ajax({
            type: "POST",
            url: "./controller/show_data.php",
            success: function (data) {
                $("#view-data").html(data);
            }
        });
    }
    loadtable();


    $('#data-submit-button').on('click', function (e) {
        e.preventDefault();

        var f_name = $("#f_name").val();
        var l_name = $("#l_name").val();

        $.ajax({
            url: "index.php",
            type: "POST",
            data: { first_name: f_name, last_name: l_name },
            success: function (data) {
                if (data == 1) {
                    loadtable();
                } else {
                    alert("Data didn't insert: " + data);
                }
            }
        });
    });
});
