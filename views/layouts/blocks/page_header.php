<?php 
/* @var $this \yii\web\View */
use conquer\daterangepicker\DaterangepickerWidget;
use conquer\widgets\Breadcrumbs;
?>

<!-- BEGIN PAGE HEADER-->
<h3 class="page-title">
Dashboard <small>statistics and more</small>
</h3>
<div class="page-bar">
	<ul class="page-breadcrumb">
		<li>
			<i class="fa fa-home"></i>
			<a href="index.html">Home</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="#">Dashboard</a>
		</li>
	</ul>
	<?php if(isset($this->blocks['page-toolbar'])): ?>
	<div class="page-toolbar">
		<?= $this->blocks['page-toolbar']?>
	</div>
	<?php endif;?>
</div>
<!-- END PAGE HEADER-->