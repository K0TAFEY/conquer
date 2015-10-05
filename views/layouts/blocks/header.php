<?php 
use yii\helpers\Html; 
use conquer\widgets\Menu;
use app\models\PendingTask;
use app\models\Message;
use app\models\Notification;
?>
<!-- BEGIN HEADER -->
<div class="header navbar navbar-fixed-top">
	<!-- BEGIN TOP NAVIGATION BAR -->
	<div class="header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<?= Html::a(Html::img("@web/img/logo.png",['alt'=>'logo']),['@web'])?>            
        </div>
        <form class="search-form search-form-header" role="form" action="index.html">
            <div class="input-icon right">
                <i class="icon-magnifier"></i>
                <input type="text" class="form-control input-sm" name="query" placeholder="Search...">
            </div>
        </form>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<img src="/img/menu-toggler.png" alt=""/>
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<?php
		
		$formatter = Yii::$app->formatter;
		
		$notifications=Notification::findTop();
		$notificationItems=[];
		foreach ($notifications['messages'] as $message){
			$notificationItems[]=[
				'icon'=>$message['icon'],
				'template'=>'<a href="{url}"><span class="label label-sm label-icon label-'.$message['status'].'">{icon}</span>{label}<span class="time">'.$formatter->asRelativeTime($message['time']).'</span></a>',
				'label'=>$message['message'],
				'url'=>'#',						
			];
		}
		$messages=Message::findTop();
		$messageItems=[];
		foreach ($messages['messages'] as $message){
			$time= $formatter->asRelativeTime($message['time']);
			//(new Moment('@'.$message['time']))->fromNow()->getRelative();
			$messageItems[]=[
				'url'=>'#?a=view',
				'label'=>Html::encode($message['user']['name']),
				'template'=><<<TEMPLATE
<a href="{url}">
	<span class="photo"><img src="{$message['user']['photo']}" alt=""/></span>
	<span class="subject">
		<span class="from">{label}</span>
		<span class="time">$time</span>
	</span>
</a>
TEMPLATE
			];
		}
		$tasks=PendingTask::findTop();
		$taskItems=[];
		foreach ($tasks['messages'] as $message) {
			$taskItems[]=[
				'url'=>'#',
				'label'=>Html::encode($message['title']),
				'template'=><<<TEMPLATE
<a href="#">
	<span class="task">
		<span class="desc">{label}</span>
		<span class="percent">{$message['progress']}%</span>
	</span>
	<span class="progress">
		<span style="width: {$message['progress']}%;" class="progress-bar progress-bar-{$message['status']}" aria-valuenow="{$message['progress']}" aria-valuemin="0" aria-valuemax="100">
			<span class="sr-only">{$message['progress']}% Complete </span>
		</span>
	</span>
</a>
TEMPLATE
			];
		}
		$items=[
			[
				'icon'=>'bell',
				'options'=>['class'=>'dropdown', 'id'=>'header_notification_bar'], 
				'template'=>'<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">{icon}'.'<span class="badge badge-success">'.$notifications['count'].'</span></a>',
				'submenuTemplate'=>'<ul class="dropdown-menu extended notification">{items}</ul>',
				'items'=>[
					['label'=>'You have'. $notifications['count'].' new notifications','template'=>'<p>{label}</p>'],
					['submenuTemplate'=>'<ul class="dropdown-menu-list scroller" style="height: 250px;">{items}</ul>', 'template'=>'','items'=>$notificationItems],
					['url'=>'#', 'label'=>'See all notifications', 'icon'=>'angle-right', 'options'=>['class'=>'external'],'template'=>'<a href="{url}">{label} {icon}</a>'],
				],
			],
			[
				'icon'=>'envelope-open',
				'options'=>['class'=>'dropdown', 'id'=>'header_inbox_bar'],
				'template'=>'<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">{icon}'.'<span class="badge badge-info">'.$messages['count'].'</span></a>',
				'submenuTemplate'=>'<ul class="dropdown-menu extended inbox">{items}</ul>',
				'items'=>[
					['label'=>'You have'. $messages['count'].' new messages','template'=>'<p>{label}</p>'],
					['submenuTemplate'=>'<ul class="dropdown-menu-list scroller" style="height: 250px;">{items}</ul>', 'template'=>'','items'=>$messageItems],
					['url'=>'#', 'label'=>'See all messages', 'icon'=>'angle-right', 'options'=>['class'=>'external'],'template'=>'<a href="{url}">{label} {icon}</a>'],
				],
			],
			[
				'icon'=>'calendar',
				'options'=>['class'=>'dropdown', 'id'=>'header_task_bar'],
				'template'=>'<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">{icon}'.'<span class="badge badge-warning">'.$tasks['count'].'</span></a>',
				'submenuTemplate'=>'<ul class="dropdown-menu extended tasks">{items}</ul>',
				'items'=>[
					['label'=>'You have'. $messages['count'].' pending tasks','template'=>'<p>{label}</p>'],
					['submenuTemplate'=>'<ul class="dropdown-menu-list scroller" style="height: 250px;">{items}</ul>', 'template'=>'','items'=>$taskItems],
					['url'=>'#', 'label'=>'See all tasks', 'icon'=>'angle-right', 'options'=>['class'=>'external'],'template'=>'<a href="{url}">{label} {icon}</a>'],
				],
			],
			[
				'options'=>['class'=>'dropdown user'],
				'template'=>'<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"><img alt="" src="/img/avatar3_small.jpg"/><span class="username username-hide-on-mobile">Nick </span><i class="fa fa-angle-down"></i></a>',
				'submenuTemplate'=>'<ul class="dropdown-menu">{items}</ul>',
				'items'=>[
					['url'=>['site/extra_profile'], 'icon'=>'user','label'=>'My Profile'],
					['url'=>['site/page_calendar'], 'icon'=>'calendar','label'=>'My Calendar'],
					['url'=>['site/page_inbox'], 'icon'=>'envelope','label'=>'My Inbox', 'template'=>'<a href="{url}">{icon} {label} <span class="badge badge-danger">'.$messages['count'].'</span></a>'],
					['template'=>'','options'=>['class'=>'divider']],
					['url'=>['site/logout'], 'icon'=>'key','label'=>'Log Out'],
				],
			],
		];
		echo Menu::widget([
			'options'=> ['class'=>'nav navbar-nav pull-right'],
			'iconTemplate'=>'<i class="fa fa-{icon}"></i>',
			'linkTemplate'=> '<a href="{url}">{icon} {label}</a>',
			'labelTemplate'=> '<span class="title">{label}</span>',
			'submenuTemplate' => "\n<ul class=\"sub-menu\">\n{items}\n</ul>\n",
			'items'=>$items,
		]); ?>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->