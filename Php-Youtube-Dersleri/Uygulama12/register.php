<?php 
    require "libs/variables.php";
    require "libs/function.php";

?>

<?php include "partials/_header.php"?>
<?php include "partials/_navbar.php"?>

<?php
    $username = $email = $city = $password = $password2 = "";
    $usernameError = $emailError = $cityError = $passwordError = $password2Error = $hobbiesError = "";
    $hobbies = [];
    if($_SERVER["REQUEST_METHOD"]== "POST"){

        if(empty($_POST["username"])){
            $usernameError = "Kullanıcı Adı Alanı Zorunludur.";
        }
        else{
            $username = form_control($_POST["username"]);
        }

        if(empty($_POST["email"])){
            $emailError = "E-Mail Alanı Zorunludur.";
        }
        else{
            $email = form_control($_POST["email"]);
        }

        if($_POST["sehir"] == -1){
            $cityError = "Şehir Alanı Zorunludur.";
        }
        else{
            $city = $_POST["sehir"];
        }

        if(!isset($_POST["hobbies"])){
            $hobbiesError = "Şehir Alanı Zorunludur.";
        }
        else{
            $hobbies = $_POST["hobbies"];
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
    }





?>

        <div class="container my-3">
           <div class="row">
            <div class="col-12">
                <form action="register.php" method="post">
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
                        <label for="sehir">Şehir</label>
                        <select name="sehir" class="form-select">
                            <option value="-1" selected>Şehir Seç</option>
                            <?php foreach($sehirler as $plaka => $sehir): ?>
                                <option value="<?php echo $plaka?>" <?php echo $city == $plaka ? "selected":"" ?>><?php echo $sehir?></option>
                            <?php endforeach?>
                        </select>
                        <div class="text-danger"><?php echo $cityError?></div>
                    </div>
                    <div class="mb-3">
                        <label for="hobiler">Hobiler</label>
                        <?php foreach($hobiler as $id => $hobi): ?>
                            <div class="form-check">
                                <input type="checkbox" name="hobbies[]" id="hobiler_<?php echo $id?>" value="<?php echo $hobi?>" <?php if(in_array($hobi, $hobbies)) echo "checked"?>>
                                <label for="hobiler_<?php echo $id?>" class="form-check-label"><?php echo $hobi?></label>
                            </div>
                        <?php endforeach?>
                        <div class="text-danger"><?php echo $hobbiesError?></div>
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