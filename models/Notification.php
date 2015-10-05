<?php
namespace app\models;

class Notification
{
	private static $_messages=[
		['status'=>'success', 'icon'=>'plus', 'message'=>'New user registered.'],
		['status'=>'danger', 'icon'=>'bolt', 'message'=>'Server overloaded.'],
		['status'=>'warning', 'icon'=>'bell', 'message'=>'Server not responding.'],
		['status'=>'info', 'icon'=>'bullhorn', 'message'=>'Application error.'],		
	];
	
	public static function findTop()
	{
		$count=rand(10,20);
		$result=['count'=>$count];
		
		$time=time();
		for ($i = 0; $i < $count; $i++) {
			$message=self::$_messages[rand(0,3)];
			$message['time']=$time=$time-rand(30, 600);
			$messages[]=$message;
		}
		$result['messages']=$messages;
		return $result;
	}
	
}
