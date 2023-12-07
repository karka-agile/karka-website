
<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>

<!-- navbar section start -->
<nav class="navbar navbar-expand-lg z-index-3 w-100 shadow-none navbar-transparent p-0 position-fixed bg-white">
    <div class="container container-98 p-0">
      <a class="text-dark w-15" href="index.php" rel="tooltip" title="Karka Academy" data-placement="bottom">
        <img src='assets/img/karka-logos.png' alt='' class='black-logo'>
        <img src='assets/img/karka-white.png' class='white-logo'/>
      </a>
      <a class="google-review ms-auto d-lg-block d-none" target='_blank' href="https://www.google.com/search?q=karka+software+academy&oq=karka+&aqs=chrome.0.35i39i355j46i39i175i199j69i57j69i60l5.3688j0j9&sourceid=chrome&ie=UTF-8#lrd=0x3b04f15dde0aa367:0xd5eb331016b805d0,1,,,," rel="tooltip" title="Karka Academy Reviews" data-placement="bottom">
        <img src='assets/img/Google-reviews.jpg' alt='' class='w-75 rounded p-2 review-img'>
      </a>
      <a href="https://karka.academy/apply/" class="btn btn-sm apply-now mb-0 ms-auto d-lg-none d-block" target='_blank'>Apply Now</a>
      <button class="navbar-toggler shadow-none ms-2 collapsed btn-bg" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">
          <span class="navbar-toggler-bar bar1 text-dark"></span>
          <span class="navbar-toggler-bar bar2 text-dark"></span>
          <span class="navbar-toggler-bar bar3 text-dark"></span>
        </span>
      </button>
      <div class="navbar-collapse w-100 pt-3 pb-2 py-lg-0 collapse" id="navigation" style="">
        <ul class="navbar-nav navbar-nav-hover ms-auto nav-page" id='nav-ative-link'>
          <li class='nav-item dropdown list-mar mb-2'>
            <a href="index.php" class="nav-link nav-title ps-0 d-flex cursor-pointer align-items-center">
              <img src='assets/img/home-fav-icon.svg' class="me-2"/>
                Home
            </a>
            <div class="underline <?= ($activePage == 'index') ? 'active':''; ?>"></div>
          </li>
          <li class='nav-item dropdown list-mar mb-2'>
            <a href="courses.php" class="nav-link nav-title ps-0 d-flex cursor-pointer align-items-center">
              <img src='assets/img/course-fav-icon.svg' class="me-2"/>
                Courses
            </a>
            <div class="underline <?= ($activePage == 'courses') ? 'active':''; ?>"></div>
          </li>
          <li class='nav-item dropdown list-mar mb-2'>
            <a href="fees_pap.php" class="nav-link nav-title ps-0 d-flex cursor-pointer align-items-center">
              <img src='assets/img/fee-fav-icon.svg' class="me-2"/>
                Fees & PAPP
            </a>
            <div class="underline <?= ($activePage == 'fees_pap') ? 'active':''; ?>"></div>
          </li>
          <li class='nav-item dropdown list-mar mb-2'>
            <a href="fullstack.php" class="nav-link nav-title ps-0 d-flex cursor-pointer align-items-center">
              <img src='assets/img/fullstack-fav-icon.svg' class="me-2"/>
                Fullstack
            </a>
            <div class="underline <?= ($activePage == 'fullstack') ? 'active':''; ?>"></div>
          </li>
          <li class='nav-item dropdown list-mar mb-2'>
            <a href="placement.php" class="nav-link nav-title ps-0 d-flex cursor-pointer align-items-center">
              <img src='assets/img/placement-fav-icon.svg' class="me-2"/>
                Placement
            </a>
            <div class="underline <?= ($activePage == 'placement') ? 'active':''; ?>"></div>
          </li>
          <li class='nav-item dropdown list-mar mb-2'>
            <a href="about.php" class="nav-link nav-title ps-0 d-flex cursor-pointer align-items-center">
              <img src='assets/img/contact-fav-icon.svg' class="me-2"/>
                About Us
            </a>
            <div class="underline <?= ($activePage == 'about') ? 'active':''; ?>"></div>
          </li>
        </ul>
        <ul class="navbar-nav d-lg-block d-none">
          <li class="nav-item">
            <a href="./apply/" class="btn btn-sm  apply-now mb-0 me-1 p-2" target='_blank'>Apply Now</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<!-- navbar section end  -->