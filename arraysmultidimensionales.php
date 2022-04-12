<?php
/* array o varios array dentro de otro array */
$data = [
    [ 
        'nombre' => 'xoceq',
        'email' => 'xoceq@gmail.com',
        'celular' => '9434532261',
        'direccion' => [
            'pais' => 'Colombia',
            'ciudad' => 'Bogota'
        ]
    ],
    [ 
        'nombre' => 'dost',
        'email' => 'dostq@gmail.com',
        'celular' => '2334536555'
    ],
    [ 
        'nombre' => 'vect',
        'email' => 'vect@gmail.com',
        'celular' => '1134536882'
    ],
];

foreach ($data as $item){ // se usa for each para invocar variable

    echo $item['nombre'] . "<br>";
    echo $item['email'] . "<br>";
    echo $item['celular'] . "<br>";

    

    echo"<hr>"; //linea que divide cada parrafo
}

?>

