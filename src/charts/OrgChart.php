<?php
    $employees = \Lava::DataTable();
    $employees->addColumns([
        ['string', 'Name'],
        ['string', 'Manager'],
        ['string', 'ToolTip']
    ])->addRows([
        [['Mike', 'Mike<div style="color:red; font-style:italic">President</div>'],
           '', 'The President'],
        [['Jim', 'Jim<div style="color:red; font-style:italic">Vice President</div>'],
           'Mike', 'VP'],
        ['Alice', 'Mike', ''],
        ['Bob', 'Jim', 'Bob Sponge'],
        ['Carol', 'Bob', '']
    ]);

    \Lava::OrgChart($title, $employees, [
        'title' => 'Company Performance',
        'allowHtml' => true,
        'titleTextStyle' => [
            'color' => '#eb6b2c',
            'fontSize' => 14
        ]
    ]);
