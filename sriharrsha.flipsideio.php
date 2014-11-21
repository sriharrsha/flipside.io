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
        
    class FlipsideIO 
     {
        use GuzzleHttp\Client;
    
        private $fkAffiliateId;
        private $fkAffiliateToken;
        private $responseType;
        private $apiBaseUrl = 'https://affiliate-api.flipkart.net/affiliate/api/';
        private $apiRequestUrl;
        private $verifySsl = false;
        
        public 
        
        function __construct($fkAffiliateId, $fkAffiliateToken, $responseType='json')
            {
                $this->fkAffiliateToken = $fkAffiliateId;
                $this->fkAffiliateToken = $fkAffiliateToken;
                //Add the affiliateId and response_type to the base URL to complete it.
                $this->apiRequestUrl.=$this->apiBaseUrl.'.'.$this->affiliateId.'.'.$this->responseType;
                    if($responseType=='xml'){
                        return new FlipsideXMLClient();
                    }
                    else{
                        return new FlipsideJSONClient();
                    }
            }

         function returnApiError(){
             switch($responseCode){
                 case 410:  echo 'URL expired';
                            break;
                
                 case 401:  echo 'API Token or Affiliate Tracking ID invalid';
                            break;
                            
                 case 403:  echo 'Tampered URLThe URL contents are modified from the originally returned value';
                            break;
             }
         }

    }//End Of Class
    ?>        