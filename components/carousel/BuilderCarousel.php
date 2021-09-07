<link rel="stylesheet" href="./assets/css/swiper-bundle.min.css">

<div class="swiper builder-carousel" id="builderCarousel" data-speed="5000">
    <div class="swiper-wrapper builder-carousel__wrapper">
        <div class="swiper-slide builder-carousel__slide">
            <a href="" class="builder-carousel__link">
                <img src="./assets/images/builder/carousel/carousel-1.jpg" alt="40% Off All Shirts + Free Shipping! 2-Week Delivery">
            </a>
        </div>
        <div class="swiper-slide builder-carousel__slide">
            <a href="" class="builder-carousel__link">
                <img src="./assets/images/builder/carousel/carousel-1.jpg" alt="40% Off All Shirts + Free Shipping! 2-Week Delivery">
            </a>
        </div>
    </div>
    <div class="swiper-pagination builder-carousel__pagination"></div>
</div>
<script src="./assets/js/swiper-bundle.min.js"></script>
<script>
    var slideSpeed = $('.builder-carousel').data('speed');
    var swiper = new Swiper('.builder-carousel', {
        slidesPerView: 1,
        loop: true,
        preloadImages: false,
        lazy: true,
        autoplay: {
            delay: parseInt(slideSpeed) || 10000
        },
        autoHeight: true,
        pagination: {
            el: '.builder-carousel__pagination',
            clickable: true,
        },
        // navigation: {
        //     nextEl: '.ads-next',
        //     prevEl: '.ads-prev',
        // },
        breakpoints: {
            1101: {
                slidesPerView: 1,
            }
        }
    });
</script>