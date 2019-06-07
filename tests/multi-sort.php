<?php
$products=[
    [
    "name"=>"product 1",
    "price"=> 10000
    ],
    [
    "name"=>"product 2",
    "price"=> 1000
    ],
    [
    "name"=>"product 3",
    "price"=> 5000
    ]
    ];

array_multisort(array_column($products,'price'), SORT_DESC, $products);

var_dump($products);

?>