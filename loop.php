<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
//   loop dimulai dari angka 0
  $x = 0;
//   Jika $x lebih dari 100
  while($x < 100){
//     Jika $x nilainya pas angka 86 maka tampilkan pesan
if( $x == 86){
     echo '<p>[' . $x . ']Selamat Anda memenangkan hadiah utama</p>';
} else {
    echo '<p>[' . $x . ']Saya berjanji untuk tidak melakukannya lagi,  </p>';
}
//     nilai $x Ditambah 1
  $x++;
  }
?>

</body>
</html>
