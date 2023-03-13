<!DOCTYPE html>
<html lang="en">
    <head>
    <style>
        body {
            padding: 0;
            margin: 0;
            height: 100vh;
            justify-content: center;
            align-items: center;
            
        }
        
        .testimonials {
            background-image: linear-gradient(#09227E,#0B33C8,#0839F3);
            width: 100%;
            color: white;
            border-radius: 50px 0 50px 0;
        }
        .testimonials h5 {
            color: white;
        }
        * {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 1500px;
  position: relative;
  margin: auto;
  
}

/* Hide the images by default */
.mySlides {
  display: none;
  
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 4rem;
  padding: 8px 12px;
  position: absolute;
  left:-10%;
  bottom: 0%;
  width: 100%;
  text-align: center;
  background: rgba(0,0,0,.5);
  height: 900px;
  padding-top: 20%;
}
.text a {
    text-decoration: none;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}


@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
.project-count-wrap #listCount {
            list-style-type: none;
            display: flex;
            margin-bottom: 2%;
        }

        .project-count-wrap #listCount .listO {
            width: 33.33%;
            height: 100%;
            padding: 30px 0px;
            text-align: center;
            transition: 0.2s linear;
        }
        .project-count-wrap #listCount .listO:hover {
            transform: scale(1.1);
        }
        .project-count-wrap #listCount .listO:nth-child(1) {
            background: rgb(16,31,46);
        }
        .project-count-wrap #listCount .listO:nth-child(2) {
            background: rgb(18,34,51);
        }
        .project-count-wrap #listCount .listO:nth-child(3) {
            background: rgb(21,38,56);
        }
        .project-count-wrap #listCount .listO p.number {
            font-size: 40px;
            padding: 0;
            font-weight: bold;
        }
        .project-count-wrap #listCount .listO p {
            color: rgba(255,255,255,0.8);
            font-size: 18px;
            margin: 0;
            padding: 10px;
        }
        .project-count-wrap #listCount .listO  span {
            width: 60px;
            background: rgba(255,255,255,0.8);
            height: 2px;
            display: block;
            margin: 0 auto;
        }
           
        
         
        #img {
            height: 250px;
        }
        .row1 {
            display: flex;
            margin-bottom: 5%;
            justify-content: center;
            align-items: center;
        }
        .text {
            margin-left: 10%;
        }
        .text2 {
            margin-right: 10%;
        }
        @media (max-width: 500px) {
            .mySlides img {
                width: 100%;
                height: 300px;
            }
            .text { 
                height:300px;
                text-align: center;
                font-size: 1.5rem;
            }
            .project-count-wrap #listCount {
                display: block;
            }
            .project-count-wrap #listCount .listO {
                width: 70%;
                margin: auto;
                margin-bottom: 2%;
            }
            .showcase-img {
                width:100%;
            }
            .showcase-text {
                text-align: center;
            }
           
            
        }
        @media (max-width: 1080px) {
            .mySlides img {
                width: 100%;
                height: 500px;
            }
            .text { 
                height:500px;
                text-align: center;
                font-size: 1.5rem;
            }
            .project-count-wrap #listCount {
                display: block;
            }
            .project-count-wrap #listCount .listO {
                width: 70%;
                margin: auto;
                margin-bottom: 2%;
            }
            .showcase-img {
                width:100%;
            }
            .showcase-text {
                text-align: center;
            }
            
        }
        @media (max-width: 400px) {
            .mySlides img {
                width: 100%;
                height: 300px;
            }
            .text { 
                height:300px;
                text-align: center;
                font-size: 1.5rem;
            }
            .project-count-wrap #listCount {
                display: block;
            }
            .project-count-wrap #listCount .listO {
                width: 70%;
                margin: auto;
                margin-bottom: 2%;
            }
            .showcase-img {
                width:100%;
            }
            .showcase-text {
                text-align: center;
            }
        }
        @media (max-width: 450px) {
            .mySlides img {
                width: 100%;
                height: 250px;
            }
            .text { 
                height:250px;
                text-align: center;
                font-size: 1.5rem;
            }
            .project-count-wrap #listCount {
                display: block;
            }
            .project-count-wrap #listCount .listO {
                width: 70%;
                margin: auto;
                margin-bottom: 2%;
            }
            .showcase-img {
                width:100%;
            }
            .showcase-text {
                text-align: center;
            }
        }
       
    </style>
    <h1></h1>
    </head>
    <body>
       
        <!-- Masthead-->
        <div class="slideshow-container">
<div class="slideshow-container">

<!-- Full-width images with number and caption text -->
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="assets/img/vis1.jpeg" style="width:100%">
  <div class="text">Further Your Career with Scholarship Grant <br>
  <a href="index.php?services">See more</a>
  </div>
  
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="assets/img/vis2.jpeg" style="width:100%">
  <div class="text">Make Your Academic Dream a Reality <br>
  <a href="index.php?services">See more</a>
  </div>
  
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="assets/img/vis3.jpeg" style="width:100%" height="900px">
  <div class="text">Gain access to International Educational <br>
  <a href="index.php?services">See more</a>

  </div>
  
</div>

<!-- Next and previous buttons -->

</div>
<br>
        
    <div class="project-count-wrap">
    <h2 style="text-align:center;">WHAT MAKES US UNIQUE</h2>
        <div id="listCount">
            <div class="listO">
                <p id="number1" class="number">93%</p>
                <span></span>
                <p>PROFESSIONALISM</p>
    </div>
            <div class="listO">
                <p id="number2" class="number">95%</p> 
                <span></span>
                <p>ACCURACY</p>
    </div>
            <div class="listO">
                <p id="number3" class="number">99%</p>
                <span></span>
                <p>SUCCESS</p>
    </div>
    </div>
    </div>

    <section class="showcase">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('assets/img/vis4.jpg')"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2>Flight Booking</h2>
                        <p class="lead mb-0"><a href="index.php?flights">Register</a></p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6 text-white showcase-img" style="background-image: url('assets/img/set3.jpeg')"></div>
                    <div class="col-lg-6 my-auto showcase-text">
                        <h2>Hotel Booking</h2>
                        <p class="lead mb-0"><a href="index.php?hotels">Register</a></p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('assets/img/team2.jpg')"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2>Team Member</h2>
                        <p class="lead mb-0">
Equinox team consists of experts from various backgrounds who has gone through international academic system, with vast network in international universities across the globe as well as indebt experience helping international students and foreigners integrate properly into international communities. With over seven years of experience, thr team is well equipped to provide you the necessary support to make your academic pursuit a reality.</p>
                    </div>
                </div>
            </div>
            <div class="row g-0">
                    <div class="col-lg-6 text-white showcase-img" style="background-image: url('assets/img/testimonials-3.jpg')"></div>
                    <div class="col-lg-6 my-auto showcase-text">
                        <h2>Contact Us Here</h2>
                        <p class="lead mb-0"><a href="index.php?contact-us">See More</a></p>
                    </div>
                </div>
           
                
        </section>

       


        <section class="testimonials text-center bg-light" style="margin-top:2%">
            <div class="container">
                <h2 class="mb-5">Testimonies </h2>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid  mb-3" src="assets/img/test1.jpeg" alt="Memorial University of Newfoundland Canada" style="border-radius:50%" />
                            <h5>Ighedosa</h5>
                            <p class="font-weight-light mb-0">No trouble and tension regarding the entire process.
                                  Equinox travel is dependable and trusted. The staff are very helpful incase of change of plan in any situation.
                                 Thank you for helping me in my journey to Germany.</p>
                
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid  mb-3" src="assets/img/test3.jpeg" alt="..." style="border-radius:50%" />
                            <h5>Gift.</h5>
                            <p class="font-weight-light mb-0"> I would like to thank you first for giving me
                                 all the information regarding my masters study in the UK. It is really very helpful for students coming outside of UK. Thanks to Elvis for great manner. 
                                Your services are trustful and so amazing. Thank you for job weldone</p>
                            
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid  mb-3" src="assets/img/test4.jpeg" alt="..." id="img" height="40px" style="border-radius:50%;" />
                            <h5>PRECIOUS</h5>
                            <h5>Public Administration (York University Canada)</h5>
                            <p class="font-weight-light mb-0"> The customer service is top notch and so fast. They helped
                                in every query I had; Throughout my visa process. I always found them whenever needed. Highly recommended. </p>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- Call to Action-->
        
        <!-- Footer-->
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script>
    
//Automatic slideshow

let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
} 
  </script>

<script>
        var project = setInterval(projectDone, 10)
        var clients = setInterval(happyClients, 10)
        var coffee = setInterval(cupscoffee, 10)
        let count1 = 1;
        let count2 = 1;
        let count3 = 1;
        function projectDone() {
            count1++;
            document.querySelector("#number1").innerHTML = count1 + '%';
            if (count1 == 93) {
                clearInterval(project)
            }
        }
        function happyClients() {
            count2++;
            document.querySelector("#number2").innerHTML = count2 + '%';
            if (count2 == 95) {
                clearInterval(clients)
            }
        }
        function cupscoffee() {
            count3++;
            document.querySelector("#number3").innerHTML = count3 + '%';
            if (count3 == 99) {
                clearInterval(coffee)
            }
        }
    </script>
    </body>
</html>
