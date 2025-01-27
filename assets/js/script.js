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
    $(document).on('click', '#data-submit-button', function (e) {
        e.preventDefault();

        var f_name = $("#f_name").val();
        var l_name = $("#l_name").val();
        var contact_number = $("#contact_number").val();
        var address = $("#address").val();
        var phone_number_1 = $("#phone_number_1").val();
        var phone_number_2 = $("#phone_number_2").val();
        var category = $("#category").val();
        var warranty_guarantee_start = $("#warranty_guarantee_start").val();
        var warranty_guarantee_end = $("#warranty_guarantee_end").val();
        var product_quantity = $("#product_quantity").val();
        var product_price = $("#product_price").val();
        var note = $("#note").val();

        $.ajax({
            url: "index.php",
            type: "POST",
            data: {
                first_name: f_name, last_name: l_name, contact_number: contact_number, address: address, phone_number_1: phone_number_1, phone_number_2: phone_number_2, category: category, warranty_guarantee_start: warranty_guarantee_start, warranty_guarantee_end: warranty_guarantee_end, product_quantity: product_quantity, product_price: product_price, note: note,
            },
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
                    // loadtable();
                    window.location.reload();
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
        var contact_number = $("#update_contact_number").val();
        var address = $("#update_address").val();
        var phone_number_1 = $("#update_phone_number_1").val();
        var phone_number_2 = $("#update_phone_number_2").val();
        var category = $("#update_category").val();
        var warranty_guarantee_start = $("#update_warranty_guarantee_start").val();
        var warranty_guarantee_end = $("#update_warranty_guarantee_end").val();
        var product_quantity = $("#update_product_quantity").val();
        var product_price = $("#update_product_price").val();
        var note = $("#update_note").val();

        $.ajax({
            type: "POST",
            url: "./controller/update_data.php",
            data: { id: stuID, first_name: stuFName, last_name: stuLName, contact_number: contact_number, address: address, phone_number_1: phone_number_1, phone_number_2: phone_number_2, category: category, warranty_guarantee_start: warranty_guarantee_start, warranty_guarantee_end: warranty_guarantee_end, product_quantity: product_quantity, product_price: product_price, note: note },
            success: function (data) {
                if (data == 1) {
                    loadtable();
                } else {
                    alert("Can't Update record" + data);
                }
            }
        });
    })


    // ADD CUSTOMER DATA
    $(document).on("click", "#add_cust_btn", function () {
        $('#add-cust-modal').fadeIn();
        $.ajax({
            type: "POST",
            url: "./controller/add_customer.php",
            data: { add_cust: 1 },
            success: function (data) {
                $('#add-cust-modal-content').html(data);

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


    // LIVE SEARCH
    $("#search").on("keyup", function () {
        var search_term = $(this).val();

        $.ajax({
            type: "POST",
            url: "./controller/live_search.php",
            data: { search: search_term },
            success: function (data) {
                $("#view-data").html(data);
            }
        });
    });
});
