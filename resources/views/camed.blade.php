<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Clinica Camedi</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
<base href="{{ asset('/') }}">

  <!-- Ícones -->
  <link href="assets/img/logo.png" rel="icon">
  {{-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> --}}

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="mailto:Camedilaboratorio@gmail.com">Camedilaboratorio@gmail.com</a>
        <i class="bi bi-phone"></i> (83) 99956-1608
      </div>
      <div class="d-none d-lg-flex social-links align-items-center">
        <a href="https://www.instagram.com/clinicaCamedi_/" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://api.whatsapp.com/message/3HG22HXVW7ADC1?autoload=1&app_absent=0" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Camedi</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#Especialidades">Seviços</a></li>
          {{-- <li><a class="nav-link scrollto" href="#departments">Departamentos</a></li> --}}
          {{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> --}}
          <li><a class="nav-link scrollto" href="#about">Sobre</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contato</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/clinica') }}">Sistema</a></li>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Agende uma Consulta</span> </a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Clínica Camedi</h1>
      <h2>Sua saúde é especial para nós.</h2>
      <a href="#about" class="btn-get-started scrollto">Saiba Mais</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Por que escolher a Camedi?</h3>
              <p>
                Nossa clínica particular está equipada com instalações modernas e confortáveis, proporcionando um ambiente acolhedor para você. Estamos comprometidos em oferecer cuidados médicos de qualidade e acessíveis sendo seu parceiro confiável para consultas e exames médicos, sem a necessidade de mensalidades. Aqui, priorizamos o cuidado com você, garantindo que cada paciente receba atenção dedicada e cuidados adaptados às suas necessidades individuais.
              </p>
              {{-- <div class="text-center">
                <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div> --}}
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    {{-- <i ></i> --}}
                    <i class="bx bx-user"></i>
                    <h4>Equipe médica qualificada</h4>
                    <p>Contamos com uma equipe altamente qualificada e experiente, comprometida em fornecer cuidados de saúde excepcionais e personalizados.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-calendar"></i>
                    <h4>Agendamento fácil e rápido</h4>
                    <p>Simplificamos o processo de agendamento para tornar sua experiência ainda mais conveniente.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-dollar-circle"></i>
                    <h4>Consultas e exames a preços acessíveis</h4>
                    <p> Oferecemos uma ampla gama de consultas médicas e exames a preços acessíveis, tornando os cuidados de saúde acessíveis a todos.</p>
                  </div>
                </div>
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
            <a  href="uploads/sobre.mp4" class="glightbox play-btn mb-4"></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3>Nossos Valores</h3>
            <p>Nossos valores orientam nossa prática médica e o atendimento ao paciente.</p>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-message-alt-check"></i></div>
              <h4 class="title"><a href="">Confiança</a></h4>
              <p class="description">Construímos relações de confiança com nossos pacientes, fornecendo cuidados de saúde de alta qualidade e transparentes.</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-donate-blood"></i></div>
              <h4 class="title"><a href="">Comprometimento</a></h4>
              <p class="description">Estamos comprometidos com a prestação de cuidados médicos excepcionais e dedicados a cada paciente.</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-heart"></i></div>
              <h4 class="title"><a href="">Excelência</a></h4>
              <p class="description">Buscamos a excelência em tudo o que fazemos, desde a qualidade dos cuidados médicos até o atendimento ao cliente.</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="appointment section-bg">
        <div class="container">

          <div class="section-title">
            <h2>Agende uma Consulta</h2>
            <p>Venha cuidar da sua saúde conosco. Oferecemos cuidados médicos excepcionais, adaptados às suas necessidades individuais. Nossa equipe altamente qualificada está aqui para fornecer orientação especializada e garantir que você receba o tratamento adequado para qualquer preocupação de saúde que possa ter.</p>
          </div>


          <div class="text-center">
              <a href="https://api.whatsapp.com/message/RE3ADQP7BLBFD1?autoload=1&app_absent=0" class="appointment-btn scrollto"><span class="d-none d-md-inline">Agendar</span> </a>
          </div>
        </div>
      </section><!-- End Appointment Section -->

    <!-- ======= Especialidades Section ======= -->
    <section id="Especialidades" class="Especialidades">
        <div class="container">

          <div class="section-title">
            <h2>Especialidades</h2>
            <p>Conheça nossas especialidades médicas e encontre o cuidado adequado para suas necessidades de saúde.</p>
          </div>

          <div class="row">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-heartbeat"></i></div>
                <h4><a href="">PSICÓLOGA</a></h4>
                <p>A psicologia oferece suporte emocional e tratamento para uma variedade de questões mentais, emocionais e comportamentais.</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-pills"></i></div>
                <h4><a href="">GINECOLOGIA</a></h4>
                <p>A ginecologia cuida da saúde reprodutiva da mulher, incluindo exames preventivos, tratamento de doenças e acompanhamento durante a gravidez.</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-hospital-user"></i></div>
                <h4><a href="">CARDIOLOGIA</a></h4>
                <p>A cardiologia se concentra no diagnóstico e tratamento de doenças do coração e do sistema circulatório.</p>
              </div>
            </div>

            <!-- Adicione as outras especialidades com suas descrições aqui -->
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-dna"></i></div>
                <h4><a href="">ULTRASSONOGRAFIA</a></h4>
                <p>A ultrassonografia é uma técnica de imagem que usa ondas sonoras de alta frequência para visualizar estruturas dentro do corpo humano.</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-user-md"></i></div>
                <h4><a href="">PSIQUIATRIA</a></h4>
                <p>A psiquiatria se concentra no diagnóstico, tratamento e prevenção de distúrbios mentais, emocionais e comportamentais.</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-brain"></i></div>
                <h4><a href="">NEUROLOGIA</a></h4>
                <p>A neurologia é a especialidade médica que trata de distúrbios do sistema nervoso, incluindo o cérebro, a medula espinhal e os nervos periféricos.</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-bone"></i></div>
                <h4><a href="">ORTOPEDIA</a></h4>
                <p>A ortopedia se concentra no tratamento de lesões e doenças do sistema musculoesquelético, incluindo ossos, articulações, ligamentos, tendões e músculos.</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-capsule"></i></div>
                <h4><a href="">OTORRINO</a></h4>
                <p>A otorrinolaringologia é a especialidade médica que trata de distúrbios do ouvido, nariz e garganta, incluindo problemas de audição, sinusite, amigdalite e distúrbios de equilíbrio.</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-syringe"></i></div>
                <h4><a href="">ANGIOLOGIA</a></h4>
                <p>A angiologia é a especialidade médica que trata de doenças dos vasos sanguíneos, incluindo veias, artérias e vasos linfáticos.</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-user-md"></i></div>
                <h4><a href="">UROLOGIA</a></h4>
                <p>A urologia é a especialidade médica que trata de problemas do trato urinário masculino e feminino, bem como do sistema reprodutivo masculino.</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-stethoscope"></i></div>
                <h4><a href="">GASTRO</a></h4>
                <p>A gastroenterologia é a especialidade médica que trata de distúrbios do sistema digestivo, incluindo o esôfago, estômago, intestinos, fígado e pâncreas.</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-user-md"></i></div>
                <h4><a href="">ENDOCRINOLOGIA</a></h4>
                <p>A endocrinologia é a especialidade médica que trata de distúrbios hormonais e metabólicos, incluindo diabetes, distúrbios da tireoide e obesidade.</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-briefcase-medical"></i></div>
                <h4><a href="">MEDICINA DO TRABALHO</a></h4>
                <p>A medicina do trabalho se concentra na saúde e segurança dos trabalhadores, prevenindo lesões e doenças relacionadas ao trabalho.</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-user-md"></i></div>
                <h4><a href="">FONOAUDIÓLOGIA</a></h4>
                <p>A fonoaudiologia trata de distúrbios da comunicação oral e escrita, linguagem, fala, voz, audição e funções responsáveis pela deglutição.</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-child"></i></div>
                <h4><a href="">PEDIATRIA</a></h4>
                <p>A pediatria é a especialidade médica que cuida da saúde e bem-estar de bebês, crianças e adolescentes, desde o nascimento até a adolescência.</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-briefcase-medical"></i></div>
                <h4><a href="">FISIOTERAPIA</a></h4>
                <p>A fisioterapia é uma disciplina da saúde que utiliza exercícios terapêuticos, massagem e outras técnicas para tratar lesões musculoesqueléticas e promover a reabilitação física.</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-user-md"></i></div>
                <h4><a href="">DERMATOLOGIA</a></h4>
                <p>A dermatologia é a especialidade médica que trata de doenças da pele, cabelo e unhas, bem como de distúrbios relacionados à estética da pele.</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-user-md"></i></div>
                <h4><a href="">COLO PROCTOLOGIA</a></h4>
                <p>A coloproctologia é a especialidade médica que trata de doenças do cólon, reto e ânus, incluindo câncer colorretal, hemorroidas e doença inflamatória intestinal.</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-lungs"></i></div>
                <h4><a href="">PNEUMOLOGIA</a></h4>
                <p>A pneumologia é a especialidade médica que trata de doenças dos pulmões e do sistema respiratório, incluindo asma, bronquite crônica, enfisema pulmonar e doença pulmonar obstrutiva crônica (DPOC).</p>
              </div>
            </div>

            <!-- Adicione mais colunas conforme necessário para outras especialidades -->
          </div>

        </div>
      </section><!-- End Especialidades Section -->

      <section id="gallery" class="gallery">
        <div class="container">

          <div class="section-title">
            <h2>Galleria</h2>
            {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
          </div>
        </div>

        <div class="container-fluid">
          <div class="row g-0">

            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/gallery/gallery-1.jpg" class="galelry-lightbox">
                  <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/gallery/gallery-2.jpg" class="galelry-lightbox">
                  <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/gallery/gallery-3.jpg" class="galelry-lightbox">
                  <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/gallery/gallery-4.jpg" class="galelry-lightbox">
                  <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/gallery/gallery-5.jpg" class="galelry-lightbox">
                  <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/gallery/gallery-6.jpg" class="galelry-lightbox">
                  <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/gallery/gallery-7.jpg" class="galelry-lightbox">
                  <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/gallery/gallery-8.jpg" class="galelry-lightbox">
                  <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>

          </div>

        </div>
      </section>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">
          <div class="section-title">
            <h2>Localização</h2>
            <p>Estamos convenientemente localizados, facilitando o acesso para nossos pacientes. Nossa clínica está situada em um ambiente tranquilo e de fácil acesso. Além disso, nossa equipe está pronta para ajudá-lo com qualquer dúvida ou agendamento. Não hesite em nos contatar para mais informações ou para marcar sua consulta. Estamos ansiosos para recebê-lo.</p>
          </div>
          <div class="row mt-5">
            <div class="col-lg-4">
              <div class="info">
                <div class="address">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Localização:</h4>
                  <p>R. José Amâncio Ramalho, 280, Solânea</p>
                </div>
                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>Camedilaboratorio@gmail.com</p>
                </div>
                <div class="phone">
                  <i class="bi bi-whatsapp"></i>
                  <h4>Telefone:</h4>
                  <p>(83) 99956-1608</p>
                </div>
              </div>
            </div>
            <div class="col-lg-8">
              <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.104150741232!2d-35.658494174028306!3d-6.757152466076883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7adcf8b67dff097%3A0xe3dd30a93ac8ffb0!2sCamedi-Centro%20de%20An%C3%A1lises%20M%C3%A9dicas!5e0!3m2!1spt-BR!2sbr!4v1714770827074!5m2!1spt-BR!2sbr" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </section><!-- End Contact Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 <footer id="footer">


    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Camedi</span></strong>. Todos os direitos reservados
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/Camedi-free-medical-bootstrap-theme/ -->
          Feito por <a href="https://www.instagram.com/felipe__ppontes/">@felipe__ppontes</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://www.instagram.com/clinicaCamedi_/" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://api.whatsapp.com/message/3HG22HXVW7ADC1?autoload=1&app_absent=0" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
