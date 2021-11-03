<div class="news-panel fl fl-d-c">
    <?php foreach ($models as $key => $model): ?>
        <?php Yii::app()->controller->renderPartial('//news/news/_item', ['data' => $model]) ?>
    <?php endforeach; ?>
</div>


