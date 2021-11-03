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
    
        <h1 class="title heading"><?= $model->title; ?></h1>
        <?= $model->body; ?>

        <?php $images = $model->photos; ?>
        <?php if($images) : ?>
            <div class="project-wrap">
                <div class="arrows fl fl-jc-e"></div>
                <div class="project-carousel-page slick-slider">
                    <?php foreach ($images as $key => $image) : ?>
                        <div>
                            <a href="<?= $image->getImageUrl(); ?>" data-fancybox="project">
                                <div class="project-carousel-page__item">
                                    <picture class="absolute-img-picture">
                                        <source media="(min-width: 401px)" srcset="<?= $image->getImageUrlWebp(0, 0, true, null,'image'); ?>" type="image/webp">
                                        <source media="(min-width: 401px)" srcset="<?= $image->getImageNewUrl(0, 0, true, null,'image'); ?>">

                                        <source media="(min-width: 1px)" srcset="<?= $image->getImageUrlWebp(364, 300, true, null,'image'); ?>" type="image/webp">
                                        <source media="(min-width: 1px)" srcset="<?= $image->getImageNewUrl(364, 300, true, null,'image'); ?>">

                                        <img src="<?= $image->getImageNewUrl(0, 0, true, null,'image'); ?>" alt="">
                                    </picture>
                                </div> 
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>    
    </div>
</div>

