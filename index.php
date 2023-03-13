<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Equinox Study Abroad Limited</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/fav1.jpeg" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <style>
            .preload {
            position: fixed;
    width: 100%;
    height: 100vh;
    background-color: #77b3d4;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: opacity 0.5s ease;
    z-index: 10000;
}

.preload-finish {
    opacity: 0;
    pointer-events: none;
}

.cloud1, .cloud2, .cloud3 {
    height: 100px;
    position: absolute;
    right: 0%;
    z-index: -1;
}

.cloud1 {
    top: 25%;
    transform: translate(100%, -25%);
    animation: clouds 3s ease infinite;
}

.cloud2 {
    top: 50%;
    transform: translate(100%, -50%);
    animation: clouds 3s ease infinite 2s;
}

.cloud3 {
    top: 75%;
    transform: translate(100%, -75%);
    animation: clouds 3s ease infinite 1.5s;
}

.car {
    animation: car 1s ease infinite alternate;
}

.preload h3 {
    position: absolute;
    top: 75%;
    transform: translateY(10%);
    color: white;
    font-size: 30px;
    font-family: sans-serif;
}

@keyframes car {
    from {
        transform: translateY(0%);
    }
    to {
        transform: translateY(50px);
    }
}

@keyframes clouds {
    from {
        right:0%;
    }
    to {
        right: 130%;
    }
}
@media (max-width: 500px) {
    .preload {
        width: 100%;
    } 
    .car {
        width: 50%;
    }
    .cloud1, .cloud2, .cloud3 {
    
    }
}
        </style>
        
        
    </head>
<body>
<div class="preload">
        <img class="car" src="assets/img/airplane.png" alt="">
        
        <img class="cloud1" src="assets/img/cloud.png" alt="cloud1">
        <img class="cloud2" src="assets/img/cloud.png" alt="cloud2">
        <img class="cloud3" src="assets/img/cloud.png" alt="cloud3">
    </div>
    <?php
     include 'includes/header.php';
    ?>
    <?php
        if (isset($_GET['about'])) {
            include 'includes/about.php';
        }elseif(isset($_GET['contact'])) {
            include 'includes/contact.php';
        }elseif(isset($_GET['services'])) {
            include 'includes/services.php';
        }elseif(isset($_GET['sign-up'])) {
            include 'includes/sign-up.php';
        }elseif(isset($_GET['visa-support'])) {
            include 'includes/visa-support.php';
        }elseif(isset($_GET['application-guide'])) {
            include 'includes/application-guide.php';
        }elseif(isset($_GET['consultation-services'])) {
            include 'includes/consultation-services.php';
        }elseif(isset($_GET['team-member'])) {
            include 'includes/team-member.php';
        }elseif(isset($_GET['visa-guidance'])) {
            include 'includes/visa-guidance.php';
        }elseif(isset($_GET['accomodation-support'])) {
            include 'includes/accomodation-support.php';
        }elseif(isset($_GET['flights'])) {
            include 'includes/flights.php';
        }elseif(isset($_GET['hotels'])) {
            include 'includes/hotels.php';
        }elseif(isset($_GET['contact-us'])) {
            include 'includes/contact-us.php';
        }
        else {
            include 'includes/home.php';
        }
    ?>
    <?php
        include 'includes/footer.php';
    ?>
    

    <script>
        window.addEventListener("load", () => {
    const preload = document.querySelector(".preload");
    preload.classList.add("preload-finish");
});
    </script>
</body>
</html>