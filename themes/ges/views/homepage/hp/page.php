<?php
/** @var Page $page */

if ($page->layout) {
    $this->layout = "//layouts/{$page->layout}";
}

$this->title = $page->title;
$this->breadcrumbs = [
    Yii::t('HomepageModule.homepage', 'Pages'),
    $page->title
];
$this->description = !empty($page->meta_description) ? $page->meta_description : Yii::app()->getModule('yupe')->siteDescription;
$this->keywords = !empty($page->meta_keywords) ? $page->meta_keywords : Yii::app()->getModule('yupe')->siteKeyWords
?>

<div class="main">
    <div class="content-site">
        <?php $this->widget("application.modules.page.widgets.PagesNewWidget", [
            'id'=> 2,
            'view' => 'main'
        ]); ?>
    </div>
</div>

<div class="service">
    <div class="content-site">
        <div class="service-top fl fl-ai-c fl-jc-sb">
            <div class="heading">Услуги <br>и направления <br>деятельности</div>
            <!-- <div class="service-nav">
                <ul>
                    <li><a href="/uslugi" class="btn btn-link-orange">Услуги</a></li>
                    <li><a href="/portfolio" class="btn btn-link-orange">Портфолио</a></li>
                    <li><a href="/komanda" class="btn btn-link-orange">Команда</a></li>
                </ul>
            </div> -->
        </div>

        <div class="service-list fl fl-d-c">
            <?php $this->widget("application.modules.page.widgets.PagesNewWidget", [
                'id'=> 3,
                'view' => 'service'
            ]); ?>
        </div>
    </div>
</div>

<div class="about">
    <div class="content-site">
        <div class="about-block">
            <?php $this->widget("application.modules.page.widgets.PagesNewWidget", [
                'id'=> 8,
                'view' => 'about'
            ]); ?>
        </div>
    </div>
</div>

<div class="project">
    <?php $this->widget("application.modules.page.widgets.PagesNewWidget", [
        'id'=> 9,
        'view' => 'project'
    ]); ?>
</div>

<div class="team">
    <?php $this->widget("application.modules.page.widgets.PagesNewWidget", [
        'id'=> 10,
        'view' => 'team'
    ]); ?>
</div>

<div class="news">
    <div class="content-site">
        <div class="news-header fl fl-ai-c fl-jc-sb">
            <h2 class="heading">Новости и события</h2>
            <div class="top-link"><?= CHtml::link('Читать все', '/news', ['class' => 'btn btn-link-orange']); ?></div>
        </div>
        <?php $this->widget("application.modules.news.widgets.NewsWidget", [
            'view' => 'news-home',
            'limit' => 5,
        ]); ?>
    </div>
</div>

<div class="partner">
    <div class="content-site">
        <h2 class="heading">Партнеры</h2>
        <div class="partner-block fl fl-w">
            <?php $this->widget("application.modules.gallery.widgets.GalleryWidget", ['galleryId' => 1,
                'view' => 'partners',
            ]); ?>
        </div>
    </div>
</div>
