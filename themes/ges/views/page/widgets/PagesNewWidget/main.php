<?php if($pages) : ?>
    <div>
        <div class="main-top fl fl-w">
            <div class="main-text">
                <div class="main-text__title"><?= $pages->body_short; ?></div>
            </div>
            <div class="main-img">
                <div class="box-styles">
                    
                    <picture class="absolute-img-picture">
                        <source media="(min-width: 401px)" srcset="<?= $pages->getImageUrlWebp(0, 0, true, null,'image'); ?>" type="image/webp">
                        <source media="(min-width: 401px)" srcset="<?= $pages->getImageNewUrl(0, 0, true, null,'image'); ?>">

                        <source media="(min-width: 1px)" srcset="<?= $pages->getImageUrlWebp(357, 373, true, null,'image'); ?>" type="image/webp">
                        <source media="(min-width: 1px)" srcset="<?= $pages->getImageNewUrl(357, 373, true, null,'image'); ?>">

                        <img src="<?= $pages->getImageNewUrl(0, 0, true, null,'image'); ?>" alt="">
                    </picture>
                </div>
            </div>
        </div>

        <div class="main-bottom fl fl-w fl-ai-c">
            <div class="main-icon">
                <div class="main-icon-box">
                    <?php /*= CHtml::image($pages->getIconUrl(), '',['class' => 'absolute-img', 'data-aos'=>'fade-up' ,'data-aos-once'=>'true']); */?>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/HYZPN6PjOPY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="main-desc">
                <?= $pages->body; ?>
            </div>
        </div>
    </div>
<?php endif; ?>
