<div class="main-slider-one main-slider-two slider-area">
    <div id="wrapper">
        <div class="slider-wrapper">
            <div id="mainSlider" class="nivoSlider">
                <?php $i=2; foreach ($data_banner as  $value) {  ?>
                <img src="public/<?=$value['HinhAnh']?>" alt="main slider" title="#htmlcaption"/>
                <?php } ?>
            </div>
            <div id="htmlcaption" class="nivo-html-caption slider-caption">
                <div class="container">
                    <div class="slider-left slider-right">
                        <div class="slide-text animated zoomInUp">
                            <h3 style="font-weight:bolder">Angel figure shop</h3>
                            <hr style="width:390px;float:left;">
                            <h1>Cửa hàng mô hình chất lượng cao</h1>
                        </div>
                        <div class="animated slider-btn fadeInUpBig">
                            <a class="add-cart-btn" href="index.php?act=shop">Bắt đầu mua ngay !!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>							
    </div>
</div>