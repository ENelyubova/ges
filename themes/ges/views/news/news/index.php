<?php
$this->title = Yii::t('NewsModule.news', 'Новости и события');
$this->breadcrumbs = [Yii::t('NewsModule.news', 'Новости и события')];
?>

<div class="page-txt page-news">
	<div class="content-site">
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', [
		            'links' => $this->breadcrumbs,
		    ]); ?>
	<!-- </div> -->
		<h1 class="heading title"><?= Yii::t('NewsModule.news', 'Новости') ?></h1>
		<?php $this->widget('application.components.FtListView', [
			'id'=> 'news-box',
		    'dataProvider' => $dataProvider,
	        'itemView' => '_item',
	        'summaryText' => '',
	        'template'=>'{items} {pager}',
	        'itemsCssClass' => 'news-box fl fl-w',
		    'htmlOptions' => [
		        // "class" => ""
		    ],
		    'pagerCssClass' => 'pagination-box',
		    // 'emptyText' => '',
		    // 'emptyTagName' => 'div',
		    'pager' => [
		        'class' => 'application.components.ShowMorePager',
		        'buttonText' => 'Показать еще',
		        'wrapTag' => 'div',
		        'htmlOptions' => [
		            'class' => 'btn btn-link-orange'
		        ],
		        'wrapOptions' => [
		            'class' => 'news-btn-all'
		        ],
		    ]
		]); ?>
	</div>
</div>

