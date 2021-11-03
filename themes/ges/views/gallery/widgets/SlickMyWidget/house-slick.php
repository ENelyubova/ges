<div class="gallery-carousel-1 gallery-carousel">
    <?php $this->widget(
        'bootstrap.widgets.TbListView',
        [
            'dataProvider'  => $dataProvider,
            'itemView'      => '_slick-house',
            'template'      => "{items}",
               'itemsCssClass' => $this->slickClass,
            'itemsTagName'  => 'div'
        ]
    ); ?>
    <div class="arrows">
        <div class="dots"></div>
    </div>
</div>
