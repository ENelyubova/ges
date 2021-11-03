<div class="col-sm-4">
	<div class="content-item">
        <div class="product-image">
            <?= CHtml::link(CHtml::image($data->getImageUrl(300, 340, true), CHtml::encode($data->getImageAlt()), ['title' => CHtml::encode($data->getImageTitle())]), ProductHelper::getUrl($data)); ?>
        </div>
        
        <div class="product-info-block product-title">
            <?= CHtml::link(CHtml::encode($data->getName()), ProductHelper::getUrl($data)); ?>
        </div>
        
        
        <div class="product-info-block product-price-more">
            <div class="product-price">
                <?= number_format($data->getResultPrice(), 0, '.', ' '); ?><i class="fa fa-rub" aria-hidden="true"></i>
            </div> 
            <div class="product-link-more">
                <!-- <i class="icon--4"></i> -->
                <?= CHtml::link('Подробнее', ProductHelper::getUrl($data), ['class' => 'btn btn-backet']); ?>
            </div>
        </div>
        
    </div>
</div>