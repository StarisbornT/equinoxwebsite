<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
        body {
            font-family: arial;
            text-decoration: none;
        }
        nav {
            height: 120px;
            width: 100%;
            padding:2%;
            
        }
        label.logo {
            color: white;
            font-size: 35px;
            line-height: 80px;
            padding: 0 100px;
            font-weight: bold;
        }
        nav ul {
            float: right;
            margin-right: 20px;
        }
        nav ul li {
            display: inline-block;
            line-height: 80px;
            margin: 0 5px;
            
        }
        nav ul li a {
            color: black;
            font-size: 17px;
            padding: 7px 13px;
            border-radius: 3px;
            text-transform: uppercase;
            text-decoration: none;
        }

        a.active, a:hover {
            background: #1b9bff;
            transition: .5s;
            color: white;
        }
        .checkBtn {
          
            color: black;
            font-size: 25px;
            
            float: right;
            line-height: 80px;
            margin-right: 40px;
            cursor: pointer;
            display: none;
            
        }
        .brand-img {
  width: 250px;
        }
        #check {
            display: none;
        }
        @media (max-width: 602px) {
            label.logo {
                font-size: 30px;
                padding-left: 50px;
            }
            nav ul li a {
                font-size: 16px;
            }
        }
        @media (max-width: 500px) {
           .checkBtn {
            display: block;
           }
           .brand-img {
    width: 200px;
  }
           ul {
            position: fixed;
            width: 100%;
            height: 100vh;
            background: #2c3e50;
            top: 80px;
            left: -100%;
            text-align: center;
            transition: all .5s;
            z-index: 1000;
           }
           nav ul li {
            display: block;
            margin: 50px 0;
            line-height: 30px;
            color: white;
            
           }
           nav ul li a {
            font-size: 20px;
            color: white;
           }
           a:hover, a.active {
            background: none;
            color: #0082e6;
           }
           #check:checked ~ ul {
            left: 0;
           }
        }
        @media (max-width: 1080px) {
            .checkBtn {
            display: block;
           }
           .brand-img {
    
  }
           ul {
            position: fixed;
            width: 100%;
            height: 100vh;
            background: #2c3e50;
            top: 80px;
            left: -100%;
            text-align: center;
            transition: all .5s;
            z-index: 1000;
           }
           nav ul li {
            display: block;
            margin: 50px 0;
            line-height: 30px;
            color: white;
            
           }
           nav ul li a {
            font-size: 20px;
            color: white;
           }
           a:hover, a.active {
            background: none;
            color: #0082e6;
           }
           #check:checked ~ ul {
            left: 0;
           }   
        }
    </style>
</head>
<body>

    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkBtn">
            <p><i class="bi-list fs-3"></i></p>
        </label>
        <a class="navbar-brand" href="index.php"><img src="assets/img/logo.jpeg" alt=""  class="brand-img"></a>
        
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php?about">About</a></li>
            <li><a href="index.php?services">Services</a></li>
            <li><a href="index.php?contact">Contact Us</a></li>
            <li><i class="bi-telephone fs-3"></i> +2347040157281</li>
        </ul>
    </nav>
<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .toggle-button {
            position: absolute;
            top: .75rem;
            right: 1rem;
            display: none;
            flex-direction: column;
            justify-content: space-between;
            width: 30px;
            height: 21px;
        }

        .navbar .container .links {
            padding: 1%;
            transition: 1s ease-in;
        }
        .navbar .container .links.active {
          color: black;
          background white;
        }

        .navbar .container .links:hover {
            background-color: black;
            color:white;
        }

        .toggle-button .bar {
            height: 3px;
            width: 100%;
            background-color: black;
            border-radius: 10px;
        }
        .brand-img {
  width: 250px;
}

@media screen and (max-width: 500px) {
  .brand-img {
    width: 200px;
  }
  .toggle-button {
    display: flex;
  }

  .navbar .container .links {
    width: 100%;
    text-align: center;
    display: none;
    z-index: 1000;
  }
  .navbar .container .btn {
    width: 100%;
    text-align: center;
    display: none;
  }
  .navbar .container .links.active {
    display: flex;
  }

  .navbar .container {
    flex-direction: column;
    align-items: flex-start;
    z-index: 1000;
  }
}
    </style>
</head>
<body>
  
    
 <nav class="navbar navbar-light bg-light static-top">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img src="assets/img/logo.jpeg" alt=""  class="brand-img"></a>
                
                <a href="#" class="toggle-button">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </a>
                <a href="index.php" class="links" id="active">Home</a>
                <a href="index.php?services" class="links">Services</a>
                <a href="index.php?contact" class="links">Contact Us</a>
                <a class="btn btn-primary" href="index.php?sign-up" class="links">Sign Up</a>
            </div>
        </nav>

        <script>
           const toggleButton = document.getElementsByClassName('toggle-button')[0]
           const navBarLinks = document.getElementsByClassName('links')[0]
           
           toggleButton.addEventListener('click', () => {
            navBarLinks.classList.toggle('active')
           })
        </script> Navigation-->
    
</body>
</html> 
 
 