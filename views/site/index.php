<?php
use conquer\peity\PeityBarWidget;
use conquer\peity\PeityLineWidget;
use conquer\widgets\Portlet;
use conquer\flot\FlotWidget;
use yii\helpers\VarDumper;
use conquer\jvectormap\JVectorMapWidget;
use conquer\fullcalendar\FullCalendarWidget;
use conquer\daterangepicker\DaterangepickerWidget;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';

$this->blocks['page-toolbar']=DaterangepickerWidget::widget([
	'name'=>'wqe',
	'language'=>'ru',
	'options'=>[
		'class'=>'pull-right tooltips btn btn-fit-height btn-primary',
		'data-container'=>'body',
		'data-placement'=>"bottom",
		'data-original-title'=>"Change dashboard date range"
	],
	'template'=>'<i class="icon-calendar"></i>&nbsp; <span class="thin uppercase visible-lg-inline-block"></span>&nbsp; <i class="fa fa-angle-down"></i>',
]);

?>
<!-- BEGIN OVERVIEW STATISTIC BARS-->
<div class="row stats-overview-cont">
	<div class="col-md-2 col-sm-4">
		<div class="stats-overview stat-block">
			<div class="display stat ok huge">
				<?= PeityLineWidget::widget(['values'=>[5, 6, 7, 11, 14, 10, 15, 19, 15, 2], 'fill'=>['blue'], 'height'=>20, 'width'=>50]); ?>
				<div class="percent">
					 +66%
				</div>
			</div>
			<div class="details">
				<div class="title">
					 Users
				</div>
				<div class="numbers">
					 1360
				</div>
			</div>
			<div class="progress">
				<span style="width: 40%;" class="progress-bar progress-bar-info" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100">
				<span class="sr-only">
				66% Complete </span>
				</span>
			</div>
		</div>
	</div>
	<div class="col-md-2 col-sm-4">
		<div class="stats-overview stat-block">
			<div class="display stat good huge">
				<?= PeityLineWidget::widget(['values'=>[2,6,8,12, 11, 15, 16, 11, 16, 11, 10, 3, 7, 8, 12, 19], 'fill'=>['green'], 'height'=>20, 'width'=>50]); ?>
				<div class="percent">
					 +16%
				</div>
			</div>
			<div class="details">
				<div class="title">
					 Site Visits
				</div>
				<div class="numbers">
					 1800
				</div>
				<div class="progress">
					<span style="width: 16%;" class="progress-bar progress-bar-warning" aria-valuenow="16" aria-valuemin="0" aria-valuemax="100">
					<span class="sr-only">
					16% Complete </span>
					</span>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-2 col-sm-4">
		<div class="stats-overview stat-block">
			<div class="display stat bad huge">
				<?= PeityLineWidget::widget(['values'=>[2,6,8,11, 14, 11, 12, 13, 15, 12, 9, 5, 11, 12, 15, 9,3], 'fill'=>['red'], 'height'=>20, 'width'=>50]); ?>
				<div class="percent">
					 +6%
				</div>
			</div>
			<div class="details">
				<div class="title">
					 Orders
				</div>
				<div class="numbers">
					 509
				</div>
				<div class="progress">
					<span style="width: 16%;" class="progress-bar progress-bar-success" aria-valuenow="16" aria-valuemin="0" aria-valuemax="100">
					<span class="sr-only">
					16% Complete </span>
					</span>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-2 col-sm-4">
		<div class="stats-overview stat-block">
			<div class="display stat good huge">
				<?= PeityBarWidget::widget(['values'=>[1,4,9,12, 10, 11, 12, 15, 12, 11, 9, 12, 15, 19, 14, 13, 15], 'fill'=>['green'], 'height'=>20, 'width'=>50]); ?>
				<div class="percent">
					 +86%
				</div>
			</div>
			<div class="details">
				<div class="title">
					 Revenue
				</div>
				<div class="numbers">
					 1550
				</div>
				<div class="progress">
					<span style="width: 56%;" class="progress-bar progress-bar-warning" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100">
					<span class="sr-only">
					56% Complete </span>
					</span>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-2 col-sm-4">
		<div class="stats-overview stat-block">
			<div class="display stat ok huge">
			<?= PeityBarWidget::widget(['values'=>[2,6,8,12, 11, 15, 16, 17, 14, 12, 10, 8, 10, 2, 4, 12, 19], 'fill'=>['blue'], 'height'=>20, 'width'=>50]); ?>
				<div class="percent">
					 +72%
				</div>
			</div>
			<div class="details">
				<div class="title">
					 Sales
				</div>
				<div class="numbers">
					 9600
				</div>
				<div class="progress">
					<span style="width: 72%;" class="progress-bar progress-bar-danger" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100">
					<span class="sr-only">
					72% Complete </span>
					</span>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-2 col-sm-4">
		<div class="stats-overview stat-block">
			<div class="display stat bad huge">
				<?= PeityBarWidget::widget(['values'=>[1,7,9,11, 14, 12, 6, 7, 4, 2, 9, 8, 11, 12, 14, 12, 10], 'fill'=>['red'], 'height'=>20, 'width'=>50]); ?>
				<div class="percent">
					 +15%
				</div>
			</div>
			<div class="details">
				<div class="title">
					 Stock
				</div>
				<div class="numbers">
					 2090
				</div>
				<div class="progress">
					<span style="width: 15%;" class="progress-bar progress-bar-success" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
					<span class="sr-only">
					15% Complete </span>
					</span>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END OVERVIEW STATISTIC BARS-->
<div class="clearfix">
</div>
<div class="row">
	<div class="col-md-6 col-sm-12">
		<!-- BEGIN PORTLET-->
		<?php $portlet=Portlet::begin(['icon'=>'bar-chart', 'caption'=>'Site Visits', 'actions'=><<<ACTIONS
<div class="btn-group" data-toggle="buttons">
	<label class="btn btn-default btn-sm active">
	<input type="radio" name="options" class="toggle">New </label>
	<label class="btn btn-default btn-sm">
	<input type="radio" name="options" class="toggle">Returning </label>
</div>
ACTIONS
		]);?>
		
			<?= FlotWidget::widget([
				'htmlOptions'=>['class'=>'chart'],
				'data'=>[
					['labels'=>'Unique Visits', 'data'=>array_map(function($v){return [$v, rand(10,50)];}, range(1, 30))],
					['labels'=>'Page Views', 'data'=>array_map(function($v){return [$v, rand(10,50)];}, range(1, 30))],
				],
				'options'=>[
					'series'=>[
						'lines'=> [
							'show'=> true,
							'lineWidth'=> 2,
							'fill'=> true,
							'fillColor'=> [
								'colors'=> [
										['opacity'=>0.05],
										['opacity'=>0.01],
									]
							],
						],
						'points'=>[
							'show'=>true
						],
						'shadowSize'=> 2,
					],		
					'grid'=> [
						'hoverable'=> true,
						'clickable'=> true,
						'tickColor'=> "#eee",
						'borderWidth'=> 0,
					],
					'colors'=> ["#d12610", "#37b7f3", "#52e136"],
					'xaxis' => [
						'ticks'=> 11,
						'tickDecimals'=> 0,
					],
					'yaxis'=> [
						'ticks'=> 11,
						'tickDecimals'=> 0,
					]		
				],
			]); ?>
<!-- 				<div id="site_statistics_loading"> -->
<!-- 					<img src="/img/loading.gif" alt="loading"/> -->
<!-- 				</div> -->
<!-- 				<div id="site_statistics_content" class="display-none"> -->
<!-- 					<div id="site_statistics" class="chart"> -->
<!-- 					</div> -->
<!-- 				</div> -->
		<? Portlet::end(); ?>
		<!-- END PORTLET-->
	</div>
	<div class="col-md-6 col-sm-12">
		<!-- BEGIN REGIONAL STATS PORTLET-->
		<?php $portlet=Portlet::begin(['icon'=>'globe', 'caption'=>'Regional Stats','tools'=>[
				['class'=>'collapse', 'href'=>'javascript:;'],
				['class'=>'config', 'href'=>'#portlet-config', 'data-toggle'=>'modal'],
				['class'=>'reload', 'href'=>'javascript:;'],
				['class'=>'remove', 'href'=>'javascript:;'],
		]]); ?>
					<?php echo JVectorMapWidget::widget(['map'=>'world-mill-en', 'htmlOptions'=>['class'=>'vmaps']]); ?>
		<?php Portlet::end();?>
		<!-- END REGIONAL STATS PORTLET-->
	</div>
</div>
<div class="clearfix">
</div>
<div class="row ">
	<div class="col-md-6 col-sm-6">
		<!-- BEGIN PORTLET-->
		<?php $portlet=Portlet::begin(['icon'=>'calendar', 'caption'=>'Event Calendar']); ?>
		<?php echo FullCalendarWidget::widget([
				'language'=>Yii::$app->language,
				'options'=>[
					'events'=>[
						['title'=>'All Day Event', 'start'=>'js:moment().startOf("month")','backgroundColor'=>'yellow'],
 						['title'=>'All Day Event', 'start'=>'js:moment().subtract(5,"days").startOf("day")','backgroundColor'=>'green'],
 						['title'=>'Long Event', 'start'=>'js:moment().startOf("month")','backgroundColor'=>'yellow'],
 						['title'=>'Repeating Event', 'start'=>'js:moment().subtract(3,"days").hours(16).minutes(0)','backgroundColor'=>'red', 'allDay'=>false],
// 						['title'=>'Repeating Event', 'start'=>'js:new Date(y, m, d + 4, 16, 0)','backgroundColor'=>'green', 'allDay'=>false],
// 						['title'=>'Lunch', 'start'=>'js:Date(y, m, d, 12, 0)', 'end'=>'js:new Date(y, m, d, 14, 0)', 'allDay'=> false, 'backgroundColor'=> 'grey'],
// 						['title'=>'Birthday Party', 'start'=>'js:new Date(y, m, d + 1, 19, 0)', 'end'=>'js:new Date(y, m, d + 1, 22, 30)', 'allDay'=> false, 'backgroundColor'=> 'purple'],
 						['title'=>'Click for Google', 'start'=>'js:moment().subtract( 4,"days")','end'=>'js:moment().subtract(3,"days")', 'backgroundColor'=>'blue', 'url'=> 'http://google.com/',],
					],
				],
		]); ?>
		<?php Portlet::end();?>
		<!-- END PORTLET-->
	</div>
	<div class="col-md-6 col-sm-6">
		<!-- BEGIN PORTLET-->
		<div class="portlet">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-comments"></i>Conversations
				</div>
				<div class="tools">
					<a href="" class="collapse"></a>
					<a href="#portlet-config" data-toggle="modal" class="config"></a>
					<a href="" class="reload"></a>
					<a href="" class="remove"></a>
				</div>
			</div>
			<div class="portlet-body" id="chats">
				<div class="scroller" style="height: 435px;" data-always-visible="1" data-rail-visible1="1">
					<ul class="chats">
						<li class="in">
							<img class="avatar img-responsive" alt="" src="/img/avatar1.jpg"/>
							<div class="message">
								<span class="arrow">
								</span>
								<a href="#" class="name">Bob Nilson</a>
								<span class="datetime">
								at Jul 25, 2012 11:09 </span>
								<span class="body">
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
							</div>
						</li>
						<li class="out">
							<img class="avatar img-responsive" alt="" src="/img/avatar2.jpg"/>
							<div class="message">
								<span class="arrow">
								</span>
								<a href="#" class="name">Lisa Wong</a>
								<span class="datetime">
								at Jul 25, 2012 11:09 </span>
								<span class="body">
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
							</div>
						</li>
						<li class="in">
							<img class="avatar img-responsive" alt="" src="/img/avatar1.jpg"/>
							<div class="message">
								<span class="arrow">
								</span>
								<a href="#" class="name">Bob Nilson</a>
								<span class="datetime">
								at Jul 25, 2012 11:09 </span>
								<span class="body">
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
							</div>
						</li>
						<li class="out">
							<img class="avatar img-responsive" alt="" src="/img/avatar3.jpg"/>
							<div class="message">
								<span class="arrow">
								</span>
								<a href="#" class="name">Richard Doe</a>
								<span class="datetime">
								at Jul 25, 2012 11:09 </span>
								<span class="body">
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
							</div>
						</li>
						<li class="in">
							<img class="avatar img-responsive" alt="" src="/img/avatar3.jpg"/>
							<div class="message">
								<span class="arrow">
								</span>
								<a href="#" class="name">Richard Doe</a>
								<span class="datetime">
								at Jul 25, 2012 11:09 </span>
								<span class="body">
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
							</div>
						</li>
						<li class="out">
							<img class="avatar img-responsive" alt="" src="/img/avatar1.jpg"/>
							<div class="message">
								<span class="arrow">
								</span>
								<a href="#" class="name">Bob Nilson</a>
								<span class="datetime">
								at Jul 25, 2012 11:09 </span>
								<span class="body">
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
							</div>
						</li>
						<li class="in">
							<img class="avatar img-responsive" alt="" src="/img/avatar3.jpg"/>
							<div class="message">
								<span class="arrow">
								</span>
								<a href="#" class="name">Richard Doe</a>
								<span class="datetime">
								at Jul 25, 2012 11:09 </span>
								<span class="body">
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
							</div>
						</li>
						<li class="out">
							<img class="avatar img-responsive" alt="" src="/img/avatar1.jpg"/>
							<div class="message">
								<span class="arrow">
								</span>
								<a href="#" class="name">Bob Nilson</a>
								<span class="datetime">
								at Jul 25, 2012 11:09 </span>
								<span class="body">
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. sed diam nonummy nibh euismod tincidunt ut laoreet. </span>
							</div>
						</li>
					</ul>
				</div>
				<div class="chat-form">
					<div class="input-cont">
						<input class="form-control" type="text" placeholder="Type a message here..."/>
					</div>
					<div class="btn-cont">
						<span class="arrow">
						</span>
						<a href="" class="btn btn-primary icn-only"><i class="fa fa-check"></i></a>
					</div>
				</div>
			</div>
		</div>
		<!-- END PORTLET-->
	</div>
</div>
