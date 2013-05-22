<?php
abstract class MUADriver{
    const SERVER = 'go.urbanairship.com';
    const BASE_URL = 'https://go.urbanairship.com/api';
    const DEVICE_TOKEN_URL =  '/device_tokens/';
    const PUSH_URL = '/push/';
    const BROADCAST_URL = '/push/broadcast/';
    const FEEDBACK_URL = '/device_tokens/feedback/';
	protected static $objClient = null;
	public static function Init(){

		if(is_null(self::$objClient)){

		}
	}
    public static function SendRequest($strUrl, $strMethod, $arrPayload){
        $strJson = json_encode($arrPayload);

        $process = curl_init(self::BASE_URL . $strUrl);
        curl_setopt($process, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json'
        ));
        curl_setopt($process, CURLOPT_HEADER, 1);
        curl_setopt($process, CURLOPT_USERPWD, __URBANAIRSHIP_KEY__ . ":" . __URBANAIRSHIP_MASTER_SECRET__);
        curl_setopt($process, CURLOPT_TIMEOUT, 30);
        curl_setopt($process, CURLOPT_POST, 1);
        curl_setopt($process, CURLOPT_POSTFIELDS, $strJson);
        curl_setopt($process, CURLOPT_RETURNTRANSFER, TRUE);
        $strReturn = curl_exec($process);
        curl_close($process);
        return json_decode($strReturn);
    }
	public static function Push($arrPayload, $arrApids = null, $arrDeviceTokens = null, $arrTags = null, $strBadge = null){
		self::Init();
        $arrPayload['apids'] = $arrApids;


        $arrResponse = self::SendRequest(self::PUSH_URL, 'POST', $arrPayload);


        //error_reporting($intError);
        return $arrResponse;
	}
	public static function Register($arrAlias = null, $arrTags = null, $strBadge = null){
		self::Init();
        //$intError = error_reporting(0);
        $arrResponse = self::$objClient->register($strDeviceToken, $arrAlias, $arrTags, $strBadge);
        //error_reporting($intError);
        return $arrResponse;
	}
}