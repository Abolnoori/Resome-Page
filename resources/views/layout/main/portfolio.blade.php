<!-- PORTFOLIO SECTION START -->
<section class="portfolio-section" id="works-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header text-center">
                    <h2 class="section-title wow fadeInUp" data-wow-delay=".3s">
                        پروژه های اخیر
                    </h2>
                    <p class="wow fadeInUp" data-wow-delay=".4s">
                        ما تلاش کرده‌ایم تا با ترکیبی از خلاقیت و تخصص، نتایج بی‌نظیری برای مشتریان خود به ارمغان بیاوریم. <br>
                         با همکاری نزدیک و تمرکز بر جزئیات، پروژه‌های موفق و منحصر به فردی را به سرانجام رسانده‌ایم  .
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div
                    class="portfolio-filter text-center wow fadeInUp"
                    data-wow-delay=".5s"
                ></div>

                <div class="portfolio-box wow fadeInUp" data-wow-delay=".6s">
                    @foreach ( $Projects as $Project)

                    <div class="portfolio-sizer"></div>
                    <div class="gutter-sizer"></div>
                    <div class="portfolio-item branding">
                        <div class="image-box">
                            <img
                                src="assets/img/portfolio/{{ $Project['image'] }}"
                                alt=""
                            />
                        </div>
                        <div class="content-box">
                            <h3 class="portfolio-title">
                                {{ $Project['proname'] }}
                            </h3>
                            <p>{{ $Project['paragraph'] }}</p>
                            <i class="flaticon-up-right-arrow"></i>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- PORTFOLIO SECTION END -->
