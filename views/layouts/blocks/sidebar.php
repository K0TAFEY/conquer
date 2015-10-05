<?php  
use conquer\widgets\Menu;
?>
<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
	<div class="page-sidebar navbar-collapse collapse">
		<!-- BEGIN SIDEBAR MENU -->
		<!-- DOC: for circle icon style menu apply page-sidebar-menu-circle-icons class right after sidebar-toggler-wrapper -->
		<?= Menu::widget([
				'options'=> ['class'=>'page-sidebar-menu page-sidebar-menu-circle-icons'],
				'linkTemplate'=> '<a href="{url}">{icon}<span class="title">{label}</span></a>',
				'labelTemplate'=> '<span class="title">{label}</span>',
				'submenuTemplate' => "\n<ul class=\"sub-menu\">\n{items}\n</ul>\n",
				'activateParents'=> true,
				'items'=>[
					['options'=>['class'=>'sidebar-toggler-wrapper'], 'template'=>'<div class="sidebar-toggler"></div><div class="clearfix"></div>'],
					['url'=>['site/index'], 'icon'=>'home', 'label' => 'Dashboard'],
					['url'=>'javascript:;','icon'=>'puzzle','label'=>'Page Layouts','template' => '<a href="{url}">{icon}<span class="title">{label}</span><span class="arrow "></span></a>', 'items'=>[
						['url'=>['layout/sidebar_fixed'],'label'=>' Sidebar Fixed Page', 'icon'=>'anchor'],
						['url'=>['layout/sidebar_closed'],'label'=>' Sidebar Closed Page', 'icon'=>'book-open'],
						['url'=>['layout/boxed_page'],'label'=>' Boxed Page', 'icon'=>'pin'],
						['url'=>['layout/session_timeout'],'label'=>' Session Timeout', 'icon'=>'vector', 'template' => '<a href="{url}">{icon}{label}<span class="badge badge-warning">new</span></a>'],
						['url'=>['layout/idle_timeout'],'label'=>' User Idle Timeout', 'icon'=>'cursor'],
						['url'=>['layout/language_bar'],'label'=>' Language Bar', 'icon'=>'rocket'],
						['url'=>['layout/disabled_menu'],'label'=>' Disabled Menu Links', 'icon'=>'link'],
						['url'=>['layout/sidebar_reversed'],'label'=>' Reversed Sidebar', 'icon'=>'settings', 'template' => '<a href="{url}">{icon}<span class="badge badge-success">new</span>{label}</a>'],
						['url'=>['layout/blank_page'],'label'=>' Blank Page', 'icon'=>'paper-clip'],
						['url'=>['layout/ajax'],'label'=>' Content Loading via Ajax', 'icon'=>'bubble'],
					]],
					['url'=>'javascript:;','icon'=>'present','label'=>'UI Features','template' => '<a href="{url}">{icon}<span class="title">{label}</span><span class="arrow "></span></a>', 'items'=>[
						['url'=>['site/ui_general'],'label'=>'General'],
						['url'=>['site/ui_buttons'],'label'=>'Buttons'],
							['url'=>['site/ui_icons'],'label'=>'Icons'],
							['url'=>['site/ui_typography'],'label'=>' Typography'],
							['url'=>['site/ui_modals'],'label'=>'Modals'],
							['url'=>['site/ui_extended_modals'],'label'=>' Extended Modals'],
							['url'=>['site/ui_tabs_accordions_navs'],'label'=>' Tabs, Accordions & Navs'],
							['url'=>['site/ui_toastr'],'label'=>'Toastr Notifications', 'template' => '<a href="{url}">{icon}<span class="badge badge-warning">new</span>{label}</a>'],
							['url'=>['site/ui_datepaginator'],'label'=>'Date Paginator', 'template' => '<a href="{url}">{icon}<span class="badge badge-success">new</span>{label}</a>'],
							['url'=>['site/ui_tree'],'label'=>'Tree View'],
							['url'=>['site/ui_nestable'],'label'=>' Nestable List'],
							['url'=>['site/ui_ion_sliders'],'label'=>'Ion Range Sliders','template' => '<a href="{url}">{icon}<span class="badge badge-important">new</span>{label}</a>'],
							['url'=>['site/ui_jqueryui_sliders'],'label'=>' Query UI Sliders'],
							['url'=>['site/ui_knob'],'label'=>' Knob Circle Dials'],
					]],
					['url'=>'javascript:;','icon'=>'calendar','label'=>'Form Stuff','template' => '<a href="{url}">{icon}<span class="title">{label}</span><span class="arrow "></span></a>', 'items'=>[
						['url'=>['site/form_controls'],'label'=>'Form Controls'],
						['url'=>['site/form_layouts'],'label'=>'Form Layouts'],
						['url'=>['site/form_component'],'label'=>'Form Components'],
						['url'=>['site/form_editable'],'label'=>'Form X-editable', 'template' => '<a href="{url}">{icon}<span class="badge badge-warning">new</span>{label}</a>'],
						['url'=>['site/form_wizard'],'label'=>'Form Wizard'],
						['url'=>['site/form_validation'],'label'=>'Form Validation'],
						['url'=>['site/form_image_crop'],'label'=>'Image Cropping', 'template' => '<a href="{url}">{icon}<span class="badge badge-important">new</span>{label}</a>'],
						['url'=>['site/form_fileupload'],'label'=>'Multiple File Upload'],
						['url'=>['site/form_dropzone'],'label'=>'Dropzone File Upload'],
					]],
					['url'=>'javascript:;','icon'=>'docs','label'=>'Pages','template' => '<a href="{url}">{icon}<span class="title">{label}</span><span class="arrow "></span></a>', 'items'=>[
						['url'=>['site/page_inbox'],'label'=>'Inbox', 'template' => '<a href="{url}">{icon}<span class="badge badge-important">4</span>{label}</a>'],
						['url'=>['site/page_locked'],'label'=>'User Locked'],
						['url'=>['site/page_portfolio'],'label'=>'Portfolio', 'template' => '<a href="{url}">{icon}<span class="badge badge-warning badge-roundless">new</span>{label}</a>'],
						['url'=>['site/page_blog'],'label'=>'Blog'],
						['url'=>['site/page_blog_item'],'label'=>'Blog Post'],
						['url'=>['site/page_about'],'label'=>'About Us'],
						['url'=>['site/page_contact'],'label'=>'Contact Us'],
						['url'=>['site/page_calendar'],'label'=>'Calendar', 'template' => '<a href="{url}">{icon}<span class="badge badge-warning badge-important">14</span>{label}</a>'],
						['url'=>['site/page_profile'],'label'=>'User Profile'],
						['url'=>['site/page_faq'],'label'=>'FAQ'],
						['url'=>['site/page_invoice'],'label'=>'Invoice'],
						['url'=>['site/page_pricing_table'],'label'=>'Pricing Tables'],
						['url'=>['site/page_404_option1'],'label'=>'404 Page Option 1'],
						['url'=>['site/page_404_option2'],'label'=>'404 Page Option 2'],
						['url'=>['site/page_500_option1'],'label'=>'500 Page Option 1'],
						['url'=>['site/page_500_option2'],'label'=>'500 Page Option 2'],
					]],
					['url'=>'javascript:;','icon'=>'share','label'=>'4 Level Menu','template' => '<a href="{url}">{icon}<span class="title">{label}</span><span class="arrow"></span></a>', 'items'=>[
						['url'=>'javascript:;', 'icon'=>'settings', 'label'=>'Item 1', 'template' => '<a href="{url}">{icon} {label}<span class="arrow"></span></a>', 'items'=>[
							['url'=>'javascript:;', 'icon'=>'user', 'label'=>'Sample Link 1', 'template' => '<a href="{url}">{icon} {label} <span class="arrow"></span></a>', 'items'=>[
								['url'=>'#', 'icon'=>'wrench', 'label'=>'Sample Link 1'],
								['url'=>'#', 'icon'=>'ban', 'label'=>'Sample Link 1'],
								['url'=>'#', 'icon'=>'check', 'label'=>'Sample Link 1'],
							]],
							['url'=>'#', 'icon'=>'question', 'label'=>'Sample Link 1'],
							['url'=>'#', 'icon'=>'rocket', 'label'=>'Sample Link 2'],
							['url'=>'#', 'icon'=>'tag', 'label'=>'Sample Link 3'],
						]],
						['url'=>'javascript:;', 'icon'=>'globe', 'label'=>'Item 2', 'template' => '<a href="{url}">{icon} {label}<span class="arrow"></span></a>', 'items'=>[
							['url'=>'#', 'icon'=>'graph', 'label'=>'Sample Link 1'],
							['url'=>'#', 'icon'=>'share', 'label'=>'Sample Link 1'],
							['url'=>'#', 'icon'=>'settings', 'label'=>'Sample Link 1'],
						]],
						['url'=>'#', 'icon'=>'note', 'label'=>'Item 3'],
					]],
					['url'=>'javascript:;','icon'=>'briefcase','label'=>'Data Tables','template' => '<a href="{url}">{icon}<span class="title">{label}</span><span class="arrow"></span></a>', 'items'=>[
						['url'=>['site/table_basic'], 'label'=>'Basic Tables'],
						['url'=>['site/table_responsive'], 'label'=>'Responsive Tables'],
						['url'=>['site/table_managed'], 'label'=>'Managed Tables'],
						['url'=>['site/table_editable'], 'label'=>'Editable Tables'],
						['url'=>['site/table_advanced'], 'label'=>'Advanced Tables'],
						['url'=>['site/table_ajax'], 'label'=>'Ajax Datatables'],
					]],
					['url'=>'javascript:;','icon'=>'layers','label'=>'Portlets','template' => '<a href="{url}">{icon}<span class="title">{label}</span><span class="arrow"></span></a>', 'items'=>[
						['url'=>['site/portlet_general'], 'label'=>'General Portlets'],
						['url'=>['site/portlet_draggable'], 'label'=>'Draggable Portlets'],
					]],
					['url'=>'javascript:;','icon'=>'drop','label'=>'Maps','template' => '<a href="{url}">{icon}<span class="title">{label}</span><span class="arrow"></span></a>', 'items'=>[
						['url'=>['site/maps_google'], 'label'=>'Google Maps'],
						['url'=>['site/maps_vector'], 'label'=>'Vector Maps'],
					]],
					['url'=>['site/charts'], 'icon'=>'bar-chart', 'label'=>'Visual Charts'],
					['url'=>['site/login'], 'icon'=>'user', 'label'=>'Login'],
				],
		]); ?>
		<!-- END SIDEBAR MENU -->
	</div>
</div>
<!-- END SIDEBAR -->