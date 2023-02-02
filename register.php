<?php session_start();?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <section>
        <div class="container">
            <h1 class="text-center">Register</h1>
            <div class="row">
                <div class="col"></div>
                <div class="col">
                    <form action="post-register.php" method="post">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Username</label>
                            <input value="<?php echo isset($_SESSION["username"])?$_SESSION["username"]:""; ?>" type="text" name="username" class="form-control" id="exampleFormControlInput1" placeholder="Username" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput2" class="form-label">Email address</label>
                            <input value="<?php echo isset($_SESSION["email"])?$_SESSION["email"]:""; ?>" type="email" name="email" class="form-control" id="exampleFormControlInput2" placeholder="name@example.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput3" class="form-label">Password</label>
                            <input type="password" name="pwd" class="form-control" id="exampleFormControlInput3" placeholder="Password" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput4" class="form-label">Confirm Password</label>
                            <input type="password" name="cfm_pwd" class="form-control" id="exampleFormControlInput4" placeholder="Confirm Password" required>
                        </div>
                        <?php if(isset($_SESSION["error"])):?>
                        <div class="mb-3">
                            <p class="text-danger"><?php echo $_SESSION["error"]; ?></p>
                        </div>
                        <?php
                            unset($_SESSION["error"]);
                            unset($_SESSION["username"]);
                            unset($_SESSION["email"]);
                        ?>
                        <?php endif;?>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-outline-danger">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="col"></div>
            </div>
        </div>
    </section>
</body>
</html>
