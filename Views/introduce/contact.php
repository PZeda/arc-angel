
<!-- pages-title-start -->
<div class="pages-title" style="padding:10px">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="pages-title-text text-center">
					<ul class="text-left">
						<li><a class="main-pg" href="?act=home">Trang chủ</a></li>
						<li><span> // </span>Liên hệ</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- pages-title-end -->
<!-- contact content section start -->
<div class="pages contact-page " style="padding:10px">
	<div class="container text-center">
		<div class="row">
			<div class="col-sm-12">
				<div class="googleMap-info">
					<div id="googleMap"></div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-10 col-text-center">
				<div class="contact-details">
					<div class="row">
						<div class="col-sm-4">
							<div class="single-contact">
								<i class="mdi mdi-map-marker"></i>
								<p>65 Huỳnh Thúc Kháng </p>
								<p>Trường cao đẳng kỹ thuật Cao Thắng</p>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="single-contact">
								<i class="mdi mdi-phone"></i>
								<p>(+84) 0987540821</p>
								<p>(+84) 0913779889</p>								
							</div>
						</div>
						<div class="col-sm-4">
							<div class="single-contact">
								<i class="mdi mdi-email"></i>
								<p>0306201119@caothang.edu.vn</p>
								<p>0306201141@caothang.edu.vn</p>							
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- contact content section end -->
<!-- Google Map JS -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
	function initialize() {
	
		var mapOptions = {
		zoom: 17,
		hue: '#E9E5DC',
		scrollwheel: false,
		mapTypeId: google.maps.MapTypeId.TERRAIN,
		center: new google.maps.LatLng(21.006317, 105.841171)
		};

		var map = new google.maps.Map(document.getElementById('googleMap'), mapOptions);

		var marker = new google.maps.Marker({
		position: map.getCenter(),
		icon: 'public/img/map-marker.png',
		map: map
		});
	}

	google.maps.event.addDomListener(window, 'load', initialize);
</script>
