<!-- Single Gallery Item -->
<div class="col-12 col-sm-6 col-lg-3 single_gallery_item {{ Illuminate\Support\Arr::random(['nature', 'human', 'country', 'video']) }} mb-30 wow fadeInUp" data-wow-delay="100ms">
    <div class="single-portfolio-content">
        <img src="img/bg-img/{{ $image = rand(3, 63) }}.jpg" alt="">
        <div class="hover-content">
            <a href="img/bg-img/{{ $image }}.jpg" class="portfolio-img">+</a>
        </div>
    </div>
</div>
