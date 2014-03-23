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
		<a href="img/gallery/image1.jpg" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit" data-gallery>
			<img src="img/gallery/image1.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit">
		</a>
		<a href="img/gallery/image2.jpg" title="Praesent nulla metus" data-gallery>
			<img src="img/gallery/image2.jpg" alt="Praesent nulla metus">
		</a>
		<a href="img/gallery/image3.jpg" title="Mauris et augue ac arcu interdum volutpat vel eget turpis" data-gallery>
			<img src="img/gallery/image3.jpg" alt="Mauris et augue ac arcu interdum volutpat vel eget turpis">
		</a>
		<a href="img/gallery/image4.jpg" title="Mauris et augue ac arcu interdum volutpat vel eget turpis" data-gallery>
			<img src="img/gallery/image4.jpg" alt="Mauris et augue ac arcu interdum volutpat vel eget turpis">
		</a>
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
document.getElementById('links').onclick = function (event) {
    event = event || window.event;
    var target = event.target || event.srcElement,
        link = target.src ? target.parentNode : target,
        options = {index: link, event: event},
        links = this.getElementsByTagName('a');
    blueimp.Gallery(links, options);
};
</script>
