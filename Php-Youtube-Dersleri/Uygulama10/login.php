<?php 
    require "libs/variables.php";
    require "libs/function.php";

    if(isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        if($username == db_username && $password == db_password){
            setcookie("username",db_username, time() + (60 * 60));
            setcookie("auth",true, time() + (60 * 60));
            header("Location: index.php");
        }
        else{
            echo "<div class='alert alert-danger mb-0 text-center'>Username veya Parola Yanlış. Tekrar Deneyin.</div>";
        }
    }
?>

<?php include "partials/_header.php"?>
<?php include "partials/_navbar.php"?>

        <div class="container my-3">
           <div class="row">
            <div class="col-12">
            <form action="login.php" method="post">
                    <div class="mb-3">
                        <label for="username">Kullanıcı Adı</label>
                        <input type="text" name="username" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="password">Parola</label>
                        <input type="password" name="password" class="form-control">
                    </div>

                    <button class="btn btn-dark" type="submit" name="login">Giriş Yap</button>
                </form>
            </div>

           </div>
        </div>

        <?php include "partials/_footer.php"?>