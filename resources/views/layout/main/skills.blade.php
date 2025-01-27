<!-- SKILLS SECTION START -->
<section class="skills-section" id="skills-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header text-center">
                    <h2 class="section-title wow fadeInUp" data-wow-delay=".3s">
                        مهارت ها
                    </h2>
                    <p class="wow fadeInUp" data-wow-delay=".4s">
با ترکیبی از تجربه و دانش، مهارت‌های ما تضمین می‌کند که پروژه‌های شما به بهترین نحو انجام شوند. <br>
ما با تخصص خود، توانایی‌هایی فراتر از انتظار را به شما ارائه می‌دهیم تا تجربه‌ای بی‌نظیر و موفق داشته باشید.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div
                    class="skills-widget d-flex flex-wrap justify-content-center align-items-center"
                >
                    @foreach ($Skills as $Skill)

                    <div class="skill-item wow fadeInUp" data-wow-delay=".5s">
                        <div class="skill-inner">
                            <div class="icon-box">
                                <img
                                    src="assets/img/icons/{{ $Skill['image'] }} "
                                    alt=""
                                />
                            </div>
                            <div class="number">{{ $Skill['percentage'] }}</div>
                        </div>
                        <p>{{ $Skill['name'] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- SKILLS SECTION END -->
