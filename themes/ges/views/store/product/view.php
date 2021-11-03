<<<<<<< HEAD
<?php

/* @var $product Product */

$this->title = $product->getMetaTitle();
$this->description = $product->getMetaDescription();
$this->keywords = $product->getMetaKeywords();
$this->canonical = $product->getMetaCanonical();

$mainAssets = Yii::app()->getModule( 'store' )->getAssetsUrl();
Yii::app()->getClientScript()->registerScriptFile( $mainAssets . '/js/jquery.simpleGal.js' );

Yii::app()->getClientScript()->registerCssFile( Yii::app()->getTheme()->getAssetsUrl() . '/css/store-frontend.css' );
Yii::app()->getClientScript()->registerScriptFile( Yii::app()->getTheme()->getAssetsUrl() . '/js/store.js' );

$this->breadcrumbs = array_merge(
    [ Yii::t( "StoreModule.store", 'Catalog' ) => [ '/store/product/index' ] ],
    $product->category ? $product->category->getBreadcrumbs( true ) : [], [ CHtml::encode( $product->name ) ]
);

?>

<script src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
<script src="https://yastatic.net/share2/share.js"></script>

<div class="store-container product-container">
    
    <div class="content-site">
        <div class="breadcrumbs hidden-xs">
            <div class="row">
                <div class="col-xs-12">
                    <?php $this->widget(
                        'bootstrap.widgets.TbBreadcrumbs',
                        [
                            'links' => $this->breadcrumbs,
                        ]
                    );?>
                </div>
            </div>
        </div>
        
        <div class="product-panel">
            <div class="row" xmlns="http://www.w3.org/1999/html" itemscope itemtype="http://schema.org/Product">
                <div class="col-sm-6 col-xs-12">
                    <div class="thumbnails">
                        <div class="image-preview">
                            <img src="<?= StoreImage::product($product); ?>" id="main-image" alt="<?= CHtml::encode($product->getImageAlt()); ?>" title="<?= CHtml::encode($product->getImageTitle()); ?>">
                        </div>
                        <div class="row">
                            <div class="col-xs-4 col-md-4 no-padding">
                                <a href="<?= $product->getImageUrl(); ?>" class="thumbnail">
                                <img src="<?= $product->getImageUrl(150, 140); ?>"
                                     alt="<?= CHtml::encode($product->getImageAlt()); ?>"
                                     title="<?= CHtml::encode($product->getImageTitle()); ?>" />
                            </a>
                            
                            </div>
                            <?php foreach ($product->getImages() as $key => $image): { ?>
                            <div class="col-xs-4 col-md-4 no-padding">
                                <a href="<?= $image->getImageUrl(); ?>" class="thumbnail">
                                    <img src="<?= $image->getImageUrl(150, 140); ?>"
                                         alt="<?= CHtml::encode($image->alt) ?>"
                                         title="<?= CHtml::encode($image->title) ?>" />
                                </a>
                            
                            </div>
                            <?php } endforeach; ?>
                        </div>
                    </div>
                </div><!-- end product-images -->
                
                <div class="col-sm-6 col-xs-12 product-data">
                    <div class="tittle-block">
                        <h1 class="product-title" itemprop="name"><?= CHtml::encode($product->getTitle()); ?></h1>
                        <div class="product-sku">Артикул: <span><?= $product->sku; ?></span></div>
                    </div>
                    
                     <form action="<?= Yii::app()->createUrl('cart/cart/add'); ?>" method="post">
                         
                        <input type="hidden" name="Product[id]" value="<?= $product->id; ?>"/>
                        <?= CHtml::hiddenField(Yii::app()->getRequest()->csrfTokenName, Yii::app()->getRequest()->csrfToken); ?>
                         
                        <div class="product-block-prices-shopcart">
                            <div class="block-flex-auto block-prices">
                                <?php if (($product->discount_price > 0) && ($product->getBasePrice() > $product->getResultPrice())): ?>
                                <div class="price price-old">
                                    <span><?= $product->getBasePrice(); ?><i class="fa fa-rub" aria-hidden="true"></i></span>
                                </div>
                                <?php endif; ?>
                                <div class="price <?= ($product->discount_price > 0) && ($product->getBasePrice() > $product->getResultPrice()) ? 'price-new' : ''; ?>">
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                        <input type="hidden" id="base-price" value="<?= round($product->getResultPrice(), 2); ?>"/>
                                        <div id="result-price" itemprop="price">
                                            <?= number_format($product->getResultPrice(), 0, '.', ' '); ?><i class="fa fa-rub" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-flex-auto block-shopcart">
                                <button class="btn btn-backet" id="add-product-to-cart" data-loading-text="<?= Yii::t("StoreModule.store", "В корзину"); ?>">
                                    <?= Yii::t("StoreModule.store", "Add to cart"); ?>
                                </button>
                            </div>
                        </div><!-- end product-block-prices-shopcart -->
        
                        <!-- <div class="product-options">
                                   
                                       <table class="table table-condensed hide">
                                           <?php foreach ($product->getVariantsGroup() as $title => $variantsGroup) : ?>
                                               <tr>
                                                   <td style="padding: 0;">
                                                       <?php echo CHtml::encode($title); ?>
                                                   </td>
                                                   <td>
                                                       <?php echo
                                                       CHtml::dropDownList(
                                                           'ProductVariant[]',
                                                           null,
                                                           CHtml::listData($variantsGroup, 'id', 'optionValue'),
                                                           ['empty' => '', 'class' => 'form-control', 'options' => $product->getVariantsOptions()]
                                                       ); ?>
                                                   </td>
                                               </tr>
                                           <?php endforeach; ?>
                                       </table>
                                   <?php $this->widget('application.modules.store.widgets.VariantTreeWidget', ['product' => $product]) ?>
                                   <p class="hidden">Остаток: <span class="js-view-quantity">0</span> шт.</p>
                                   <?= CHtml::hiddenField('maxCount', 0); ?>
                               </div>   -->       
                         
                        <div class="product-description line-bottom">
                            <div class="card-tab">
                                <input type="radio" name="inset" value="" id="tab_1" checked="">
                                <label for="tab_1"><?= Yii::t("StoreModule.store", "Description"); ?></label>
                            
                                <input type="radio" name="inset" value="" id="tab_2">
                                <label for="tab_2">Оплата и доставка</label>
                            
                                <div id="txt_1">
                                    <p><?= $product->description; ?></p>
                                </div>
                                <div id="txt_2">
                                    <p>В нашем магазине возможны различные способы оплаты товара. Вариант оплаты вы выбираете на сайте, либо согласовываете с менеджером. При оформлении заказа обязательно указывайте, какой способ доставки вы выбираете</p>
                                </div>
                            </div>
                           <!--  <label><?= Yii::t("StoreModule.store", "Description"); ?></label>
                           <p><?= $product->description; ?></p> -->
                         </div>
                         
                    </form>
                </div><!-- end product-data -->
        
            </div>
        </div><!-- end product-panel -->
    </div>
</div><!-- end store-container -->


<?php Yii::app()->getClientScript()->registerScript(
    "product-images",
    <<<JS
        $(".thumbnails").simpleGal({mainImage: "#main-image"});
        $("#myTab li").first().addClass('active');
        $(".tab-pane").first().addClass('active');
JS
=======
<?php

/* @var $product Product */

$this->title = $product->getMetaTitle();
$this->description = $product->getMetaDescription();
$this->keywords = $product->getMetaKeywords();
$this->canonical = $product->getMetaCanonical();

$mainAssets = Yii::app()->getModule( 'store' )->getAssetsUrl();
Yii::app()->getClientScript()->registerScriptFile( $mainAssets . '/js/jquery.simpleGal.js' );

Yii::app()->getClientScript()->registerCssFile( Yii::app()->getTheme()->getAssetsUrl() . '/css/store-frontend.css' );
Yii::app()->getClientScript()->registerScriptFile( Yii::app()->getTheme()->getAssetsUrl() . '/js/store.js' );

$this->breadcrumbs = array_merge(
    [ Yii::t( "StoreModule.store", 'Catalog' ) => [ '/store/product/index' ] ],
    $product->category ? $product->category->getBreadcrumbs( true ) : [], [ CHtml::encode( $product->name ) ]
);

?>

<div class="store-container product-container">
    
    <div class="content-site">
        <div class="breadcrumbs hidden-xs">
            <div class="row">
                <div class="col-xs-12">
                    <?php $this->widget(
                        'bootstrap.widgets.TbBreadcrumbs',
                        [
                            'links' => $this->breadcrumbs,
                        ]
                    );?>
                </div>
            </div>
        </div>
        
        <div class="product-panel">
            <div class="row" xmlns="http://www.w3.org/1999/html" itemscope itemtype="http://schema.org/Product">
                <div class="col-sm-6 col-xs-12">
                    <div class="thumbnails">
                        <div class="image-preview">
                            <img src="<?= StoreImage::product($product); ?>" id="main-image" alt="<?= CHtml::encode($product->getImageAlt()); ?>" title="<?= CHtml::encode($product->getImageTitle()); ?>">
                        </div>
                        <div class="row">
                            <div class="col-xs-4 col-md-4 no-padding">
                                <a href="<?= $product->getImageUrl(); ?>" class="thumbnail">
                                <img src="<?= $product->getImageUrl(150, 140); ?>"
                                     alt="<?= CHtml::encode($product->getImageAlt()); ?>"
                                     title="<?= CHtml::encode($product->getImageTitle()); ?>" />
                            </a>
                            
                            </div>
                            <?php foreach ($product->getImages() as $key => $image): { ?>
                            <div class="col-xs-4 col-md-4 no-padding">
                                <a href="<?= $image->getImageUrl(); ?>" class="thumbnail">
                                    <img src="<?= $image->getImageUrl(150, 140); ?>"
                                         alt="<?= CHtml::encode($image->alt) ?>"
                                         title="<?= CHtml::encode($image->title) ?>" />
                                </a>
                            
                            </div>
                            <?php } endforeach; ?>
                        </div>
                    </div>
                </div><!-- end product-images -->
                
                <div class="col-sm-6 col-xs-12 product-data">
                    <div class="tittle-block">
                        <h1 class="product-title" itemprop="name"><?= CHtml::encode($product->getTitle()); ?></h1>
                        <div class="product-sku">Артикул: <span><?= $product->sku; ?></span></div>
                    </div>
                    
                     <form action="<?= Yii::app()->createUrl('cart/cart/add'); ?>" method="post">
                         
                        <input type="hidden" name="Product[id]" value="<?= $product->id; ?>"/>
                        <?= CHtml::hiddenField(Yii::app()->getRequest()->csrfTokenName, Yii::app()->getRequest()->csrfToken); ?>
                         
                        <div class="product-block-prices-shopcart">
                            <div class="block-flex-auto block-prices">
                                <?php if (($product->discount_price > 0) && ($product->getBasePrice() > $product->getResultPrice())): ?>
                                <div class="price price-old">
                                    <span><?= $product->getBasePrice(); ?><i class="fa fa-rub" aria-hidden="true"></i></span>
                                </div>
                                <?php endif; ?>
                                <div class="price <?= ($product->discount_price > 0) && ($product->getBasePrice() > $product->getResultPrice()) ? 'price-new' : ''; ?>">
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                        <input type="hidden" id="base-price" value="<?= round($product->getResultPrice(), 2); ?>"/>
                                        <div id="result-price" itemprop="price">
                                            <?= number_format($product->getResultPrice(), 0, '.', ' '); ?><i class="fa fa-rub" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-flex-auto block-shopcart">
                                <button class="btn btn-backet" id="add-product-to-cart" data-loading-text="<?= Yii::t("StoreModule.store", "В корзину"); ?>">
                                    <?= Yii::t("StoreModule.store", "Add to cart"); ?>
                                </button>
                            </div>
                        </div><!-- end product-block-prices-shopcart -->
        
                        <!-- <div class="product-options">
                                   
                                       <table class="table table-condensed hide">
                                           <?php foreach ($product->getVariantsGroup() as $title => $variantsGroup) : ?>
                                               <tr>
                                                   <td style="padding: 0;">
                                                       <?php echo CHtml::encode($title); ?>
                                                   </td>
                                                   <td>
                                                       <?php echo
                                                       CHtml::dropDownList(
                                                           'ProductVariant[]',
                                                           null,
                                                           CHtml::listData($variantsGroup, 'id', 'optionValue'),
                                                           ['empty' => '', 'class' => 'form-control', 'options' => $product->getVariantsOptions()]
                                                       ); ?>
                                                   </td>
                                               </tr>
                                           <?php endforeach; ?>
                                       </table>
                                   <?php $this->widget('application.modules.store.widgets.VariantTreeWidget', ['product' => $product]) ?>
                                   <p class="hidden">Остаток: <span class="js-view-quantity">0</span> шт.</p>
                                   <?= CHtml::hiddenField('maxCount', 0); ?>
                               </div>   -->       
                         
                        <div class="product-description line-bottom">
                            <div class="card-tab">
                                <input type="radio" name="inset" value="" id="tab_1" checked="">
                                <label for="tab_1"><?= Yii::t("StoreModule.store", "Description"); ?></label>
                            
                                <input type="radio" name="inset" value="" id="tab_2">
                                <label for="tab_2">Оплата и доставка</label>
                            
                                <div id="txt_1">
                                    <p><?= $product->description; ?></p>
                                </div>
                                <div id="txt_2">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore ab sapiente odit cumque impedit? Rem culpa aperiam dolor, in quas cupiditate illo facere nam, et voluptatibus, debitis, mollitia eos vel.</p>
                                </div>
                            </div>
                           <!--  <label><?= Yii::t("StoreModule.store", "Description"); ?></label>
                           <p><?= $product->description; ?></p> -->
                         </div>
                         
                    </form>
                </div><!-- end product-data -->
        
            </div>
        </div><!-- end product-panel -->
    </div>
</div><!-- end store-container -->


<?php Yii::app()->getClientScript()->registerScript(
    "product-images",
    <<<JS
        $(".thumbnails").simpleGal({mainImage: "#main-image"});
        $("#myTab li").first().addClass('active');
        $(".tab-pane").first().addClass('active');
JS
>>>>>>> 19e9431dd073c82ba5ac41f1e3066c1215ee7379
); ?>