<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
<div id = "login-form-box" class = "login-form-box">
        <h4 id = "close-login-form">&#xd7;</h4>
        <h3>Log In </h3>

        <form id = "login-form">
            <input type="email" name="email" placeholder="Email">
            <br />

            <input type="password" name="password" placeholder="Password" id = "password1">
            <br />
            <input type = "checkbox"  id = "checkbox1"  onchange = "togglePasswordVisibility1()">
            <label id = "label1">Show Password</label>

            

     

            <p id = "paragraph1"><a href = "">Forget password?</a></p>
            <br />

            <input type="checkbox" required id = "checkbox3">

            <span id = "span">Agree all the terms and conditions</span>
            <br />

            <Button type="submit" name="login" id = "login-button">Log In</Button>

            <p id = "paragraph2">Don't have an account?<a href = "#" id = "signUp-link">Sign Up</a></p>
        </form>
        
    </div>
</body>

<script>
   

    function togglePasswordVisibility1() {
        var passwordField1 = document.getElementById("password1");
        var checkbox1 = document.getElementById("checkbox1");

        if (checkbox1.checked) {
            passwordField1.type = "text";
        } else {
            passwordField1.type = "password";
        }
    }

</script>
</html>



