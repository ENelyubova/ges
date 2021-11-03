<div>
	<a class="" data-fancybox="work" href="<?= $data->image->getImageUrl(); ?>">
		<div class="gallery-carousel__item">
			<?= CHtml::image($data->image->getImageUrl(), $data->image->alt, ['href' => $data->image->getImageUrl(), 'class' => 'absolute-img']); ?>
			<div class="shadow fl fl-ai-c fl-jc-c"><i class="fa fa-search-plus" aria-hidden="true"></i></div>
		</div>
	</a>
</div>


