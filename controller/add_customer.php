<?php
include '../database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["add_cust"])) {
    ?>
    <form>
        <div class="row">
            <div class="col-6">
                First Name: <input type='text' class='form-control' id='f_name'>
            </div>
            <div class="col-6">
                Last Name: <input type='text' class='form-control' id='l_name'>
            </div>
        </div>
        Contact Number: <input type='text' class='form-control' id='contact_number'>
        Address: <textarea type='text' class='form-control' id='address'></textarea>
    </form>
    <?php
}

?>