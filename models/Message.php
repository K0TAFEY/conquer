<?php
namespace app\models;

class Message
{
	private static $_users=[
		['name'=>'Bob Nilson', 'photo'=>'/img/avatar1.jpg'],
		['name'=>'Lisa Wong', 'photo'=>'/img/avatar2.jpg'],
		['name'=>'Richard Doe', 'photo'=>'/img/avatar3.jpg'],
	];
	
	public static function findTop()
	{
		$count=rand(10,20);
		$result=['count'=>$count];
		
		$time=time();
		for ($i = 0; $i < $count; $i++) {
			$messages[]=[
					'user'=>self::$_users[rand(0,2)],
					'time'=>$time=$time-rand(30, 600),
					'message'=> 'Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh...',
			];
		}
		$result['messages']=$messages;
		return $result;
	}
	
}