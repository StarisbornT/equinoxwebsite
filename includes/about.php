<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        
        <!-- Favicon-->
        
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <style>
            .contact {
  width: 90%;
  margin: 1% auto;
  display: column;
  justify-content: center;
  align-items: center;
  border: none;
}
            .banner {
                width: 90%;
                height: 200px;
                background-image: linear-gradient(#09227E,#0B33C8,#0839F3);
                margin: auto;
                display: column;
                padding-top: 5%;
                text-align: center;
                justify-content: center;
                align-items: center;
                color: white;
                border-radius: 20px 0 20px 0;
            }
            .short-nav {
                width: 100%;
                margin-top: 1%;
            }
            .short-nav a {
                text-decoration: none;
                color: #959597;
            }
            .contact-details {
                display: flex;
                margin: auto;
            }
            .contact-details:not(:first-child) {
                margin-top: 5%;
            }
            .contact-details i {
                color: #09227E;
            }
            .contact-text {
                margin-left: 1%;
                padding: 2%;
                text-align: justify;
            }
            .contact-text h5 {
                text-align: center;
            }
            .btn-div {
                display: column;
                align-items: center;
                justify-content: center;
                text-align: center;
                margin-top: 5%;
            }
            .getStarted {
                background:linear-gradient(#09227E,#0B33C8,#0839F3);
                width: 20%;
                height: 70px;
                color: white;
                border: none;
                transition: all .5s ease-in; 
                font-size: 2rem;
            }
            .getStarted a:hover {
                background: none;
            }
            .getStarted:hover {
                opacity: .7;
            }
            
          @media (max-width: 500px) {
            .banner {
                padding-top: 15%;
            }
            .contact {
                justify-content: center;
                align-items: center;
            }
            .contact img {
                width: 400px;
                height: 250px;
            }
             #imgS {
                width: 300px;
                height: 300px;
                margin-left: 15%;
            }
           .contact .contact-details {
                display: block;
                justify-content: center;
                align-items: center;
            }
            .getStarted {
                width: 50%;
                font-size: 1.7rem;
            }
            
          }
    </style>
    </head>
<body>
    <div class="banner">
        <div class="head-div">
        <h2>ABOUT US</h2>
        </div>
        
        <div class="short-nav">
            <p><a href="index.php">Home</a>&nbsp; &nbsp; &nbsp; &nbsp;   > &nbsp; &nbsp; &nbsp; &nbsp;   About</p>
        </div>
        
    </div>
<div class="contact">
    <div class="contact-details">
        <img src="assets/img/bg7.jpeg" alt="">
        <div class="contact-text">
        <h5>ABOUT US</h5>
                            <p class="font-weight-light mb-0">
                            Equinox Study Abroad is a Nigeria based Educational Consulting Agency built with partners from international communities in Canada, France and UK to support local and  international students in achieving their academic dreams within international institutions. Our team consists of experts who have gone through the various academic system, have a vast network with international institutions as well as extensive experience helping foreigners integrate seamlessly in different part of Europe  America and Asia. The team brings over a decade of experience to provide you with all the necessary support to make your academic dream a reality. 
                            Fulfilling your academic dream is our topmost priority.
                            </p>

        </div>
    
    </div>

    <div class="contact-details">
    <img src="assets/img/testimonials-3.jpg" alt="" id="imgS">
        <div class="contact-text">
        <h5>OUR VISION</h5>
                            <p class="font-weight-light mb-0">
                            To provide access to useful information, opportunity and adequate support to students from Nigeria and other developing countries to achieve their academic and career
                             aspirations by gaining international certification and experience.
                            </p>

        </div>
        
    
    </div>

    <div class="contact-details">
    <img src="assets/img/con9.jpeg" alt="" id="imgS" width="500px">
        <div class="contact-text">
        <h5>OUR MISSION</h5>
                            <p class="font-weight-light mb-0">
                            To be recognized as a leading educational agency in Nigeria that helps  
                            students from various backgrounds gain access to international universities.
                            </p>

        </div>
        
    
    </div>

</div>

<div class="btn-div">
<a href="index.php?contact"><button class="getStarted">GET STARTED!</button></a>

</div>


</body>

</html>