<?php
namespace app\models;

class PendingTask
{
	private static $_statuses=[
		'success', 'danger', 'warning', 'info', 'important'
	];
	
	public static function findTop()
	{
		$count=rand(10,20);
		$result=['count'=>$count];
		$time=time();
		for ($i = 0; $i < $count; $i++) {
			$messages[]=[
				'status'=>self::$_statuses[rand(0,4)],
				'progress'=>rand(10, 90),
				'title'=> 'Task title #'.($i+1),
			];
		}
		$result['messages']=$messages;
		return $result;
	}
	
}
