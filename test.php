<?php

// This is logic for question 1
if (true) {
    $something = 'string';

    if (true) {
        $something = 'strung';
    }

    $another = 'something';
}

// This is logic for question 2
for ($row = 0; $row < 10; $row++) {
    if ($row === 5) {
        echo '#';
    } else {
        echo '*';
    }

    echo '<br>';
}

function something() {
    $something = 'string';

    if (true) {
        $something = 'strung';

        if (true) {
            $another = 'sometrunk';
        }

        if (false) {
            $another = 'somethrink';
        } else {
            $another = 'somethrenk';
        }
    } else {
        for ($row = 0; $row < 10; $row++) {
            for ($column=0; $column < $row; $column++) { 
                if ($row === 5) {
                    echo '#';
                } else {
                    echo '*';
                }
            
                echo '<br>';
            }
        }
    }

    $another = 'something';

    return [
        'something' => $something,
        'another'   => $another,
    ];
}

echo '<br>';

for ($row = 1; $row <= 5; $row++) {
    for ($column=1; $column <= $row; $column++) { 
        if (
            (($row === 3 || $row === 4) && $column === 2) ||
            ($row === 4 && $column === 3)
        ) {
            echo '-';
        } else {
            echo '*';
        }
    }

    echo '<br>';
}
