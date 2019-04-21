<!-- Gallery Area Start -->
<div class="alime-portfolio-area section-padding-80 clearfix">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Projects Menu -->
                <div class="alime-projects-menu">
                    <div class="portfolio-menu text-center">
                        <button class="btn active" data-filter="*">All</button>
                        <button class="btn" data-filter=".human">Human</button>
                        <button class="btn" data-filter=".nature">Nature</button>
                        <button class="btn" data-filter=".country">Country</button>
                        <button class="btn" data-filter=".video">Video</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row alime-portfolio">

            @include('work.list')
        </div>

        <div class="row">
            <div class="col-12 text-center wow fadeInUp" data-wow-delay="700ms">
                <a href="#" class="btn alime-btn btn-2 mt-15">View More</a>
            </div>
        </div>
    </div>
</div>

<div class="container py-5">


    <div class="col-12 text-center py-5">
        <span class="color-style h1 font-weight-bold"> Мы предоставим вам </span>
    </div>

    <div class="row">
        <div class="col-4 text-center">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/icon/web.png') }}" class="card-img-top w-50 rounded img-fluid mx-auto" alt="Разработка сайтов">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-4 text-center">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/icon/seo.png') }}" class="card-img-top w-50 rounded img-fluid mx-auto" alt="Заключение договора">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-4 text-center">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/icon/contract.png') }}" class="card-img-top w-50 rounded img-fluid mx-auto" alt="СЕО оптимизация">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Gallery Area End -->
