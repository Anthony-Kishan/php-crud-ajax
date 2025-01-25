$(document).ready(function () {
    // VIEW DATA
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

    // INSERT DATA
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

    // DELETE DATA
    $(document).on("click", ".delete-btn", function () {
        var studentID = $(this).data("id");
        var element = this;

        $.ajax({
            type: "POST",
            url: "./controller/delete_data.php",
            data: { id: studentID },
            success: function (data) {
                if (data == 1) {
                    $(element).closest("tr").fadeOut();
                } else {
                    alert("Can't Delete record");
                }
            }
        });
    })


    // SHOW UPDATE MODAL
    $(document).on("click", ".update-btn", function () {
        $('#update-modal').fadeIn();
        var studentID = $(this).data("id");

        $.ajax({
            type: "POST",
            url: "./controller/update_modal.php",
            data: { id: studentID },
            success: function (data) {
                $('#modal-content').html(data);
            }
        });
    })


    // UPDATE DATA
    $(document).on("click", "#save_changes", function () {
        var stuID = $("#save_changes_id").val();
        var stuFName = $("#update_f_name").val();
        var stuLName = $("#update_l_name").val();

        $.ajax({
            type: "POST",
            url: "./controller/update_data.php",
            data: { id: stuID, first_name: stuFName, last_name: stuLName },
            success: function (data) {
                if (data == 1) {
                    loadtable();
                    $('#update-modal').fadeOut();
                } else {
                    alert("Can't Update record" + data);
                }
            }
        });
    })



    // SHOW VIEW MODAL
    $(document).on("click", ".view-btn", function () {
        $('#view-modal').fadeIn();
        var studentID = $(this).data("id");

        $.ajax({
            type: "POST",
            url: "./controller/view_modal.php",
            data: { id: studentID },
            success: function (data) {
                $('#view-modal-content').html(data);
            }
        });
    })


    // CLOSE THE MODAL
    $(document).on("click", ".close-btn", function () {
        $('#view-modal').fadeOut();
        $('#update-modal').fadeOut();
    });



    // EXPORT CSV FILE
    $(document).on("click", ".csv-btn", function () {
        $.ajax({
            type: "POST",
            url: "./controller/csv_export.php",
            data: { csv: 1 },
            success: function (data) {
                window.location.href = './controller/csv_export.php';
            }
        });
    });


    // EXPORT XLSX FILE
    $(document).on("click", ".xlsx-btn", function () {
        $.ajax({
            type: "POST",
            url: "./controller/xlsx_export.php",
            data: { xlsx: 1 },
            success: function (data) {
                window.location.href = './controller/xlsx_export.php';
            }
        });
    })

    // EXPORT PDF FILE
    $(document).on("click", ".pdf-btn", function () {
        $.ajax({
            type: "POST",
            url: "./controller/pdf_export.php",
            data: { pdf: 1 },
            success: function (data) {
                window.location.href = './controller/pdf_export.php';

            }
        });
    })
});
