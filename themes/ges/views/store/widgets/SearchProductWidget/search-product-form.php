<section class="catalog-filter">
    <?php $form = $this->beginWidget(
        'bootstrap.widgets.TbActiveForm',
        [
            'action' => ['/store/product/index'],
            'method' => 'GET',
        ]
    ) ?>
    <div class="search-group">
        <button type="submit" class="btn btn-search">
            <i class="icon--1"></i>
        </button>
        <?= CHtml::textField(
            AttributeFilter::MAIN_SEARCH_QUERY_NAME,
            CHtml::encode(Yii::app()->getRequest()->getQuery(AttributeFilter::MAIN_SEARCH_QUERY_NAME)),
            ['class' => 'form-control', 'placeholder'=>'Найти товар']
        ); ?>
    </div>
    <?php $this->endWidget(); ?>
</section>
