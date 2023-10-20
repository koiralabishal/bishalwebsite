<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sign Up</title>
</head>

<body>
    <div id="signUp-form-box" class="signUp-form-box">
        <h4 id="close-signUp-form">&#xd7;</h4>
        <h3>Sign Up</h3>

        <form id="signUp-form" action="home_page.php" method="POST">
            <input type="name" name="firstName" placeholder="First Name">
            <br />

            <input type="name" name="middleName" placeholder="Middle Name">
            <br />

            <input type="name" name="lastName" placeholder="Last Name">
            <br />

            <input type="" name="email" placeholder="Email">
            <br />



            <select name="type" id="userType" onchange="showDoctorIdField()">
                <option value="selection">Select your type</option>
                <option value="doctor" id="doctor">Doctor</option>
                <option value="patient">Patient</option>
                <select>
                    <br />

                    <input type="hidden" name="type_field" id="type_field">

                    <input type="" name="ID" placeholder="Doctor Id" id="doctorId">

                    <input type="" name="birthDate" placeholder="Birth Date">
                    <br />



                    <input type="" name="address" placeholder="Address">
                    <br />

                    <input type="" name="contact" placeholder="Contact No.">
                    <br />

                    <input type="password" name="password" placeholder="Password" id="password2">
                    <br />




                    <input type="passowrd" name="password" placeholder="Confirm Password" id="password3">
                    <br />
                    <input type="checkbox" id="checkbox2" onchange="togglePasswordVisibility2()">
                    <label id="label2">Show Password</label>
                    <br />
                    <Button type="submit" name="register" id="signUp-button">Sign Up</Button>

                    <p id="paragraph3">Already have an account?<a href="#" id="login-link">Login In</a></p>


        </form>

    </div>
</body>

<script>

    function togglePasswordVisibility2() {
        var passwordField2 = document.getElementById("password2");
        var passwordField3 = document.getElementById("password3");
        var checkbox2 = document.getElementById("checkbox2");

        if (checkbox2.checked) {
            passwordField2.type = "text";
            passwordField3.type = "text";
        } else {
            passwordField2.type = "password";
            passwordField3.type = "password";
        }
    }


    function showDoctorIdField() {
        var selectElement = document.getElementById("userType");
        var doctorIdField = document.getElementById("doctorId");

        if (selectElement.value === "doctor") {
            doctorIdField.style.visibility = "visible";
        } else {
            doctorIdField.style.visibility = "hidden";
        }
    }


</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</html>










<?php
if (isset($_POST["register"])) {
    include('connection.php');
    $firstName = $_POST["firstName"];
    $middleName = $_POST["middleName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $type = $_POST["type"];
    $ID = $_POST["ID"];
    $birthDate = $_POST["birthDate"];
    $address = $_POST["address"];
    $contact = $_POST["contact"];
    $password = $_POST["password"];
    $passwordHash = md5($password);
    $errors = array();

    $sql = "SELECT email FROM patient WHERE email = '$email' UNION SELECT email FROM doctor WHERE email = '$email'";



    $result = mysqli_query($conn, $sql);



    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Email is not valid.";
        ?>
        <script>
            swal({
                title: "Error",
                text: "<?php echo $errors['email']; ?>",
                // icon: "error",
                button: "Ok",
            });
            document.querySelector('#signUp-form-box').style.display = "block";
        </script>
        <?php
    } elseif (mysqli_num_rows($result) > 0) {
        $errors["email"] = "Email is already in use.";
        ?>
        <script>
            swal({
                title: "Error",
                text: "<?php echo $errors['email']; ?>",
                // icon: "error",
                button: "Ok",
            });
            document.querySelector('#signUp-form-box').style.display = "block";
        </script>
        <?php
    }


    
    if (strlen($password) < 8) {
        $errors['password'] = "Password must be 8 characters long";
        ?>
        <script>
            swal({
                title: "Error",
                text: "<?php echo $errors['password']; ?>",
                // icon: "error",
                button: "Ok",
                
            });
            document.querySelector('#signUp-form-box').style.display = "block";
        </script>
        
        <?php
        
    }


    // Validate form fields
 
    if (empty($firstName) || empty($lastName) || empty($email) || empty($password)) {
        $errors['empty'] = "All fields are required";
        ?>
        <script>
            swal({
                title: "Error",
                text: "<?php echo $errors['empty']; ?>",
                // icon: "error",
                button: "Ok",
                
            });
            document.querySelector('#signUp-form-box').style.display = "block";
        </script>
        
        <?php
    }

    if ($type === "doctor") {
        $enteredDoctorName = $_POST["firstName"];
        
        // Fetch valid doctor IDs from the hospital table based on the doctor's first name
        $hospitalQuery = "SELECT id FROM hospital WHERE name = '{$enteredDoctorName}'";
        $hospitalResult = mysqli_query($conn, $hospitalQuery);
        
        if (mysqli_num_rows($hospitalResult) > 0) {
            $row = mysqli_fetch_assoc($hospitalResult);
            $validDoctorID = $row["id"];
            
            if ($ID != $validDoctorID) {
                $errors['id'] = "Invalid Doctor ID.";
                ?>
                <script>
                    swal({
                        title: "Error",
                        text: "<?php echo $errors['id']; ?>",
                        // icon: "error",
                        button: "Ok",
                    });
                    document.querySelector('#signUp-form-box').style.display = "block";
                </script>
                <?php
            }
        } else {
            $errors['id'] = "Doctor not found in the hospital records.";
            ?>
            <script>
                swal({
                    title: "Error",
                    text: "<?php echo $errors['id']; ?>",
                    // icon: "error",
                    button: "Ok",
                });
                document.querySelector('#signUp-form-box').style.display = "block";
            </script>
            <?php
        }
    }
   
    

    if (count($errors) == 0) {
        // Define the SQL query to insert data into the appropriate table
        if ($type === "patient") {
            $query = "INSERT INTO patient (firstName, middleName, lastName, email, birthDate, address, contactNumber, password)
                    VALUES ('$firstName', '$middleName', '$lastName', '$email', '$birthDate', '$address', '$contact', '$passwordHash')";
        } elseif ($type === "doctor") {
            $query = "INSERT INTO doctor (firstName, middleName, lastName, email, doctorID, birthDate, address, contactNumber, password)
                    VALUES ('$firstName', '$middleName', '$lastName', '$email', '$ID', '$birthDate', '$address', '$contact', '$passwordHash')";
        }

        if (mysqli_query($conn, $query)) {
            ?>
            <script>
                swal({
                    title: "Registration Successful",
                    text: "Verification link is sent to your email\n" +
                        "Please check your email",
                    icon: "success",
                    button: "Ok",
                });

                
            </script>
            <?php
        } else {
            echo "Something is wrong.";
        }
    }
}
?>