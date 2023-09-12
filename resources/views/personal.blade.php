<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Glen Pabico - A Personal Website</title>
    <link rel="icon" type="image/x-icon" href="../images/GlenIcon.png">

    <link rel="stylesheet" href=" {{asset('../css/style.css')}} ">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    
    
</head>

<style>

  /* Overview*/
@import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Righteous&display=swap');

/* Who and Skills Sec*/
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');

/* Percentage About Sec*/
@import url('https://fonts.googleapis.com/css2?family=Lato&display=swap');

/* Section Titles */
@import url('https://fonts.googleapis.com/css2?family=Outfit:wght@500&display=swap');

/* Buttons on Hero*/
@import url('https://fonts.googleapis.com/css2?family=Lexend:wght@700&family=Outfit:wght@500&display=swap');

@import url('https://fonts.googleapis.com/css2?family=Bungee+Inline&display=swap');


.background-radial-gradient {
      background-color: hsl(218, 41%, 15%);
      background-image: radial-gradient(650px circle at 0% 0%,
          hsl(218, 41%, 35%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%),
        radial-gradient(1250px circle at 100% 100%,
          hsl(218, 41%, 45%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%);
    }

#radius-shape-1 {
      height: 220px;
      width: 220px;
      top: -60px;
      left: -130px;
      background: radial-gradient(#44006b, #ad1fff);
      overflow: hidden;
    }

#radius-shape-2 {
      border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
      bottom: -60px;
      right: -110px;
      width: 300px;
      height: 300px;
      background: radial-gradient(#44006b, #ad1fff);
      overflow: hidden;
    }

    .bg-glass {
      background-color: hsla(0, 0%, 100%, 0.9) !important;
      backdrop-filter: saturate(200%) blur(25px);
    }

.nav .nav-link { 
  
 color: #9400FF !important;
 animation: fade-down 0.5s 0.4s backwards;

}

.nav .active{

  background-color: #9400FF !important;
  color: white !important;
}

.nav-title{

  font-family: 'Outfit', sans-serif;
}

.navbar{

background:#ffffff;
}     

@keyframes fade-down {

  0% {

    opacity: 0;
    transform: translateY(-30px) scale(0.9);
  }

  100% {

    opacity: 1;
    transform: translate(0px) scale(1);
  }


}


.firstback{

background-image: url('../images/cool-background.png');
background-repeat: no-repeat;
background-size: cover;
background-attachment: fixed;

}

.fbuttons{

  font-family: 'Lexend', sans-serif;
  animation: fade-up 0.5s;
}

.carou{

background-image: url('../images/coo.png');
background-repeat: no-repeat;
background-size: cover;
background-attachment: fixed;
width: 100%;
height: 500px;
border-radius: 30px;

}

.progress.active .progress-bar {
    -webkit-transition: none !important;
    transition: none !important;
}

.des{

  font-family: 'Montserrat', sans-serif;
  font-weight: 900;
  font-size: 250%;
}

.dessm{

font-family: 'Montserrat', sans-serif;
font-weight: 900;
font-size: 170%;
}

.pro{

 object-fit: contain;
 padding-top: 40px;
 padding-bottom: 50px;
}


/* The actual timeline (the vertical ruler) */
.main-timeline {
  position: relative;
}

/* The actual timeline (the vertical ruler) */
.main-timeline::after {
  content: "";
  position: absolute;
  width: 6px;
  background-color: #27005D;
  top: 0;
  bottom: 0;
  left: 50%;
  margin-left: -3px;
}

/* Container around content */
.timeline {
  position: relative;
  background-color: inherit;
  width: 50%;
}

/* The circles on the timeline */
.timeline::after {
  content: "";
  position: absolute;
  width: 25px;
  height: 25px;
  right: -13px;
  background-color: #AED2FF;
  border: 5px solid #9400FF;
  top: 15px;
  border-radius: 50%;
  z-index: 1;
}

/* Place the container to the left */
.left {
  padding: 0px 40px 20px 0px;
  left: 0;
}

/* Place the container to the right */
.right {
  padding: 0px 0px 20px 40px;
  left: 50%;
}

/* Add arrows to the left container (pointing right) */
.left::before {
  content: " ";
  position: absolute;
  top: 18px;
  z-index: 1;
  right: 30px;
  border: medium solid white;
  border-width: 10px 0 10px 10px;
  border-color: transparent transparent transparent white;
}

/* Add arrows to the right container (pointing left) */
.right::before {
  content: " ";
  position: absolute;
  top: 18px;
  z-index: 1;
  left: 30px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white transparent transparent;
}

/* Fix the circle for containers on the right side */
.right::after {
  left: -12px;
}

/* Media queries - Responsive timeline on screens less than 600px wide */
@media screen and (max-width: 600px) {
  /* Place the timelime to the left */
  .main-timeline::after {
    left: 31px;
  }

  /* Full-width containers */
  .timeline {
    width: 100%;
    padding-left: 70px;
    padding-right: 25px;
  }

  /* Make sure that all arrows are pointing leftwards */
  .timeline::before {
    left: 60px;
    border: medium solid white;
    border-width: 10px 10px 10px 0;
    border-color: transparent white transparent transparent;
  }

  /* Make sure all circles are at the same spot */
  .left::after,
  .right::after {
    left: 18px;
  }

  .left::before {
    right: auto;
  }

  /* Make all right containers behave like the left ones */
  .right {
    left: 0%;
  }
}

.glasstime{

  background: rgba( 255, 255, 255, 0.2 );
  box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
  backdrop-filter: blur( 9px );
  -webkit-backdrop-filter: blur( 9px );
  border-radius: 10px;
  border: 1px solid rgba( 255, 255, 255, 0.18 );
}

.reveal{
  position: relative;
  transform: translateY(150px);
  opacity: 0;
  transition: 2s all ease;
}
.reveal.active{
  transform: translateY(0);
  opacity: 1;
}


.who{

font-family: 'Montserrat', sans-serif;
font-size: 26px;
font-weight: 200;
}

.titles{

  font-family: 'Outfit', sans-serif;
  font-size: 100px;
  font-weight: 900;
  color: #000080;
  text-align: center;
}

.prog{

  background-image: linear-gradient(to bottom right,#000080, #AED2FF, #9400FF);

}

.skill{

  font-size: 94.5%;
  font-family: 'Montserrat', sans-serif;
  text-transform: capitalize;
  color: #000080; 
  font-weight: bold;
}

.skills{

  font-size: 125%;
  font-family: 'Montserrat', sans-serif;
  text-transform: capitalize;
  color: #000080;
  font-weight: bold;
}

.percent{

  font-weight: bold;
  font-size: 140%;
  font-family: 'Lato', sans-serif;
}

.rounded-gradient-borders{

  border: double 20px transparent;
  border-radius: 50%;
  background-image: linear-gradient(white, white), radial-gradient(circle at top left, #00EAFF,#4D3589,#BADAFF,#0025CE);
  background-origin: border-box;
  background-clip: content-box, border-box;
  display: inline-block;
  box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
}

.animate-charcter
{
  text-transform: uppercase;
  background-image: linear-gradient(
    -225deg,
    #27005D 0%,
    #9400FF 29%,
    #AED2FF 67%,
    #8CABFF 100%
  );
  background-clip: border-box;
  background-size: 200% auto;
  color: #fff;
  background-clip: text;
  -webkit-text-fill-color: transparent;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textclip 2s linear infinite;
  font-size: 500px;
}

@keyframes textclip {
  to {
    background-position: 200% center;
  }
}

.button2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

.welcome{

font-family: 'Righteous', cursive;
font-size: 90px;
font-weight: 900;
}

.description{

font-family: 'Montserrat', sans-serif;
font-size: 130%;
animation: fade-up 0.8s;

}

@keyframes fade-up{

0% {

  opacity: 0;
  transform: translateY(30px) scale(0.9);
}

100% {

  opacity: 1;
  transform: translate(0px) scale(1);
}


}

.hr{

 
border: 2px solid gray;
}


.over{

text-align: center;
text-transform: uppercase;
font-family: 'Bebas Neue', sans-serif;
font-size: 130px;
}

.overtext{

font-size: 18px;
}

.subtext{

  font-size: 23px;
}

.year{

  font-family: 'Righteous', cursive;

}

.time{

  background: rgba(255, 255, 255, 0.3);
  border-radius: 16px;
  box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
  backdrop-filter: blur(11px);
  -webkit-backdrop-filter: blur(11px);

}

.w{

visibility: hidden;
}

.imageW{

  -webkit-animation-delay: 1s;
  -moz-animation-delay: 1s; 
  animation-delay: 1s;
  animation: fadeIn 2.0s;
}

.animate{

  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  animation-fill-mode: both;
  -webkit-animation-fill-mode: both;
}

@-webkit-keyframes fadeIn{

  from {
    opacity: 0;
  }

  to {

    opacity: 1;
  }
}

.updown-animation{

  animation-name: infiniteUpdown;
  animation-duration: 6s;
  animation-iteration-count: infinite;
  animation-timing-function: ease;
  transition: all;
}

@keyframes infiniteUpdown {

  0%{

    transform: translateY(0px);
  }

  50%{

    transform: translateY(-40px);
  }

  100%{

    transform: translateY(0px);
  }
}


@media (max-width: 1199.98px) {

.titles{

font-family: 'Outfit', sans-serif;
font-size: 40px;
}
}

@media (max-width: 1199.98px) {

.who{

font-family: 'Montserrat', sans-serif;
font-size: 14px;
text-align: center;
}
}


@media (max-width: 1199.98px) {


.ul.myUL {
  display: inline-block;
  text-align: left;
}
  
}

@media (max-width: 1199.98px) {
.responsivetext{

  font-size: 40px;
  margin-top: 5%;
}

}

@media (max-width: 1199.98px) {
.hii{

  text-align: center;

}

}

@media (max-width: 1199.98px) {
.just{

  font-size: 11px;
  text-align: justify;
}

}

@media (max-width: 1199.98px) {

.over{
  font-size: 50px;
}
}

@media (max-width: 1199.98px) {
.overtext{

font-size: 17px;
}

.subtext{

font-size: 17px;
text-align: center;
}

}

@media (max-width: 1199.98px) {
.skills{

font-size: 14px;
}

.skill{

font-size: 12px;
}

}

@media (max-width: 1199.98px) {
.offer{

  text-align: center;
}

}

@media (max-width: 1199.98px) {
.des{

  text-align: center;
  font-size: 20px;
}

.dessm{
  text-align: center;
  font-size: 20px;
}

}

@media (max-width: 1199.98px) {
.w{

  visibility: visible;

  font-family: 'Bungee Inline', cursive;
  font-size: 38px;
  text-transform: uppercase;
  background-image: linear-gradient(
    -225deg,
    #27005D 0%,
    #9400FF 29%,
    #AED2FF 67%,
    #8CABFF 100%
  );
  background-clip: border-box;
  background-size: 200% auto;
  color: #fff;
  background-clip: text;
  -webkit-text-fill-color: transparent;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textclip 2s linear infinite;
}

@keyframes textclip {
  to {
    background-position: 200% center;
  }
}
}


</style>

<nav id="navbar-example2" class="navbar navbar-expand-lg px-3 pt-2 sticky-top">

        <div class="container-fluid">

          <a class="text-decoration-none" href="#Home"><section class="w">Glen</section></a>

        <button class="navbar-toggler focus-ring focus-ring-light border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-sharp fa-solid fa-bars fa-lg my-3" style="color: #9400FF;"></i>
          </button>

      <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
 
        <ul class="nav nav-pills my-3 justify-content-center">
          <li class="nav-item">
            <a class="nav-link nav-title text-uppercase" href="#Home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-title text-uppercase" href="#About">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-title text-uppercase" href="#Services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-title text-uppercase" href="#Projects">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-title text-uppercase" href="#Contact">Contact</a>
          </li>
        </ul>
          </div>
        </div>
      </nav>

      <body>    

      <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-light rounded-2" tabindex="0">
        
        <div id="Home">
        <div class="container">
            <div class="clearfix mx-3 py-5">
             
             <div class="animate fadeIn imageW">
              <img src="/images/Crop.jpg" class="img-fluid col-md-6 float-md-end mb-3 ms-md-3 rounded-gradient-borders updown-animation" alt="Glen Pabico">
            </div>
        
                <p class="welcome responsivetext hii animate-charcter">HI! I AM GLEN</p>
                
             <div class="just">
                <p class="text-xl-start lh-lg justify description">
                    As an aspiring professional<span class="fw-bold" style="color: #27005D;"> UI/UX Designer</span>, <span class="fw-bold" style="color: #27005D;">Web Designer</span>, and <span class="fw-bold" style="color: #27005D;">Front-end Web Developer</span>, 
                    I combine creativity, user-centric design principles,
                     and technical skills to create visually appealing and intuitive digital experiences. </p>
                </p> 
              </div>
            
              <div class="just hi d-grid gap-2 d-md-flex justify-content-md-start"> 
                <a role="button" href="#Contact" class="btn btn-primary btn-lg rounded-3 border-0 cont button2 fs-5 px-4 py-2 fbuttons" style="background-color:#000080;">
                   Let us Talk <i class="far fa-handshake ms-1"></i>
                </a>
            
                <a role="button" href="../CV/Glen_Pabico_CV.pdf" download class="btn btn-lg rounded-3 border-2 cont button2 fs-5 px-4 py-2 fbuttons" style="color: #27005D; background-color: #AED2FF">
                  Download my CV <i class="far fa-sticky-note ms-1"></i>
                </a>
              </div>

            </div>
            </div>

          </div>

    <div id="About">
        
        <section class="firstback shadow-lg py-3">

            <p class="over text-white">
              My <span style="color: #AED2FF;">overview</span>
            </p>
       
           
            <p class="text-white lh-lg text-center overtext mx-5"> 
              I am Glen S. Pabico from Daet, Camarines Norte a graduate of Bachelor of Science in Information Technology. Throughout my career and as an aspiring system designer and UI/UX designer, I have demonstrated a strong passion for creating impactful 
              digital experiences. In my previous roles, I actively sought opportunities to expand my knowledge and skills in both areas, constantly learning and staying updated with the latest industry trends and advancements. 
              As an aspiring system designer, I eagerly worked on projects, refining my abilities to architect and optimize complex software systems, focusing on scalability, performance, and security. Simultaneously, as a UI/UX designer, I honed my craft by immersing myself in user-centered design methodologies, conducting thorough research, and creating visually appealing and intuitive interfaces. 
              my dedication to mastering these roles has positioned I well for future success in creating innovative and seamless digital solutions. </p>
            
            </section>

      <p class="mt-4 titles text-uppercase">Skills</p>

        <div class="container">

            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
            <div class="col">
            <div class="card shadow-lg h-100 reveal">
                
                <div class="card-body mt-3">
            
                    <div class="row gx-5">
                      <div class="col">
                      <p class="card-title ms-4 text-start skills">HTML <i class="fa-brands fa-html5"></i></p>
                      </div>
                      <div class="col">
                      <p class="card-title text-end me-2 percent counter">90%</p>
                    </div>
                      </div>

                  <div class="progress ms-4 me-2" role="progressbar" aria-label="Example 20px high" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="height: 20px">
                    <div class="progress-bar prog bro" style="width: 0%"></div>
                  </div>
                
                </div>
                <div class="text-body-secondary mb-3 ms-3">
                  <i class="fa-solid fa-code fw-bold"></i>
                </div>
              </div>
            </div>

            <div class="col">
                <div class="card shadow-lg h-100 reveal">
                    
                    <div class="card-body mt-3">

                        <div class="row gx-5">
                          <div class="col">
                      <p class="card-title ms-4 text-start skills">CSS <i class="fa-brands fa-css3-alt"></i></p>
                          </div>
                          <div class="col">
                            <p class="card-title text-end me-2 percent">91%</p>
                          </div>
                        </div>

                       <div class="progress ms-4 me-2" role="progressbar" aria-label="Example 20px high" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100" style="height: 20px">
                           <div class="progress-barr prog" style="width: 0%"></div>
                        </div>

                    </div>
                    <div class="text-body-secondary mb-3 ms-3">
                      <i class="fa-brands fa-css3 fw-bold"></i>
                      <i class="fa-brands fa-bootstrap fw-bold"></i>
                    </div>
                  </div>
                </div>

                <div class="col">
                    <div class="card shadow-lg h-100 reveal">
                        
                        <div class="card-body mt-3">

                            <div class="row gx-5">
                              <div class="col">
                          <p class="card-title ms-4 text-start skills">JavaScript <i class="fa-brands fa-square-js"></i></p>
                              </div>
                              <div class="col">
                                <p class="card-title text-end me-2 percent">83%</p>
                              </div>
                            </div>

                          <div class="progress ms-4 me-2" role="progressbar" aria-label="Example 20px high" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100" style="height: 20px">
                            <div class="progress-barrr prog" style="width: 0%"></div>
                          </div>
                        </div>

                        <div class="text-body-secondary mb-3 ms-3">
                          <i class="fa-brands fa-react fw-bold"></i>  
                          <i class="fa-brands fa-vuejs fw-bold"></i>
                        </div>
                      </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-lg h-100 reveal">
                           
                            <div class="card-body mt-3">

                                <div class="row gx-5">
                                  <div class="col">
                              <p class="card-title ms-4 text-start skills">PHP <i class="fa-brands fa-php"></i></p>
                                  </div>
                                  <div class="col">
                                    <p class="card-title text-end me-2 percent">84%</p>
                                  </div>
                                </div>
                         

                               <div class="progress ms-4 me-2" role="progressbar" aria-label="Example 20px high" aria-valuenow="84" aria-valuemin="0" aria-valuemax="100" style="height: 20px">
                                  <div class="progress-barrrr prog" style="width: 0%"></div>
                                </div>
                            </div>
                            <div class="text-body-secondary mb-3 ms-3">
                              <i class="fa-brands fa-laravel fw-bold"></i>
                            </div>
                          </div>
                        </div>

                        <div class="col">
                            <div class="card shadow-lg h-100 reveal">

                                <div class="card-body mt-3">
                                 
                                    <div class="row gx-5">
                                      <div class="col">
                                        <p class="card-title ms-4 text-start skills">UI/UX Designing <i class="fa-solid fa-palette"></i></p>
                                      </div>
                                      <div class="col">
                                        <p class="card-title text-end me-2 percent">90%</p>
                                      </div>
                                    </div>
                              
                                   <div class="progress ms-4 me-2" role="progressbar" aria-label="Example 20px high" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="height: 20px">
                                      <div class="progress-barrrrr prog" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div class="text-body-secondary mb-3 ms-3">
                                  <i class="fa-brands fa-figma fw-bold"></i>
                                </div>
                              </div>
                            </div>

                            <div class="col">
                                <div class="card shadow-lg h-100 reveal">

                                    <div class="card-body mt-3">

                                      <div class="row gx-5">
                                        <div class="col-6">
                                      <h6 class="card-title ms-4 text-start skill">Technical Support & Writing <i class="fa-solid fa-pen"></i> <i class="fa-solid fa-screwdriver-wrench"></i></h6>
                                        </div>
                                        <div class="col">
                                          <p class="card-title text-end me-2 percent">95%</p>
                                        </div>
                                      </div>
                                      <div class="progress ms-4 me-2" role="progressbar" aria-label="Example 20px high" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="height: 20px">
                                        <div class="progress-barrrrrr prog" style="width: 0%"></div>
                                      </div>
                                    </div>
                                    <div class="text-body-secondary mb-3 ms-3">
                                      <i class="fa-solid fa-file-word fw-bold"></i>
                                      <i class="fa-solid fa-file-excel fw-bold"></i>
                                      <i class="fa-solid fa-file-powerpoint fw-bold"></i>
                                      <i class="fa-solid fa-screwdriver-wrench fw-bold"></i>
                                    </div>
                                  </div>
                                </div>

                                <div class="col">
                                    <div class="card shadow-lg h-100 reveal">

                                        <div class="card-body mt-3">

                                          <div class="row gx-5">
                                            <div class="col">
                                          <p class="card-title ms-4 text-start skills">Graphics Designing <i class="fa-solid fa-layer-group"></i></p>
                                            </div>
                                            <div class="col">
                                              <p class="card-title text-end me-2 percent">90%</p>
                                            </div>
                                          </div>

                                          <div class="progress ms-4 me-2" role="progressbar" aria-label="Example 20px high" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="height: 20px">
                                            <div class="progress-barrrrrrr prog" style="width: 0%"></div>

                                          </div>
                                        </div>
                                        <div class="text-body-secondary mb-3 ms-3">
                                          <i class="bi bi-filetype-psd fw-bold"></i>
                                          <i class="bi bi-file-earmark-pdf-fill"></i>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="col">
                                        <div class="card shadow-lg h-100 reveal">
                                           
                                            <div class="card-body mt-3">

                                              <div class="row gx-5">
                                                <div class="col">
                                              <p class="card-title ms-4 text-start skills">Video & Photo editing <i class="fa-solid fa-image"></i></p>
                                                </div>
                                                <div class="col">
                                                  <p class="card-title text-end me-2 percent">90%</p>
                                                </div>
                                              </div>

                                              <div class="progress ms-4 me-2" role="progressbar" aria-label="Example 20px high" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="height: 20px">
                                                <div class="progress-barrrrrrrr prog" style="width: 0%"></div>

                                              </div>
                                            </div>
                                            <div class="text-body-secondary mb-3 ms-3">
                                              <i class="bi bi-file-earmark-pdf-fill"></i>
                                            </div>
                                          </div>
                                        </div>

            </div>
        </div>

      <p class="mt-5 titles text-uppercase">Experiences</p>

      <section style="background-image:linear-gradient(#FFFFFF, #ECE9E6, #FFFFFF);" class="py-5">
        <div class="container py-5">

          <div class="main-timeline">

            <div class="timeline left">
              <div class="card glasstime">
                <div class="card-body p-4">
                  <p class="year fs-1">2023</p>
                  <div class="card-title text-uppercase fw-bold" style="color: #27005D;">FRONT – END DEVELOPER & UI/UX DEVELOPER (INTERNSHIP)</div>
                  <p><i class="fa-solid fa-building me-2"></i>Department of the Interior and Local Government Cam - Norte <br><span><i class="fa-solid fa-location-dot me-2"></i>Camarines Norte, Bicol Region, Philippines</span></p>
                  <hr class="mx-5">
                  <p class="mb-0 overtext">I work as UI/UX and Web Front-End Developer at DILG - Provincial Office Camarines Norte.
                    I craft a visually appealing and user-friendly web-interfaces while also
                     implementing these designs through code, ensuring a seamless and captivating user experience across web and mobile platforms. 
                     My role gave a unique blend of creative design thinking and technical expertise to bridge the gap between aesthetics and
                      functionality, ultimately delivering user-centric digital solutions.</p>
                </div>
              </div>
            </div>

            <div class="timeline right">
              <div class="card glasstime">
                <div class="card-body p-4">
                  <p class="year fs-1">2019</p>
                  <div class="card-title text-uppercase fw-bold" style="color: #27005D;">IT & TECHNICAL SUPPORT</div>
                  <p><i class="fa-solid fa-building me-2"></i>House of Representatives - Philippines - 2nd District Camarines Norte<br><span><i class="fa-solid fa-location-dot me-2"></i>Camarines Norte, Bicol Region, Philippines</span></p>
                  <hr class="mx-5">
                  <p class="mb-0 overtext">As an IT Support Specialist on the House of Representatives Camarines Norte, I play a crucial role in ensuring 
                    the smooth operation of the organization's technological infrastructure and providing technical assistance to its members and staff. 
                    My responsibilities encompass a wide range of tasks related to information technology, networking, and computer systems.</p>
                </div>
              </div>
            </div>

            <div class="timeline left">
              <div class="card glasstime">
                <div class="card-body p-4">
                  <p class="year fs-1">2019</p>
                  <div class="card-title text-uppercase fw-bold" style="color: #27005D;">Computer System Servicing (INTERNSHIP)</div>
                  <p><i class="fa-solid fa-building me-2"></i>Camarines Norte Provincial Capitol<br><span><i class="fa-solid fa-location-dot me-2"></i>Camarines Norte, Bicol Region, Philippines</span></p>
                  <hr class="mx-5">
                  <p class="mb-0 overtext">I was responsible for maintaining and optimizing computer systems 
                    to ensure their reliability and performance. I diagnose hardware and software issues, perform repairs and upgrades, 
                    and conduct routine maintenance tasks like cleaning and system updates. The proactive approach to system health monitoring and 
                    troubleshooting helps organizations minimize downtime,
                     maximize productivity, and safeguard critical data, making them indispensable in today's technology-driven landscape.</p>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </section>
      
    </div>

    
  <div id="Services">

          <p class="mt-5 titles text-uppercase">SERVICES</p>

          <section style="background-image:linear-gradient(#FFFFFF, #ECE9E6, #FFFFFF);" class="py-5">
          <div class="container mt-5">

          <div class="row row-cols-1 row-cols-lg-5 g-2 g-lg-3 justify-content-center mt-3">
            <div class="col">
        
            <div class="card h-100 border-0 reveal glasstime">
            <div class="card-body bg-transparent">
              <div class="mb-3 offer"><i class="fas fa-paint-brush fa-3x" style="color: #000080;"></i></div>
              <h5 class="card-title fw-bold text-uppercase offer"><span style="color: #9400FF;">UI/UX</span> Designing</h5>
              <p class="card-text offer">I am creating visually appealing and user-friendly interfaces and experiences for digital products, ensuring a seamless and satisfying interaction between users and the product</p>
            </div>
          </div>
        
            </div>
        
            <div class="col">
        
              <div class="card h-100 border-0 reveal glasstime">
              <div class="card-body bg-transparent">
                <div class="mb-3 offer"><i class="fas fa-globe fa-3x" style="color: #000080;"></i></div>
                <h5 class="card-title fw-bold text-uppercase offer"><span style="color: #9400FF;">Website</span> Designing</h5>
                <p class="card-text offer">I am designing and crafting the layout, visual elements, and overall look and feel of a website to create an engaging and intuitive user experience.</p>
              </div>
            </div>
          
              </div>
        
              <div class="col">
        
                <div class="card h-100 border-0 reveal glasstime">
                <div class="card-body bg-transparent">
                  <div class="mb-3 offer"><i class="fas fa-laptop-code fa-3x" style="color: #000080;"></i></div>
                  <h5 class="card-title fw-bold text-uppercase offer"><span style="color: #9400FF;">Frontend</span> Developing</h5>
                  <p class="card-text offer">I can translate the design and user interface into functional code using programming languages like HTML, CSS, and JavaScript to ensure the website or web application works smoothly and efficiently on the client-side.</p>
                </div>
              </div>
            
                </div>
        
          </div>
          

          <div class="row row-cols-1 row-cols-lg-5 g-2 g-lg-3 justify-content-center mt-3">
            <div class="col">
        
            <div class="card h-100 reveal border-0 glasstime">
            <div class="card-body bg-transparent">
              <div class="offer mb-3"><i class="fas fa-paint-brush fa-3x" style="color: #000080;"></i></div>
              <h5 class="card-title fw-bold text-uppercase offer"><span style="color: #9400FF;">Digital</span> Designing</h5>
              <p class="card-text offer">
                My role involves 
                combining artistic skills with technical proficiency to design graphics, 
                animations, and user interfaces to effectively communicate information in the digital landscape.</p>
            </div>
          </div>
        
            </div>
        
            <div class="col">
        
              <div class="card h-100 reveal border-0 glasstime">
              <div class="card-body">
                <div class="offer mb-3"><i class="fas fa-keyboard fa-3x" style="color: #000080;"></i></div>
                <h5 class="card-title fw-bold text-uppercase offer"><span style="color: #9400FF;">Technical</span> Writing</h5>
                <p class="card-text offer">I translating complex technical information into clear and
                   concise documentation,
                   manuals, or instructional materials that enable users to understand and effectively use a product, system, or technology.</p>
              </div>
            </div>
        
              </div>  
        
                <div class="col">
        
                  <div class="card h-100 reveal border-0 glasstime">
                  <div class="card-body">
                    <div class="offer mb-3"><i class="fas fa-mobile fa-3x" style="color: #000080;"></i></div>
                    <h5 class="card-title fw-bold text-uppercase offer"><span style="color: #9400FF;">Social Media</span> Strategist</h5>
                    <p class="card-text offer">I develope and execute comprehensive social media marketing plans, leveraging platforms and analytics
                       to enhance brand visibility, engagement, and growth across various online channels.</p>
                  </div>
                </div>
            
                  </div>
        
        
          </div>

        </div>
      </section>

      </div>

  <div id="Projects">
        <p class="titles text-uppercase mt-5">Projects</p>

        <section style="background-image:linear-gradient(#FFFFFF, #ECE9E6, #FFFFFF);" class="py-5">

        <div class="container mt-5">

         
          <div class="clearfix">
            
              <div id="carouselExampleIndicators1" class="carousel slide carousel-fade col-md-6 float-md-end mb-3 ms-md-3" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="3" aria-label="Slide 4"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="4" aria-label="Slide 5"></button>
                </div>

                <div class="carousel-inner">
                  <div class="carou">
                  <div class="carousel-item active" data-bs-interval="5000">
                    <img src="../images/igoals/home.png" class="d-block w-100 pro"  height="500" alt="...">
                  </div>
                  <div class="carousel-item" data-bs-interval="5000">
                    <img src="../images/igoals/library.jpg" class="d-block w-100 pro" height="500" alt="...">
                  </div>
                  <div class="carousel-item" data-bs-interval="5000">
                    <img src="../images/igoals/context-1.jpg" class="d-block w-100 pro" height="500" alt="...">
                 
                  </div>
                  <div class="carousel-item" data-bs-interval="5000">
                    <img src="../images/igoals/context-2.jpg" class="d-block w-100 pro" height="500" alt="...">
                 
                  </div>
                  <div class="carousel-item" data-bs-interval="5000">
                    <img src="../images/igoals/context-3.jpg" class="d-block w-100 pro" height="500" alt="...">
                 
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
              

              </div>
        
              <p class="des mt-5 text-center">iGOALS</p>

              <div class="d-flex justify-content-center gap-2">
                <a role="button" href="https://igoals.cnsclnd.net/" target="_blank" rel="noopener noreferrer" class="btn btn-lg rounded-pill border-2 cont button2 px-4 fbuttons text-uppercase" style="color: #27005D; background-color: #AED2FF">
                  visit <i class="fa-solid fa-arrow-up-right-from-square ms-1"></i>
                </a>
  
               <a role="button" href="https://github.com/GlenIsIsaw/DILGDataBank" target="_blank" rel="noopener noreferrer" class="btn btn-lg rounded-3 rounded-pill border-2 cont button2 fs-5 px-4 py-2 fbuttons text-uppercase text-white"  style="background-color:#000080;">
                Code <i class="fa-brands fa-github ms-1"></i>
              </a>
              </div>

              <p class="mt-4 subtext text-center">
                The Integrated Governance Online Application Learning System is a web-based repository that serves as a comprehensive platform for
                 organizations to streamline their governance processes and facilitate knowledge sharing. This innovative system integrates various 
                 governance applications and tools into a centralized online platform, enabling users to access and manage essential governance resources. 
              </p>

              <hr class = "mx-auto">
             
              <div class="d-flex justify-content-center gap-4">
                <i class="fa-brands fa-html5 fa-2x text-secondary"></i>
                <i class="fa-brands fa-css3-alt fa-2x text-secondary"></i>
                <i class="fa-brands fa-php fa-2x text-secondary"></i>
                <i class="fa-brands fa-laravel fa-2x text-secondary"></i>
                <i class="fa-brands fa-bootstrap fa-2x text-secondary"></i>
                <i class="fa-brands fa-square-js fa-2x text-secondary"></i>
  
              </div>

            </div>

            <div class="clearfix mt-5">
  
              <div id="carouselExampleIndicators2" class="carousel slide carousel-fade col-md-6 float-md-start mb-3 me-md-3" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="3" aria-label="Slide 4"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="4" aria-label="Slide 5"></button>
                </div>

                <div class="carousel-inner">
                  <div class="carou">
                  <div class="carousel-item active" data-bs-interval="5000">
                    <img src="../images/lnd/home.png" class="d-block w-100 pro"  height="500" alt="...">
                  </div>
                  <div class="carousel-item" data-bs-interval="5000">
                    <img src="../images/lnd/login.png" class="d-block w-100 pro" height="500" alt="...">
                  </div>
                  <div class="carousel-item" data-bs-interval="5000">
                    <img src="../images/lnd/context-1.png" class="d-block w-100 pro" height="500" alt="...">
                 
                  </div>
                  <div class="carousel-item" data-bs-interval="5000">
                    <img src="../images/lnd/context-2.png" class="d-block w-100 pro" height="500" alt="...">
                 
                  </div>
                  <div class="carousel-item" data-bs-interval="5000">
                    <img src="../images/lnd/context-5.png" class="d-block w-100 pro" height="500" alt="...">
                 
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
              

              </div>
        
              <p class="dessm text-uppercase mt-5 text-center">Web - Based Learning and development management system</p>

              <div class="d-flex justify-content-center gap-2">
                <a role="button" href="https://cn.cnsclnd.net/login" target="_blank" rel="noopener noreferrer" class="btn btn-lg rounded-pill border-2 cont button2 px-4 fbuttons text-uppercase" style="color: #27005D; background-color: #AED2FF">
                  visit <i class="fa-solid fa-arrow-up-right-from-square ms-1"></i>
                </a>
  
               <a role="button" href="https://github.com/GlenIsIsaw/LNDMIS" target="_blank" rel="noopener noreferrer" class="btn btn-lg rounded-3 rounded-pill border-2 cont button2 fs-5 px-4 py-2 fbuttons text-uppercase text-white"  style="background-color:#000080;">
                Code <i class="fa-brands fa-github ms-1"></i>
              </a>
              </div>

              <p class="mt-4 subtext text-center">
                The Web-Based Learning & Development Management System of the Institute of Computer Studies 
                is an innovative platform designed to enhance the experience and streamline the management of learning and development 
                programs. This comprehensive system leverages web-based technologies to provide students, faculty, and administrators with a 
                centralized hub for accessing educational resources, tracking progress, and facilitating communication.
              </p>

              <hr class = "mx-auto">
             
              <div class="d-flex justify-content-center gap-4 mb-5">
                <i class="fa-brands fa-html5 fa-2x text-secondary"></i>
                <i class="fa-brands fa-css3-alt fa-2x text-secondary"></i>
                <i class="fa-brands fa-php fa-2x text-secondary"></i>
                <i class="fa-brands fa-laravel fa-2x text-secondary"></i>
                <i class="fa-brands fa-bootstrap fa-2x text-secondary"></i>
  
              </div>

            </div>

            <div class="clearfix">
            
              <div id="carouselExampleIndicators3" class="carousel slide carousel-fade col-md-6 float-md-end mb-3 ms-md-3" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>

                <div class="carousel-inner">
                  <div class="carou">
                  <div class="carousel-item active" data-bs-interval="5000">
                    <img src="../images/alawihao/about.jpg" class="d-block w-100 pro"  height="500" alt="...">
                  </div>
                  <div class="carousel-item" data-bs-interval="5000">
                    <img src="../images/alawihao/announcement.jpg" class="d-block w-100 pro" height="500" alt="...">
                  </div>
                  <div class="carousel-item" data-bs-interval="5000">
                    <img src="../images/alawihao/context-1.jpg" class="d-block w-100 pro" height="500" alt="...">
                 
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
              

              </div>
        
              <p class="dessm text-uppercase mt-5 text-center">Barangay Alawihao Facilities Reservation System</p>

              <div class="d-flex justify-content-center gap-2">
              <a role="button" href="https://bafrip.cnsclnd.net/" target="_blank" rel="noopener noreferrer" class="btn btn-lg rounded-pill border-2 cont button2 px-4 fbuttons text-uppercase" style="color: #27005D; background-color: #AED2FF">
                visit <i class="fa-solid fa-arrow-up-right-from-square ms-1"></i>
              </a>

             <a role="button" href="https://github.com/YunChe05/WARS" target="_blank" rel="noopener noreferrer" class="btn btn-lg rounded-3 rounded-pill border-2 cont button2 fs-5 px-4 py-2 fbuttons text-uppercase text-white"  style="background-color:#000080;">
              Code <i class="fa-brands fa-github ms-1"></i>
            </a>
            </div>
    
              <p class="mt-4 subtext text-center">
                The Barangay Alawihao Facilities Reservation System is an efficient and user-friendly online platform designed to streamline 
                the process of reserving various facilities within the barangay. The system provides residents with a 
                convenient way to book facilities such as community halls, sports fields, and meeting rooms for their personal or community events.
              </p>

              <hr class = "mx-auto">
             
              <div class="d-flex justify-content-center gap-4">
                <i class="fa-brands fa-html5 fa-2x text-secondary"></i>
                <i class="fa-brands fa-css3-alt fa-2x text-secondary"></i>
                <i class="fa-brands fa-php fa-2x text-secondary"></i>
                <i class="fa-brands fa-laravel fa-2x text-secondary"></i>
                <i class="fa-brands fa-bootstrap fa-2x text-secondary"></i>
  
              </div>
              
            </div>

          </section>
                        
            </div>

  
  <div id="Contact">
      <!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden mt-5">

  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
          Say Hello & <br />
          <span style="color: hsl(218, 81%, 75%)">Send your message here</span>
        </h1>
        <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
          If you're interested in discussing potential business collaborations or have any inquiries, please don't hesitate to reach out through my social media accounts or here, and I'll be happy to connect and explore how we can work together.
        </p>

        
        <div class="d-flex justify-content-start gap-2 my-3">
            
          <a role="button" href="https://github.com/GlenIsIsaw" target="_blank" rel="noopener noreferrer">
          <i class="fa-brands fa-github fa-2x mx-2" style="color: hsl(218, 81%, 85%)"></i> </a>
          <a role="button" href="https://www.linkedin.com/in/glen-pabico/" target="_blank" rel="noopener noreferrer">
          <i class="fa-brands fa-linkedin fa-2x mx-2" style="color: hsl(218, 81%, 85%)"></i></a>
          <a role="button" href="https://www.facebook.com/glen.pabico/" target="_blank" rel="noopener noreferrer">
          <i class="fa-brands fa-facebook fa-2x mx-2" style="color: hsl(218, 81%, 85%)"></i></a>
        
        </div>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

        <div class="card bg-glass">
          <div class="card-body px-4 py-5 px-md-5">
            <form>
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="form-floating mb-3">
                <input type="name" class="form-control" id="floatingInput" placeholder="Juan Dela Cruz">
                <label for="floatingInput">Your Name</label>
              </div>
              <div class="form-floating">
                <input type="address" class="form-control" id="floatingPassword" placeholder="Address">
                <label for="floatingPassword">Address</label>
              </div>

              <!-- Email input -->
              <div class="form-floating mb-3 mt-3">
                <input type="email" class="form-control" id="floatingEmail" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>

              <!-- Password input -->
              <div class="form-floating mb-3 mt-3">
                <textarea class="form-control" placeholder="Leave a message here" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Message</label>
              </div>

              <!-- Submit button -->
              <div class="text-center">
              <button type="button" class="btn btn-primary btn-lg rounded-3 border-0 cont button2 fs-6 px-4 py-2 fbuttons mb-3" style="background-color:#000080;">
                SEND
             </button>
              </div>

              <!-- Register buttons -->
              <div class="text-center">
                <p>or simply reach me through:</p>
                <a role="button" href="https://www.facebook.com/glen.pabico/" target="_blank" rel="noopener noreferrer" class="btn btn-link btn-floating mx-1" >
                  <i class="fab fa-facebook-f"></i>
                </a>

                <a role="button" href="https://mail.google.com/" target="_blank" rel="noopener noreferrer" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-google"></i>
                </a>

                <a role="button" href="https://www.facebook.com/glen.pabico/" target="_blank" rel="noopener noreferrer" class="btn btn-link btn-floating mx-1">
                  <i class="fa-brands fa-facebook-messenger"></i>
                </a>

                <a role="button" href="https://www.linkedin.com/in/glen-pabico-8a5b17279/" target="_blank" rel="noopener noreferrer" class="btn btn-link btn-floating mx-1">
                  <i class="fa-brands fa-linkedin"></i>
                </a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->
                </div>
              </div>
    
  
      <script>
        function reveal() {
       var reveals = document.querySelectorAll(".reveal");
     
       for (var i = 0; i < reveals.length; i++) {
         var windowHeight = window.innerHeight;
         var elementTop = reveals[i].getBoundingClientRect().top;
         var elementVisible = 150;
     
         if (elementTop < windowHeight - elementVisible) {
           reveals[i].classList.add("active");
         } else {
           reveals[i].classList.remove("active");
         }
       }
     }
     
     window.addEventListener("scroll", reveal);
 
     </script>

     <script>

    $(".progress-bar").animate({
                width: "90%",
        }, 5000);

        $(".progress-barr").animate({
                width: "91%",
        }, 5000);

        $(".progress-barrr").animate({
                width: "83%",
        }, 5000);

        $(".progress-barrrr").animate({
                width: "84%",
        }, 5000);

        $(".progress-barrrrr").animate({
                width: "90%",
        }, 5000);

        $(".progress-barrrrrr").animate({
                width: "95%",
        }, 5000);

        $(".progress-barrrrrrr").animate({
                width: "90%",
        }, 5000);

        $(".progress-barrrrrrrr").animate({
                width: "90%",
        }, 5000);
      </script>

</body>
</html>
