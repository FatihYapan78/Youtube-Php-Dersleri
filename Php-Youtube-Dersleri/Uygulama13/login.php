<?php 
    include "libs/connection.php";
    require "libs/variables.php";
    require "libs/function.php";
    session_start();

    if(isLoggedIn()){
        header("Location: index.php");
    }
 

    $username = $password = "";
    $usernameError = $passwordError = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        if(empty($_POST["username"])){
            $usernameError = "Kullanıcı Adı Alanı Zorunludur.";
        }
        else{
            $username = form_control($_POST["username"]);
        }

        if(empty($_POST["password"])){
            $passwordError = "Password Alanı Zorunludur.";
        }
        else{
            $password = form_control($_POST["password"]);
        }

        if(empty($usernameError) && empty($passwordError)){
            $sql = "SELECT id,username,password, user_type from users WHERE username=?";

            if($stmt = mysqli_prepare($baglanti,$sql)){
                mysqli_stmt_bind_param($stmt,"s",$username);
                if(mysqli_stmt_execute($stmt)){
                    mysqli_stmt_store_result($stmt);
                    if(mysqli_stmt_num_rows($stmt) == 1){
                        // Parola Kontrol
                        mysqli_stmt_bind_result($stmt,$id,$username,$hsh_password,$user_type);
                        if(mysqli_stmt_fetch($stmt)){
                            if(crypt($password,$hsh_password)){
                                $_SESSION["loggedIn"] = true;
                                $_SESSION["id"] = $id;
                                $_SESSION["username"]= $username;
                                $_SESSION["user_type"]= $user_type;
                                header("Location: index.php");
                            }
                        }
                        else{
                            $passwordError = "Parola Yanlış";
                        }
                    }
                    else{
                        $usernameError = "Kullanıcı Adı Yanlış";
                    }
                }
            }
            mysqli_stmt_close($stmt);
            mysqli_close($baglanti);
        }

    }
?>

<?php include "partials/_header.php"?>
<?php include "partials/_navbar.php"?>

        <div class="container my-3">
           <div class="row">
            <div class="col-12">
            <form method="post">
            <div class="mb-3">
                        <label for="username">Kullanıcı Adı</label>
                        <input type="text" name="username" class="form-control" value="<?php echo $username?>">
                        <div class="text-danger"><?php echo $usernameError?></div>
                    </div>
                    <div class="mb-3">
                        <label for="password">Parola</label>
                        <input type="password" name="password" class="form-control">
                        <div class="text-danger"><?php echo $passwordError?></div>
                    </div>

                    <button class="btn btn-dark" type="submit" name="login">Giriş Yap</button>
                </form>
            </div>

           </div>
        </div>

        <?php include "partials/_footer.php"?>