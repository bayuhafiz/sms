<?php
/**
 * Just an auto reply service
 * @author Tim Lytle <tim@timlytle.net>
 */

defined('NEXMO_KEY') || (getenv('NEXMO_KEY') AND define('NEXMO_KEY', getenv('NEXMO_KEY')));
defined('NEXMO_SECRET') || (getenv('NEXMO_SECRET') AND define('NEXMO_SECRET', getenv('NEXMO_SECRET')));

//request looks to be from Nexmo
$request = array_merge($_GET, $_POST); //method configurable via Nexmo API / Dashboard
if(isset($request['msisdn'], $request['text'])){
    try{
        $text = 'Hey, this is an demo number on Nexmo.com';
        $uri = sprintf('http://rest.nexmo.com/sms/json?username=%1$s&password=%2$s&from=%3$s&to=%4$s&text=%5$s',
            NEXMO_KEY,
            NEXMO_SECRET,
            $request['to'],
            $request['msisdn'],
            urlencode($text));
        $result = file_get_contents($uri);
        error_log($result);
    } catch (Exception $e) {
        error_log($e); //NOTE: if you want Nexmo to retry, just give a non-2XX response
    }
}