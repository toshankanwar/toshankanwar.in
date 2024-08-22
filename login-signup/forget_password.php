<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget password</title>
    <link rel="stylesheet" href="forget_password.css">
</head>

<body>
    <h1>Enter Email Id to reset your password</h1>

    <form action="change_pass.php" method="post" class="change">
        <?php if (isset($_GET['error'])) { ?>
            <p class="error">
                <?php echo $_GET['error']; ?>
            </p>
        <?php } ?>
        <label>Enter Your Email</label>
        <input type="email" name="email" required>
        <button type="submit">Request </button>

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