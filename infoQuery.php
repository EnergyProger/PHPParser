<?php

require('lib/phpQuery.php');

$fileContent = file_get_contents("https://hotline.ua/computer/noutbuki-netbuki/");
$doc = phpQuery::newDocument($fileContent);                                                                              

foreach($doc->find(".product-item") as $key => $value)
{
    $pq = pq($value);

    $products[$key]["product-href"] = $pq->find(".h4 a")->attr("href");
    $products[$key]["product-text"] = $pq->find(".h4 a")->text();
    $products[$key]["product-price"] = $pq->find(".price-md .value")->text();
}

phpQuery::unloadDocuments();

