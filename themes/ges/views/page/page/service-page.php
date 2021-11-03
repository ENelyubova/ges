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

<div class="service-page page-txt">
	<div class="content-site">
        <?php $this->widget(
            'bootstrap.widgets.TbBreadcrumbs',
            [
                'links' => $this->breadcrumbs,
            ]
        );?>

        <div class="service-page-top fl fl-w fl-jc-sb">
            <div class="service-page__info fl fl-d-c fl-jc-sb">
                <div>
                    <h1 class="title heading"><?= $model->title; ?></h1>
                    <?php if($model->getAttributeValue('box1')['value']) : ?>
                        <?= $model->getAttributeValue('box1')['value']; ?>
                        <?php 
                            $companyButName = $model->getAttributeValue('box1')['butName'];
                            $companyButLink = $model->getAttributeValue('box1')['butLink'];
                         ?>
                        <?php if($companyButLink) : ?>
                            <div>
                                <a class="btn btn-link-orange btn-company" href="<?= $companyButLink; ?>">
                                    <?= ($companyButName) ?: 'Портфолио'; ?>
                                </a>
                            </div>
                        <?php else : ?>
                            <a href="/portfolio" class="btn btn-link-orange service-btn">Портфолио</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>

                <div class="fl fl-jc-e">
                    <?php $this->widget('application.modules.gallery.widgets.CustomFieldWidget', [
                        'id' => $model->id,
                        // 'fancybox' => true,
                        'code' => 'box1',
                        'view' => 'service-top-img'
                    ]); ?>
                </div>
            </div>

            <?php if($model->getAttributeValue('box1')['image']) : ?>
                <div class="service-page__img">
                    <div class="service-page__img-wrap">
                        <picture class="absolute-img-picture">
                            <source media="(min-width: 401px)" srcset="<?= $model->geFieldImageWebp(0, 0, true,  $model->getAttributeValue('box1')['image']); ?>" type="image/webp">
                            <source media="(min-width: 401px)" srcset="<?= $model->getFieldImageUrl(0, 0, true,  $model->getAttributeValue('box1')['image']); ?>">

                            <source media="(min-width: 1px)" srcset="<?= $model->geFieldImageWebp(360, 480, true,  $model->getAttributeValue('box1')['image']); ?>" type="image/webp">
                            <source media="(min-width: 1px)" srcset="<?= $model->getFieldImageUrl(360, 480, true,  $model->getAttributeValue('box1')['image']); ?>">
                            <img src="<?= $model->getFieldImageUrl(0, 0, false,  $model->getAttributeValue('box1')['image']); ?>" alt="">
                        </picture>
                    </div>
                </div>
            <?php endif; ?>
        </div><!-- service-page-top -->
    </div>

    <div class="service-page-content">
        <?php if($model->getAttributeValue('box2')['value']) : ?>
            <div class="design-width">
                <?= $model->getAttributeValue('box2')['value']; ?>   
            </div>
        <?php endif; ?>

        <div class="content-site">
            <?php if($model->getAttributeValue('box3')['value']) : ?>
                <div class="service-page-content-top fl fl-w">
                    <?php if($model->getAttributeValue('box3')['image']) : ?>
                        <div class="service-page-content__img">
                            <div class="about-box-style">
                                <picture class="absolute-img-picture">
                                    <source media="(min-width: 401px)" srcset="<?= $model->geFieldImageWebp(0, 0, true,  $model->getAttributeValue('box3')['image']); ?>" type="image/webp">
                                    <source media="(min-width: 401px)" srcset="<?= $model->getFieldImageUrl(0, 0, true,  $model->getAttributeValue('box3')['image']); ?>">

                                    <source media="(min-width: 1px)" srcset="<?= $model->geFieldImageWebp(360, 180, true,  $model->getAttributeValue('box3')['image']); ?>" type="image/webp">
                                    <source media="(min-width: 1px)" srcset="<?= $model->getFieldImageUrl(360, 180, true,  $model->getAttributeValue('box3')['image']); ?>">
                                    <img src="<?= $model->getFieldImageUrl(0, 0, false,  $model->getAttributeValue('box3')['image']); ?>" alt="">
                                </picture>
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="service-page-content__info">
                        <div class="service-list__title">
                            <?= $model->getAttributeValue('box3')['name']; ?>
                        </div>
                        <?= $model->getAttributeValue('box3')['value']; ?>
                        <div class="service-list__more">
                            <a href="#callbackModal" class="btn btn-link-orange service-btn" data-toggle="modal">Оставить заявку</a>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if($model->getAttributeValue('box4')['name']) : ?>
                <div class="service-page-content-bottom fl fl-w">
                    <div class="about-bottom-right fl fl-w fl-jc-sb" data-aos="fade-up-left" data-aos-once="true">
                        <div class="thumb-text">
                            <div class="service-list__title">
                                <?= $model->getAttributeValue('box4')['name']; ?>
                            </div>
                            <?= $model->getAttributeValue('box4')['value']; ?>
                            <?php 
                                $companyButName = $model->getAttributeValue('box4')['butName'];
                                $companyButLink = $model->getAttributeValue('box4')['butLink'];
                             ?>
                            <?php if($companyButLink) : ?>
                                <div>
                                    <a class="btn btn-link-orange btn-company" href="<?= $companyButLink; ?>">
                                        <?= ($companyButName) ?: 'Портфолио'; ?>
                                    </a>
                                </div>
                            <?php else : ?>
                                <a href="/portfolio" class="btn btn-link-orange service-btn">Портфолио</a>
                            <?php endif; ?>
                        </div>
                        <div class="thumb-right">
                            <?php if($model->getAttributeValue('box3')['image']) : ?>
                                <?php $this->widget('application.modules.gallery.widgets.CustomFieldWidget', [
                                    'id' => $model->id,
                                    // 'fancybox' => true,
                                    'code' => 'box4',
                                    'view' => 'service-bottom-img'
                                ]); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="about-bottom-left" data-aos="fade-up-right" data-aos-once="true">
                        <div class="thumb-left">
                            <?php if($model->getAttributeValue('box4')['image']) : ?>
                                <picture class="absolute-img-picture">
                                    <source media="(min-width: 401px)" srcset="<?= $model->geFieldImageWebp(0, 0, true,  $model->getAttributeValue('box4')['image']); ?>" type="image/webp">
                                <source media="(min-width: 401px)" srcset="<?= $model->getFieldImageUrl(0, 0, true,  $model->getAttributeValue('box4')['image']); ?>">

                                <source media="(min-width: 1px)" srcset="<?= $model->geFieldImageWebp(360, 270, false,  $model->getAttributeValue('box4')['image']); ?>" type="image/webp">
                                <source media="(min-width: 1px)" srcset="<?= $model->getFieldImageUrl(360, 270, false,  $model->getAttributeValue('box4')['image']); ?>">
                                <img src="<?= $model->getFieldImageUrl(0, 0, false,  $model->getAttributeValue('box4')['image']); ?>" alt="">
                            </picture>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div><!-- service-page-content -->

    
    <div class="portfolio">
        <?php $this->widget("application.modules.page.widgets.PagesNewWidget", [
            'id'=> 9,
            'view' => 'portfolio-page'
        ]); ?>
    </div>
</div>
