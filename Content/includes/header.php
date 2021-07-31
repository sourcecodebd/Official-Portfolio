 <head>
   <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
 	<link rel="icon" href="https://i.imgur.com/By9bbw2.png" type="image/x-icon" sizes="256x256"> </head>

 <body>
   <!-- Preloader -->
   <div class="preloader d-flex align-items-center justify-content-center">
     <div class="spinner">
       <div class="double-bounce1"></div>
       <div class="double-bounce2"></div>
     </div>
   </div>

   <nav class="navbar navbar-expand-lg navbar-light bg-light  fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="images/logo.png" alt="" height="50" class="d-inline-block align-text-top">
        </a>
        <div data-aos="flip-left" class="topbar-left">
            <a href="index.php" class="fs-4 logo text-decoration-none"><span>NAFI<span style="color: darkblue">.</span>COM<span> Blog</span></span><i class="mdi mdi-layers"></i></a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
           <li class="nav-item">
             <a class="nav-link" href="index.php">
               <div class="navbar">Home</div>
             </a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="about-me.php">
               <div class="navbar">About</div>
             </a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="portfolio.php">
               <div class="navbar">Portfolio</div>
             </a>
           </li>

           <div class="dropdown">
             <div class="dropbtn">Download My CV</div>
             <div class="dropdown-content">
               <a href="./downloads/Nafi Mahmud_CV_Job_Web-Developer.pdf">Job</a>
               <a href="./downloads/Nafi Mahmud_CV_Internship_Web-Developer.pdf">Internship</a>
             </div>
           </div>

           <li class="nav-item">
             <a class="nav-link" href="contact-me.php">
               <div class="navbar">Contact Me</div>
             </a>
           </li>

           <li class="nav-item">
             <a class="nav-link" href="https://sourcecodebd.github.io/nafi.com/">
               <div class="navbar">NAFI.COM</div>
             </a>
           </li>


         </ul>
        </div>
    </div>
</nav>

   <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
   <script>
     AOS.init({
       duration: 1000,
       once: true
     });
   </script>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

 </body>