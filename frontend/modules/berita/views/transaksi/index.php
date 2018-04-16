<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Input Order Transaksi';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="jumbotron">
	<h1>
		Pesan Bus
	</h1>
	<hr/>
	<p>
		Pelanggan yang terhomat,silahkan gunakan Data Anda Untuk Order Bus,
		<br/>Jika belum, silahkan isi data anda terlebih dahulu
	</p>
	<p>
		<?= Html::a('Order Bus', ['/berita/transaksi/create'], ['class'=>'btn btn-primary pull-left']) ?>
		<?= Html::a('Isi Data', ['/berita/pelanggan/create'], ['class'=>'btn btn-info pull-right']) ?>
	</p>
</div>
</div>