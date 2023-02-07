<?php
include_once("database.php");
    $id = $_GET["id"];
    // dua vao id lay ra sinh vien tu table

// ket noi thanh cong
$sql = "select * from students where id=$id";//students
$sv = get($sql);
if(count($sv)==0){
    die("404 not found!");
}
$sv = $sv[0];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <section>
        <div class="container">
            <h1 class="text-center">Bạn muốn sửa sinh viên: <?php echo $id;?></h1>
            <div class="row">
                <div class="col"></div>
                <div class="col">
                    <form action="updatestudent.php?id=<?php echo $id;?>" method="post">
<!--                        <input type="hidden" name="id" value="--><?php //echo $id ?><!--"/>-->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Name</label>
                            <input value="<?php echo $sv["name"];?>" type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Name" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput2" class="form-label">Email address</label>
                            <input value="<?php echo $sv["email"];?>" type="email" name="email" class="form-control" id="exampleFormControlInput2" placeholder="name@example.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput3" class="form-label">Mark</label>
                            <input value="<?php echo $sv["mark"];?>" type="number" name="mark" class="form-control" id="exampleFormControlInput3" placeholder="Mark" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput4" class="form-label">Gender</label>
                            <select class="form-control" name="gender">
                                <option <?php if($sv["gender"]=="Nam"):?>selected<?php endif;?> value="Nam">Nam</option>
                                <option <?php if($sv["gender"]=="Nữ"):?>selected<?php endif;?> value="Nữ">Nữ</option>
                                <option <?php if($sv["gender"]=="Khác"):?>selected<?php endif;?> value="Khác">Khác</option>
                            </select>
                        </div>
                        <?php if(isset($_SESSION["error"])):?>
                            <div class="mb-3">
                                <p class="text-danger"><?php echo $_SESSION["error"]; ?></p>
                            </div>
                            <?php
                            unset($_SESSION["error"]);
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
