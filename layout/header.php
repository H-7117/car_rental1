<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/bootstrap-5.3.2-dist/css/bootstrap.min.css">

    <style>

        :root {
            --footer-background: #010204;
            --text-color: #FAFBFC;
            --text-gray: #FEFEFE;
            --text-heading-gray: #F4F5F6;
            --text-primary: #FAFBFC;
            --button-color: #404652;
            --button-border: #6B707C;
        }
        *{
            margin: 0;
            padding: 0;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            text-decoration: none;
            list-style: none;
            box-sizing: border-box;
        }
       
        header{
            background: #010204;
            width: 100%;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 50px;
        }

        header .logo{
            font-size: 30px;
            text-transform: uppercase;
            color: var(--text-gray);
        }
        header nav ul{
            display: flex;
        }

        header nav ul li a{
            display: inline-block;
            color: var(--text-gray);
            padding: 5px 0;
            margin: 0 10px;
            border: 3px solid transparent;
            text-transform: uppercase;
            
        }
        header nav ul li a:hover,
        header nav ul li a.active
        {
            border-bottom-color: dodgerblue;
        }

        .hamburger{
            cursor: pointer;
            display: block;
            
        }

        .hamburger i{
          color: var(--text-gray);
        }

        @media only screen and (max-width:900px) {
            header{
                padding: 0 30px;
            }
        }

        @media only screen and (max-width:700px) {
            .hamburger{
                display: block;
                
            }
           
            header nav{
                position: absolute;
                width: 100%;
                left: -100%;
                top: 70px;
                width: 100%;
                background: #fff;
                padding: 30px;
                transition: 0.3s;
                background-color: #010204;
                opacity: 0.7;
                z-index: 5;
            }
            header #nav_check:checked ~ nav{
                left: 0;
            }

            header nav ul{
                display: block;
                
            }

            header nav ul li a{
                margin: 5px 0;
            }
        }


.social-links {
    display: flex;
    gap: 8px;
    align-items: center;
}

.social-text {
    display: flex;
    align-items: center;
    gap: 8px;
}

.social-links img {
    width: 24px;
    height: 24px;
    transition: all 0.2s ease-in-out;
}

.social-links img:hover {
    transform: scale(1.1);
}

.social-links ul {
    display: flex;
    gap: 12px;
    list-style-type: none;
}


    .hero{
        background-image: url("./assets/images/heroImage.jpg");
        /* background-color: red; */
        width: 100%;
        height: 100vh;
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        display: flex;
    }
    .hero .left{
        width: 50%;

    }
    .hero .right{
        width: 50%;
        position: relative;
    }

        .hero-text {
        position: absolute;
          top: 50%;
          margin-left: 5vw;
        }
        .hero-text h1 {
          font-size: 4.6rem;
          letter-spacing: 0.2rem;
          font-family: 'Luckiest Guy', cursive;
          color: var(--text-gray);
        }
        .hero-text p {
          font-size: 1.8rem;
          font-family: 'Luckiest Guy', cursive;
          color: var(--text-gray);
        }
        .hero-text button {
          background-color: goldenrod;
          border: none;
          border-radius: 5px;
          padding: 0.8rem 1.8rem;
          margin-top: 1.2rem;
          font-size: 1rem;
          transition: background-color 0.5s ease-in;
          cursor: pointer;
        }

        .main_container{
            width: 80%;
            margin: 10px auto;
            padding: 10% 0 10% 0;
        }
        a{
            text-decoration: none;
        }
        
        .container_services{
                width: 100%;
                height: 50vh;
                padding: 0 8%;
                
        }


        @media (max-width: 800px) {
            .container_services{
                width: 100%;
                height: auto;
                padding: 0 8%;
                
        }

    
}
        .row{
            display: grid;
            grid-template-columns: repeat(auto-fit,minmax(250px,1fr));
            grid-gap: 30px;
        }

        .services{
            text-align: center;
            padding: 25px 10px;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
            background: transparent;
            transition: transform 0.5s, background 0.5s;
        }

        .services i{
            font-size: 40px;
            margin-bottom: 10px;
            color: #303ef7;
        }

        .services h2{
            font-weight: 600;
            margin-bottom: 8px;
        }

        .services:hover{
            background: #303ef7;
            color: #fff;
            transform: scale(1.05);
        }

        .services:hover i{
            color: #fff;
        }
        .services:hover h2{
            color: #fff;
        }
.slogan h1{
    font-family: 'Luckiest Guy', cursive;
    font-size: 26px;
    margin-bottom: 10px;
    text-align: center;
    padding: 0 8%;

}
.slogan p{
    font-family: 'Luckiest Guy', cursive;
    font-size: 16px;
  
    text-align: center;
    padding: 0 8%;
    margin-bottom: 60px;
}

/* about us */
.about-us{
  height: 100vh;
  width: 100%;
  padding: 90px 0;
  background: #ffffff;
}
.pic{
  height: auto;
  width:  302px;
}
.about{
  width: 1130px;
  max-width: 85%;
  margin: 0 auto;
  display: flex;
  align-items: center;
  justify-content: space-around;
}
.text{
  width: 540px;
}
.text h2{
  font-size: 90px;
  font-weight: 600;
  margin-bottom: 10px;
}
.text h5{
  font-size: 22px;
  font-weight: 500;
  margin-bottom: 20px;
}
span{
  color: #4070f4;
}
.text p{
  font-size: 18px;
  line-height: 25px;
  letter-spacing: 1px;
}
.data{
  margin-top: 30px;
}
.hire{
  font-size: 18px;
  background: #4070f4;
  color: #fff;
  text-decoration: none;
  border: none;
  padding: 8px 25px;
  border-radius: 6px;
  transition: 0.5s;
}
.hire:hover{
  background: #000;
  border: 1px solid #4070f4;
}

/* footer */
section.footer {
    background-color: var(--footer-background);
  
    position: relative;
    font-family: 'Poppins';
    padding:25px 0px;
}

.footer__content{
   padding: 25px;
   text-align: center;
   color: #fff;
   background-color: var(--footer-background);

}
.footer__content img{
    width: 5%;
    position: absolute;
    top: -50px;
    border: 1px solid red;
}
.footer__heading{
    position: relative;
}
.footer__heading h2 {
    background-color: #010204;
    display: inline-block;
    padding: 0px 10px;
    color: white;
    position: relative;
    z-index: 9999;
}
.footer__heading::after {
    content: "";
    position: absolute;
    left: 50%;
    top: 45%;
    height: 5px;
    margin: 0;
    border-radius: 50px;
    width: 20%;
    transform: translate(-50% , -50%);
    background-color: rgb(255, 255, 255);
}
.footer__content p {
    font-size: 12px;
    font-weight: 100;
    padding: 10px 0px;
}



@media screen and (max-width: 700px)   {
    section.footer{
            background-color: red;    
            bottom: -650px;
        
                
                
        }
    }

    .signup-container {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

.signup-form {
    background-color: #ffffff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    width: 350px;
    text-align: center;
}

h2 {
    color: #333333;
    font-size: 24px;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 20px;
}

input {
    width: 100%;
    padding: 15px;
    box-sizing: border-box;
    border: 1px solid #cccccc;
    border-radius: 5px;
    font-size: 16px;
    outline: none;
}

button {
    background-color: #4CAF50;
    color: #ffffff;
    padding: 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 18px;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #45a049;
}

.login-container {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

.login-form {
    background-color: #ffffff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    width: 350px;
    text-align: center;
}

h2 {
    color: #333333;
    font-size: 24px;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 20px;
}

input {
    width: 100%;
    padding: 15px;
    box-sizing: border-box;
    border: 1px solid #cccccc;
    border-radius: 5px;
    font-size: 16px;
    outline: none;
}

button {
    background-color: #010204;
    color: #ffffff;
    padding: 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 18px;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #353e47;
}
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  height: 60%;
  border: 1px solid #ddd;
  
}

th, td {
  text-align: center;
  padding: 16px;
}

th:first-child, td:first-child {
  text-align: left;
}

tr:nth-child(even) {
  background-color: #f2f2f2
}


.text-field input {
    color: var(--secondary);
    font-size: 16px;
    font-weight: 500;
    max-width: 100%;
    width: 100%;
    border: 1px solid var(--secondary);
    height: 50px;
    letter-spacing: .03rem;
    background-color: #dbdede;
    outline: none;
    transition: .25s;
    border-radius: 8px;
    text-indent: 20px;
    margin-top: 4px;
}


.text-field label:focus-within {
    color: var(--primary);
    
}

.text-field {
    position: relative;
    margin-bottom: 10px;
}

.text-field svg {
    position: absolute;
    right: -2px;
    bottom: -4px;
    width: 30px;
    height: 30px;
    transform: translate(-50%, -50%);
    transform-origin: center;
}

.text-field input:focus {
    border: 1px solid var(--primary);
}


.text-field input:focus+svg {
    stroke: var(--primary);
}

.text-field label {
    color: var(--secondary);
    font-size: 14px;
    font-weight: 600;
    letter-spacing: .03rem;
    z-index: 10;
}
    </style>
        <link rel="stylesheet" href="./assets/css/login.css">
        <link rel="stylesheet" href="./assets/css/cards.css">
        <link rel="stylesheet" href="./assets/css/Signup.css">
        <link rel="stylesheet" href="./assets/css/Signup">
    <link rel="stylesheet" 
   href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
       crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>

<header>
    <div class="logo"><img src="<?php echo ROOT_PATH; ?>assets/images/logo.png" width="70px" height="70px" alt="">
    EasyRental</div>
    <input type="checkbox" id="nav_check" hidden>
    
    <nav>
        <ul>
            <li>
                <a href="<?php echo ROOT_PATH; ?>" class="active">HOME</a>
            </li>

            <li>
                <a href="available_cars">Available cars</a>
            </li>

            <li>
                <a href="aboutus">About Us</a>
            </li>
            

            <?php
         
            
           
                 if(isset($_SESSION['isLoggedIn']))

        {               
            echo '<li>
            <a href="account">Account</a>
        </li>';
             echo ' <li><a href="logout">logout</a> </li>';
            if ($_SESSION['isAdmin']) 
            echo '<li><a href="admin">admin</a></li>';

        } else { echo '<li><a href="signup">register</a> </li><li><a href="login">login</a> </li>'; }
                


                ?>
           
        </ul>
    </nav>
    <label for="nav_check" class="hamburger">
    <i class="fa-solid fa-bars"></i>
    </label>
</header>
<main class="">