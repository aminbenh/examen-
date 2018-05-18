<?php
$products = array(
                  array("title" => "Bert", "image" => "be.jpeg", "text" => "Dit is het Bert product", "prijs" => 12.5),
                  array("title" => "Ernie", "image" => "ernie.png", "text" => "Dit is het Ernie product", "prijs" => 12.5),
                  array("title" => "Bernie", "image" => "bert.png", "text" => "Dit is het Bernie product", "prijs" => 12.5),
                  array("title" => "rick", "image" => "rickandmorty.jpg", "text" => "Dit is het rick product", "prijs" => 22.5)
                 
);

echo $products[0]["image"];

?>