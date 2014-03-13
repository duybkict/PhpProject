<!DOCTYPE html>
<html>
	<head>
		<?php echo $this->Html->charset(); ?>
		<title>
			<?php echo $title_for_layout; ?>
		</title>
		<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap.min.css');
		echo $this->Html->css('bootstrap-theme.min.css');
		echo $this->Html->css('font_arial_narrow.css');
		echo $this->Html->css('style.css');

		echo $this->Html->script('bootstrap.min.js');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		?>
	</head>
	<body>
		<div id="container">
			<div class="row wrap">
				<?php echo $this->fetch('content'); ?>								
			</div>

		</div>
		<?php
		if (Configure::read('debug') == 2) {
			echo $this->element('sql_dump');
		}
		?>
	</body>
</html>
