<div class="gallery-carousel-2 gallery-carousel">
    <?php $this->widget(
        'bootstrap.widgets.TbListView',
        [
            'dataProvider'  => $dataProvider,
            'itemView'      => '_slick-office',
            'template'      => "{items}",
               'itemsCssClass' => $this->slickClass,
            'itemsTagName'  => 'div'
        ]
    ); ?>
    <div class="arrows">
        <div class="dots"></div>
    </div>
</div>
