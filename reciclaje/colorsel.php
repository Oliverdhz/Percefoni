<?php
$pdo;
$query;
try {
    $conn = 'mysql:host=localhost;dbname=persefone;charset=utf8mb4';
    $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false];
    $pdo = new PDO($conn, 'root', '', $options);
} catch (PDOException $e) {
    print_r('Error en la conexión: ' . $e->getMessage());
}
$id = $_POST['id'];
$color = $_POST['color'];
$img = $id. $color;
echo "<div class='wrap-slick3 flex-sb flex-w'>
<div class='wrap-slick3-dots'></div>

<div class='slick3'>
    <div class='item-slick3' id='img11' data-thumb='images/$img".".png'>
        <div class='wrap-pic-w'>
            <img src='images/$img".".png' id='img1' alt='IMG-PRODUCT'>
        </div>
    </div>

    <div class='item-slick3' id='img22' data-thumb='images/$img"."v2.png'>
        <div class='wrap-pic-w'>
            <img src='images/$img"."v2.png' id='img2' alt='IMG-PRODUCT'>
        </div>
    </div>

    <div class='item-slick3' id='img33' data-thumb='images/$img"."v3.png'>
        <div class='wrap-pic-w'>
            <img src='images/$img"."v3.png' id='img3' alt='IMG-PRODUCT'>
        </div>
    </div>

    <div class='item-slick3' id='img44' data-thumb='images/$img"."v4.png'>
        <div class='wrap-pic-w'>
            <img src='images/$img"."v4.png' id='img4' alt='IMG-PRODUCT'>
        </div>
    </div>

    <div class='item-slick3' id='img55' data-thumb='images/$img"."v5.png'>
        <div class='wrap-pic-w'>
            <img src='images/$img"."v5.png' id='img5' alt='IMG-PRODUCT'>
        </div>
    </div>
</div>";
?>