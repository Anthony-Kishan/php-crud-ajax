<?php
include '../database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["add_cust"])) {
    ?>
    <form>
        <div class="row g-4 mb-4">
            <div class="col-md-6">
                <label class="form-label fw-semibold">
                    <i class="fas fa-user text-primary me-2"></i>
                    First Name
                </label>
                <input type="text" class="form-control form-control-lg" id='f_name' required>
            </div>

            <div class="col-md-6">
                <label class="form-label fw-semibold">
                    <i class="fas fa-user text-primary me-2"></i>
                    Last Name
                </label>
                <input type="text" class="form-control form-control-lg" id='l_name' required>
            </div>
        </div>

        <div class="col-12">
            <label class="form-label fw-semibold">
                <i class="fas fa-phone text-primary me-2"></i>
                Contact Number
            </label>
            <input type="tel" class="form-control form-control-lg" id='contact_number' required>
        </div>

        <div class="col-12">
            <label class="form-label fw-semibold">
                <i class="fas fa-location-dot text-primary me-2"></i>
                Address
            </label>
            <textarea class="form-control form-control-lg" id="address" value="address" rows="3" placeholder=""
                required></textarea>
        </div>

        <hr>

        <div class="row g-4 mb-4">
            <div class="col-md-6">
                <label class="form-label fw-semibold">
                    <i class="fas fa-phone-square text-primary me-2"></i>
                    Phone Number 1
                </label>
                <input type="tel" class="form-control form-control-lg" id='phone_number_1'>
            </div>
            <div class="col-md-6">
                <label class="form-label fw-semibold">
                    <i class="fas fa-phone-square text-primary me-2"></i>
                    Phone Number 2
                </label>
                <input type="tel" class="form-control form-control-lg" id='phone_number_2'>
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
                <input type="date" class="form-control form-control-lg" id='warranty_guarantee_start'
                    value='warranty_guarantee_start' placeholder="" required>
            </div>
            <div class="col-md-6">
                <label class="form-label fw-semibold">
                    <i class="fas fa-calendar text-primary me-2"></i>
                    Warranty Guarantee End
                </label>
                <input type="date" class="form-control form-control-lg" id='warranty_guarantee_end'
                    value='warranty_guarantee_end' placeholder="" required>
            </div>
        </div>

        <!-- Product Information -->
        <div class="row g-4 mb-4">
            <div class="col-md-4">
                <label class="form-label fw-semibold">
                    <i class="fas fa-tags text-primary me-2"></i>
                    Category
                </label>
                <select class="form-select form-select-lg" id="category" value="category" placeholder="" required>
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
                <input type="number" class="form-control form-control-lg" id='product_quantity' value='product_quantity'
                    placeholder="" required>
            </div>
            <div class="col-md-4">
                <label class="form-label fw-semibold">
                    <i class="fas fa-tag text-primary me-2"></i>
                    Product Price
                </label>
                <div class="input-group input-group-lg">
                    <span class="input-group-text">&#2547;</span>
                    <input type="number" class="form-control" id='product_price' value='product_price' placeholder=""
                        required>
                </div>
            </div>
        </div>

        <!-- Additional Notes -->
        <div class="mb-4">
            <label class="form-label fw-semibold">
                <i class="fas fa-note-sticky text-primary me-2"></i>
                Note
            </label>
            <textarea class="form-control form-control-lg" id='note' value='note' rows="3" placeholder=""></textarea>
        </div>

    </form>
    <?php
}

?>