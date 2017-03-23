<?php
    $data = \Lava::DataTable();
    $data->addNumberColumn('Age')
         ->addNumberColumn('Weight');

    for ($i=0; $i < 50; $i++) {
        $data->addRow([rand(20, 40), rand(100, 300)]);
    }

    \Lava::ScatterChart($title, $data, [
        'title' => 'Age vs. Weight comparison',
        'hAxis' => [
            'title' => 'Age',
            'minValue' => 20,
            'maxValue' => 40
        ],
        'vAxis' => [
            'title' => 'Age',
            'minValue' => 100,
            'maxValue' => 300
        ],
        'legend' => [
            'position' => 'none'
        ]
    ]);
