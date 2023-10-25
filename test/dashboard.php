<?php
require 'koneksi.php';

$result = mysqli_query($conn, "SELECT * FROM srtmskklr");

$surate= [];

while ($row = mysqli_fetch_assoc($result)){
    $surate[] = $row;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tampilan</title>
    <link rel="stylesheet" href="styling.css">
    <script src="https://kit.fontawesome.com/9830653175.js" crossorigin="anonymous"></script>
</head>
<body>
    <section class="dash-main">
        <h1>Manajemen Data</h1> <br>
        
        <?php
        date_default_timezone_set("Asia/Singapore");
        echo "Time Indonesia is" . date("Y:m:l H:i:s");
        
        date_default_timezone_set("Asia/Singapore");
        date("H:i:s");
        ?>
            <div class="leading-btn">
                    <a href = "tambah.php"><button class="add-btn">Tambah</button></a>
                    <!-- <button class="delete-btn">delete</button> -->
                </div><br>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th> 
                            <th>Nama</th>
                            <th>Surat Masuk</th>
                            <th>Lampiran</th>
                            <th>tanggal</th>
                            <th>Perihal</th>
                            <th>Instansi</th>
                            <th>gambar</th>
                            <th>Fitur</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; foreach($surate as $srt) :?>
                        <tr>
                            <td><?php echo $i?></td>
                            <td><?php echo $srt["nama"] ?></td>
                            <td><?php echo $srt["nomor_surat"] ?></td>
                            <td><?php echo $srt["lampiran"] ?></td>
                            <td><?php echo $srt["tanggal"] ?></td>
                            <td><?php echo $srt["perihal"] ?></td>
                            <td><?php echo $srt["instansi"] ?></td>
                            <td><img width="200px" height="120px" src="img/<?php echo $srt["file_gambar"] ?>" alt=""></td>
                            <td class="action">
                                <a href="edit.php?id=<?php echo $srt["id"] ?>"><button class="edit-btn"><i class="fa-solid fa-pen-to-square" ></i></button></a>
                                <a href="hapus.php?id=<?php echo $srt["id"] ?>"><button name="hapus" class="delete-btn"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="white"><path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/></svg></button></a>
                            </td>
                        </tr>
                        <?php $i++; endforeach;?>
                    </tbody>
                </table>
            </section>
        </main>
    </div>
</body>
</html>