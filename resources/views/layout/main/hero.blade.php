      <!-- HERO SECTION START -->
      <section class="hero-section d-flex align-items-center" id="intro">
        <div class="intro_text">
          <svg viewbox="0 0 1320 300">
            <text x="50%" y="50%" text-anchor="middle">HI</text>
          </svg>
        </div>
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6">
              <div class="hero-content-box">
                <span class="hero-sub-title">من @yield('name' , 'نام') هستم</span>
                <h1 class="hero-title">
                  @yield('job-1')<br />
                  @yield('job-2')
                </h1>

                <div class="hero-image-box d-md-none text-center">
                  <img src="assets/img/hero/{{ $image }}" alt="" style="width: 300px; height: 320px;" />
                </div>

                <p class="lead">
                  @yield('aboutmy')
                </p>
                <div class="button-box d-flex flex-wrap align-items-center">
                  
                  <a href="@yield('link_resome')" class="btn tj-btn-secondary"
                    >دریافت رزومه <i class="flaticon-download"></i
                  ></a>
                  <ul class="ul-reset social-icons">
                    <li>
                      <a href="@yield('link_telegram')"><i class="fa-brands fa-telegram"></i></a>
                    </li>
                    <li>
                      <a href="@yield('link_instagram')"><i class="fa-brands fa-instagram"></i></a>
                    </li>
                    <li>
                      <a href="@yield('link_linkedin')"><i class="fa-brands fa-linkedin-in"></i></a>
                    </li>
                    <li>
                      <a href="@yield('link_github')"><i class="fa-brands fa-github"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-6 d-none d-md-block">
              <div class="hero-image-box text-center">
                <img src="assets/img/hero/{{ $image }}" alt="" style="width: 470px; height: 520px;" />
              </div>
            </div>
          </div>

          <div class="funfact-area">
            <div class="row">
              <div class="col-6 col-lg-3">
                <div
                  class="funfact-item d-flex flex-column flex-sm-row flex-wrap align-items-center"
                >
                  <div class="number">
                    <span class="odometer" data-count="@yield('counters_hostory')">0</span>
                  </div>
                  <div class="text">سابقه <br />کاری</div>
                </div>
              </div>
              <div class="col-6 col-lg-3">
                <div
                  class="funfact-item d-flex flex-column flex-sm-row flex-wrap align-items-center"
                >
                  <div class="number">
                    <span class="odometer" data-count="@yield('counters_completion')">0</span>+
                  </div>
                  <div class="text">پروژه های <br />تکمیل شده</div>
                </div>
              </div>
              <div class="col-6 col-lg-3">
                <div
                  class="funfact-item d-flex flex-column flex-sm-row flex-wrap align-items-center"
                >
                  <div class="number">
                    <span class="odometer" data-count="@yield('counters_satisfied')">0</span>K
                  </div>
                  <div class="text">میزان <br />رضایت</div>
                </div>
              </div>
              <div class="col-6 col-lg-3">
                <div
                  class="funfact-item d-flex flex-column flex-sm-row flex-wrap align-items-center"
                >
                  <div class="number">
                    <span class="odometer" data-count="@yield('counters_experience')">0</span>
                  </div>
                  <div class="text">سال های <br />تجربیات</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- HERO SECTION END -->
