<?php

namespace PushNotification;

class iOS
{
	/**
	Push Notification Command
	*//*
	typedef NS_ENUM(NSUInteger, PushActionNotification) {
   
    PushActionNotificationUnknown = 0,
    PushActionNotificationSyncOrder=1 , //for collection and resurvey type
    PushActionNotificationMessageInbox = 2,
    PushActionNotificationBlockAndResetDevice = 3,
    PushActionNotificationBlockDeviceOnly = 4,
    PushActionNotificationUnblockDevice = 5,//open blocking device
    PushActionNotificationResetDeviceOnly = 6,
    PushActionNotificationMonitoringLocationOn = 7,
    PushActionNotificationMonitoringLocationOff = 8,

    }
	*/

	public function __construct()
    {        
        
    }

    public $PushAction = array(0 => "PushActionNotificationUnknown",
    		1 => "PushActionNotificationSyncOrder",
    		2 => "PushActionNotificationMessageInbox",
    		3 => "PushActionNotificationBlockAndResetDevice",
    		4 => "PushActionNotificationBlockDeviceOnly",
    		5 => "PushActionNotificationUnblockDevice",
    		6 => "PushActionNotificationResetDeviceOnly",
    		7 => "PushActionNotificationMonitoringLocationOn",
    		8 => "PushActionNotificationMonitoringLocationOff");

    /**
	Message Structure
	*/
	/*	
    {
    "aps" : {
	        "alert" : "",
	        “content-available" : "1",
	        "sound" : ""
	    },
	“cmd_act" : “1"
	}
	*/

    public function Send($devicetoken, $pushnotificationconstant, $message, $appcode=null, $timestamp=null)
    {
    	// My device token here (without spaces):
		$deviceToken = $devicetoken;		

		// My private key's passphrase here:
		$passphrase = 'marco1234';

		$ctx = stream_context_create();
		//echo dirname(__FILE__);
		stream_context_set_option($ctx, 'ssl', 'local_cert', dirname(__FILE__).'/ck.pem');
		stream_context_set_option($ctx, 'ssl', 'passphrase', $passphrase);

		// Open a connection to the APNS server
		try
		{
			$fp = stream_socket_client(
			    //'ssl://gateway.sandbox.push.apple.com:2195', $err,
			    'ssl://gateway.push.apple.com:2195', $err,
			    $errstr, 60, STREAM_CLIENT_CONNECT|STREAM_CLIENT_PERSISTENT, $ctx);

			if (!$fp)
			exit("Failed to connect: $err $errstr" . PHP_EOL);

			//echo 'Connected to APNS' . PHP_EOL;

			// Create the payload body
			$body["aps"] = array(
			    "alert" => $message,
			    "content-available" => "1",
			    "sound" => ""
			);
			$body["cmd_act"] = $pushnotificationconstant;
			if (isset($appcode))
			{
				$body["id"] = $devicetoken;
				$body["lid"] = $appcode;
				$body["timestamp"] = $timestamp;
			}

			// Encode the payload as JSON
			$payload = json_encode($body);

			// Build the binary notification
			$msg = chr(0) . pack('n', 32) . pack('H*', $deviceToken) . pack('n', strlen($payload)) . $payload;

			// Send it to the server
			$result = fwrite($fp, $msg, strlen($msg));

			if (!$result)
				return array("0","Message not send " . PHP_EOL);
			else
				return array("1","Message sent " . PHP_EOL);

			// Close the connection to the server
			fclose($fp);	
		}
		catch(\Exception $err) {  
        	return array("0",$err);
        }
    }	
}