<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toshan|Login</title>
    <link rel="stylesheet" href="login.css">

</head>

<body>
    <div class="login">
    <form action="login.php" method="post" ">
        <h1>Login</h1>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error">
                <?php echo $_GET['error']; ?>
            </p>
        <?php } ?>
        <?php if (isset($_GET['register'])) { ?>
            <p class="register">
                <?php echo $_GET['register']; ?>
            </p>
        <?php } ?>
        <div class="input-field">
            <lable for="Username">Username</lable>
            <input name="email" type="email" id="email">
        </div>
        <div class="input-field">
            <lable for="password">Password</lable>
            <input name="password" type="password" id="password">
        </div>
       
       
        <a href="forget_password.php" class="forget_password">Forget Password</a>
        <div class="notaccout"> Don't have an account ? <a class="register "href="registration.html">Register Here</a></div>
        <button type="submit" id="submit"  class="custom-btn btn-9"><span>Login</span></button>
       
    </form>
    <button id="toggle" >Show</button>
    </div>
    
    <style>
        .error {
            color: #D8000C;             
            background-color: #FFBABA;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 30px;
        }

        .forget_password {
            display: flex;
            text-align: right;
            margin: -35px 0px 25px 200px;
            text-decoration: none;

        }
        #toggle{
            width: 45px;
            height: 20px;
            margin-top: -245px;
            margin-left: 240px;
            border: 1px solid blue;
        }
        #submit{
            height: 40px;
            width: 300px;
        }
        .register{
            text-decoration: none;
        }
    </style>
    <script>
      let toggle= document.querySelector("#toggle");
      let password =document.getElementById("password");
      toggle.addEventListener("click", function(){
        if (password.type == "password") {
                password.type = "text";
                toggle.textContent = "Hide";
            } else {
                password.type = "password";
                toggle.textContent = "Show";
            }

      }); 
    </script>

</body>

</html>