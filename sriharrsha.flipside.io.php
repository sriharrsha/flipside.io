<?php

    /**
     * PHP Client for Flipkart Affilate API (UNOFFICIAL)
     * GitHub: https://github.com/sriharrsha/flipside.io
     * License: MIT License  
     * 
     * @author Sri Harrsha <harrshasri@gmail.com>
     * @version 0.1
     */
   
    chdir(dirname(__DIR__));
    require 'vendor/autoload.php';
    
    use GuzzleHttp\Client;

    $client = new Client();
    
    //Input
    $encodedSearchString=urlencode($searchString);
    $apiKey="E7Rr%2FqMPnkQI17IYra0sLY%2BsVOT98JYICtAlRfttddnIK82W%2BMVRi2JmO6LbGXnrDlgy23ul9sw%2BsSdUs6XAqA%3D%3D";
    
    
    
    //Make Request to API
    $request = $client->createRequest('GET', "https://api.import.io/store/data/256b5513-fe70-4b5f-b1ee-ed4becd1cff3/_query?input/search_string=".$encodedSearchString."&_user=f8c0bfcd-90d8-44b1-99b7-95dfce89bcb1&_apikey=i4i%2BGLm3InuHsi8WS4FJCrbcWTI9w3By6kEX0dkBvg3Wwab%2FUJclilRJAmlrAZO2ADcpkCUgme18ThduL05AzQ%3D%3D");
    $request->setHeader('Content-Type', 'application/json');
    $request->setHeader('import-io-client','import.io PHP client');
    $request->setHeader('import-io-client-version','2.0.0');
    $response = $client->send($request);
    $resultpagejson =$response->json();
    ?>