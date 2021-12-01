@extends('layouts.nav')

@section('content')
 <!-- ======= Top Bar ======= -->
 @include('layouts.topbar')

  {{-- style="margin-bottom:-100px;width: 100%;height: 70vh;" --}}
  <!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center" style="padding: 0px;">
    <div class="container">
        <div id="carouselExampleDark" class="carousel carousel-dark  carousel-fade slide " data-bs-ride="carousel">
            <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            {{-- Foreach slider carrousel --}}
            {{-- @foreach ($info as $i)
                @if($i->category->title=='slider')
                <div class="carousel-item active" data-bs-interval="2000">
                    <img src="{{Storage::url($i->url)}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block text-white">
                        <h5>{{$i->title}}</h5>
                        <p>{{$i->description}}.</p>
                    </div>
                </div>
                @endif
            @endforeach --}}
            <div class="carousel-item active" data-bs-interval="2000">
                <img src="https://image.shutterstock.com/image-photo/doctor-man-stethoscope-hospital-260nw-555894940.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block text-white">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="https://image.shutterstock.com/image-photo/medicine-doctor-hand-working-modern-260nw-190781564.jpg" class="d-block  w-100 " alt="...">
                <div class="carousel-caption d-none d-md-block text-white">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://thumbs.dreamstime.com/b/portada-del-servicio-de-la-medicina-y-de-la-atenci%C3%B3n-sanitaria-para-el-sitio-web-de-aterrizaje-de-la-p%C3%A1gina-77592968.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block text-white">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>
    {{-- <div class="container">
      <h1>Welcome to Medilab</h1>
      <h2>We are team of talented designers making websites with Bootstrap</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div> --}}
 <!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
                @foreach ($info as $i)
                    @if($i->category->title=='asider-azul')
                    <h3>{{$i->title}}</h3>
                    <p class="description">{{$i->description}}</p>
                    @endif
                @endforeach
              {{-- <div class="text-center">
                <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div> --}}
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                @foreach ($info as $i)
                @if($i->category->title=='Portafolio')
                <div class="col-xl-4 d-flex align-items-stretch">
                    <div class="icon-box mt-4 mt-xl-0">
                      <i class='bx bx-check-square'></i>
                      <h4>{{$i->title}}</h4>
                      <p>{{$i->description}}</p>
                    </div>
                  </div>
                @endif
            @endforeach
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
              @foreach ($info as $i)
                    @if($i->category->title=='video')
                    <a href="{{$i->description}}" class="glightbox play-btn mb-4"></a>
                    @endif
                 @endforeach
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3> @foreach ($info as $i)
                    @if($i->category->title=='Nosotros')
                    <h3>{{$i->title}}</h3>
                    <p class="text-center">{{$i->description}}</p>
                    @endif
                 @endforeach
            </h3>
          {{-- <p></p> --}}

            <div class="icon-box">
              <div class="icon"><i class='bx bx-up-arrow-circle'></i></div>
                @foreach ($info as $i)
                    @if($i->category->title=='Política de Calidad')
                        <h4 class="title"><a href="">{{$i->title}}</a></h4>
                        <p class="description">{{$i->description}}</p>
                    @endif
                @endforeach
            </div>

            <div class="icon-box">
              <div class="icon"><i class='bx bx-up-arrow-circle'></i></div>
                @foreach ($info as $i)
                    @if($i->category->title=='Nuestra Misión')
                        <h4 class="title"><a href="">{{$i->title}}</a></h4>
                        <p class="description">{{$i->description}}</p>
                    @endif
                @endforeach
            </div>

            <div class="icon-box">
              <div class="icon"><i class='bx bx-up-arrow-circle'></i></div>
                @foreach ($info as $i)
                    @if($i->category->title=='Nuestra Visión')
                        <h4 class="title"><a href="">{{$i->title}}</a></h4>
                        <p class="description">{{$i->description}}</p>
                    @endif
                @endforeach
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    {{-- <section id="counts" class="counts">
      <div class="container">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="fas fa-user-md"></i>
              <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1" class="purecounter"></span>
              <p>Doctors</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="far fa-hospital"></i>
              <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1" class="purecounter"></span>
              <p>Departments</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fas fa-flask"></i>
              <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>
              <p>Research Labs</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fas fa-award"></i>
              <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
              <p>Awards</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section --> --}}

    <!-- ======= Services Section ======= -->
<section id="services" class="services">
    <div class="container">
        <div class="section-title">
            @foreach ($info as $i)
            @if($i->category->title=='servicios')
                <h2><a href="">{{$i->title}}</a></h2>
                <p class="description">{{$i->description}}</p>
            @endif
        @endforeach
        </div>
        <div class="row">
            @foreach ($info as $i)
                @if($i->category->title=='services')
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch  mt-4">
                    <div class="icon-box">
                            <div class="icon"><img class="img-fluid" src="{{Storage::url($i->url)}}" alt=""></div>
                            <h4><a href="">{{$i->title}}</a></h4>
                            <p>{!!$i->descriptionck!!}</p>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </div>
</section><!-- End Services Section -->

    <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="appointment section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Aparta una cita</h2>
        </div>

        <form action="forms/appointment.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-4 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Nombre completo" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Movil" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 form-group">
              <input type="text" name="document" class="form-control" id="document" placeholder="Documento de identidad" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="city" id="city" placeholder="Ciudad" data-rule="date" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="direction" id="direction" placeholder="Dirección" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 form-group mt-3">
              <input type="datetime" name="date" class="form-control datepicker" id="date" placeholder="Fecha de la cíta" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="workingday" id="workingday" class="form-select">
                <option value="">Jornada</option>
                <option value="Mañana">Mañana</option>
                <option value="Tarde">Tarde</option>

              </select>
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3">
                <label for="datehb">Fecha de nacimiento</label>
                <input type="date" class="form-control" name="datehb" id="datehb" placeholder="fecha de nacimiento" data-rule="date" data-msg="Please enter a valid email">
                <div class="validate"></div>
            </div>
          </div>

          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Digite el procedimiento tal como aparece en su orden y/o autorización medica"></textarea>
            <div class="validate"></div>
          </div>
          <div class="form-group mt-3">
              <label for="file" class="form-control">Adjuntar orden Medica/Autorización EPS/Historia Clínica: </label>
            <input type="file" class="form-control" name="file" id="file">
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Apartar cita</button></div>
        </form>

      </div>
    </section><!-- End Appointment Section -->
{{--
    <!-- ======= Departments Section ======= -->
    <section id="departments" class="departments">
      <div class="container">

        <div class="section-title">
          <h2>Áreas</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Cardiology</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Neurology</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Hepatology</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Pediatrics</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Eye Care</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Cardiology</h3>
                    <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                    <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="https://image.shutterstock.com/image-photo/doctor-man-stethoscope-hospital-260nw-555894940.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Et blanditiis nemo veritatis excepturi</h3>
                    <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                    <p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto madirna desera vafle de nideran pal</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Impedit facilis occaecati odio neque aperiam sit</h3>
                    <p class="fst-italic">Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis aut</p>
                    <p>Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis quisquam. Neque necessitatibus illo rerum eum ut. Commodi ipsam minima molestiae sed laboriosam a iste odio. Earum odit nesciunt fugiat sit ullam. Soluta et harum voluptatem optio quae</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Fuga dolores inventore laboriosam ut est accusamus laboriosam dolore</h3>
                    <p class="fst-italic">Totam aperiam accusamus. Repellat consequuntur iure voluptas iure porro quis delectus</p>
                    <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
                    <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
                    <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Departments Section --> --}}

    <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors">
      <div class="container">

        <div class="section-title">
          <h2>Doctors</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Medical Officer</span>
                <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Anesthesiologist</span>
                <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>Cardiology</span>
                <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Neurosurgeon</span>
                <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Doctors Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Preguntas frecuentes</h2>
        </div>
        <div class="faq-list">
          <ul>
            @foreach ($info as $i)
                 @if($i->category->title=='preguntas')
                    <li data-aos="fade-up">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#{{$i->description}}">{{$i->title}}<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="{{$i->description}}" class="collapse" data-bs-parent=".faq-list">
                                <p>{!!$i->descriptionck!!}</p>
                            </div>
                    </li>
                @endif
            @endforeach
          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Testimonials Section ======= -->

<section id="dd" class="testimonials">
    <div class="container">
        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        @foreach ($info as $i)
                            @if($i->category->title=='Derechos y deberes de los pacientes')
                                <div class="section-title">
                                    <h2>{{$i->title}}</h2>
                                </div>
                                <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                    Mostrar
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body">
                                        {!!$i->descriptionck!!}
                                    </div>
                                </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
           </div>
        </div>
    </div>
</section><!-- End Testimonials Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title">
          <h2>Galería</h2>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row no-gutters">
            {{-- foreach galeria --}}
             {{-- @foreach ($info as $i)
                @if($i->category->title=='galeria')
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="" class="galelry-lightbox">
                            <img src="{{Storage::url($i->url)}}" alt="" class="img-fluid">
                        </a>
                        </div>
                    </div>
                @endif
            @endforeach --}}

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="" class="galelry-lightbox">
                <img src="https://image.shutterstock.com/image-photo/doctor-man-stethoscope-hospital-260nw-555894940.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="" class="galelry-lightbox">
                <img src="https://image.shutterstock.com/image-photo/doctor-man-stethoscope-hospital-260nw-555894940.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="" class="galelry-lightbox">
                <img src="https://image.shutterstock.com/image-photo/doctor-man-stethoscope-hospital-260nw-555894940.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="" class="galelry-lightbox">
                <img src="https://image.shutterstock.com/image-photo/doctor-man-stethoscope-hospital-260nw-555894940.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="" class="galelry-lightbox">
                <img src="https://image.shutterstock.com/image-photo/doctor-man-stethoscope-hospital-260nw-555894940.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="" class="galelry-lightbox">
                <img src="https://image.shutterstock.com/image-photo/doctor-man-stethoscope-hospital-260nw-555894940.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="" class="galelry-lightbox">
                <img src="https://image.shutterstock.com/image-photo/doctor-man-stethoscope-hospital-260nw-555894940.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="" class="galelry-lightbox">
                <img src="https://image.shutterstock.com/image-photo/doctor-man-stethoscope-hospital-260nw-555894940.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contacto</h2>
          <p>Horario de Atención:
            Lunes a Viernes: 7:30 a.m - 12:00 m
            2:00 p.m - 6:00 p.m
            Sábados: 7:30 a.m - 12:00 m</p>
        </div>
      </div>

      <div>
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.4605328945822!2d-72.39814808573604!3d5.34645393720955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e6b0c4c745c55fd%3A0x2b3d9685eb29917c!2sMundo%20radiologico!5e0!3m2!1ses-419!2sbg!4v1637863816683!5m2!1ses-419!2sbg" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container">
        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Ubicación:</h4>
                <p>Carrera 23 # 12-43 Edificio Medicenter - 2do Piso - Yopal Casanare</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>gerencia@mundoradiologico.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Movil:</h4>
                <p>Teléfono: (8) 633 3216 - Móvil: 322 400 5120</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nombre completo" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="asunto" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Mensaje" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 
@endsection
