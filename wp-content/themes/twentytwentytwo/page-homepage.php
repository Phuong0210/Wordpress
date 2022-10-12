<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

</head>
<style>
<?php include('style-homepage.css') ?>
</style>

<body>
    <div class="nar_menu">
        <div class="menu_left">
            <img src="https://vov.vn/themes/custom/vovvn/images/logo_meta_home.jpg" alt="">
            <p>Thứ tư, ngày 12 tháng 10 năm 2022</p>
        </div>

        <div class="menu_midle">
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <a href="#"><i class="fa-brands fa-tiktok"></i></a>
            <a href="#"><i class="fa-brands fa-youtube"></i></a>
            <a href="#"><i class="fa-brands fa-skype"></i></a>
            <p>Nghe & xem <i class="fa-solid fa-circle-chevron-right"></i></p>

        </div>
        <div class="menu_right">
            <p>English</p>
            <p><input type="text"><i class="fa-solid fa-magnifying-glass"></i></p>
        </div>

    </div>
    <div class="navbar_menu">
        <p><i class="fa-solid fa-house"></i>Chính trị </p>
        <p>Xã hội</p>
        <p>Thế giới</p>
        <p>Kinh tế</p>
        <p>Thể thao</p>
        <p>Văn hóa</p>
        <p>Phát luật</p>
        <p>Du lịch</p>
        <p>Quân sự - Quốc phòng</p>
        <p>Sức khỏe</p>
        <p>Đời sống</p>
        <p>Postcast <i class="fa-solid fa-bars"></i></p>
    </div>
    <div class="container">
        <?php

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://62b13ad7196a9e987031ac4a.mockapi.io/T-products',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);

        curl_close($curl);


        $data = json_decode($response);

        // echo "<b>Total APIs: $data->count </b><br>";
        // $entries = $data->entries[0]->API;
        ?>
        <div class="post-container">
            <?php
            foreach ($data as $value) { ?>
            <div class="card" style="width: 15rem;">
                    <img class="card-img-top" src="<?= $value->image ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?= $value->title ?></h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                    </div>
            <?php } ?>

        </div>
    </div>