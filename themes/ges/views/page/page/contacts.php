<?php
/* @var $model Page */
/* @var $this PageController */

if ($model->layout) {
    $this->layout = "//layouts/{$model->layout}";
}

$this->title = $model->meta_title ?: $model->title;
$this->breadcrumbs = $this->getBreadCrumbs();
$this->description = $model->meta_description ?: Yii::app()->getModule('yupe')->siteDescription;
$this->keywords = $model->meta_keywords ?: Yii::app()->getModule('yupe')->siteKeyWords;
?>
<div class="page-txt">
    <div class="content-site">
        <?php $this->widget(
            'bootstrap.widgets.TbBreadcrumbs',
            [
                'links' => $this->breadcrumbs,
            ]
        );?>
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <h2 class="heading title"><?= $model->title; ?></h2>
                <?= $model->body; ?>
            </div>
            <div class="col-sm-6 col-xs-12">
                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Acb3c97ed8266aa6de3928c0500282d2890ea7068b1d3367b65a6d1043782434f&amp;source=constructor" width="100%" height="450" frameborder="0"></iframe>
            </div>
        </div>
    </div>
</div>
