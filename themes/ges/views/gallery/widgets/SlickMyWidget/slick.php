<div class="slider-block">
    <?php $this->widget(
        'bootstrap.widgets.TbListView',
        [
            'dataProvider'  => $dataProvider,
            'itemView'      => '_slick-item',
            'template'      => "{items}",
               'itemsCssClass' => $this->slickClass,
            'itemsTagName'  => 'div'
        ]
    ); ?>
    <!-- <div class="calc-panel content-site fl fl-w fl-jc-sb">
        <div class="select-box">
            <div class="select-box__current" tabindex="1">
                <div class="select-box__value">
                    <input class="select-box__input" type="radio" id="0" value="1" name="Calc-1" checked="checked">
                    <p class="select-box__input-text">Комплексная уборка</p>
                </div>
                <div class="select-box__value">
                    <input class="select-box__input" type="radio" id="1" value="2" name="Calc-1" checked="checked">
                    <p class="select-box__input-text">Уборка квартиры</p>
                </div>
                <img class="select-box__icon" src="http://cdn.onlinewebfonts.com/svg/img_295694.svg" alt="Arrow Icon" aria-hidden="true">
            </div>
            <ul class="select-box__list">
                <li>
                    <label class="select-box__option" for="0" aria-hidden="aria-hidden">Комплексная уборка</label>
                </li>
                <li>
                    <label class="select-box__option" for="1" aria-hidden="aria-hidden">Уборка квартиры</label>
                </li>
            </ul>
        </div>select-box
    
        <div class="select-box">
            <div class="select-box__current" tabindex="2">
                <div class="select-box__value">
                    <input class="select-box__input" type="radio" id="2" value="3" name="Calc-2" checked="checked">
                    <p class="select-box__input-text">1 комната</p>
                </div>
                <div class="select-box__value">
                    <input class="select-box__input" type="radio" id="3" value="4" name="Calc-2" checked="checked">
                    <p class="select-box__input-text">2 комнаты</p>
                </div>
                <img class="select-box__icon" src="http://cdn.onlinewebfonts.com/svg/img_295694.svg" alt="Arrow Icon" aria-hidden="true">
            </div>
            <ul class="select-box__list">
                <li>
                    <label class="select-box__option" for="2" aria-hidden="aria-hidden">1 комната</label>
                </li>
                <li>
                    <label class="select-box__option" for="3" aria-hidden="aria-hidden">2 комнаты</label>
                </li>
            </ul>
        </div>select-box
    
        <div class="select-box">
            <div class="select-box__current" tabindex="3">
                <div class="select-box__value">
                    <input class="select-box__input" type="radio" id="4" value="5" name="Calc-3" checked="checked">
                    <p class="select-box__input-text">1 санузел</p>
                </div>
                <div class="select-box__value">
                    <input class="select-box__input" type="radio" id="5" value="6" name="Calc-3" checked="checked">
                    <p class="select-box__input-text">2 санузла</p>
                </div>
                <img class="select-box__icon" src="http://cdn.onlinewebfonts.com/svg/img_295694.svg" alt="Arrow Icon" aria-hidden="true">
            </div>
            <ul class="select-box__list">
                <li>
                    <label class="select-box__option" for="4" aria-hidden="aria-hidden">1 санузел</label>
                </li>
                <li>
                    <label class="select-box__option" for="5" aria-hidden="aria-hidden">2 санузла</label>
                </li>
            </ul>
        </div>select-box
    
        <div class="select-box">
            <button class="btn btn-blue">Расчитать стоимость</button>
        </div>
    </div> -->
</div>


