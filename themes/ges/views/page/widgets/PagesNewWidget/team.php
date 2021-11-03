<?php if($pages) : ?>
    <div class="content-site">
        <div class="team-block">
            <div class="team-block___header fl fl-w fl-ai-c fl-jc-sb">
                <h2 class="heading"><?= $pages->title; ?></h2>
                <div class="top-link"><a href="/komanda" class="btn btn-link-orange">Все сотрудники</a></div>
            </div>

            <div class="team-block___body">
                <?php $childs = $pages->childPages(['condition' => 'status=1', 'order' => 'childPages.order ASC']); ?>
                <div class="team-top fl fl-w" data-aos="fade-up" data-aos-once="true">
                    <?php foreach ($childs as $key => $data) : ?>
                        <?php if ($key >= 0 && $key < 3) : ?>
                            <div class="team-block___item">
                                <div class="team-block___img">
                                    <?php if ($data->image): ?>
                                        <picture class="absolute-img-picture">
                                            <source media="(min-width: 401px)" srcset="<?= $data->getImageUrlWebp(0, 0, true, null,'image'); ?>" type="image/webp">
                                            <source media="(min-width: 401px)" srcset="<?= $data->getImageNewUrl(0, 0, true, null,'image'); ?>">

                                            <source media="(min-width: 1px)" srcset="<?= $data->getImageUrlWebp(360, 475, true, null,'image'); ?>" type="image/webp">
                                            <source media="(min-width: 1px)" srcset="<?= $data->getImageNewUrl(360, 475, true, null,'image'); ?>">

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
                        <?php endif; ?>
                    <?php endforeach; ?>
                    <div class="team-block___item"></div>
                </div>

                <div class="team-bottom fl fl-ai-c fl-jc-sb">
                    <div class="team-bottom-left" data-aos="fade-right" data-aos-once="true">
                        <?= $pages->body_short; ?>
                    </div>
                    <div class="team-bottom-right fl" data-aos="fade-left" data-aos-once="true">
                        <?php foreach ($childs as $key => $data) : ?>
                            <?php if ($key >= 3 && $key < 6) : ?>
                                <div class="team-block___item">
                                    <div class="team-block___img">
                                        <?php if ($data->image): ?>
                                            <picture class="absolute-img-picture">
                                                <source media="(min-width: 401px)" srcset="<?= $data->getImageUrlWebp(0, 0, true, null,'image'); ?>" type="image/webp">
                                                <source media="(min-width: 401px)" srcset="<?= $data->getImageNewUrl(0, 0, true, null,'image'); ?>">

                                                <source media="(min-width: 1px)" srcset="<?= $data->getImageUrlWebp(360, 475, true, null,'image'); ?>" type="image/webp">
                                                <source media="(min-width: 1px)" srcset="<?= $data->getImageNewUrl(360, 475, true, null,'image'); ?>">

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
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="team-design">
        <div class="design-width"><?= $pages->title_short; ?></div>
    </div>
<?php endif; ?>
