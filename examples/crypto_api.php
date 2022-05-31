<?php
require_once '../autoload.php';
require_once 'config.php';

use NewsdataIO\NewsdataApi;

$newsdataApiObj = new NewsdataApi(NEWSDATA_API_KEY);

$data = array(
                "q" => "bitcoin"
            );

$response = $newsdataApiObj->get_crypto_news($data);

var_dump($response);