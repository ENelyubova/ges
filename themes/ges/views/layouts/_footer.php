<div class="footer">
    <div class="content-site">
        <div class="footer-panel fl fl-w fl-jc-sb">
            <div class="footer-logo footer-item">
                <?php if (Yii::app()->hasModule('contentblock')): ?>
                    <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'logo-footer']); ?>
                <?php endif; ?>
                <div class="footer-copy">
                    © <?= date('Y'); ?> ООО "ГЕС Компани"        
                </div>
            </div>
            <div class="footer-service footer-item hide-mobile">
                <div class="footer-heading">Услуги</div>
                <?php $this->widget("application.modules.page.widgets.PagesNewWidget", [
                    'id'=> 3,
                    'view' => 'menu-footer'
                ]); ?>
            </div>
            <div class="footer-item hide-mobile">
                <?php if (Yii::app()->hasModule('menu')) : ?>
                    <?php $this->widget('application.modules.menu.widgets.MenuWidget', ['name' => 'top-menu', 'view' => 'menu']); ?>
                <?php endif; ?>
            </div>
            
            <div class="footer-item footer-contacts">
                <div class="footer-heading">Контакты</div>
                <div class="footer-contacts-item">
                    <?php if (Yii::app()->hasModule('contentblock')): ?>
                        <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'mode']); ?>
                    <?php endif; ?>

                    <?php if (Yii::app()->hasModule('contentblock')): ?>
                        <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'phone']); ?>
                    <?php endif; ?>
                </div>
        
                <div class="footer-contacts-item">
                    <?php if (Yii::app()->hasModule('contentblock')): ?>
                    <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'address']); ?>
                    <?php endif; ?>
                </div>
        
                <div class="footer-contacts-item footer-contacts-email">
                    <?php if (Yii::app()->hasModule('contentblock')): ?>
                    <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'email']); ?>
                    <?php endif; ?>
                </div>

                <div class="footer-contacts-social">
                    <?php if (Yii::app()->hasModule('contentblock')): ?>
                    <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'social']); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom fl fl-ai-c fl-jc-sb">
            <div class="footer-info"> 
                <?php if (Yii::app()->hasModule('contentblock')): ?>
                    <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'info-footer']); ?>
                <?php endif; ?>
            </div>
            <div class="dc56">
                <a href="https://dcmedia.ru/"><span class="icon-DCMedia--"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span></span></a>
                <p>Разработка и дизайн</p>
            </div>
        </div>
    </div>
</div>
