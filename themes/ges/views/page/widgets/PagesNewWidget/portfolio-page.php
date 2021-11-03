<?php if($pages) : ?>
    <div class="content-site">
        <div class="project-block">
            <div class="project-block___header fl fl-w fl-ai-c fl-jc-sb">
                <h2 class="heading">Выполненные работы</h2>
                <div class="top-link"><a href="/portfolio" class="btn btn-link-orange">Портфолио</a></div>
            </div>
            <div class="project-block___body">
                <div class="arrows fl fl-ai-c fl-jc-e"></div>
                <div class="project-carousel slick-slider">
                    <?php foreach ($pages->childPages(['condition' => 'status=1', 'order' => 'childPages.order ASC']) as $key => $data) : ?>
                        <div>
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

                                                        <source media="(min-width: 1px)" srcset="<?= $image->getImageUrlWebp(400, 530, true, null,'image'); ?>" type="image/webp">
                                                        <source media="(min-width: 1px)" srcset="<?= $image->getImageNewUrl(400, 530, true, null,'image'); ?>">

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

                                                        <source media="(min-width: 1px)" srcset="<?= $image->getImageUrlWebp(400, 530, true, null,'image'); ?>" type="image/webp">
                                                        <source media="(min-width: 1px)" srcset="<?= $image->getImageNewUrl(400, 530, true, null,'image'); ?>">

                                                        <img src="<?= $image->getImageNewUrl(0, 0, true, null,'image'); ?>" alt="">
                                                    </picture>
                                                </div>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
