<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(isset($title)) echo $title." | "?>ABC</title>
</head>
<body>
    <header>
        <nav>
            <h1>Header</h1>
            <a href="">Anasayfa</a>
        </nav>
    </header>
    <main>
        <?php include $contant?>
    </main>

    <footer>
        <h1>Footer</h1>
    <a href="">Anasayfa</a>
    </footer>
</body>
</html>