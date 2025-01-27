<!-- RESUME SECTION START -->
      <section class="resume-section" id="resume-section">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="section-header wow fadeInUp" data-wow-delay=".3s">
                <h2 class="section-title">
                  <i class="flaticon-recommendation"></i> سابقه کاری من
                </h2>
              </div>

              <div class="resume-widget">
                @foreach ($Resomes as $Resome )
                  
                <div class="resume-item wow fadeInLeft" data-wow-delay=".4s">
                  <div class="time"> {{ $Resome['time'] }} </div>
                  <h3 class="resume-title">{{ $Resome['title'] }}</h3>
                  <div class="institute">{{ $Resome['institute'] }}</div>
                </div>
                @endforeach
                
              </div>
            </div>

            <div class="col-md-6">
              <div class="section-header wow fadeInUp" data-wow-delay=".4s">
                <h2 class="section-title">
                  <i class="flaticon-graduation-cap"></i> تحصیلات من
                </h2>
              </div>

              <div class="resume-widget">
                @foreach ( $Education as $Education )
                  
                <div class="resume-item wow fadeInRight" data-wow-delay=".5s">
                  <div class="time">{{ $Education['time'] }}</div>
                  <h3 class="resume-title">{{ $Education['title'] }}</h3>
                  <div class="institute">{{ $Education['institute'] }}</div>
                </div>
               @endforeach
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- RESUME SECTION END -->