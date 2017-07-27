<?php
    //include('curl.php');
    require 'lib/nusoap.php';
    
    $wsdl = 'http://triph.apivemaybay.net/AirlineTicket.asmx?wsdl';
    $endpoint = 'http://triph.apivemaybay.net/AirlineTicket.asmx';
    
    $client = new nusoap_client($wsdl,true);
    $client->setEndpoint($endpoint);
    
    $params = array('startPoint'=>'SGN','endPoint'=>'HAN','departureDate'=>'2017-07-14 23:59:59','ReturnFlight'=>false,'adults'=>1,'children'=>1,'authentication'=>array('HeaderUser'=>'Triph','HeaderPassword'=>'$|Lsv0;4Nx;>9#!'));  // tùy hàm mà t?o tham s?
    
    //$result = $client->call('DomesticResultResult',$params);

    /*$url='http://triph.apivemaybay.net/AirlineTicket.asmx';
    $options = array( 
        'soap_version'=>SOAP_1_2, 
        'exceptions'=>true, 
        'trace'=>1, 
        'cache_wsdl'=>WSDL_CACHE_BOTH
    ); 
    $client = new SoapClient($url, $options);*/
    try{
        $response = $client->call('DomesticResult',$params);      
    
    }  catch (Exception $e){
        $e->getMessage();
    }
    echo $client;
    
    //var_dump($response);
?>