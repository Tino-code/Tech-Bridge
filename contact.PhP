<?php



require_once'sendMail.php';



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Bridge</title>
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
    <link rel="stylesheet" href="css/Footer.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/header.css">
   
</head>
<body>

    <header>
        <nav>
           
            <div class="logo">
              <img src="Images/Logo/TechBridge logo.png" alt="">
            </div>
            <div class="hamburger-menu">  <i class="fas fa-bars"></i>  </div>
            <ul> 
                <div class="ul-li">
                 <li >
                <a href="index.html">Home</a>
              </li>
              <li>
                <a href="About.html">About Us</a>
              </li>
              <li>
                <a href="">Service</a>
              </li>
              <li>
                <a href="Projects.html">Projects And Impact</a>
              </li>
              <li class="Active" ><a href="contact.html">Contact Us</a></li>
            </div>
              <div class="Div-BT1">
                <button class="BT1"><a href="">Donate</a></button>
              </div>
            </ul>
           
          </nav>
          
    </header>

    <main>
        <section>
            <div class="sHeader">
            <h1>Contact</h1>
            <p>Have a question or need assistance? Message us or schedule a  call.</p>
        </div>
        <div class="conUs">
            <h4>Contact Us</h4>
            <div class="con">
                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="20" viewBox="0 0 19 20" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.375 0.75C4.19969 0.755683 0.00568342 4.94969 0 10.125V18.0309C0.00103307 18.8419 0.65815 19.499 1.46906 19.5H9.375C14.5527 19.5 18.75 15.3027 18.75 10.125C18.75 4.94733 14.5527 0.75 9.375 0.75ZM9.375 18H1.5V10.125C1.5 5.77576 5.02576 2.25 9.375 2.25C13.7242 2.25 17.25 5.77576 17.25 10.125C17.25 14.4742 13.7242 18 9.375 18ZM10.5 10.5C10.5 11.1213 9.99632 11.625 9.375 11.625C8.75368 11.625 8.25 11.1213 8.25 10.5C8.25 9.87868 8.75368 9.375 9.375 9.375C9.99632 9.375 10.5 9.87868 10.5 10.5ZM6.375 10.5C6.375 11.1213 5.87132 11.625 5.25 11.625C4.62868 11.625 4.125 11.1213 4.125 10.5C4.125 9.87868 4.62868 9.375 5.25 9.375C5.87132 9.375 6.375 9.87868 6.375 10.5ZM14.625 10.5C14.625 11.1213 14.1213 11.625 13.5 11.625C12.8787 11.625 12.375 11.1213 12.375 10.5C12.375 9.87868 12.8787 9.375 13.5 9.375C14.1213 9.375 14.625 9.87868 14.625 10.5Z" fill="#121417"/>
                  </svg>
                  <div class="conT">
                    <h5>Message Us</h5>
                    <p>Mon-Fri: 9am-5pm PST</p>
                  </div> 
            </div>

            <div class="con">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10 0.75C4.61522 0.75 0.25 5.11522 0.25 10.5C0.25 15.8848 4.61522 20.25 10 20.25C15.3848 20.25 19.75 15.8848 19.75 10.5C19.7443 5.11758 15.3824 0.755684 10 0.75ZM10 18.75C5.44365 18.75 1.75 15.0563 1.75 10.5C1.75 5.94365 5.44365 2.25 10 2.25C14.5563 2.25 18.25 5.94365 18.25 10.5C18.2448 15.0542 14.5542 18.7448 10 18.75ZM16 10.5C16 10.9142 15.6642 11.25 15.25 11.25H10C9.58579 11.25 9.25 10.9142 9.25 10.5V5.25C9.25 4.83579 9.58579 4.5 10 4.5C10.4142 4.5 10.75 4.83579 10.75 5.25V9.75H15.25C15.6642 9.75 16 10.0858 16 10.5Z" fill="#121417"/>
                  </svg>
                  <div class="conT">
                    <h5>Schedule a Call</h5>
                    <p>Book a 30-minute call with our team.</p>
                  </div> 
            </div>
        </div>

        <form method="post" action="contact.PhP">
            <h5>Let Talk</h5>

            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <?php
        echo '<p style="color: red;font-size: 10px;opacity: 1;height: auto;text-align: right;width: 350px;">' .$errors['name'].' </p>';
        ?>
            <label for="email">Email</label>

            <input type="email" name="email" id="email" placeholder="Enter your email">
            <?php
        echo '<p style="color: red;font-size: 10px;opacity: 1;height: auto;text-align: right;width: 350px;">' .$errors['email'].' </p>';
        ?>
            <label for="Message">Message</label>
            <textarea name="Message" id="Message" cols="30" rows="10" placeholder="Type your message"></textarea>

            <input type="submit" name="submit" value="Send" class="bt">

        </form>

        <div class="last">
            <h4>Legal</h4>
            <div class="legal">
               <div>
                <p>Privacy</p>
                <span>Effective date: February 1, 2022</span>
            </div>
            <button class="BT1" style="background-color: #ffffff !important;"><a href="">View</a></button>

        </div>
        <div class="legal">
               <div>
            <p>Terms of Use</p>
            <span>Effective date: February 1, 2022</span>
        </div>
            <button class="BT1" style="background-color: #ffffff !important;"><a href="">View</a></button>

    </div>
        </section>

    </main>


    <footer class="site-footer">
    
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <h6>About</h6>
              <p class="text-justify"> <iTechBridge>TechBridge Initiative is a leading research organization working with NGOs, governmental bodies, and corporate entities to drive innovation and advance technology. We are dedicated to creating impactful solutions for a sustainable future.  </p>
            </div>
      
        
      
            <div class="col-xs-6 col-md-3 foot ">
              <h6>Quick Links</h6>
              <ul class="footer-links">
                <li><a href="index.html">Home</a></li>
                <li><a href="About.html">About Us</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="service.html">Services</a></li>
      
              </ul>
            </div>
          </div>
          <hr>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
              <p class="copyright-text">Copyright &copy; 2024 All Rights Reserved by 
           <a href="#">Teach Bridge Initiative</a>.
              </p>
            </div>
      
            <div class="col-md-4 col-sm-6 col-xs-12">
              <ul class="social-icons">
                <li><a class="facebook" href="#"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a class="twitter" href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                <li><a href=""><i class="fa-brands fa-linkedin"></i></a></li>
                <li><a href=""><i class="fa-brands fa-tiktok"></i></a></li>   
              </ul>
            </div>
          </div>
        </div>
      </footer>
      
      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      
      <script src="JavaScript/Active.js" ></script>  

</body>
</html>