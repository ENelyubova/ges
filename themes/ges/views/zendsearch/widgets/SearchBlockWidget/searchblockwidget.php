<?php Yii::import('application.modules.zendsearch.ZendSearchModule'); ?>
<?= CHtml::beginForm(['/zendsearch/search/search'], 'get', ['class' => 'form-inline']); ?>
<?= CHtml::textField(
    'q',
    '',
    ['placeholder' => Yii::t('ZendSearchModule.zendsearch', 'Search'), 'class' => 'form-control']
); ?>
	<span class="icon-search icon"></span>
    <button type="submit" class="btn btn-search fl fl-ai-c fl-jc-c">
		<span class="input-group-btn icon-search"></span>
    </button>
<?= CHtml::endForm(); ?>





