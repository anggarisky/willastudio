<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>UI Design Resources by WillaStudio</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light pe-5 ps-5">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">WillaStudio</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Explore
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">UI Kits</a></li>
                  <li><a class="dropdown-item" href="#">Icon Sets</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
            </ul>
            <div class="d-flex">
              <a href="#" class="btn btn-secondary me-2">Sign In</a>
              <a href="#" class="btn btn-primary">Sign Up</a>
            </div>
          </div>
        </div>
      </nav>

      <section class="hero" style="margin-top: 100px;">
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-6 text-center">
                      <h2 class="mb-4 lh-base">
                        Working Faster and Easier <br class="desktop"> Using Our Product
                      </h2>
                      <form>
                        <div class="mb-3">
                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Search Finance or Education App" aria-describedby="emailHelp">
                        </div>
                      </form>
                  </div>
              </div>
              <div class="row justify-content-center mt-5 mb-5">
                <div class="col-11">
                    <div class="row">
                        <div class="col-12">
                            <h5 class="mb-3">
                                Our Featured Products
                            </h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <a href="{{ config('app.class_url').'/details/'.'asdasd-asdasd' }}">
                                <img class="img-fluid rounded" src="https://cdn.dribbble.com/users/844462/screenshots/14498339/media/873db5872fcef73c7dd7a491c6d096fc.png?compress=1&resize=1600x1200" alt="">
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="#">
                                <img class="img-fluid rounded" src="https://cdn.dribbble.com/users/4712199/screenshots/11126503/media/115b6cad321b58c4dfbeee6f46091417.png?compress=1&resize=1600x1200" alt="">
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="#">
                                <img class="img-fluid rounded" src="https://cdn.dribbble.com/users/844462/screenshots/14498339/media/873db5872fcef73c7dd7a491c6d096fc.png?compress=1&resize=1600x1200" alt="">
                            </a>
                        </div>
                    </div>
                </div>
              </div>
          </div>
      </section>

      <section class="catalog my-5 py-5">
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-11">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">All Assets</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">UI Kits</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Icon Sets</button>
                        </li>
                      </ul>
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row mt-3">
                                <div class="col-3">
                                    <a href="#">
                                        <img class="img-fluid rounded" src="https://cdn.dribbble.com/users/844462/screenshots/14498339/media/873db5872fcef73c7dd7a491c6d096fc.png?compress=1&resize=1600x1200" alt="">
                                    </a>
                                    <a href="#">
                                        <p class="mt-2">
                                            3D Food Apprio
                                        </p>
                                    </a>
                                </div>
                                <div class="col-3">
                                    <a href="#">
                                        <img class="img-fluid rounded" src="https://cdn.dribbble.com/users/4712199/screenshots/11126503/media/115b6cad321b58c4dfbeee6f46091417.png?compress=1&resize=1600x1200" alt="">
                                    </a>
                                    <a href="#">
                                        <p class="mt-2">
                                            3D Food Apprio
                                        </p>
                                    </a>
                                </div>
                                <div class="col-3">
                                    <a href="#">
                                        <img class="img-fluid rounded" src="https://cdn.dribbble.com/users/844462/screenshots/14498339/media/873db5872fcef73c7dd7a491c6d096fc.png?compress=1&resize=1600x1200" alt="">
                                    </a>
                                    <a href="#">
                                        <p class="mt-2">
                                            3D Food Apprio
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row mt-3">
                                <div class="col-3">
                                    <a href="#">
                                        <img class="img-fluid rounded" src="https://cdn.dribbble.com/users/844462/screenshots/14498339/media/873db5872fcef73c7dd7a491c6d096fc.png?compress=1&resize=1600x1200" alt="">
                                    </a>
                                    <a href="#">
                                        <p class="mt-2">
                                            3D Food Apprio
                                        </p>
                                    </a>
                                </div>
                                <div class="col-3">
                                    <a href="#">
                                        <img class="img-fluid rounded" src="https://cdn.dribbble.com/users/4712199/screenshots/11126503/media/115b6cad321b58c4dfbeee6f46091417.png?compress=1&resize=1600x1200" alt="">
                                    </a>
                                    <a href="#">
                                        <p class="mt-2">
                                            3D Food Apprio
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="row mt-3">
                                <div class="col-3">
                                    <a href="#">
                                        <img class="img-fluid rounded" src="https://cdn.dribbble.com/users/4712199/screenshots/11126503/media/115b6cad321b58c4dfbeee6f46091417.png?compress=1&resize=1600x1200" alt="">
                                    </a>
                                    <a href="#">
                                        <p class="mt-2">
                                            3D Food Apprio
                                        </p>
                                    </a>
                                </div>
                                <div class="col-3">
                                    <a href="#">
                                        <img class="img-fluid rounded" src="https://cdn.dribbble.com/users/844462/screenshots/14498339/media/873db5872fcef73c7dd7a491c6d096fc.png?compress=1&resize=1600x1200" alt="">
                                    </a>
                                    <a href="#">
                                        <p class="mt-2">
                                            3D Food Apprio
                                        </p>
                                    </a>
                                </div>
                                <div class="col-3">
                                    <a href="#">
                                        <img class="img-fluid rounded" src="https://cdn.dribbble.com/users/4712199/screenshots/11126503/media/115b6cad321b58c4dfbeee6f46091417.png?compress=1&resize=1600x1200" alt="">
                                    </a>
                                    <a href="#">
                                        <p class="mt-2">
                                            3D Food Apprio
                                        </p>
                                    </a>
                                </div>
                                <div class="col-3">
                                    <a href="#">
                                        <img class="img-fluid rounded" src="https://cdn.dribbble.com/users/4712199/screenshots/11126503/media/115b6cad321b58c4dfbeee6f46091417.png?compress=1&resize=1600x1200" alt="">
                                    </a>
                                    <a href="#">
                                        <p class="mt-2">
                                            3D Food Apprio
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>

      <section class="faqs pb-5">
          <div class="container">
              <div class="row justify-content-center">
                <div class="col-9">
                    <div class="row justify-content-center">
                        <div class="col-12 text-center">
                            <h3 class="lh-base mb-3">
                                Frequently Answer <br class="desktop"> Questions
                            </h3>
                        </div>
                        <div class="col-8">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                      Accordion Item #1
                                    </button>
                                  </h2>
                                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                      <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                      Accordion Item #2
                                    </button>
                                  </h2>
                                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                      <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                      Accordion Item #3
                                    </button>
                                  </h2>
                                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                      <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                    </div>
                </div>
              </div>
          </div>
      </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>