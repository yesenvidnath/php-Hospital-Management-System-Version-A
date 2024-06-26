<!-- Include glogal heder -->
<?php include('../assets/header.php');?>


<?php

//error_reporting(E_ALL);
//ini_set('display_errors', 1);

// Include connection file to the deach inteface
//include('../connection/connect.php');

//if ($conn->connect_error) {
    //die("Connection failed: " . $conn->connect_error);
//}

// All the insert update and detele funtions of the system

?>

<!-- Adding Navigation Bar -->
<?php include('../assets/navigation.php');?>

<section class="patient-reg service-wrap">

    <div class="container">
        <div class="row">
            <div class="col-md-5">

                <!-- Form for the customer registration -->
                <form method="POST">

                    <div class="form-group">
                        <label for="patient_id">Patient ID:</label>
                        <input type="text" class="form-control" id="patient_id" name="patient_id" value="<?php //echo $patient_id; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="first_name">First Name:</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" value="<?php // echo $first_name; ?>">
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name: </label>
                        <input type="text" class="form-control" id="last_name" name="last_name" value="<?php //echo $last_name; ?>">
                    </div>
                    <div class="form-group">
                        <label for="date_of_birth">Date of Birth:</label>
                        <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" value="<?php //echo $date_of_birth; ?>">
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender:</label>
                        <input type="text" class="form-control" id="gender" name="gender" value="<?php //echo $gender; ?>">
                    </div>
                    <div class="form-group">
                        <label for="address">Address:</label>
                        <input type="text" class="form-control" id="address" name="address" value="<?php //echo $address; ?>">
                    </div>
                    <div class="form-group">
                        <label for="phone_number">Phone Number:</label>
                        <input type="text" class="form-control" id="phone_number" name="phone_number" value="<?php //echo $phone_number; ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php //echo $email; ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Medical-History:</label>
                        <textarea type="text" class="form-control" id="medical_history" name="medical_history"><?php //echo $medical_history; ?></textarea>
                    </div>
                    <br><br>
                    <section class="button-section">
                        <!-- Button SEction (insert Update delete, Save ) -->
                        <input type="submit" class="btn btn-primary" name="action" value="insert"> <!--Insert-->
                        <input type="submit" class="btn btn-success" name="action" value="update"><!--Update-->
                        <input type="submit" class="btn btn-info" name="action" value="search"> <!--Serach-->
                        <input type="submit" class="btn btn-danger" name="action" value="delete"> <!--Deleete-->
                        <input type="button" class="btn btn-secondary" onclick="clearForm()" value="clear">
                    </section>

                </form>

            </div>
            
            <div class="col-md-7">

                <!-- Datagrid view form the database -->
                <?php
                    //$result = $conn->query("SELECT * FROM patients");
                    //if ($result->num_rows > 0) {
                    ?>
                        <div class="table-responsive mt-5">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Patient ID</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Date of Birth</th>
                                        <th>Gender</th>
                                        <th>Address</th>
                                        <th>Phone Number</th>
                                        <th>Medical History</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    //while ($row = $result->fetch_assoc()) {
                                    ?>
                                        <tr>
                                            <td>Data sample form db<?php //echo $row['patient_id']; ?></td>
                                            <td>Data sample form db<?php //echo $row['first_name']; ?></td>
                                            <td>Data sample form db<?php //echo $row['last_name']; ?></td>
                                            <td>Data sample form db<?php //echo $row['date_of_birth']; ?></td>
                                            <td>Data sample form db<?php //echo $row['gender']; ?></td>
                                            <td>Data sample form db<?php //echo $row['address']; ?></td>
                                            <td>Data sample form db<?php //echo $row['phone_number']; ?></td>
                                            <td>Data sample form db<?php //echo $row['email']; ?></td>
                                            <td>Data sample form db<?php //echo $row['medical_history']; ?></td>
                                        </tr>
                                    <?php
                                    //}
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    <?php
                    //} else {
                        //echo "<div class='alert alert-info mt-5'>No Patient found</div>";
                    //}
                ?>
            </div>
        </div>
    </div>
</section>


<script>
    
    //clear fution to clear all the data form input feelds 
    function clearForm() {
        document.getElementById("patient_id").value = "";
        document.getElementById("first_name").value = "";
        document.getElementById("last_name").value = "";
        document.getElementById("date_of_birth").value = "";
        document.getElementById("gender").value = "";
        document.getElementById("address").value = "";
        document.getElementById("phone_number").value = "";
        document.getElementById("email").value = "";
        document.getElementById("medical_history").value = "";
    }
</script>

<!-- Include glogal heder -->
<?php include('../assets/footer.php');?>