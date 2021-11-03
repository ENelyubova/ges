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

<div class="page-txt pb">
	<div class="content-site">
        <?php $this->widget(
            'bootstrap.widgets.TbBreadcrumbs',
            [
                'links' => $this->breadcrumbs,
            ]
        );?>
    
        <h1 class="title heading"><?= $model->title; ?></h1>

        <div class="team-top fl fl-w">
            <?php $childs = $model->childPages(['condition' => 'status=1', 'order' => 'childPages.order ASC']); ?>
            <?php foreach ($childs as $key => $data) : ?>
                <div class="team-block___item">
                    <div class="team-block___img">
                        <?php if ($data->image): ?>
                            <picture class="absolute-img-picture">
                                <source media="(min-width: 401px)" srcset="<?= $data->getImageUrlWebp(0, 0, true, null,'image'); ?>" type="image/webp">
                                <source media="(min-width: 401px)" srcset="<?= $data->getImageNewUrl(0, 0, true, null,'image'); ?>">

                                <source media="(min-width: 1px)" srcset="<?= $data->getImageUrlWebp(360, 485, false, null,'image'); ?>" type="image/webp">
                                <source media="(min-width: 1px)" srcset="<?= $data->getImageNewUrl(360, 485, false, null,'image'); ?>">

                                <img src="<?= $data->getImageNewUrl(0, 0, true, null,'image'); ?>" alt="">
                            </picture>
                        <?php else : ?>
                            <?= CHtml::image(Yii::app()->getTheme()->getAssetsUrl() . '/images/nophoto.jpg','', ['class' => 'absolute-img']); ?>
                        <?php endif; ?>
                    </div>
                    <div class="team-block___text">
                        <div class="team-block___name"><?= $data->title; ?></div>
                        <div class="team-block___function"><?= $data->body; ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

