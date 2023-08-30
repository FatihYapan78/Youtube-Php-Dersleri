<?php 
    include "libs/connection.php";
    require "libs/variables.php";
    require "libs/function.php";

?>

<?php include "partials/_header.php"?>
<?php include "partials/_navbar.php"?>

<?php
    $username = $email = $password = $password2 = "";
    $usernameError = $emailError = $passwordError = $password2Error =  "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        if(empty($_POST["username"])){
            $usernameError = "Kullanıcı Adı Alanı Zorunludur.";
        }
        elseif(preg_match('/^[A-Za-z]{1}[A-Za-z0-9]{5-31}$/', $_POST["username"])){
            $usernameError = "Kullanıcı Adı Harf ve Rakamlardan oluşmalıdır.";
        }
        elseif(strlen($_POST["username"]) < 5){
            $usernameError = "Kullanıcı 5 karakterden uzun olmalıdır.";
        }
        else{
            $username = form_control($_POST["username"]);
        }

        if(empty($_POST["email"])){
            $emailError = "E-Mail Alanı Zorunludur.";
        }
        elseif(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
            $emailError = "E-Mail Hatalıdır.";
        }
        else{
            $email = form_control($_POST["email"]);
        }
        if(empty($_POST["password"])){
            $passwordError = "Password Alanı Zorunludur.";
        }
        else{
            $password = form_control($_POST["password"]);
        }

        if($_POST["password"] != $_POST["password2"]){
            $password2Error = "Parolalar Uyumsuz.";
        }
        else{
            $password2 = form_control($_POST["password2"]);
        }
    

    if(empty($usernameError) && empty($emailError) && empty($passwordError) && empty($passwrod2Error)){
        $query = "SELECT * FROM users WHERE username = ? OR email = ?";
        $stmt = mysqli_prepare($baglanti,$query);
        mysqli_stmt_bind_param($stmt,"ss",$username,$email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if(mysqli_num_rows($result) == 0){
            $password = password_hash($password, PASSWORD_DEFAULT);
            mysqli_stmt_close($stmt);

            $query = "INSERT INTO users(username,email,password) VALUE(?,?,?)";;
            if($stmt = mysqli_prepare($baglanti,$query)){
                mysqli_stmt_bind_param($stmt,"sss",$username,$email,$password);
                mysqli_stmt_execute($stmt);
                header("Location: login.php");
            }
        }
        else{
            $usernameError = "Bu Kullanıcı Adı ve E-Posta adresi başka bir kullanıcı tarafından kullanılıyor.";
        }
    }
}


?>

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
                        <label for="email">E-mail</label>
                        <input type="text" name="email" class="form-control" value="<?php echo $email?>">
                        <div class="text-danger"><?php echo $emailError?></div>
                    </div>
                    <div class="mb-3">
                        <label for="password">Parola</label>
                        <input type="password" name="password" class="form-control">
                        <div class="text-danger"><?php echo $passwordError?></div>
                    </div>
                    <div class="mb-3">
                        <label for="password">Parola Tekrar</label>
                        <input type="password" name="password2" class="form-control">
                        <div class="text-danger"><?php echo $password2Error?></div>
                    </div>
                    <button class="btn btn-dark" type="submit">Kayıt Ol</button>
                </form>
            </div>

           </div>
        </div>

        <?php include "partials/_footer.php"?>