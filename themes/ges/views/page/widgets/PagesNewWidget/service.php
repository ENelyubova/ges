<?php if($pages) : ?>
    <?php foreach ($pages->childPages(['condition' => 'status=1', 'order' => 'childPages.order ASC']) as $key => $data) : ?>
        <div class="service-list__item fl fl-w fl-jc-sb"  data-aos="fade-up" data-aos-once="true">
            <div class="service-list__text fl fl-d-c fl-jc-sb">
                <div class="service-list__name">
                    <div class="service-list__title"><?= $data->title; ?></div>
                    <div class="service-list__subtitle"><?= $data->body; ?></div>
                </div>
                <div class="service-list__more">
                    <a href="<?= Yii::app()->createUrl('page/page/view', ['slug' => $data->slug]); ?>" class="btn btn-link-orange">Подробнее</a>
                </div>
            </div>
            <div class="service-list__img">
                <!-- <?= CHtml::image($data->getImageUrl(), '',['class' => 'absolute-img']); ?> -->

                <picture class="absolute-img-picture">
                    <source media="(min-width: 401px)" srcset="<?= $data->getImageUrlWebp(0, 0, true, null,'image'); ?>" type="image/webp">
                    <source media="(min-width: 401px)" srcset="<?= $data->getImageNewUrl(0, 0, true, null,'image'); ?>">

                    <source media="(min-width: 1px)" srcset="<?= $data->getImageUrlWebp(400, 300, true, null,'image'); ?>" type="image/webp">
                    <source media="(min-width: 1px)" srcset="<?= $data->getImageNewUrl(400, 300, true, null,'image'); ?>">

                    <img src="<?= $data->getImageNewUrl(0, 0, true, null,'image'); ?>" alt="">
                </picture>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>
