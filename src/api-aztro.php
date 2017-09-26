<?php

class AztroAPI 
{
	private $endpoint = 'http://aztro.herokuapp.com'; // Heroku Test Endpoint

	public function queryAztro($sign, $day) {
		
        $aztro = curl_init($this->endpoint.'?sign='.$sign.'&day='.$day);

        curl_setopt_array($aztro, array(
            CURLOPT_POST => TRUE,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            )
        ));

        $response = curl_exec($aztro);

        if($response === FALSE){
            die(curl_error($aztro));
        }

        $responseData = json_decode($response, TRUE);

        return $responseData;
    }
}