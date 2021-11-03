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

        <div class="project-list">
            <?php foreach ($model->childPages(['condition' => 'status=1', 'order' => 'childPages.order ASC']) as $key => $data) : ?>
                <div class="project-carousel__item fl fl-w fl-jc-sb" data-aos="fade-up" data-aos-once="true">
                    <div class="project-carousel__info">
                        <div class="project-carousel__title"><?= $data->title; ?></div>
                        <div class="project-carousel__body"><?= $data->body_short; ?></div>
                        <a href="<?= Yii::app()->createUrl('/page/page/view', ['slug' => $data->slug]); ?>" class="btn btn-link-orange">Подробнее</a>
                    </div>

                    <div class="project-carousel__img fl fl-jc-sb">
                        <?php $images = $data->photos; ?>
                        <?php if($images) : ?>
                            <?php foreach ($images as $key => $image) : ?>
                                <?php if ($key >= 0 && $key < 1) : ?>
                                    <div class="project-left-img">
                                        <picture class="absolute-img-picture">
                                            <source media="(min-width: 401px)" srcset="<?= $image->getImageUrlWebp(0, 0, true, null,'image'); ?>" type="image/webp">
                                            <source media="(min-width: 401px)" srcset="<?= $image->getImageNewUrl(0, 0, true, null,'image'); ?>">

                                            <source media="(min-width: 1px)" srcset="<?= $image->getImageUrlWebp(400, 530, false, null,'image'); ?>" type="image/webp">
                                            <source media="(min-width: 1px)" srcset="<?= $image->getImageNewUrl(400, 530, false, null,'image'); ?>">

                                            <img src="<?= $image->getImageNewUrl(0, 0, true, null,'image'); ?>" alt="">
                                        </picture>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>


                            <?php foreach ($images as $key => $image) : ?>
                                <?php if ($key >= 1 && $key < 2) : ?>
                                    <div class="project-right-img">
                                        <picture class="absolute-img-picture">
                                            <source media="(min-width: 401px)" srcset="<?= $image->getImageUrlWebp(0, 0, true, null,'image'); ?>" type="image/webp">
                                            <source media="(min-width: 401px)" srcset="<?= $image->getImageNewUrl(0, 0, true, null,'image'); ?>">

                                            <source media="(min-width: 1px)" srcset="<?= $image->getImageUrlWebp(400, 530, false, null,'image'); ?>" type="image/webp">
                                            <source media="(min-width: 1px)" srcset="<?= $image->getImageNewUrl(400, 530, false, null,'image'); ?>">

                                            <img src="<?= $image->getImageNewUrl(0, 0, true, null,'image'); ?>" alt="">
                                        </picture>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

