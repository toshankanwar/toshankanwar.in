<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Password</title>
</head>

<body>
    <h1>Please change your password </h1>
    <form action="update_pass.php" method="post" class="update_pass">
        <?php if (isset($_GET['error'])) { ?>
            <p class="error">
                <?php echo $_GET['error']; ?>
            </p>
        <?php } ?>
        <label for="number">Number</label>
        <input type="number" id="number" name="number" required>
        <label for="newpassword">New Password:</label>
        <input type="password" id="newpassword" name="password" required>
        <label for="confirmpassword">Confirm Password:</label>
        <input type="password" id="confirmpassword" name="confirmpassword" required>
        <button type="submit">Submit</button>

    </form>
    <style>
        .error {
            color: #D8000C;
            background-color: #FFBABA;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 30px;
        }
    </style>
</body>

</html>