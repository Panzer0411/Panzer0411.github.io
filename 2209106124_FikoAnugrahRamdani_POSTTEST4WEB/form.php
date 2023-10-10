<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styling.css">
</head>
<body>
    <div>
    <h1 id="text" >Selamat Datang <?php echo $_POST['nama']?> dengan Nim <?php echo $_POST['nim']?> <br><?php echo $_POST['email']?></h1>

    </div>

    <div class="container">
    <h3 id="tepok" >Input ID Surat </h3>
    <form form action="index.php" method="post">
                <input type="number" name="nim" placeholder="Nim" id="" required><br> <br>
                <input type="pass_id" name="pass_id" placeholder="ID_Surat" id="" required><br> <br>
                <input type="submit" name="submit" value="Log in">
        </form>
    </div> 
</body>
</html>