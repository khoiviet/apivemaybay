<?php
    //include('curl.php');
    require 'lib/nusoap.php';
    
    $wsdl = 'http://[subdomain].apivemaybay.net/AirlineTicket.asmx?wsdl';
    $endpoint = 'http://[subdomain].apivemaybay.net/AirlineTicket.asmx';
    
    $client = new nusoap_client($wsdl,true);
    $client->setEndpoint($endpoint);
    
    $params = array('startPoint'=>'SGN','endPoint'=>'HAN','departureDate'=>'2017-07-14 23:59:59','returnDate'=>false,'adults'=>1,'children'=>1,'infants'=>0,'authentication'=>array('HeaderUser'=>'[username]','HeaderPassword'=>'[password]'));
    
    try{
        $response = $client->call('DomesticResult',$params);      
    
    }  catch (Exception $e){
        $e->getMessage();
    }
    echo $client;
    
    //var_dump($response);
?>
