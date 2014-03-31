<div class="col-xs-12 well content">
	<h1>Images</h1>
	<div id="links">
		<?php foreach ($images as $image) : ?>
			<div class="thumbnail-wrap">
				<a class="btn btn-default btn-sm btn-preview" href="<?php echo $this->webroot . 'img/' . $image['Image']['image']; ?>" title="" data-gallery>Preview</a>
				<button class="btn btn-danger btn-sm">Delete</button>
				<a href="<?php echo $this->webroot . 'img/' . $image['Image']['image']; ?>" title="" data-gallery>
					<?php echo $this->Html->image($image['Image']['thumbnail'], array('class' => 'img-thumbnail')); ?>
				</a>
			</div>
		<?php endforeach; ?>
	</div>
</div>

<!-- The Gallery as lightbox dialog, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>

<script>
	document.getElementById('links').onclick = function(event) {
		event = event || window.event;
		var target = event.target || event.srcElement,
				link = target.src ? target.parentNode : target,
				options = {index: link, event: event},
		links = this.getElementsByClassName('btn-preview');
		blueimp.Gallery(links, options);
	};
</script>