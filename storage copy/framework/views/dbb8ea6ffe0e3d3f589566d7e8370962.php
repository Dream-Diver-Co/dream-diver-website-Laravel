
<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
    <a href="<?php echo e(route('index')); ?>" class="navbar-brand d-flex align-items-center">
        <h1 class="m-0"><img class="img-fluid " src="<?php echo e(asset('frontend/img/logo.png')); ?>" alt="logo" ></h1>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto pe-4 py-3 py-lg-0">
            <a href="<?php echo e(route('index')); ?>" class="nav-item nav-link active">Home</a>
            <a href="<?php echo e(route('about')); ?>" class="nav-item nav-link">About Us</a>
            <div class="dropdown">
                <a href="<?php echo e(route('service')); ?>" class="dropbtn nav-item nav-link">Our Services <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                <div class="dropdown-content">
                  <a href="<?php echo e(route('software_development')); ?>">Software Development</a>
                  <a href="<?php echo e(route('mobile_app')); ?>">Mobile App Development</a>
                  <a href="<?php echo e(route('software_service')); ?>">Software Services</a>
                  <a href="<?php echo e(route('web_design')); ?>">Web Design & Development</a>
                  <a href="<?php echo e(route('seo')); ?>">SEO</a>
                  <a href="<?php echo e(route('marketing')); ?>">Digital Marketing</a>
                </div>
            </div>
            <div class="dropdown">
                <a href="<?php echo e(route('portfolio')); ?>" class="dropbtn nav-item nav-link">Portfolio <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                <div class="dropdown-content">
                  <a href="<?php echo e(route('aeon')); ?>">Aeon</a>
                  <a href="<?php echo e(route('pos')); ?>">Pos</a>
                  <a href="<?php echo e(route('misi')); ?>">Misi</a>
                  <a href="<?php echo e(route('shob_khobor')); ?>">Shob Khobor</a>
                  <a href="<?php echo e(route('fnf_stay')); ?>">Fnf-Stay</a>
                  <a href="<?php echo e(route('de_was')); ?>">De-Was</a>
                  <a href="<?php echo e(route('de_shop')); ?>">De-Shopper</a>
                  <a href="<?php echo e(route('book_change')); ?>">Book-Exchanger</a>
                  <a href="<?php echo e(route('foody_moody')); ?>">Foody-Moody</a>
                </div>
            </div>
            <a href="<?php echo e(route('contact')); ?>" class="nav-item nav-link">Contact Us</a>
            <a href="<?php echo e(route('ticket')); ?>" class="nav-item nav-link">Support Ticket</a>
            <a href="<?php echo e(route('faq')); ?>" class="nav-item nav-link">Faq</a>
            <a href="<?php echo e(route('career')); ?>" class="nav-item nav-link">Career</a>
            <a href="<?php echo e(route('review')); ?>" class="nav-item nav-link">Review</a>
            

            

            <div class="dropdown">
                <a class="dropbtn nav-item nav-link" onclick="showLoginModal()">Login<i class="fa fa-caret-down" aria-hidden="true"></i></a>
                <div class="dropdown-content">
                    <a onclick="showLoginModal()" style="width:auto;">Login</a>
                    <a onclick="showRegisterModal()" style="width:auto;">Registrar</a>
                </div>
            </div>

        </div>
    </div>
</nav>
<!-- Navbar End -->

    <!-- modal -->
    <div id="id01" class="modal">

        <form class="modal-content animate" action="<?php echo e(route('login')); ?>" method="post">
            <?php echo csrf_field(); ?>
          <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="<?php echo e(asset('frontend/img/logo.png')); ?>" alt="logo" class="avatar">
          </div>

          <div class="container">
            <div class="input-group">
                <i class='bx bxs-user'></i>
                <input type="text" placeholder="Username" name="email">
            </div>
            <div class="input-group">
                <i class='bx bxs-lock-alt'></i>
                <input type="password" placeholder="Password" name="password">
            </div>

            <button type="submit">Login</button>
            <label>
              <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
          </div>

          
        </form>
    </div>

    <div id="id02" class="modal">

        <form class="modal-content animate" action="<?php echo e(route('register')); ?>" method="post">
            <?php echo csrf_field(); ?>
          <div class="imgcontainer">
            <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="<?php echo e(asset('frontend/img/logo.png')); ?>" alt="logo" class="avatar">
          </div>

          <div class="container">
            <div class="input-group">
                <i class='bx bxs-user'></i>
                <input type="text" placeholder="Username" name="name">
            </div>
            <div class="input-group">
                <i class='bx bx-mail-send'></i>
                <input type="email" placeholder="Email"  name="email">
            </div>
            <div class="input-group">
                <i class='bx bxs-lock-alt'></i>
                <input type="password" placeholder="Password"  name="password">
            </div>
            <div class="input-group">
                <i class='bx bxs-lock-alt'></i>
                <input type="password" placeholder="Confirm password" name="password_confirmation">
            </div>

            <button type="submit">Registrar</button>
            <label>
              <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
          </div>

          
        </form>
    </div>
      <!-- modal -->
      <script>
        // Get the login modal
        var loginModal = document.getElementById('id01');
        // Get the register modal
        var registerModal = document.getElementById('id02');

        // When the user clicks anywhere outside of the login modal, close it
        window.onclick = function(event) {
            if (event.target == loginModal) {
                loginModal.style.display = "none";
            }
        }

        // Function to show login modal and hide register modal
        function showLoginModal() {
            loginModal.style.display = "block";
            registerModal.style.display = "none"; // hide register modal
        }

        // Function to show register modal and hide login modal
        function showRegisterModal() {
            loginModal.style.display = "none"; // hide login modal
            registerModal.style.display = "block";
        }
    </script>

<?php /**PATH G:\office\dream diver new git\ddyounus\resources\views/frontend/partials/navbar.blade.php ENDPATH**/ ?>