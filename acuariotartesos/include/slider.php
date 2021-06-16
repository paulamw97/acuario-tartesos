<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Nivo Slider</title>

	<link rel="stylesheet" href="assets/css/nivo-slider.css">
	<link rel="stylesheet" href="assets/css/mi-slider.css">

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.nivo.slider.js"></script>

	<script type="text/javascript">
		$(window).on('load', function() {
			$('#slider').nivoSlider();
		});
	</script>
</head>

<body>
	<div class="slider-wrapper theme-mi-slider">
		<div id="slider" class="nivoSlider">
			<img src="assets/media/a1.jpg" alt="" title="#htmlcaption1" />
			<img src="assets/media/a2.jpg" alt="" title="#htmlcaption2" />
			<img src="assets/media/a3.jpg" alt="" title="#htmlcaption3" />
			<img src="assets/media/a4.jpg" alt="" title="#htmlcaption4" />
		</div>

	</div>
</body>

</html>