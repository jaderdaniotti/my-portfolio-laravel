<x-layout>
    <div>
      <x-intro></x-intro>
      <x-navbar></x-navbar>
    </div>
    <section id="home" class="hero-section zoomIn1 ">
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-lg-6">
            <h1 class="display-4 fw-bold w-100 h1-welcome">Jader Daniotti</h1>
            <h3 class="typed-text mb-2 h3-welcome">Full-Stack Developer</h3>
            <h5 class="lead mt-1 h5-welcome mb-3">Nel tempo libero mi diverto a creare templates.</h5>
            <a href="{{route ('contact')}}" class="btn  me-3 btn-contact">Contattami</a>
            <a href="cv.pdf" class="btn  btn-cv" download="Jader Daniotti - CV">Download CV</a>
          </div>
          <div class="col-lg-6 text-center">
            <img src="\images\shangaicut.jpg" alt="Profile" class="img-fluid rounded-circle profile-img">
          </div>
        </div>
      </div>
    </section>
    <section class="section-padding zoomIn2 my-3 align-content-center" id="about">
      <div class="container">
        <div class="row h-100 align-items-center">
          <div class="col-lg-6 h-100 align-items-center">
            <img src="https://images.pexels.com/photos/4439444/pexels-photo-4439444.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Working" class="img-fluid rounded">
          </div>
          <div class="col-lg-6 h-100 align-items-center div-about">
            <br>
            <h2 class="section-title bold text-center title-about">Su di me</h2>
            <div class="about-content">
              <p class="about-text">Appassionato di sviluppo web, ho studiato prima da autodidatta poi intrapreso un corso di 8 mesi tramite Aulab, studiando come fullstack developer.</p>
            </div>
          </div>
        </div>
    </section>
    <section id="skills" class="section-padding bg-light zoomIn3">
      <div class="container">
        <h2 class="section-title bold text-center pt-3 fs-1 mb-3">Skills</h2>
      </div>
      <div class="row mx-0">
        <div class="col-md-4 col-lg-4 col-6 text-ce5ter d-flex flex-column justify-content-center align-items-center mb-3">
          <div class="circular-progress" data-inner-circle-color="#DD4B25" data-percentage="97" data-progress-color="white" data-bg-color="#212529">
            <div class="inner-circle"></div>
            <p class="percentage">0%</p>
          </div>
          <h2 class="mt-2">HTML</h2>
        </div>
        <div class="col-md-4 col-lg-4 col-6 col-sm-5 text-center d-flex flex-column justify-content-center align-items-center mb-3">
          <div class="circular-progress" data-inner-circle-color="#254BDD" data-percentage="95" data-progress-color="white" data-bg-color="#212529">
            <div class="inner-circle"></div>
            <p class="percentage">0%</p>
          </div>
          <h2 class="mt-2">CSS</h2>
        </div>
        <div class="col-md-4 col-lg-4 col-6 col-sm-5 text-center d-flex flex-column justify-content-center align-items-center mb-3">
          <div class="circular-progress" data-inner-circle-color="#820AFA" data-percentage="98" data-progress-color="white" data-bg-color="#212529">
            <div class="inner-circle"></div>
            <p class="percentage">0%</p>
          </div>
          <h2 class="mt-2">BOOTSTRAP</h2>
        </div>
        <div class="col-md-4 col-lg-4 col-6 col-sm-5 text-center d-flex flex-column justify-content-center align-items-center mb-3">
          <div class="circular-progress" data-inner-circle-color="#EFD81D" data-percentage="85" data-progress-color="white" data-bg-color="#212529">
            <div class="inner-circle"></div>
            <p class="percentage">0%</p>
          </div>
          <h2 class="mt-2">JAVASCRIPT</h2>
        </div>
        <div class="col-md-4 col-lg-4 col-6 col-sm-5 text-center d-flex flex-column justify-content-center align-items-center mb-3">
          <div class="circular-progress" data-inner-circle-color="#7377AD" data-percentage="75" data-progress-color="white" data-bg-color="#212529">
            <div class="inner-circle"></div>
            <p class="percentage">0%</p>
          </div>
          <h2 class="mt-2">PHP</h2>
        </div>
        <div class="col-md-4 col-lg-4 col-6 col-sm-5 text-center d-flex flex-column justify-content-center align-items-center mb-3">
          <div class="circular-progress" data-inner-circle-color="#F72C1F" data-percentage="80" data-progress-color="white" data-bg-color="#212529">
            <div class="inner-circle"></div>
            <p class="percentage">0%</p>
          </div>
          <h2 class="mt-2">LARAVEL</h2>
        </div>
        <div class="col-md-4 col-lg-4 col-6 col-sm-5 text-center d-flex flex-column justify-content-center align-items-center mb-3">
          <div class="circular-progress" data-inner-circle-color="#015A85" data-percentage="30" data-progress-color="white" data-bg-color="#212529">
            <div class="inner-circle"></div>
            <p class="percentage">0%</p>
          </div>
          <h2 class="mt-2">MYSQL</h2>
        </div>
        <div class="col-md-4 col-lg-4 col-6 col-sm-5 text-center d-flex flex-column justify-content-center align-items-center mb-3">
          <div class="circular-progress" data-inner-circle-color="#000000" data-percentage="70" data-progress-color="white" data-bg-color="#212529">
            <div class="inner-circle"></div>
            <p class="percentage">0%</p>
          </div>
          <h2 class="mt-2">GITHUB</h2>
        </div>
        <div class="col-md-4 col-lg-4 col-6 col-sm-5 text-center d-flex flex-column justify-content-center align-items-center mb-3">
          <div class="circular-progress" data-inner-circle-color="#89CC5C" data-percentage="97" data-progress-color="white" data-bg-color="#212529">
            <div class="inner-circle"></div>
            <p class="percentage">0%</p>
          </div>
          <h2 class="mt-2">GITBASH</h2>
        </div>
      </div>
    </section>
    {{-- <section id="projects" class="section-padding">
                      <div class="container">
                          <h2 class="section-title">Projects</h2>
                          <div class="row g-4">
                              <div class="col-md-4">
                                  <div class="card project-card">
                                      <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f" class="card-img-top" alt="Project">
                                          <div class="card-body">
                                              <h5 class="card-title">E-Commerce Platform</h5>
                                              <p class="card-text">Full-stack e-commerce solution with React and Node.js</p>
                                              <div class="d-flex gap-2">
                                                  <a href="#" class="btn btn-primary">Demo</a>
                                                  <a href="#" class="btn btn-outline-primary">Code</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="card project-card">
                                          <img src="https://images.unsplash.com/photo-1555421689-491a97ff2040" class="card-img-top" alt="Project">
                                              <div class="card-body">
                                                  <h5 class="card-title">Task Manager</h5>
                                                  <p class="card-text">React-based task management application</p>
                                                  <div class="d-flex gap-2">
                                                      <a href="#" class="btn btn-primary">Demo</a>
                                                      <a href="#" class="btn btn-outline-primary">Code</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="card project-card">
                                              <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71" class="card-img-top" alt="Project">
                                                  <div class="card-body">
                                                      <h5 class="card-title">Chat Application</h5>
                                                      <p class="card-text">Real-time chat app with Socket.io</p>
                                                      <div class="d-flex gap-2">
                                                          <a href="#" class="btn btn-primary">Demo</a>
                                                          <a href="#" class="btn btn-outline-primary">Code</a>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                 
                              </section> --}}
    <section class="viewport-100 align-content-center text-center">
      <h1 class="text-center h1-timer bold">Tempo trascorso sul sito: <br>
        <span id="timer" class="timer-span"></span> secondi
      </h1>
      <button class="btn timer-button" id="stopTimer">Stoppa il timer</button>
      <div class="comparsa d-flex mt-4 text-center justify-content-center d-none" id="comparsaID">
        <hr>
        <h2 class="text-center bold h2-timer">
          <a href="{{route('contact')}}">Ecco quanto tempo è passato da quando sei entrato nella mia pagina, cosa aspetti a contattarmi?</a>
        </h2>
      </div>
    </section>
  </x-layout>