<div class="news-box__item fl fl-d-c">
    <div class="news-box__img">
        <?php if ($data->image): ?>
            <a class="but-link-svg" href="<?= Yii::app()->createUrl('/news/news/view', ['slug' => $data->slug]); ?>">
                <!-- <?= CHtml::image($data->getImageUrl(), $data->title, ['class' => 'absolute-img']); ?> -->

                <picture class="absolute-img-picture">
                    <source media="(min-width: 401px)" srcset="<?= $data->getImageUrlWebp(0, 0, true, null,'image'); ?>" type="image/webp">
                    <source media="(min-width: 401px)" srcset="<?= $data->getImageNewUrl(0, 0, true, null,'image'); ?>">

                    <source media="(min-width: 1px)" srcset="<?= $data->getImageUrlWebp(350, 230, true, null,'image'); ?>" type="image/webp">
                    <source media="(min-width: 1px)" srcset="<?= $data->getImageNewUrl(350, 230, true, null,'image'); ?>">

                    <img src="<?= $data->getImageNewUrl(0, 0, true, null,'image'); ?>" alt="">
                </picture>
                    
            </a>
        <?php else : ?>
            <a class="but-link-svg" href="<?= Yii::app()->createUrl('/news/news/view', ['slug' => $data->slug]); ?>"><?= CHtml::image(Yii::app()->getTheme()->getAssetsUrl() . '/images/nophoto.jpg','', ['class' => 'absolute-img absolute-img-contain']); ?></a>
        <?php endif; ?>
    </div>
    <div class="news-box__body">
        <div class="news-box__date"><?= $data->getDayMonthNews(); ?> <span><?= date("Y", strtotime($data->date)); ?></span></div>
        <div class="news-box__info">
            <a class="but-link-svg" href="<?= Yii::app()->createUrl('/news/news/view', ['slug' => $data->slug]); ?>">
                <div class="news-box__name"><?= $data->title; ?></div>
            </a>
        </div>
    </div>
</div>





