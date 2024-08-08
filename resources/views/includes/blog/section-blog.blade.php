<section class="news-feed-section section-gap">
    <div class="container">
        <div class="row mb-15">
            <div class="col-xl-9 col-md-8">
                @include('includes.blog.articles')
                <!-- <div class="product-pagination-area mt--50">
                    <button class="prev"><i class="fal fa-angle-double-left"></i></button>
                    <button class="number active">01</button>
                    <button class="number">02</button>
                    <button class="skip-number">---</button>
                    <button class="number">07</button>
                    <button class="number">08</button>
                    <button class="next"><i class="fal fa-angle-double-right"></i></button>
                </div> -->
            </div>
            <div class="col-xl-3 col-md-4">
                <div class="news-right-widget">
                    <!-- <div class="widget widget-search mb-40">
                        <div class="widget-title-box pb-25 mb-30">
                            <h4 class="widget-sub-title2 fs-20">Search Here</h4>
                        </div>
                        <form class="subscribe-form mb-10" action="#">
                            <input type="text" placeholder="Keyword...">
                            <button class="widget-btn"><i class="far fa-search"></i></button>
                        </form>
                    </div> -->
                    <div class="widget widget-post mb-40">
                        <div class="widget-title-box pb-25 mb-30">
                            <h4 class="widget-sub-title2 fs-20">Popular Feeds</h4>
                        </div>
                        @include('includes.blog.recent-posts')
                    </div>
                    <!-- <div class="widget widget-categories-list mb-40">
                        <div class="widget-title-box pb-25 mb-30">
                            <h4 class="widget-sub-title2 fs-20">Categories</h4>
                        </div>
                        <ul class="list-none">
                            <li><a href="#"><i class="fal fa-angle-right"></i> Business <span
                                        class="f-right">26</span></a></li>
                            <li><a href="#"><i class="fal fa-angle-right"></i> Consultant <span
                                        class="f-right">30</span></a></li>
                            <li><a href="#"><i class="fal fa-angle-right"></i> Creative <span
                                        class="f-right">71</span></a></li>
                            <li><a href="#"><i class="fal fa-angle-right"></i> UI/UX <span
                                        class="f-right">56</span></a></li>
                            <li><a href="#"><i class="fal fa-angle-right"></i> Technologys <span
                                        class="f-right">60</span></a></li>
                        </ul>
                    </div> -->
                    <div class="widget widget-categories-tag mb-40">
                        <div class="widget-title-box pb-25 mb-25">
                            <h4 class="widget-sub-title2 fs-20">TAGS</h4>
                        </div>
                        <div class="tag-list">
                            <a href="#">Popular</a>
                            <a href="#">Design</a>
                            <a href="#">UX</a>
                            <a href="#">Usability</a>
                            <a href="#">Develop</a>
                            <a href="#">Icon</a>
                            <a href="#">Business</a>
                            <a href="#">Consult</a>
                            <a href="#">Kit</a>
                            <a href="#">Keyboard</a>
                            <a href="#">Mouse</a>
                            <a href="#">Tech</a>
                        </div>
                    </div>
                    <div class="widget widget-sponsors-ad">
                        <div class="widget-title-box pb-25 mb-25">
                            <h4 class="widget-sub-title2 fs-20">SPONSOR ADS</h4>
                        </div>
                        <a href="#">
                            <div class="ad-thumb"><img src="assets/images/blog/sponsorsad.jpg" alt="sponsorad">
                            </div>
                            <span class="ad-tag">FOR AD: 270X240</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>