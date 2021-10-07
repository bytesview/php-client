<?php
require_once '../autoload.php';
require_once 'config.php';

use NewsdataIO\NewsdataApi;

$newsdataApiObj = new NewsdataApi(NEWSDATA_API_KEY);

$data = array(
                "country"   =>  "us",
                "language"  =>  "en",
                "category"  =>  "business"
            );

$response = $newsdataApiObj->news_sources($data);

var_dump($response);