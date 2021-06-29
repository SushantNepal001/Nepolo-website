<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('title')</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <!-- font awesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css"
    crossorigin="anonymous" />
  {{--
  <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css"> --}}
  <!-- Bootsrap -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">



</head>

<body>
  <header>
    <div class="container d-flex justify-content-center">
       <div class="flex-coloumn">
        <div class="d-flex justify-content-center">
          <img src="/images/logo.png" class="logo">
         </div>
        
        <div><a href="/home">
          <h4>
            <span class="strong text-uppercase" >Notice house</span>
          </h4>
        </a>
      </div>
       </div>
    
     
    </div>
    <nav class="navbar navbar-expand-md navbar-light bg-light container-fluid">

      
       
        <!-- /<a class="navbar-brand" href="/">Notice House</a> -->

        <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
          <span class="navbar-toggler-icon"></span>
        </button> -->
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav m-auto">
            <li class="nav-item active">
              <a class="nav-link " aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="/GovermentNotice">Goverment Notice</a>
            </li>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/EducationNotice">Education Notice</a>
            </li>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/Bank&FinancialNotice">Banking & Financial Notice</a>
            </li>
            </li>
            <li class="nav-item" style="border: none;">
              <a class="nav-link" href="/JobNotice">Job Notice</a>
            </li>


          </ul>
          

        </div>

        
      </div> 

    </nav>
  </header>
  <main>
    <div class="container d-flex first-container">
      <div class="row">
        <div class="col my-3 mx-3">
          {{-- <div class="row padding"> --}}
            @yield('content')
            {{-- </div> --}}
        </div>

        <div class="col  my-3 mx-2 d-flex align-self: flex-start text-uppercase">
          <div class="card" style="width: 18rem;">
            <div class="card-header text-uppercase">

              <strong>Trending notice</strong>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><a class="nav-link" href="/EducationNotice">Education Notice</a></li>
              <li class="list-group-item"><a class="nav-link" href="/EducationNotice">Education Notice</a></li>
              <li class="list-group-item"><a class="nav-link" href="/EducationNotice">Education Notice</a></li>
              <li class="list-group-item"><a class="nav-link" href="/EducationNotice">Education Notice</a></li>
              <li class="list-group-item"><a class="nav-link" href="/EducationNotice">Education Notice</a></li>
              <li class="list-group-item"><a class="nav-link" href="/EducationNotice">Education Notice</a></li>

            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container text-uppercase  ">
      <div class="row mx-3" style="width: fit-content;">

        <div class="col  my-3 mx-2  ">
          <div class="card" style="width: 18rem;">
            <div class="card-header ">
              <strong> latest Notice</strong>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><a class="nav-link" href="/EducationNotice">Education Notice</a></li>
              <li class="list-group-item"><a class="nav-link" href="/EducationNotice">Education Notice</a></li>
              <li class="list-group-item"><a class="nav-link" href="/EducationNotice">Education Notice</a></li>
              <li class="list-group-item"><a class="nav-link" href="/EducationNotice">Education Notice</a></li>
              <li class="list-group-item"><a class="nav-link" href="/EducationNotice">Education Notice</a></li>
              <li class="list-group-item"><a class="nav-link" href="/EducationNotice">Education Notice</a></li>
              <li class="list-group-item"><a class="nav-link" href="/EducationNotice">Education Notice</a></li>
            </ul>
          </div>
        </div>

        <div class="col my-3 mx-2  ">
          <div class="card" style="width: 20rem;">
            <div class="card-header">
              <strong>Top Notice</strong>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><a class="nav-link" href="/EducationNotice">Education Notice</a></li>
              <li class="list-group-item"><a class="nav-link" href="/EducationNotice">Education Notice</a></li>
              <li class="list-group-item"><a class="nav-link" href="/EducationNotice">Education Notice</a></li>
              <li class="list-group-item"><a class="nav-link" href="/EducationNotice">Education Notice</a></li>
              <li class="list-group-item"><a class="nav-link" href="/EducationNotice">Education Notice</a></li>
              <li class="list-group-item"><a class="nav-link" href="/EducationNotice">Education Notice</a></li>
              <li class="list-group-item"><a class="nav-link" href="/EducationNotice">Education Notice</a></li>
            </ul>
          </div>
        </div>

        <div class="col  my-3 mx-2  ">
          <div class="card" style="width: 18rem;">
            <div class="card-header ">
              <strong>Popular Notice</strong>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><a class="nav-link" href="/EducationNotice">Education Notice</a></li>
              <li class="list-group-item"><a class="nav-link" href="/EducationNotice">Education Notice</a></li>
              <li class="list-group-item"><a class="nav-link" href="/EducationNotice">Education Notice</a></li>
              <li class="list-group-item"><a class="nav-link" href="/EducationNotice">Education Notice</a></li>
              <li class="list-group-item"><a class="nav-link" href="/EducationNotice">Education Notice</a></li>
              <li class="list-group-item"><a class="nav-link" href="/EducationNotice">Education Notice</a></li>
              <li class="list-group-item"><a class="nav-link" href="/EducationNotice">Education Notice</a></li>


            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid  my-2">
      <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

        <!-- Controls-->
        <!-- <div class="controls-center">
        <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
        <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fas fa-chevron-right"></i></a>
      </div> -->
        <!--/.Controls -->

        <!--Indicators-->
        <ol class="carousel-indicators">
          <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
          <li data-target="#multi-item-example" data-slide-to="1"></li>

        </ol>
        <!--/.Indicators-->

        <!--Slides-->
        <div class="carousel-inner" role="listbox">

          <!--First slide-->
          <div class="carousel-item active">

            <div class="col-md-3" style="float:left">
              <div class="card mb-2">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title text-center">Card title</h4>

                </div>
              </div>
            </div>

            <div class="col-md-3" style="float:left">
              <div class="card mb-2">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title text-center">JobNotice</h4>

                </div>
              </div>
            </div>

            <div class="col-md-3" style="float:left">
              <div class="card mb-2">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title text-center">GovermentNotice</h4>


                </div>
              </div>
            </div>

            <div class="col-md-3" style="float:left">
              <div class="card mb-2">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">EducationNotice</h4>


                </div>
              </div>
            </div>

          </div>
          <!--/.First slide-->

          <!--Second slide-->
          <div class="carousel-item">

            <div class="col-md-3" style="float:left">
              <div class="card mb-2">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">job notice</h4>

                </div>
              </div>
            </div>

            <div class="col-md-3" style="float:left">
              <div class="card mb-2">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title text-center">GovermentNotice</h4>

                </div>
              </div>
            </div>

            <div class="col-md-3" style="float:left">
              <div class="card mb-2">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(48).jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title text-center">bankNotice</h4>

                </div>
              </div>
            </div>

            <div class="col-md-3" style="float:left">
              <div class="card mb-2">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title text-center">EducationNotice</h4>

                </div>
              </div>
            </div>

            <!--/.Second slide-->



          </div>
          <!--/.Slides-->


        </div>

      </div>
    </div>
    <!-- last part -->
    <!-- <div class="controls-top">
        <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
        <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fas fa-chevron-right"></i></a>
      </div> -->




    <section class="bg-primary pt-3 mh-50">
      <div class="container">
        <div class="row">
          <div class="col-md-9 my-auto">
            <h2 class="text-uppercase text-white">
              <strong>
                <span class="get-noticed">Get Noticed</span> <br>
                Be remembered
              </strong>
            </h2>
            <div class="row">
              <div class="col-md-12">
                <a class="btn py-0 px-0" rel="noopener noreferrer" aria-label="Download Android App"
                  href="https://play.google.com/store/apps/details?id=com.merojob.merojobapp" target="_blank">
                  <img data-original="https://static.merojob.com/images/mobile/google.png" alt="Download Android App"
                    class="my-3 lazy" src="https://static.merojob.com/images/mobile/google.png">
                </a>
                <a class="btn py-0 px-0" href="https://itunes.apple.com/us/app/merojob-com/id1301256298?mt=8"
                  rel="noopener noreferrer" aria-label="Download iOS App" target="_blank">
                  <img data-original="https://static.merojob.com/images/mobile/apple.png" alt="Download iOS App"
                    class="m-3 lazy" src="https://static.merojob.com/images/mobile/apple.png">
                </a>
              </div>
            </div>
          </div>
          <div class="cold-md-3">
            <img class="lazy" data-original="https://static.merojob.com/images/mobile/mobile.png" alt="Mobile"
              src="https://static.merojob.com/images/mobile/mobile.png">

          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->



    <footer class="text-left text-lg-start  text-white bg-dark ">

      <section>
        <div class=" container-fluid  text-md-start mt-5 py-4 align-item ">

          <div class="row mt-3">

            <div class="col-md-4 col-lg-4 col-xl-3 mx-auto mb-4">


              <p class="text-justify">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate nostrum est quidem libero.
                Similique
                quisquam saepe debitis vel nesciunt quibusdam aliquid cupiditate! Voluptatum quos deleniti amet!
                Nesciunt
                exercitationem inventore iusto.
                Here you can use rows and columns to organize your footer content. Lorem ipsum
                dolor sit amet, consectetur adipisicing
              </p>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

              <h4 class="text-uppercase fw-bold mb-4">
                About Us
              </h4>
              <p>
                <a href="#!" class="text-reset">About Notice house</a>
              </p>
              <p>
                <a href="#!" class="text-reset"> </i>facebook</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Twitter</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Linkdin</a>
              </p>
              <p>
                <a href="#!" class="text-reset">feedback</a>
              </p>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

              <h4 class="text-uppercase fw-bold mb-4">
                information
              </h4>
              <p>
                <a href="#!" class="text-reset">how it works</a>
              </p>
              <p>
                <a href="#!" class="text-reset">FAQs</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Sitemap</a>
              </p>

            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 position">
              <!-- Links -->
              <h4 class="text-uppercase fw-bold mb-4">
                Support
              </h4>

              <p>
                <a href="#!" class="text-reset">Contact Us</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Advetise with us</a>
              </p>
              <p>
                <a href="#!" class="text-reset">privacy policy</a>
              </p>
              <p>
                <a href="#!" class="text-reset">terms of use</a>
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <!-- Links -->
              <h4 class="text-uppercase fw-bold mb-4 tex">
                Contact
              </h4>
              <p><i class="fas fa-home me-3"></i> Kathmandu Nepal</p>

              <p><i class="fas fa-phone me-3"></i> 9810300100</p>
              <p><i class="fas fa-phone me-3"></i> 9860000000</p>
              <p>
                <i class="fas fa-envelope me-3"></i>
                info@noticehome.com
              </p>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </div>
      </section>


      <div class="footer-sub  pt-2 pb-2 overflow-visible " style="background-color: rgb(15, 15, 15);">
        <div class="container text-white-50 overflow-visible">
          <div class="text-center footer-sub-div">
            <div class="mx-auto footer-arc " style="background-color: rgb(15, 15, 15);">
              <a href="#" class="p-2">
                <img src="https://static.merojob.com/images/logo/svg/mj_logo_icon_white.svg"
                  class="footer-brand-logo mb-2 lazy mt-3" alt="mj-icon-logo" style="width: 3rem;">
              </a>
            </div>
          </div>
        </div>

        <div class="container text-white-50 mt-md-0 mt-sm-4 mt-4 overflow-visible">
          <div class="row pt-2 pb-2 text-md-left text-center">
            <div class="col-md-5 col-sm-12 col-12">



              <!-- Facebook -->
              <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                  class="fab fa-facebook-f"></i></a>

              <!-- Twitter -->
              <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                  class="fab fa-twitter"></i></a>
              <!-- Instagram -->
              <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                  class="fab fa-instagram"></i></a>

              <!-- Linkedin -->
              <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                  class="fab fa-linkedin-in"></i></a>

              <!-- Github -->
              <a class="btn btn-outline-light btn-floating m-1 text-right" href="#!" role="button"><i
                  class="fab fa-github"></i></a>
            </div>
            <ul class="col-md-7 col-sm-12 col-12 text-md-right">

              <li class="list-inline-item">
                © 2021 All Rights with <a class="text-uppercase " href="/">Notice Home</a>
              </li>
            </ul>
          </div>
        </div>
      </div>

    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"></script>




</body>

</html>