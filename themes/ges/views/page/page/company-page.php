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
    
        <div class="companyBox-one fl fl-w">
            <div class="companyBox-one__text companyBox-item">
                <h1 class="title heading"><?= $model->title; ?></h1>
                <?= $model->getAttributeValue('box1')['value']; ?>
                <?php 
                    $companyButName = $model->getAttributeValue('box1')['butName'];
                    $companyButLink = $model->getAttributeValue('box1')['butLink'];
                 ?>
                <?php if($companyButLink) : ?>
                    <div>
                        <a class="btn btn-link-orange btn-company" href="<?= $companyButLink; ?>">
                            <?= ($companyButName) ?: 'О компании'; ?>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
            <div class="companyBox-one__img companyBox-item fl fl-jc-sb">
                <?php $this->widget('application.modules.gallery.widgets.CustomFieldWidget', [
                    'id' => $model->id,
                    // 'fancybox' => true,
                    'code' => 'box1',
                    'view' => 'companyBox-one'
                ]); ?>
            </div>
        </div><!-- companyBox-one -->

        <div class="companyBox-two fl fl-w fl-ai-c">
            <div class="companyBox-two__img companyBox-item" data-aos="fade-right" data-aos-once="true">
                <picture class="absolute-img-picture">
                    <source media="(min-width: 401px)" srcset="<?= $model->geFieldImageWebp(0, 0, false,  $model->getAttributeValue('box2')['image']); ?>" type="image/webp">
                    <source media="(min-width: 401px)" srcset="<?= $model->getFieldImageUrl(0, 0, false,  $model->getAttributeValue('box2')['image']); ?>">

                    <source media="(min-width: 1px)" srcset="<?= $model->geFieldImageWebp(400, 300, true,  $model->getAttributeValue('box2')['image']); ?>" type="image/webp">
                    <source media="(min-width: 1px)" srcset="<?= $model->getFieldImageUrl(400, 300, true,  $model->getAttributeValue('box2')['image']); ?>">

                    <img src="<?= $model->getFieldImageUrl(0, 0, false,  $model->getAttributeValue('box2')['image']); ?>" alt="">
                </picture>
            </div>
            <div class="companyBox-two__text companyBox-item" data-aos="fade-left" data-aos-once="true">
                <div class="companyBox__title">
                    <?= $model->getAttributeValue('box2')['name']; ?>
                </div>
                <?= $model->getAttributeValue('box2')['value']; ?>
            </div>
        </div><!-- companyBox-two -->
    </div>

    <div class="companyBox-three">
        <div class="content-site">
            <div class="fl fl-w">
                <div class="companyBox-three__left companyBox-item" data-aos="fade-up-right" data-aos-once="true">
                    <div class="text-upper"><?= $model->getAttributeValue('box3')['name']; ?></div>
                </div>
                <div class="companyBox-three__right companyBox-item fl fl-w fl-jc-sb" data-aos="fade-up-left" data-aos-once="true">
                    <div class="companyBox-three__img">
                        <picture class="absolute-img-picture">
                            <source media="(min-width: 1px)" srcset="<?= $model->geFieldImageWebp(0, 0, false,  $model->getAttributeValue('box3')['image']); ?>" type="image/webp">
                            <source media="(min-width: 1px)" srcset="<?= $model->getFieldImageUrl(0, 0, false,  $model->getAttributeValue('box3')['image']); ?>">

                            <img src="<?= $model->getFieldImageUrl(0, 0, false,  $model->getAttributeValue('box3')['image']); ?>" alt="">
                        </picture>
                    </div>
                    <div class="companyBox-three__desc">
                        <?= $model->getAttributeValue('box3')['value']; ?>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- companyBox-three -->

    <div class="companyBox-four">
        <div class="content-site">
            <div class="fl fl-w fl-ai-c">
                <div class="companyBox-four__img companyBox-item" data-aos="fade-right" data-aos-once="true">
                    <picture class="absolute-img-picture">
                        <source media="(min-width: 401px)" srcset="<?= $model->geFieldImageWebp(0, 0, false,  $model->getAttributeValue('box4')['image']); ?>" type="image/webp">
                        <source media="(min-width: 401px)" srcset="<?= $model->getFieldImageUrl(0, 0, false,  $model->getAttributeValue('box4')['image']); ?>">

                        <source media="(min-width: 1px)" srcset="<?= $model->geFieldImageWebp(400, 300, true,  $model->getAttributeValue('box4')['image']); ?>" type="image/webp">
                        <source media="(min-width: 1px)" srcset="<?= $model->getFieldImageUrl(400, 300, true,  $model->getAttributeValue('box4')['image']); ?>">
                        <img src="<?= $model->getFieldImageUrl(0, 0, false,  $model->getAttributeValue('box4')['image']); ?>" alt="">
                    </picture>
                </div>
                <div class="companyBox-four__text companyBox-item" data-aos="fade-left" data-aos-once="true">
                    <div class="companyBox__title">
                        <?= $model->getAttributeValue('box4')['name']; ?>
                    </div>
                    <?= $model->getAttributeValue('box4')['value']; ?>
                    <a href="#callbackModal" class="btn btn-link-orange btn-company" data-toggle="modal">Оставить заявку</a>
                </div>
            </div>
        </div>
    </div>
</div>

