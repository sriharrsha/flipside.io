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
        
    class FlipsideXMLClient extends FlipsideIO
     {
        
        use GuzzleHttp\Client;
    
        private $fkAffiliateId;
        private $fkAffiliateToken;
        private $responseType;
        private $apiBaseUrl = 'https://affiliate-api.flipkart.net/affiliate/api/';
        private $apiRequestUrl;
        private $verifySsl = false;
        
        //XML Client Constructor
        function __construct($fkAffiliateId, $fkAffiliateToken, $responseType="xml")
            {
                $this->fkAffiliateToken = $fkAffiliateId;
                $this->fkAffiliateToken = $fkAffiliateToken;
                //Add the affiliateId and response_type to the base URL to complete it.
                $this->apiRequestUrl.=$this->apiBaseUrl.'.'.$this->affiliateId.'.'.$this->responseType;
                $client = new Client();
            }

        //Make Request to API
         function makeRequest(){
            $request = $client->createRequest('GET', $this->apiRequestUrl);
            $request->setHeader('Content-Type', 'application/xml');
            $request->setHeader('Cache-Control: no-cache');
            $request->setHeader('Fk-Affiliate-Id',$this->fkAffiliateToken);
            $request->setHeader('Fk-Affiliate-Token',$this->fkAffiliateToken);
            $response = $client->send($request);
            $responseCode = $response->getStatusCode();
           
            if(($responseCode==410)||($responseCode==403)||($responseCode==401)){
            returnApiError($responseCode);
            }
            
            return $response->xml();
        }
        
    }//End Of Class
    ?>        