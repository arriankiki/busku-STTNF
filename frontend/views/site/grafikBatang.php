<?=
\dosamigos\highcharts\HighCharts::widget([
    'clientOptions' => [
        'chart' => [
               //'type' => 'bar'
                //'type' => 'line'
               'type' => 'column'
                //'type' => 'pie'
                //'type' => 'area'
        ],
        'title' => [
             'text' => 'Konsumsi Buah'
             ],
        'xAxis' => [
            'categories' => [
                'Apel',
                'Pisang',
                'Jeruk'
            ]
        ],
        'yAxis' => [
            'title' => [
                'text' => 'Memakan Buah'
            ]
        ],
        'series' => [
            ['name' => 'Arrian Rizki Firdaus', 'data' => [7, 2, 4]],
            ['name' => 'Fikri Ramza Giffary', 'data' => [5, 7, 3]],
            ['name' => 'Fawwaz Zahirul Haq', 'data' => [4, 5, 2]]
        ]
    ]
]);