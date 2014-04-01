<div class="col-xs-12 header">
	<img src="img/logo.png" class="logo" />
	<img src="img/header_text1.png" class="header_text1" />
	<img src="img/header_text2.png" class="header_text2" />
	<img src="img/header_text3.png" class="header_text3" />
</div>

<div class="col-xs-12 content">
	<center>
		<h1>Suunnittelusta toteutukseen - jotta sina NAYT!</h1>
	</center>
	<div class="col-xs-5">
		<h2>Teippaukset</h2>
		<ul>
			<li>Leikkuriteipit (tekstit ja kuviot)</li>
			<li>Leikkuriteipit (tekstit ja kuviot)</li>
			<li>Leikkuriteipit (tekstit ja kuviot)</li>
		</ul>
		<h2>Tulosteet</h2>
		<ul>
			<li>Leikkuriteipit (tekstit ja kuviot)</li>
			<li>Leikkuriteipit (tekstit ja kuviot)</li>
			<li>Leikkuriteipit (tekstit ja kuviot)</li>
		</ul>
		<h2>Teippaukset</h2>
		<ul>
			<li>Leikkuriteipit (tekstit ja kuviot)</li>
		</ul>
		<h2>Teippaukset</h2>
		<ul>
			<li>Leikkuriteipit (tekstit ja kuviot)</li>
		</ul>
	</div>
	<div class="col-xs-offset-3 col-xs-4 right-col">
		<br />
		<br />
		<br />
		<span class="span1">Ota yhteytta ! &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
		<span class="span2">tuatanto@ginepro.fi</span>
		<span class="span3">040 727 9594 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
		<img src="img/logo_2.png" class="logo" />
	</div>
</div>

<div class="col-xs-12 gallery">
	<div id="links">
		<?php
		foreach ($images as $k => $image) :
			$class = 'img-rounded';
			if ($k % 6 == 0)
				$class .= ' first';
			else if ($k % 6 == 5)
				$class .= ' last';
			?>
			<a href="<?php echo $this->webroot . 'img/' . $image['Image']['image']; ?>" title="" data-gallery>
				<?php echo $this->Html->image($image['Image']['thumbnail'], array('class' => $class)); ?>
			</a>		
		<?php endforeach; ?>
	</div>
</div>

<!-- The Gallery as lightbox dialog, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>
