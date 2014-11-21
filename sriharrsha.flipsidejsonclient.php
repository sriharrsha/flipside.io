<?php

    /**
     * PHP Client for Flipkart Affilate API-[FLIPSIDE.IO]
     * GitHub: https://github.com/sriharrsha/flipside.io
     * License: MIT License  
     * 
     * @author Sri Harrsha <harrshasri@gmail.com>
     * @version 0.1
     */
     
    namespace sriharrsha;
        
    chdir(dirname(__DIR__));
    require 'vendor/autoload.php';
    
    class FlipsideJSONClient extends FlipsideIO
     {

        use GuzzleHttp\Client;
    
        //JSON Client Constructor
        function __construct($fkAffiliateId, $fkAffiliateToken, $responseType="json")
            {
                super($fkAffiliateId,$fkAffiliateToken);
                $this->response_type = $responseType;
                //Add the affiliateId and response_type to the base URL to complete it.
                $this->apiRequestUrl.=$this->apiBaseUrl.'.'.$this->affiliateId.'.'.$this->responseType;
                $client = new Client();
            }

        //Make Request to API
         function makeRequest(){
            $request = $client->createRequest('GET', $this->apiRequestUrl);
            $request->setHeader('Content-Type', 'application/json');
            $request->setHeader('Cache-Control: no-cache');
            $request->setHeader('Fk-Affiliate-Id',$this->fkAffiliateToken);
            $request->setHeader('Fk-Affiliate-Token',$this->fkAffiliateToken);
            $response = $client->send($request);
                 
            if(($responseCode==410)||($responseCode==403)||($responseCode==401)){
            returnApiError($responseCode);
            }
            
            return $response->xml();
        }

        
    }//End Of Class
    ?>