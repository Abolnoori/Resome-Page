<!-- CONTACT SECTION START -->
<section class="contact-section" id="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-7 order-2 order-md-1">
                <div
                    class="contact-form-box wow fadeInLeft"
                    data-wow-delay=".3s"
                >
                    <div class="section-header">
                        <h2 class="section-title">همکاری با ما</h2>
                        <p>
                            همکاری با ما به معنای تجربه‌ای متفاوت و سازنده است. <br> با تعهد به کیفیت و دقت، همراهی شما را به یک مسیر موفق و رضایت‌بخش تبدیل می‌کنیم <br>
                            با هم می‌توانیم به اهداف بزرگ‌تری دست یابیم و پروژه‌های موفقیت‌آمیزی خلق کنیم.
                        </p>
                    </div>

                    <div class="tj-contact-form">
                        <form id="myForm" action="/SendMesage" method="POST" onsubmit="handleSubmit(event)">
                            @csrf
                                
                            
                            <div class="row gx-3">
                                <div class="col-sm-6">
                                    <div class="form_group">
                                        <input
                                            type="text"
                                            name="conName"
                                            id="conName"
                                            placeholder="نام"
                                            autocomplete="off"
                                            required
                                        />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form_group">
                                        <input
                                            type="text"
                                            name="conLName"
                                            id="conLName"
                                            placeholder="نام خانوادگی"
                                            autocomplete="off"
                                            
                                        />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form_group">
                                        <input
                                            type="email"
                                            name="conEmail"
                                            id="conEmail"
                                            placeholder="ایمیل"
                                            autocomplete="off"
                                            required
                                        />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form_group">
                                        <input
                                            type="tel"
                                            name="conPhone"
                                            id="conPhone"
                                            placeholder="شماره تماس"
                                            autocomplete="off"
                                            required
                                        />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form_group">
                                        <select
                                            name="conService"
                                            id="conService"
                                            class="tj-nice-select"
                                        >
                                            <option
                                                value=""
                                                selected=""
                                                required
                                            >
                                                نوع خدمات
                                            </option>
                                            <option value="{{ $Services[0]['title'] }}">
                                                {{ $Services[0]['title'] }}
                                            </option>
                                            <option value="{{ $Services[1]['title'] }}">
                                               {{ $Services[1]['title'] }}
                                            </option>
                                            <option value="{{ $Services[2]['title'] }}">
                                              {{ $Services[2]['title'] }}
                                            </option>
                                            <option value="{{ $Services[3]['title'] }}">
                                               {{ $Services[3]['title'] }}
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form_group">
                                        <textarea
                                            name="conMessage"
                                            id="conMessage"
                                            placeholder="متن"
                                            required
                                        ></textarea>
                                    </div>
                                </div>


                                        <input
                                            hidden
                                            type="text"
                                            name="ResomeUser"
                                            id="ResomeUser"
                                            value="{{ $user }}"
                                            />

                                        <input
                                            hidden
                                            type="text"
                                            name="Reco"
                                            id="Reco"
                                            value="{{ $Services[0]['user'] }}"
                                            />




                                <div class="col-12">
                                    <div class="form_btn">
                                        <button
                                            type="submit"
                                            class="btn tj-btn-primary"
                                        >
                                            ارسال پیام
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div
                class="col-lg-5 offset-lg-1 col-md-5 d-flex flex-wrap align-items-center order-1 order-md-2"
            >
                <div class="contact-info-list">
                    <ul class="ul-reset">
                        <li
                            class="d-flex flex-wrap align-items-center position-relative wow fadeInRight"
                            data-wow-delay=".4s"
                        >
                            <div class="icon-box">
                                <i class="flaticon-phone-call"></i>
                            </div>
                            <div class="text-box">
                                <p>شماره تماس</p>
                                <a href="tel:{{ $number }}">{{ $number }}</a>
                            </div>
                        </li>
                        <li
                            class="d-flex flex-wrap align-items-center position-relative wow fadeInRight"
                            data-wow-delay=".5s"
                        >
                            <div class="icon-box">
                                <i class="flaticon-mail-inbox-app"></i>
                            </div>
                            <div class="text-box">
                                <p>ایمیل</p>
                                <a href="mailto:mail@mail.com"
                                    > {{ $email }} </a
                                >
                            </div>
                        </li>
                        <li
                            class="d-flex flex-wrap align-items-center position-relative wow fadeInRight"
                            data-wow-delay=".6s"
                        >
                            <div class="icon-box">
                                <i class="flaticon-location"></i>
                            </div>
                            <div class="text-box">
                                <p>آدرس</p>
                                <a href="#"
                                    >{{ $address }}</a
                                >
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CONTACT SECTION END -->
    <script>
      function handleSubmit(event) {
        event.preventDefault(); // جلوگیری از ارسال فرم به صورت پیش فرض
        Swal.fire({
          title: "پیام شما ارسال شد",
          text: "فرم شما به {{ $name }} ارسال شد.",
          icon: "success",
          timer: 3000,
          showConfirmButton: false,
        }).then(() => {
          document.getElementById("myForm").submit(); // ارسال فرم پس از 2 ثانیه
        });
      }
    </script>

      <!-- BEGIN: Contact Form Success Modal Message -->
      <div class="modal contact_modal" id="myModal" >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <span class="modal-title"
                ><strong>Message Sent Successfully</strong></span
              >
              <button
                type="button"
                class="close"
                data-bs-dismiss="modal"
                aria-label="Close"
              >
                <i class="fas fa-times"></i>
              </button>
            </div>
            <div class="modal-body">
              <p>
                Thank you for contacting us. We will get back to you shortly.<br />Have
                a great day!
              </p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn" data-bs-dismiss="modal">
                Close
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- END: Contact Form Success Modal Message -->