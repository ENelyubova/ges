<div>
	<div class="slider-wrap">
		<div class="content-site fl fl-ai-c">
			<div class="slider-info">
				<div class="slider-title title"><?=$data->image->name ?></div>
				<div class="slider-desc"><?=$data->image->alt ?></div>
			</div>
			<div class="slider-img">
				<?= CHtml::image($data->image->getImageUrl(), $data->image->alt, ['href' => $data->image->getImageUrl(), 'class' => 'absolute-im']); ?>
			</div>
	    </div>
		
	</div>
</div>

