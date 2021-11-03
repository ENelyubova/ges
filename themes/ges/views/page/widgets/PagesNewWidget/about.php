<?php if($pages) : ?>
    <div class="about-top fl fl-w">
        <div class="about__info">
            <div class="about__header">
                <h2 class="heading">Проектирование <br>пространства</h2>
            </div>
            <div class="about__body"><?= $pages->body_short; ?></div>
            <div class="about__btn">
                <a href="/o-kompanii" class="about-btn btn btn-link-orange">О компании</a>
            </div>
        </div>
        <div class="about__img">
            <div class="about-box-style">
                <picture class="absolute-img-picture">
                    <source media="(min-width: 401px)" srcset="<?= $pages->getImageUrlWebp(0, 0, true, null,'image'); ?>" type="image/webp">
                    <source media="(min-width: 401px)" srcset="<?= $pages->getImageNewUrl(0, 0, true, null,'image'); ?>">

                    <source media="(min-width: 1px)" srcset="<?= $pages->getImageUrlWebp(360, 210, true, null,'image'); ?>" type="image/webp">
                    <source media="(min-width: 1px)" srcset="<?= $pages->getImageNewUrl(360, 210, true, null,'image'); ?>">

                    <img src="<?= $pages->getImageNewUrl(0, 0, true, null,'image'); ?>" alt="">
                </picture>
            </div>
        </div>
    </div>

    <div class="about-bottom fl fl-w">
        <div class="about-bottom-left" data-aos="fade-up-right" data-aos-once="true">
            <div class="thumb-left">
                <img src="/uploads/image/about-thumb-left.jpg" class="absolute-img">
            </div>
        </div>
        <div class="about-bottom-right fl fl-w fl-jc-sb" data-aos="fade-up-left" data-aos-once="true">
            <div class="thumb-right">
                <img src="/uploads/image/about-thumb-right.jpg" class="absolute-img">
            </div>
            <div class="thumb-text">
                <?= $pages->title_short; ?>
            </div>
        </div>
    </div>
<?php endif; ?>
