<?php
    $votes = \Lava::DataTable();
    $votes->addStringColumn('Food')
          ->addNumberColumn('Votes')
          ->addRow(['Tacos', rand(1000,5000)])
          ->addRow(['Salad', rand(1000,5000)])
          ->addRow(['Pizza', rand(1000,5000)])
          ->addRow(['Apples', rand(1000,5000)])
          ->addRow(['Fish', rand(1000,5000)]);

    \Lava::BarChart($title, $votes, [
        'legend' => [
            'position' => 'top'
        ]
    ]);
