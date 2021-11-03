<?php
/**
 * MailOrderCostWidget виджет формы ""
 */
Yii::import('application.modules.mail.models.*');

class MailOrderCostWidget extends yupe\widgets\YWidget
{
    public $product;
    public $view = 'order-cost-widget';

    public function run()
    {
        $model = new MailOrderCost;
        if (isset($_POST['MailOrderCost'])) {
            $model->attributes = $_POST['MailOrderCost'];
            if($model->verify == ''){
                if ($model->validate()) {
                    Yii::app()->user->setFlash('order-cost-success', Yii::t('MailModule.mail', 'Ваша заявка успешно отправлена.'));
                    Yii::app()->controller->refresh();
                }
            }
        }      

        $this->render($this->view, [
            'model' => $model,
        ]);
    }
}
