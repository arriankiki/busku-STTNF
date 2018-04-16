<?php
use dosamigos\highcharts\HighCharts;
use common\models\Kendaraan; 
//cetak data 
	foreach ($dgrafik as $value) {
		echo '<br/>'.$value['tahun'].' : '.$value['jumlah'];
	}

//looping data untuk grafik
	foreach ($dgrafik as $val) {
		$data[]=[
		'name' => $val['tahun'], // label untuk xAsis
		'data' => [

			(int)$val['jumlah'] // data untuk yAsis

		],

		];
	}


echo
HighCharts::widget([
    'clientOptions' => [
        'chart' => [
               //'type' => 'bar'
                //'type' => 'line'
               'type' => 'column'
                //'type' => 'pie'
                //'type' => 'area'
        ],
        'title' => [
             'text' => 'Grafik Kendaraan Bedasarkan Tahun Produk'
             ],
        'xAxis' => [
            'categories' => ['tahun']
        ],
        'yAxis' => [
            'title' => [
                'text' => 'Jumlah Bus'
            ]
        ],
        'series' => $data
            
    ]
]);
?>