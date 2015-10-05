<body class="<?= empty($this->params['bodyclass'])?'page-header-fixed':$this->params['bodyclass']; ?>">
<?php $this->beginBody();?>
<?php $this->beginContent(dirname(__FILE__).'/blocks/header.php'); ?>
<?php $this->endContent();?>
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<?php $this->beginContent(dirname(__FILE__).'/blocks/sidebar.php'); ?>
	<?php $this->endContent();?>
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-success">Save changes</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<?php 
				$this->beginContent(dirname(__FILE__).'/blocks/page_header.php');
				$this->endContent();
			?>
			<?= $content; ?>			
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<?php 
$this->beginContent(dirname(__FILE__).'/blocks/footer.php');
$this->endContent();
?>
<?php $this->endBody() ?>
</body>