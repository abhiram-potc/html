<?php
include 'header.php';
?>
<html>
<head>
    <title>Registration Form</title>
    <style>
        th {
            text-align: left;
        }
    </style>
</head>
<body>
    <?php
        session_start();
    ?>
    <form method="post" action="reg.php" name="registration">
        <table cellpadding="4" cellspacing="5" align="center">
            <caption><h2>Registration Form</h2></caption>
            <tr>
                <th>Name: </th>
                <td>
                    <input type="text" required id="name" name="name">
                </td>
            </tr>
            <tr>
                <th>Age: </th>
                <td>
                    <input type="number" required id="age" name="age">
                </td>
            </tr>
            <tr>
                <th>Address: </th>
                <td>
                    <textarea name="address" required id="address" rows="5" cols="25"></textarea>
                </td>
            </tr>
            <tr>
                <th>Phone: </th>
                <td>
                    <input type="tel" maxlength="10" required id="phone" name="phone">
                </td>
            </tr>
            <tr>
                <th>E-mail: </th>
                <td>
                    <input type="email" required id="email" name="email">
                </td>
            </tr>
            <tr>
                <th>Password: </th>
                <td>
                    <input type="password" required id="pass" name="pass">
                </td>
            </tr>
            <tr>
                <th>Re-Type Password: </th>
                <td>
                    <input type="password" required id="re_pass" name="re_pass">
                </td>
            </tr>
            <tr align="center">
                <td>
                    <input type="reset" name="Reset">
                </td>
                <td>
                    <input type="submit" name="register" value="Sign Up">
                </td>
            </tr>
            <tr align="center">
                <td colspan="2">
                    Already have an account? <a href="login.html">Sign-In</a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php
include 'footer.php';
?>