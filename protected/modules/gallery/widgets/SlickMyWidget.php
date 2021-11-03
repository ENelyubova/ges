<?php

/**
 * GalleryWidget виджет отрисовки галереи изображений
 *
 * @category YupeWidget
 * @package  yupe.modules.gallery.widgets
 * @author   YupeTeam <team@yupe.ru>
 * @license  BSD http://ru.wikipedia.org/wiki/%D0%9B%D0%B8%D1%86%D0%B5%D0%BD%D0%B7%D0%B8%D1%8F_BSD
 * @version  0.5.3
 * @link     https://yupe.ru
 *
 */

Yii::import('application.modules.gallery.models.*');

class SlickMyWidget extends yupe\widgets\YWidget
{
    // сколько изображений выводить на одной странице
    public $limit = 20;

    // ID-галереи
    public $galleryId;

    public $ids;

    public $slickClass = 'slick-carousel';
    // Галерея
    public $gallery;

    public $view = 'slick';

    /**
     * Запускаем отрисовку виджета
     *
     * @return void
     */
    public function init()
    {
        
        parent::init();
    }


    public function run()
    {
        $criteria = new CDbCriteria();
        $criteria->limit = $this->limit;
        $criteria->with = 'image';
        $criteria->order = 't.position ASC';
        if($this->ids){
            $this->ids = explode(',', $this->ids);
            if(is_array($this->ids) and !empty($this->ids)) {
                $criteria->addInCondition('t.gallery_id', $this->ids);
            }
        }else {
            $criteria->condition = 't.gallery_id = :gallery_id';
            $criteria->params = [':gallery_id' => $this->galleryId];
        }

        $dataProvider = new CActiveDataProvider(
            'ImageToGallery', [
                'criteria' => $criteria,
                'pagination' => ['pageSize' => $this->limit],
            ]
        );

        $this->render(
            $this->view,
            [
                'dataProvider' => $dataProvider,
                'gallery' => $this->gallery,
                'slickClass'        => $this->slickClass,
            ]
        );
    }
}
