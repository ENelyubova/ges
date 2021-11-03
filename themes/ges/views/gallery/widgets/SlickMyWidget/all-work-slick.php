<div class="gallery-carousel-3 gallery-carousel">
    <?php $this->widget(
        'bootstrap.widgets.TbListView',
        [
            'dataProvider'  => $dataProvider,
            'itemView'      => '_slick-all',
            'template'      => "{items}",
               'itemsCssClass' => $this->slickClass,
            'itemsTagName'  => 'div'
        ]
    ); ?>
    <div class="arrows">
        <div class="dots"></div>
    </div>
</div>
