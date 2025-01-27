<?php
include '../database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["id"])) {
    $id = $_POST["id"];

    $show_datasql = "SELECT * FROM `students` WHERE id = '$id'";

    $result = mysqli_query($conn, $show_datasql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <form>
                <!-- Customer Information -->
                <div class="row g-4 mb-4">
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">
                            <i class="fas fa-user text-primary me-2"></i>
                            First Name
                        </label>
                        <input type="text" class="form-control form-control-lg" id='update_f_name' name='update_f_name'
                            value='<?= $row["first_name"] ?>' required>
                    </div>
                    <input type='text' id='save_changes_id' name='update_f_name' hidden class='form-control'
                        value='<?= $row["id"] ?>'>

                    <div class="col-md-6">
                        <label class="form-label fw-semibold">
                            <i class="fas fa-user text-primary me-2"></i>
                            Last Name
                        </label>
                        <input type="text" class="form-control form-control-lg" id='update_l_name' name='update_l_name'
                            value='<?= $row["last_name"] ?>' required>
                    </div>
                </div>

                <div class="col-12">
                    <label class="form-label fw-semibold">
                        <i class="fas fa-phone text-primary me-2"></i>
                        Contact Number
                    </label>
                    <input type="tel" class="form-control form-control-lg" id='update_contact_number' name='update_contact_number'
                        value='<?= $row["contact_number"] ?>' required>
                </div>

                <div class="col-12">
                    <label class="form-label fw-semibold">
                        <i class="fas fa-location-dot text-primary me-2"></i>
                        Address
                    </label>
                    <textarea class="form-control form-control-lg" id='update_address' name='update_address' rows="3"
                        required><?= $row["address"] ?></textarea>
                </div>
                <hr>

                <!-- Product Information -->
                <div class="row g-4 mb-4">
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">
                            <i class="fas fa-phone-square text-primary me-2"></i>
                            Phone Number 1
                        </label>
                        <input type="tel" class="form-control form-control-lg" id='update_phone_number_1'
                            name='update_phone_number_1' value='<?= $row["phone_number_1"] ?>'>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">
                            <i class="fas fa-phone-square text-primary me-2"></i>
                            Phone Number 2
                        </label>
                        <input type="tel" class="form-control form-control-lg" id='update_phone_number_2'
                            name='update_phone_number_2' value='<?= $row["phone_number_2"] ?>'>
                    </div>
                </div>

                <hr>

                <!-- Warranty Information -->
                <div class="row g-4 mb-4">
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">
                            <i class="fas fa-calendar text-primary me-2"></i>
                            Warranty Guarantee Start
                        </label>
                        <input type="date" class="form-control form-control-lg" id='update_warranty_guarantee_start'
                            value='update_warranty_guarantee_start' value='<?= $row["warranty_guarantee_start"] ?>' required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">
                            <i class="fas fa-calendar text-primary me-2"></i>
                            Warranty Guarantee End
                        </label>
                        <input type="date" class="form-control form-control-lg" id='update_warranty_guarantee_end'
                            name='update_warranty_guarantee_end' value='<?= $row["warranty_guarantee_end"] ?>' required>
                    </div>
                </div>


                <!-- Product Information -->
                <div class="row g-4 mb-4">
                    <div class="col-md-4">
                        <label class="form-label fw-semibold">
                            <i class="fas fa-tags text-primary me-2"></i>
                            Category
                        </label>
                        <select class="form-select form-select-lg" id="update_category" name="update_category"
                            value='<?= $row["category"] ?>'>
                            <option value="" selected disabled>Select One</option>
                            <option value="electronics">Electronics</option>
                            <option value="furniture">Furniture</option>
                            <option value="clothing">Clothing</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-semibold">
                            <i class="fas fa-box text-primary me-2"></i>
                            Product Quantity
                        </label>
                        <input type="number" class="form-control form-control-lg" id='update_product_quantity'
                            name='update_product_quantity' value='<?= $row["product_quantity"] ?>' required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-semibold">
                            <i class="fas fa-tag text-primary me-2"></i>
                            Product Price
                        </label>
                        <div class="input-group input-group-lg">
                            <span class="input-group-text">&#2547;</span>
                            <input type="number" class="form-control form-control-lg" id='update_product_price'
                                name='update_product_price' value='<?= $row["product_price"] ?>' required>
                        </div>
                    </div>
                </div>

                <!-- Additional Notes -->
                <div class="mb-4">
                    <label class="form-label fw-semibold">
                        <i class="fas fa-note-sticky text-primary me-2"></i>
                        Note
                    </label>
                    <textarea class="form-control form-control-lg" id='update_note' name='update_note'
                        rows="3"><?= $row["note"] ?></textarea>
                </div>
            </form>
            <?php
        }
    }
}




?>