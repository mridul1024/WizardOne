<nav class="site-header sticky-top py-1" id="navigationbar" style="height: 46px">
<!--
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="navCollapseData">
  <span class="navbar-toggler-icon" ></span>
</button> -->

  <div class="container d-flex flex-column flex-md-row justify-content-between" id="navCollapseData">

  <!--<button class="d-block d-md-none navbar-toggler" data-toggle="collapse" data-target="#navCollapseData" style="width: 27px; height: 27px; background-color: transparent; outline: 0;">
      
    </button> -->


    <a class="py-2 d-none d-md-inline-block" href="#" >
      <!--<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24" focusable="false"><title>Product</title><circle cx="12" cy="12" r="10"></circle><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"></path></svg>
-->
<img id="nav_img" src="/images/wizardone_nav.png" alt="nav_banner" style="width: 27px; height: 27px;">
    </a>

    

    <a class="py-2 d-none d-md-inline-block" href="#top">Home</a>
    <a class="py-2 d-none d-md-inline-block" href="#aboutus-section">About Us</a>
    <a class="py-2 d-none d-md-inline-block" href="#services-section">Services</a>
    <a class="py-2 d-none d-md-inline-block" href="#recentprojects-section">Recent Projects</a>
    <a class="py-2 d-none d-md-inline-block" href="#team-section">Team</a>
    <a class="py-2 d-none d-md-inline-block" href="#contact-section">Contact</a>

    <a class="py-2 d-block d-md-none" href="#" onclick="openNav()"><i class="fas fa-bars"></i></a>
  
    
    <a class="py-2 d-block d-md-none" onclick="closeNav()" href="#top">Home</a>
    <a class="py-2 d-block d-md-none" onclick="closeNav()" href="#aboutus-section">About Us</a>
    <a class="py-2 d-block d-md-none" onclick="closeNav()" href="#services-section">Services</a>
    <a class="py-2 d-block d-md-none" onclick="closeNav()" href="#recentprojects-section">Recent Projects</a>
    <a class="py-2 d-block d-md-none" onclick="closeNav()" href="#team-section">Team</a>
    <a class="py-2 d-block d-md-none" onclick="closeNav()" href="#contact-section">Contact</a>

  </div>



  <script>

  function openNav(){
      
      var h = document.getElementById("navigationbar").style.height;
      if(h == "46px")
      document.getElementById("navigationbar").style.height = "300px";

      else
      document.getElementById("navigationbar").style.height = "46px";
    }

    function closeNav(){
      document.getElementById("navigationbar").style.height = "46px";
    }

    window.addEventListener('resize', function(){
      document.getElementById("navigationbar").style.height = "46px";
    });


  </script>

</nav>



