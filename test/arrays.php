<?php // arrays.php
$classroom = '425';

//// Indexes:      0     1     2     3
//$classrooms = ['317','330','324','329'];
//array_push($classrooms, $classroom);
//$reversedClassrooms = array_reverse($classrooms, true);
//
//if ( in_array('429', $classrooms) )
//{
//    echo '429 is beschikbaar!!!';
//}
//else
//{
//    echo '429 is niet beschikbaar';
//}
//
//var_dump($reversedClassrooms);

$classroom = [
    'name'          => '317',
    'seats'         => 30,
    'isAvailable'   => true,
    'hasBeamer'     => true
];
$classrooms = [
    [
        'name'          => '322',
        'seats'         => 25,
        'isAvailable'   => false,
        'hasBeamer'     => false
    ],
    [
        'name'          => '321',
        'seats'         => 28,
        'isAvailable'   => true,
        'hasBeamer'     => false
    ],
    [
        'name'          => '320',
        'seats'         => 35,
        'isAvailable'   => false,
        'hasBeamer'     => true
    ]
];

foreach( $classrooms as $classroom )
{
    echo "<h2> {$classroom['name']} </h2>";
    echo "<p>Aantal seats: {$classroom['seats']} </p>";
}
