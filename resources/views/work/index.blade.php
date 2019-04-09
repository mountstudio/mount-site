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
<!-- Gallery Area End -->
