<?php
$size = rand(3, 5);

function slot_run($size) {
    $array = [];

    for ($x = 0; $x < $size; $x++) {
        for ($y = 0; $y < $size; $y++) {
            $array[$x][$y] = rand(0, 1);
        }
    }

    return $array;
}

$matrix = slot_run($size);

$matrix_display = [];
foreach ($matrix as $row_idx => $row) {
    $darbinis = 0;
    
    $matrix_display[$row_idx] = [
        'class' => '',
        'columns' => []
    ];

    foreach ($row as $column) {
        if ($column == 0) {
            $matrix_display[$row_idx]['columns'][] = [
                'class' => 'bg-blue',
            ];
        } else {
            $matrix_display[$row_idx]['columns'][] = [
                'class' => 'bg-yellow',
            ];
            $darbinis++;
        }
    }
    if ($darbinis == $size) {
        $matrix_display[$row_idx]['class'] = 
         'winning';
            
    }
    
}

?>
<html>
    <head>
        <title>Las vegas </title>
        <style>
            .row.winning {
                border: 1px solid red;
            }

            .column {
                display: inline-block;
                width: 50px;
                height: 50px;
                border: 1px solid black;
            }

            .bg-blue {
                background-color: blue;
            }

            .bg-yellow {
                background-color: yellow;
            }

        </style>
    </head> 
    <body>
        <div class="slot-container">
<?php foreach ($matrix_display as $row): ?>
                <div class="row <?php print $row['class']; ?>">
                <?php foreach ($row['columns'] as $column): ?>
                        <div class="column <?php print $column['class']; ?>"></div>
                    <?php endforeach; ?>
                </div>
                <?php endforeach; ?>
        </div>
    </body>
</html>