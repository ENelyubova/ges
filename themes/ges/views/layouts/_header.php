<div class="header fl <?= ($this->action->id=='index' && $this->id=='hp') ? 'header-home' : 'header-inner'; ?>">
  <div class="header-logo header-logo-big">
    <a href="/"><?php if (Yii::app()->hasModule('contentblock')) : ?>
        <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'logo-top']); ?>
      <?php endif; ?></a>
  </div><!-- logo --> 

  <div class="content-site fl fl-w fl-ai-c">
    <div class="header-logo header-logo-content">
      <a href="/"><?php if (Yii::app()->hasModule('contentblock')) : ?>
          <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'logo-top']); ?>
        <?php endif; ?></a>
    </div><!-- logo --> 

    <div class="header-menu fl fl-ai-c">
      <?php if (Yii::app()->hasModule('menu')) : ?>
          <?php $this->widget('application.modules.menu.widgets.MenuWidget', ['name' => 'top-menu', 'view' => 'menu']); ?>
      <?php endif; ?>
    </div><!-- menu -->

    <div class="mobile-panel">
        <div class="m-menu-button">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </div>
        <div class="mobile-menu ">
            <div class="m-menu-buttons">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
            <div class="mobile-content">
              <?php if (Yii::app()->hasModule('menu')) : ?>
                <?php $this->widget('application.modules.menu.widgets.MenuWidget', ['name' => 'top-menu', 'view' => 'menu']); ?>
              <?php endif; ?>
            </div>
        </div>
      </div><!-- mobile-panel -->

    <div class="header-contacts header-contacts-content fl fl-ai-c">
      <div class="header-phone">
        <?php /*if (Yii::app()->hasModule('contentblock')) : ?>
            <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'mode']); ?>
        <?php endif;*/ ?>
        <?php if (Yii::app()->hasModule('contentblock')) : ?>
            <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'phone']); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
  
  <div class="header-contacts header-contacts-abs fl fl-ai-c">
    <div class="header-phone">
      <?php /*if (Yii::app()->hasModule('contentblock')) : ?>
          <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'mode']); ?>
      <?php endif;*/ ?>
      <?php if (Yii::app()->hasModule('contentblock')) : ?>
          <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'phone']); ?>
      <?php endif; ?>
    </div>
  </div>
</div>



