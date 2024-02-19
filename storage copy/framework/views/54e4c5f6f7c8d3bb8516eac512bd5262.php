<?php $__env->startSection('content'); ?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">Review</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('index')); ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Review</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <div class="container  mb-5 wow fadeIn " data-wow-delay="0.1s">
        <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Text review</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Video review</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Create Review</button>
            </li>

        </ul>
        <hr>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">

                <div class="container-xxl py-5">
                    <div>
                        <div class="row g-4 justify-content-center">
                            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="small-container-review">
                                    <div class="custom-card-review">
                                          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                              <div class="carousel-item active" style="text-align: center;">
                                                <h5 class="custom-title-review">AEON!</h5>
                                                <p>We provide all kind of software solutions to your projects.</p>
                                              </div>
                                              <div class="carousel-item" style="text-align: center;">
                                                <h5 class="custom-title-review">AEON</h5>
                                                <p>Web Design & Development, Android Applications</p>
                                              </div>
                                              <div class="carousel-item" style="text-align: center;">
                                                <h5 class="custom-title-review">AEON</h5>
                                                <p>Search Engine Optimization, contact us for details</p>
                                              </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                              <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                              <span class="visually-hidden">Next</span>
                                            </button>
                                          </div>
                                            <a href="<?php echo e(route('aeon')); ?>">
                                                <button class="custom-btn-review">AEON</button>
                                              </a>
                                    </div>
                                    <div class="custom-blob-review"></div>
                                </div>
                            </div>
                            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="small-container-review">
                                    <div class="custom-card-review">
                                          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                              <div class="carousel-item active" style="text-align: center;">
                                                <h5 class="custom-title-review">Pos!</h5>
                                                <p>We provide all kind of software solutions to your projects.</p>
                                              </div>
                                              <div class="carousel-item" style="text-align: center;">
                                                <h5 class="custom-title-review">Pos</h5>
                                                <p>Web Design & Development, Android Applications</p>
                                              </div>
                                              <div class="carousel-item" style="text-align: center;">
                                                <h5 class="custom-title-review">Pos</h5>
                                                <p>Search Engine Optimization, contact us for details</p>
                                              </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                              <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                              <span class="visually-hidden">Next</span>
                                            </button>
                                          </div>
                                            <a href="<?php echo e(route('pos')); ?>">
                                                <button class="custom-btn-review">Pos</button>
                                              </a>
                                    </div>
                                    <div class="custom-blob-review"></div>
                                </div>
                            </div>
                            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="small-container-review">
                                    <div class="custom-card-review">
                                          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                              <div class="carousel-item active" style="text-align: center;">
                                                <h5 class="custom-title-review">Misi !</h5>
                                                <p>We provide all kind of software solutions to your projects.</p>
                                              </div>
                                              <div class="carousel-item" style="text-align: center;">
                                                <h5 class="custom-title-review">Misi </h5>
                                                <p>Web Design & Development, Android Applications</p>
                                              </div>
                                              <div class="carousel-item" style="text-align: center;">
                                                <h5 class="custom-title-review">Misi </h5>
                                                <p>Search Engine Optimization, contact us for details</p>
                                              </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                              <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                              <span class="visually-hidden">Next</span>
                                            </button>
                                          </div>
                                            <a href="<?php echo e(route('misi')); ?>">
                                                <button class="custom-btn-review">Misi </button>
                                              </a>
                                    </div>
                                    <div class="custom-blob-review"></div>
                                </div>
                            </div>

                            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="small-container-review">
                                    <div class="custom-card-review">
                                          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                              <div class="carousel-item active" style="text-align: center;">
                                                <h5 class="custom-title-review">De-Shopper!</h5>
                                                <p>We provide all kind of software solutions to your projects.</p>
                                              </div>
                                              <div class="carousel-item" style="text-align: center;">
                                                <h5 class="custom-title-review">De-Shopper</h5>
                                                <p>Web Design & Development, Android Applications</p>
                                              </div>
                                              <div class="carousel-item" style="text-align: center;">
                                                <h5 class="custom-title-review">De-Shopper</h5>
                                                <p>Search Engine Optimization, contact us for details</p>
                                              </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                              <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                              <span class="visually-hidden">Next</span>
                                            </button>
                                          </div>
                                            <a href="<?php echo e(route('de_shop')); ?>">
                                                <button class="custom-btn-review">De-Shopper</button>
                                              </a>
                                    </div>
                                    <div class="custom-blob-review"></div>
                                </div>
                            </div>

                            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="small-container-review">
                                    <div class="custom-card-review">
                                          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                              <div class="carousel-item active" style="text-align: center;">
                                                <h5 class="custom-title-review">Book Exchanger!</h5>
                                                <p>We provide all kind of software solutions to your projects.</p>
                                              </div>
                                              <div class="carousel-item" style="text-align: center;">
                                                <h5 class="custom-title-review">Book Exchanger</h5>
                                                <p>Web Design & Development, Android Applications</p>
                                              </div>
                                              <div class="carousel-item" style="text-align: center;">
                                                <h5 class="custom-title-review">Book Exchanger</h5>
                                                <p>Search Engine Optimization, contact us for details</p>
                                              </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                              <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                              <span class="visually-hidden">Next</span>
                                            </button>
                                          </div>
                                            <a href="<?php echo e(route('book_change')); ?>">
                                                <button class="custom-btn-review">Book Exchanger</button>
                                              </a>
                                    </div>
                                    <div class="custom-blob-review"></div>
                                </div>
                            </div>

                            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="small-container-review">
                                    <div class="custom-card-review">
                                          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                              <div class="carousel-item active" style="text-align: center;">
                                                <h5 class="custom-title-review">Foody Moody</h5>
                                                <p>We provide all kind of software solutions to your projects.</p>
                                              </div>
                                              <div class="carousel-item" style="text-align: center;">
                                                <h5 class="custom-title-review">Foody Moody</h5>
                                                <p>Web Design & Development, Android Applications</p>
                                              </div>
                                              <div class="carousel-item" style="text-align: center;">
                                                <h5 class="custom-title-review">Foody Moody</h5>
                                                <p>Search Engine Optimization, contact us for details</p>
                                              </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                              <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                              <span class="visually-hidden">Next</span>
                                            </button>
                                          </div>
                                            <a href="<?php echo e(route('foody_moody')); ?>">
                                                <button class="custom-btn-review">Foody-Moody</button>
                                              </a>
                                    </div>
                                    <div class="custom-blob-review"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
               <p class="text-head">Video</p>

            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                <div class="container-xxl py-5">
                    <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
                        <p class="display-6">Create Review</p>
                    </div>
                    <div class="container">
                        <div class="row g-5">
                            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="container">
                                    <!-- FORM SECTION -->
                                    <div class="row">
                                        <!-- SIGN IN -->
                                        <div class="col align-items-center flex-col sign-in">
                                            <div class=" form-wrapper align-items-center">
                                                <div class="form sign-in">
                                                    <div class="input-group">
                                                        <i class='bx bxs-user'></i>
                                                        <input type="text" placeholder="Your Name">
                                                    </div>
                                                    <div class="input-group">
                                                        <i class='bx bx-mail-send'></i>
                                                        <input type="text" placeholder="Company Name">
                                                    </div>
                                                    <div class="input-group">
                                                        <i class='bx bxs-lock-alt'></i>
                                                        <input type="text" placeholder="Text Review to write">
                                                    </div>
                                                    <div class="input-group">
                                                      <label for="cvInput">
                                                          <i class='bx bxs-user'></i>
                                                      </label>
                                                      <input type="file" id="cvInput" accept=".pdf, .doc, .docx" placeholder="Upload CV" />
                                                  </div>
                                                  <div class="input-group">
                                                    <i class='bx bxs-lock-alt'></i>
                                                    <textarea name="note" id="" cols="100%" rows="3" placeholder="Note"></textarea>
                                                  </div>
                                                    <button>
                                                        Create Review
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END SIGN IN -->
                                    </div>
                                    <!-- END FORM SECTION -->
                                </div>
                            </div>
                            <div class="col-lg-6 wow fadeInUp align-items-center " data-wow-delay="0.5s">
                                <div class="small-container">
                                    <div class="custom-card">
                                          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                              <div class="carousel-item active" style="text-align: center;">
                                                <h5 class="custom-title">Dream Diver!</h5>
                                                <p>We provide all kind of software solutions to your projects.</p>
                                              </div>
                                              <div class="carousel-item" style="text-align: center;">
                                                <h5 class="custom-title">Web Development</h5>
                                                <p>Web Design & Development, Android Applications</p>
                                              </div>
                                              <div class="carousel-item" style="text-align: center;">
                                                <h5 class="custom-title">SEO</h5>
                                                <p>Search Engine Optimization, contact us for details</p>
                                              </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                              <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                              <span class="visually-hidden">Next</span>
                                            </button>
                                          </div>
                                            <a href="<?php echo e(route('contact')); ?>">
                                                <button class="custom-btn">Contact Us</button>
                                              </a>
                                    </div>
                                    <div class="custom-blob"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\office\dream diver new git\ddyounus\resources\views/frontend/page/review.blade.php ENDPATH**/ ?>