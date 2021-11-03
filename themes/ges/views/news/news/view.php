<?php
/**
 * Отображение для ./themes/default/views/news/news/news.php:
 *
 * @category YupeView
 * @package  YupeCMS
 * @author   Yupe Team <team@yupe.ru>
 * @license  https://github.com/yupe/yupe/blob/master/LICENSE BSD
 * @link     http://yupe.ru
 *
 * @var $this NewsController
 * @var $model News
 **/
?>
<?php
$this->title = ($model->meta_title) ? $model->meta_title : $model->title;
$this->description = $model->meta_description;
$this->keywords = $model->meta_keywords;
?>

<?php
$this->breadcrumbs = [
    Yii::t('NewsModule.news', 'Новости') => ['/news/news/index'],
    $model->title
];
?>
<div class="page-txt page-news">
    <div class="content-site">
        <?php $this->widget('bootstrap.widgets.TbBreadcrumbs', [
                'links' => $this->breadcrumbs,
        ]); ?>
        <h1 class="heading title"><?= CHtml::encode($model->title); ?></h1>
        
        <div class="news-view fl fl-jc-sb">
            <div class="news-view-content">
                <div class="news-box__date fl fl-ai-c">
                    <div><?= $model->getDayMonthNews(); ?> <span> <?= date("Y", strtotime($model->date)); ?></span></div>
                </div>
                <div class="news-view-content__body">
                    <?= $model->full_text; ?>
                </div>
            </div>
            <div class="news-view-panel">
                <div class="panel-div fl fl-ai-c">
                    <p class="panel-p">Читайте также</p>
                </div>
                <?php $this->widget("application.modules.news.widgets.MyNewsWidget", [
                    'view' => 'news-view',
                    'notIds' => "{$model->id},13",
                    'limit' => 2,
                ]); ?>
            </div>
        </div>
    </div>
</div>


