<?php


loadPartials("header");
loadPartials("navbar");


/**
 * @var  $ad
 */

?>

<div class="container">
    <div class="row">
        <!-- Asosiy Kontent -->
        <div class="col-lg-8">
            <!-- Birlashtirilgan Uy Kartasi -->
            <div class="property-card">
                <!-- Rasm Galereyasi -->
                <div id="propertyCarousel" class="carousel slide mb-3" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://via.placeholder.com/800x400.png?text=Uy+1" class="d-block w-100" alt="Uy Rasmi 1">
                        </div>
                        <div class="carousel-item">
                            <img src="https://via.placeholder.com/800x400.png?text=Uy+2" class="d-block w-100" alt="Uy Rasmi 2">
                        </div>
                        <div class="carousel-item">
                            <img src="https://via.placeholder.com/800x400.png?text=Uy+3" class="d-block w-100" alt="Uy Rasmi 3">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#propertyCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Oldingi</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#propertyCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Keyingi</span>
                    </button>
                    <ol class="carousel-indicators">
                        <li data-bs-target="#propertyCarousel" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#propertyCarousel" data-bs-slide-to="1"></li>
                        <li data-bs-target="#propertyCarousel" data-bs-slide-to="2"></li>
                    </ol>
                </div>

                <!-- Uy Tafsilotlari -->
                <div class="property-title"> <?php  echo $ad['title']; ?></div>
                <div class="property-price"><?php  echo "$". $ad['price']; ?></div>

                <div class="property-description mt-3">
                    <p><strong> <?php echo  $ad['address'] ?></strong></p>
                    <p><strong> Description </strong><br><?php echo $ad['description'] ?></p>
                </div>
                <!--                <ul class="property-details">-->
                <!--                    <li><strong>Yerni maydoni (sotix):</strong> 3.3 sotix</li>-->
                <!--                    <li><strong>Uy qavatlari:</strong> 1 qavat</li>-->
                <!--                    <li><strong>Xonalar soni:</strong> 4 xonalar</li>-->
                <!--                    <li><strong>Sanuzellar soni:</strong> 2</li>-->
                <!--                    <li><strong>Podval:</strong> Mavjud</li>-->
                <!--                    <li><strong>Yozgi oshxona:</strong> Yo'q</li>-->
                <!--                    <li><strong>Uy ta'miri:</strong> Zo'r</li>-->
                <!--                    <li><strong>Qurilish turi:</strong> G'isht</li>-->
                <!--                    <li><strong>Manzil:</strong> Qizil Sholkor yonida, Mayskiy posyolkasi oldida, Baltagovka mahallasida</li>-->
                <!--                </ul>-->
            </div>
        </div>

        <!-- Reklamachi haqida malumot -->
        <div class="col-lg-4">
            <div class="advertiser-card">
                <h5>Reklama beruvchi </h5>
                <p><strong>Nurullayev Jalolbek </strong></p>
                <button class="btn btn-warning"> +998937381028  Aloqa uchun</button>
            </div>

            <!-- Geolokatsiya -->
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2995.4458121419097!2d69.24102831542194!3d41.3130299792725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38aef4bdff1a87d3%3A0x781324c57fd02112!2sTashkent%20City!5e0!3m2!1sen!2suz!4v1690280330291!5m2!1sen!2suz" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>
