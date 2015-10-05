<?php 
/* @var $this \yii\web\View */
?>
<div class="page-header-fixed">
<?= $this->renderFile(dirname(__FILE__).'/blocks/header.php') ?>
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<?php // $this->renderFile(dirname(__FILE__).'/blocks/sidebar.php') ?>
	<?php $this->beginContent(dirname(__FILE__).'/blocks/sidebar.php'); ?>
	<?php $this->endContent();?>
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<?= $this->renderFile(dirname(__FILE__).'/blocks/page_header.php'); ?>
			<?= $content; ?>			
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<?= $this->renderFile(dirname(__FILE__).'/blocks/footer.php'); ?>
</div>