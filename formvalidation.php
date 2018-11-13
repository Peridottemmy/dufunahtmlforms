<?php
$message = '';
if (isset($_POST['submit'])) {
$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
if (empty($firstName) || empty($lastName) || empty($email) || empty($password) || empty($phone) || empty($gender)) {
$message = '<p class="error">All fields are required</p>';
}
if (strlen($firstName) < 3 || strlen($firstName) > 20) {
    $message .= '<p class="error">First name must be between 3 and 20 characters</p>';
    }
    if (strlen($lasttName) < 3 || strlen($lastName) > 20) {
        $message .= '<p class="error">Last name must be between 3 and 20 characters</p>';
        }
    if (!is_numeric($phone)) {
        $message .= '<p class="error">Phone number should be numeric</p>';
        }
        if (strlen($phone) != 11) {
            $message .= '<p class="error">Phone number should be 11 digits long</p>';
            }
            if (empty($message)) {
                $message = '<p class="success">All inputs are valid, thank you</p>';
                }
}
?>
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign Up Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="task1.css" />
    <script src="main.js"></script>
    <style>
.error {
color: red;
}
.success {
color: green;
}
</style>
</head>
<body>
<?php echo $message; ?>
<form method="POST" action="">
        <fieldset>
            <legend>SignUp Form</legend>
            <p>
            <label for="firstname">Firstname:</label>
            <input type="text" name="firstname"/>
            </p>
            <p>
             <label for="lastname">Lastname:</label>
            <input type="text" name="lastname"/>
            </p>
            <p>
             <label for="email">E:mail:</label>
             <input type="email" name="email"/>
            </p>
            <p>
             <label for="password">Password:</label>
             <input type="password" name="password"/>
            </p>
            <p>
             <label for="confirm password">Confirm Password:</label>
             <input type="password" name="confirm password"/>
            </p>
            <p>
             <label for="number">Phone Number:</label>
             <input type="number" name="number"/>
            </p>
            <p>
            <label for="gender">Gender:</label>
             <br/>
             <select name="gender">
                    <option value="-1" selected>Choose one</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    </select>
            </p>
            <p>
             Country:
             <br/>
             <input  type="radio" name="country" id="nigerian" value="nigerian"/>
             <label for="nigerian">Nigerian</label>
             <br/>
             <input type="radio" name="country" id="others" value="others"/>
             <label for="others">Others</label>
            </p>
            <p>
                <input type="submit" name="submit" value="Submit"/>
            </p>
        </fieldset>
    </form>
    
</body>
</html>