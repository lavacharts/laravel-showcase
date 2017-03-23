<?php
    $data = \Lava::DataTable();
    $data->setDateTimeFormat('Y')
         ->addDateColumn('Year')
         ->addNumberColumn('Sales')
         ->addNumberColumn('Expenses')
         ->addRows([
            ['2012', 750, 700],
            ['2013', 900, 400],
            ['2014', 1170, 460],
            ['2015', 660,  1120],
            ['2016', 1030, 540]
        ]);

    \Lava::AreaChart($title, $data, [
        'legend' => [
            'position' => 'inner'
        ],
        'chartArea'=> [
            'left' => 50,
            'width' => '90%'
        ],
    ]);
