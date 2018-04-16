<?php

use yii\helpers\Html;
use yii\grid\GridView;
$this->title = 'AAD Trans Rental Bus';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Selamat Datang!</h1>

        <p class="lead">Semoga Perjalan Anda Menyenangkan dan Selamat Sampai Tujuan</p>

        <p><a class="btn btn-lg btn-success" href="#">Ayo Naik Bus!</a></p>
    </div>

    <div class="body-content">

        <div class="row">
        <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="../frontend/web/gambar/a11.png" alt="">
          <div class="caption">
            <h3>Bus Pariwisata Mercedes</h3>
            <p align="justify">Bus Pariwisata AAD Trans dengan chasis Mercedes Benz !521 dan balutan karoseri terbaik dari Model Adiputro  ini adalah unit pilihan dari PO CJDW Trans untuk memanjakan customer yang ingin merasakan bus terbaik di kelasnya, tersedia seat pilihan yang terdiri dari seat 59 untuk bus besar, tentunya akan menambah kenyamanan selama perjalanan wisata anda baik perjalanan jarak jauh ataupun dekat.Kapasitas bus dan bagasi yang besar, dapat mengangkut lebih banyak orang.</p>
            <p><a class="btn btn-default" href="#">Baca Selengkapnya &raquo;</a></p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="../frontend/web/gambar/a12.png" alt="">
          <div class="caption">
            <h3>Bus Pariwisata Gemilang</h3>
            <p align="justify">Bus Pariwisata Rejeki Gemilang dengan chasis Mercedes Benz 1526 dan Mitsubishi Canter serta di balut dengan balutan karoseri terbaik dari Adiputro  ini adalah unit pilihan dari PO Rejeki Gemilang untuk memanjakan customer yang ingin merasakan bus terbaik di kelasnya, tersedia seat pilihan yang terdiri dari seat 48, 50 dan 59 untuk bus besar,untuk bus mediumya seat 31 tentunya akan menambah kenyamanan selama perjalanan wisata anda baik perjalanan jarak jauh ataupun dekat.</p>
            <p><a class="btn btn-default" href="#">Baca Selengkapnya &raquo;</a></p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="../frontend/web/gambar/a13.png" alt="">
          <div class="caption">
            <h3>Bus Pariwisata Performa Trans</h3>
            <p align="justify">Bus Pariwisata Performa Trans dengan chasis Hino R260, Mercedes Benz 1526,1525 dan balutan karoseri terbaik dari Adiputro  dan Laksana ini adalah unit pilihan dari PO Performa Trans untuk memanjakan customer yang ingin merasakan bus terbaik di kelasnya, tersedia seat pilihan yang terdiri dari seat 48-54- 59 untuk bus besar serta 30 Seat untuk medium bus, tentunya akan menambah kenyamanan selama perjalanan wisata anda baik perjalanan jarak jauh ataupun dekat.</p>
            <p><a class="btn btn-default" href="#">Baca Selengkapnya &raquo;</a></p>
          </div>
        </div>
      </div>
      
        </div>

        <div class="alert alert-info" role="alert"><p align="center"><b>Silakan Membaca Berita Hari Ini</b></p></div>
    </div>
    <br>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'judul',
            //'deskripsi:ntext',
            //'isi:ntext',
            //'deskripsi:html',
            //'isi:html',
            //'gambar',
            'created_at',
            // 'created_by',
            // 'updated_at',
            // 'updated_by',

            //['class' => 'yii\grid\ActionColumn'],
            ['class' => 'yii\grid\ActionColumn', 'template' => '{view}'],
        ],
    ]); ?>

</div>
