<?php
$mainAssets = Yii::app()->getTheme()->getAssetsUrl();
Yii::app()->getClientScript()->registerCssFile( $mainAssets . '/css/store-frontend.css' );
Yii::app()->getClientScript()->registerScriptFile( $mainAssets . '/js/store.js' );
/* @var $category StoreCategory */

$this->title = $category->getMetaTitle();
$this->description = $category->getMetaDescription();
$this->keywords = $category->getMetaKeywords();
$this->canonical = $category->getMetaCanonical();

$this->breadcrumbs = [ Yii::t( "StoreModule.store", "Catalog" ) => [ '/store/product/index' ] ];

$this->breadcrumbs = array_merge(
    $this->breadcrumbs,
    $category->getBreadcrumbs( true )
);

?>

<div class="store-container store-container-category">

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

        <h1 class="title-store text-center"><?= CHtml::encode($category->getTitle()); ?></h1>
        
        
        <div class="store-panel">
            <div class="left-panel-store">
               <div class="panel-filters">
                   <form id="store-filter" name="store-filter" method="get">
                       <div class="left-panel-filter">
                           <?php $this->widget('application.modules.store.widgets.filters.PriceFilterWidget'); ?>
                           <?php $this->widget('application.modules.store.widgets.filters.FilterBlockWidget', [
                        'category' => $category]); ?>
                        <div class="flex-btn">
                          <button type="submit" class="btn btn-backet">Подобрать</button>
                          <button type="submit" class="btn btn-white ">Сбросить</button>
                        </div>

                           
                       </div>
                       <div class="right-panel-filter">
                           
                       </div>
                   </form>
               </div>
            </div>
            
            <div class="right-panel-store">
                <section class="list-category-products">
                    <?php $this->widget(
                        'bootstrap.widgets.TbListView',
                        [
                            'dataProvider' => $dataProvider,
                            'itemView' => '//store/product/_item',
                            'summaryText' => '',
                            'enableHistory' => true,
                            'cssFile' => false,
                            'itemsCssClass' => 'row items'/*,
                            'sortableAttributes' => [
                                'name',
                                'price',
                            ],*/
                        ]
                    ); ?>
                </section>
            </div>
        </div>
    </div>
</div>