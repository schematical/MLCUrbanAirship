<?php
abstract class MUADriver{
	protected static $objClient = null;
	public static function Init(){
		if(is_null(self::$objClient)){
            $intError = error_reporting(0);
		 	self::$objClient = new Airship(__URBANAIRSHIP_KEY__, __URBANAIRSHIP_MASTER_SECRET__);
            error_reporting($intError);
		}
	}
	public static function Push($arrMessage, $arrApids = null, $arrDeviceTokens = null, $arrTags = null, $strBadge = null){
		self::Init();
        $arrMessage['apids'] = $arrApids;
		$arrResponse = self::$objClient->push($arrMessage, $arrDeviceTokens, $arrTags, $strBadge);

        return $arrResponse;
	}
	public static function Register($arrAlias = null, $arrTags = null, $strBadge = null){
		self::Init();
        $intError = error_reporting(0);
        $arrResponse = self::$objClient->register($strDeviceToken, $arrAlias, $arrTags, $strBadge);
        error_reporting($intError);
        return $arrResponse;
	}
}