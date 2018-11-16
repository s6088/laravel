@extends('layouts.home')


@section('content1')



  <!--------Dropdown Navbar Start------------>

  <div id="hide-on-mbl">
    <nav id="Navbar" class="navbar navbar-main fixed-top navbar-expand-lg navbar-light headroom">
      <div class="container">

        <!--left upper icon-->
        <a style="padding-top: 5px;" class="navbar-brand mr-lg-5" href="/">
          <img src="storage/res/whitelogo.png" style="height:50px;">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbar_global">

          <!--mobile view navbar top-->
          <div class="navbar-collapse-header">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="./index.html">
                  <img src="storage/colorlogo.png">
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button style="color:red;" type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global"
                  aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>


          <!--menu bars-->
          <ul class="navbar-nav navbar-nav-hover align-items-lg-center ml-lg-auto" style="padding-top: 15px;">


            <li class="nav-item dropdown">
              <a href="index.html" style="color:white;">
                Home
              </a>
            </li>
            &nbsp &nbsp &nbsp &nbsp
            <li class="nav-item dropdown">
              <a href="#news" style="color:white;">
                News
              </a>
            </li>
            &nbsp &nbsp &nbsp &nbsp
            <li class="nav-item dropdown">
              <a href="#event" style="color:white;">
                Event
              </a>
            </li>
            &nbsp &nbsp &nbsp &nbsp
            <li class="nav-item dropdown" style="color:white;">
              <a href="#research" style="color:white;">
                Research
              </a>
            </li>
            &nbsp &nbsp &nbsp &nbsp
            <li class="nav-item dropdown">
              <a href="#clubs" style="color:white;">
                Clubs
              </a>
            </li>



          </ul>


        </div>
      </div>
    </nav>

  </div>


  <!----------------Dropdown End-------------->









  <header class="header-global">
    <nav class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom">
      <div class="container">

        <!--left upper icon-->
        <a class="navbar-brand mr-lg-5" href="./index.html">
          <img src="storage/res/whitelogo.png" style="height:50px;">
        </a>


        <!--collapsable nav item mobile view-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>



        <!--menu-->
        <div class="navbar-collapse collapse" id="navbar_global">

          <!--mobile view navbar top-->
          <div class="navbar-collapse-header">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="./index.html">
                  <img src="storage/res/colorlogo.png">
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global"
                  aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>


          <!--menu bars-->
          <ul class="navbar-nav navbar-nav-hover align-items-lg-center ml-lg-auto">

            <li class="nav-item dropdown">
              <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
                <i class="ni ni-collection d-lg-none"></i>
                <span class="nav-link-inner--text">Academic</span>
              </a>
              <div class="dropdown-menu">
                <a href="#" class="dropdown-item">Programms</a>
                <a href="#" class="dropdown-item">Admission</a>
                <a href="#" class="dropdown-item">Curriculam</a>
                <a href="#" class="dropdown-item">Academic Calender</a>
              </div>
            </li>

            <li class="nav-item dropdown">
              <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
                <i class="ni ni-collection d-lg-none"></i>
                <span class="nav-link-inner--text">People</span>
              </a>
              <div class="dropdown-menu">
                <a href="#" class="dropdown-item">Faculty</a>
                <a href="#" class="dropdown-item">Alumni</a>
                <a href="#" class="dropdown-item">Student</a>
                <a href="#" class="dropdown-item">Stuff</a>
              </div>
            </li>

            <li class="nav-item dropdown">
              <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
                <i class="ni ni-collection d-lg-none"></i>
                <span class="nav-link-inner--text">Research</span>
              </a>
              <div class="dropdown-menu">
                <a href="#" class="dropdown-item">Research Groups</a>
                <a href="#" class="dropdown-item">Publications</a>
              </div>
            </li>

            <li class="nav-item dropdown">
              <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
                <i class="ni ni-collection d-lg-none"></i>
                <span class="nav-link-inner--text">Announcement</span>
              </a>
              <div class="dropdown-menu">
                <a href="#" class="dropdown-item">Notice Board</a>
                <a href="#" class="dropdown-item">News & Event</a>
              </div>
            </li>


          </ul>


        </div>


      </div>
    </nav>

  </header>














  <main>


    <!--login form-->
    <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
      <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card bg-secondary shadow border-0">
              <div class="card-body px-lg-5 py-lg-5">
                <div class="text-center text-muted mb-4">
                  <small>Sign in with credentials</small>
                </div>
                <form role="form">
                  <div class="form-group mb-3">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                      </div>
                      <input class="form-control" placeholder="Email" type="email">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                      </div>
                      <input class="form-control" placeholder="Password" type="password">
                    </div>
                  </div>
                  <div class="custom-control custom-control-alternative custom-checkbox">
                    <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                    <label class="custom-control-label" for=" customCheckLogin">
                      <span>Remember me</span>
                    </label>
                  </div>
                  <div class="text-center">
                    <button type="button" class="btn btn-primary my-4">Sign in</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--header-->
    <div class="position-relative" >

      <section class="section section-lg section-hero section-shaped">


        <!-- Background vedio -->
        <div class="shape" style="background:#ffffff;">
          <video autoplay="autoplay" muted="muted" loop="loop" src="storage/res/ccc.mp4" style="width: 100%;"></video>
        </div>

        <!-- vedio overlay-->
        <div class="container shape-container d-flex align-items-center py-lg neri" >
          <div class="col px-0">
            <div class="row align-items-center justify-content-center">
              <div class="col-lg-6 text-center">
                <img src="storage/res/whitelogo.png" style="width: 200px;" class="img-fluid">
                <h3 class="lead text-white;" style="color:white">welcome to csejnu</h3>
                <div class="btn-wrapper mt-5">
                  <a href="/login"><button type="button" class="btn btn-lg btn-orange mb-3 mb-sm-0" style="width: 250px;" data-toggle="modal"
                    >login</button>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </section>
    </div>








    <!------------------notice board---------------->

    <section class="section section-components" style="margin-top:-80px ; background: whitesmoke !important;">

      <h2 class="section-title">CSEJNU Today</h2>
      <h4 class="section-sub-title">A thriving community of
        creative and accomplished people from around the world</h4>



      <div class="container">

        <div class="revealOnScroll row" data-animation="fadeInUp">


          <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12" style="padding-top: 10px">
            
            <div class="contain">
              <a href="#">
                <img src="storage/np/a.jpg" alt="Notebook" style="width:100%;">
                <div class="content">
                  <h3 style="text-align: center;">5th Batch Rag Day!!</h3>
                  <p style="text-align: center;">Last day in BSc Life!</p>
                </div>
              </a>
            </div>


            <div class="row justify-content-center" style="padding-top: 10px;">

              <div class="col-sm-6 " style="padding-top: 10px">

                <div class="news-card card">
                  <div class="news-img">
                    <img class="card-img-top" src="storage/np/b.jpg" alt="news Image">
                  </div>

                  <div class="card-body">
                    <a href="#" class="card-link news-link">Forensic image reconstruction based on efficient
                      morphological operational model</a>

                  </div>
                </div>

              </div>



              <div class="col-sm-6" style="padding-top: 10px">

                <div class="news-card card">
                  <div class="news-img">
                    <img class="card-img-top" src="storage/np/c.jpg" alt="news Image">
                  </div>

                  <div class="card-body">
                    <a href="#" class="card-link news-link">CSE Champion in Inter Departtment Cricket Tournament ,
                      Jagannath University</a>

                  </div>
                </div>

              </div>

            </div>




          </div>



          <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12" style="padding-top: 10px">

            <div class="card example-1 scrollbar-morpheus-den">

              <div class="card-body">

                <h2 style="color: #172b4d;"><i style="font-size:30px" class="fa">&#xf1ea;</i><b> Latest News</b></h2>

                @foreach ($notices as $notice)
                <article class="event">
    
                  <div class="event-desc">
                    <h4 class="event-desc-header">{{$notice->title}}</h4>
                    <p class="event-desc-detail"><span class="event-desc-time"></span>Posted on {{$notice->created_at}} by {{$notice->user->name}}</p>
                    <a href="notices/{{$notice->id}}" target="_blank"
                      class="btn btn-default btn-sm">Details</a>
                  </div>
    
                </article>
                @endforeach


              </div>
            </div>


          </div>

        </div>

      </div>

      <br><br>
      <div class="container-fluid">
        <div class="row justify-content-center">
          <a href="/notices"><button href="" class="btn more-btn">More News</button> </a>
        </div>
      </div>
    </section>



















    <!---------------Event-------------------->

    <section class="section section-components" style="margin-top: -60px;">

      <h2 class="section-title"><b>CSEJnU Events<b></h2>
      <h4 class="section-sub-title">What's happening on our campus!</h5>
        <br><br>
        <div class="container-fluid">

          <div class="revealOnScroll row justify-content-center" data-animation="fadeInUp">

            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">

              <div class="event-card card">
                <div class="event-img">
                  <img class="card-img-top" src="storage/ep/a.jpg" alt="event Image">
                </div>

                <div class="date">
                  <span class="month">Oct</span>
                  <span class="day">2</span>
                </div>

                <div class="card-body">
                  <p class="tag">Sports Event</p>
                  <h5><a href="#">Sports Day!</a></h5>
                  <p style="margin-bottom: 0;display: block;color: #000;">On 9 AM </p>
                </div>
              </div>

            </div>

            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">

              <div class="event-card card">
                <div class="event-img">
                  <img class="card-img-top" src="storage/ep/b.jpg" alt="event Image">
                </div>

                <div class="date">
                  <span class="month">Oct</span>
                  <span class="day">2</span>
                </div>

                <div class="card-body">
                  <p class="tag">Programming Contest</p>
                  <h5><a href="#">Intra Dept. Programming Contest</a></h5>
                  <p style="margin-bottom: 0;display: block;color: #000;">On 8:30 AM </p>
                </div>
              </div>

            </div>

            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">

              <div class="event-card card">
                <div class="event-img">
                  <img class="card-img-top" src="storage/ep/c.jpg" alt="event Image">
                </div>

                <div class="date">
                  <span class="month">sep</span>
                  <span class="day">28</span>
                </div>

                <div class="card-body">
                  <p class="tag">SEminer</p>
                  <h5><a href="#">Seminer on LFR</a></h5>
                  <p style="margin-bottom: 0;display: block;color: #000;">On 10 AM </p>
                </div>
              </div>

            </div>

            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">

              <div class="event-card card">
                <div class="event-img">
                  <img class="card-img-top" src="storage/ep/d.jpg" alt="event Image">
                </div>

                <div class="date">
                  <span class="month">sep</span>
                  <span class="day">25</span>
                </div>

                <div class="card-body">
                  <p class="tag">Seminer</p>
                  <h5><a href="#">Seminer on Machine Learning and AI</a></h5>
                  <p style="margin-bottom: 0;display: block;color: #000;">On 9 AM </p>
                </div>
              </div>

            </div>

          </div>
          <br><br>


        </div>

        <br>
        <div class="container-fluid">
          <div class="row justify-content-center">
            <button class="btn more-btn">More Events</button>
          </div>
        </div>


    </section>












    <!----------------research-------------->
    <section class="section" style="margin-top: -60px;">

      <h2 class="section-title">CSEJnU Research</h2>
      <h4 class="section-sub-title">csejnu research for a
        better world</h4>

      <br><br>
      <div class="container-fluid pl-5">

        <div class=" revealOnScroll row justify-content-center" data-animation="fadeInUp">

          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">

            <div class="research-card card">
              <div class="research-img">
                <img class="card-img-top" src="storage/res/res1.jpg" alt="Research Image">
              </div>

              <div class="card-body">
                <a href="#" class="card-link research-link">Forensic image reconstruction based on efficient
                  morphological operational model</a>
                <br> <br>
                <h5 class="card-title">Sajib Bhawal and
                  Mehnaz Tabassum</h5>
              </div>
            </div>

          </div>

          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">

            <div class="research-card card">
              <div class="research-img">
                <img class="card-img-top" src="storage/res/res2.jpg" alt="Research Image">
              </div>

              <div class="card-body">
                <a href="#" class="card-link research-link">Periodic activity monitoring using radio frequency tag
                  arrays</a>
                <br><br>
                <h5 class="card-title">Md. Amirul Islam,
                  Sajal Halder and Uzzal Kumar Acharjee and Md Ashraf Uddin</h5>

              </div>
            </div>

          </div>

          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">

            <div class="research-card card">
              <div class="research-img">
                <img class="card-img-top" src="storage/res/res3.jpg" alt="Research Image">
              </div>

              <div class="card-body">

                <a href="#" class="card-link research-link">Cricrate: A cricket match conduction and player
                  evaluation framework</a>
                <br><br>
                <h5 class="card-title">Md Ashraf Uddin,
                  Mahmudul Hasan, Sajal Halder, Sajeeb Ahamed and Uzzal Kumar Acharjee</h5>
              </div>
            </div>

          </div>

          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">

            <div class="research-card card">
              <div class="research-img">
                <img class="card-img-top" src="storage/res/res4.jpg" alt="Research Image">
              </div>

              <div class="card-body">
                <a href="#" class="card-link research-link">An efficient sentiment mining approach on social edia
                  networks</a>
                <br><br>
                <h5 class="card-title">Md. Al-Amin, Md.
                  Amirul Islam, Sajal Halder, Md. Ashraf Uddin and Uzzal Kumar Acharjee</h5>

              </div>
            </div>

          </div>

        </div>
        <br><br>
        <div class="container-fluid">
          <div class="row justify-content-center">
            <button class="btn more-btn">More About Research</button>
          </div>
        </div>


      </div>














    </section>






  </main>






  <!-----------CHAIRMAN SIR-------------->
  <div style="height:550px;">
    <figure class="snip1529" style="margin-left:0px">
      <img class="img-fluid" style="width:100%;max-height:600px;min-height:400px;" src="storage/img/back.jpg">
      <figcaption>
        <h3 style="padding:25px 600px 25px;">Department of<br> CSE</h3>
      </figcaption>


      <div class="hover">
        <img src="storage/img/sir.jpg" class="rounded-circle" style="height:150px;width:150px;">

        <p style="padding-left:5px;text-align:center;font-size: 20px;">
          “Jagannath University has given me the freedom to explore different disciplines
          and fields of engineering<br>and it has also given me a place to better understand myself.”
        </p>
        <h3 style="text-align: center;color:#bcaaa4;"><b> Dr. Uzzal Kumar Acharjee</b></h3>
        <p style="text-align: center;"> Chairman <br> Dept. of CSE<br>Jagannath University</p>
      </div>

      <a href="#"></a>
    </figure>

  </div>



  <!-----------CHAIRMAN SIR SECTION END-------------->







  <!------------Parallax------------->

  <div>
    <div class="bgimg-2">
    </div>


    <!------------------Life At CSEJNU--------------->

    <div style="color: #000;background-color:whitesmoke;text-align:center;padding:40px 30px;text-align: justify;">
      <h2 class="section-title">Life at CSEJNU</h2>
      <h4 class="section-sub-title">A thriving community of
        creative and accomplished people from around the world</h4>


      <br><br>
      <div class="container-fluid">
        <div class="revealOnScroll row" data-animation="fadeInUp">
          <div class="col-md-4 ">
            <img src="storage/img/research.jpg" style="width:100%;height:230px;">
            <h3 style="color:black;padding-top:20px;padding-left:5px;"><b>Student Life</b></h3>
            <p style="padding-left:5px;padding-right:5px;">A residential campus with diverse housing, exceptional
              dining, health care and over 600 student
              organizations</p>
            <b><a href="#" style="padding-left;5px;padding-right:5px;">Student Affairs ></a></b>

            <br><br>
          </div>

          <div class="col-md-4">

            <img src="storage/img/b.jpg" style="width:100%;height:230px;">
            <h3 style="color:black;padding-top:20px;padding-left:5px;"><b>Programing Club</b></h3>
            <p style="padding-left:5px;padding-right:5px;">A rich tradition of fostering creativity and a vibrant arts
              district on campus</p>
            <b> <a href="#" style="padding-left:5px;padding-right:5px;">Contest ></a></b>

            <br><br>
          </div>
          <div class="col-md-4">

            <img src="storage/img/a.jpg" style="width:100%;height:230px;">
            <h3 style="color:black;padding-top:20px;padding-left:5px;"><b>Athletics</b></h3>
            <p style="padding-left:5px;padding-right:5px;">36 varsity sports, 32 club sports and state-of-the-art
              recreational facilities and fitness programs</p>
            <b><a href="#" style="padding-left:5px;padding-right:5px;">Go CSE ></a></b>

            <br>
          </div>

        </div>
        <!--</div>  -->

      </div>
      <br><br>
      <div class="container-fluid">
        <div class="row justify-content-center">
          <button class="btn more-btn">More About Us</button>
        </div>
      </div>
    </div>






    <div class="bgimg-4">
    </div>


    <!----------------------Achievement----------------->

    <section class="section section-shaped back-achivement ">

      <div class="container py-md">

        <div class="row justify-content-between align-items-center">

          <!--left words-->
          <div class="col-lg-5 mb-5 mb-lg-0">
            <h1 class="revealOnScroll " data-animation="fadeInLeft" style="color:#97da00;font-size:60px;">Our Inspiring</h1>
            <h1 class="revealOnScroll " data-animation="fadeInLeft1" style="color:#97da00;font-size:40px;">People</h1>
            <p class="revealOnScroll text-black mt-4" data-animation="fadeInLeft2">We remember the teachers who opened
              our minds, encouraged us to believe in
              ourselves and helped shape our futures by inspiring us to turn talent and curiosity into achievement.</p>
          </div>

          <!--img-->
          <div class="col-lg-7 mb-lg-auto">
            <div class="rounded shadow-lg overflow-hidden ">
              <div id="carousel_example" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carousel_example" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel_example" data-slide-to="1" class=""></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="img-fluid" src="storage/res/ach1.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="img-fluid" src="storage/res/ach2.jpg" alt="Second slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carousel_example" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel_example" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
        </div>

      </div>

      <br><br>
      <div class="container-fluid">
        <div class="row justify-content-center">
          <button class="btn more-btn">More Achievement</button>
        </div>
      </div>
    </section>







    <div class="bgimg-1">
    </div>


  </div>



  <footer class="footer" style="padding-top: 15px">





    <div class="container-fluid hill">

      <div class="container ">
        <!--icon and social links-->
        <div class="row row-grid align-items-center my-md" style="margin-bottom:4%">

          <!--icon-->
          <div class="col-md-6">
            <img class="img-fluid" src="storage/res/csejnu.png" alt="csejnu" style="height:170px;">
          </div>
          <div class="col-md-6" style="margin-top:3%">
            <!--social links-->
            <div class="container">
              <div class="text-lg-center btn-wrapper">
                <a href="#" target="" class="btn-social btn-facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" target="" class="btn-social btn-youtube"><i class="fa fa-youtube-play"></i></a>
                <a href="#" target="" class="btn-social btn-reddit"><i class="fa fa-envelope"></i></a>
                <a href="#" target="" class="btn-social btn-twitter"><i class="fa fa-twitter"></i></a>

              </div>

              <div class="text-lg-center btn-wrapper" style="margin-top:30px;">
                <h6 class="text-white"><em aria-hidden="true" class="fa fa-phone"></em>&nbsp +880174282028</h6>
              </div>



            </div>
          </div>


        </div>
        <!--links and vedios-->
        <div class="row align-items-center justify-content-md-between">
          <div class="row container">


            <!--first link list-->
            <div class="col-md-3" style="margin-bottom: 1em;">
              <button class="accordion footql" style="color: white; margin-bottom: 1em;display: block;font-size: 14px;letter-spacing: .5px;font-weight: 700;
              position: relative;line-height: 1.3;font-family: arial;">Quick Links</button>
              <div class="footer-panel">

                <!--link list-->

                <ul class="list-unstyled footl">
                  <li class="footl" style="margin-bottom: 1em;">
                    <a class="footl" href="#"style="font-family: inherit;display: inline-block;padding: 7px 0;border: 0;
                    font-size: 14px;text-decoration: none;
                    vertical-align: baseline;color:#ccc;font-weight:50;">Apply</a>
                  </li>
                  <li style="margin-bottom: 1em;">
                    <a href="#" style="font-family: inherit;display: inline-block;padding: 7px 0;border: 0;
                    font-size: 14px;text-decoration: none;
                    vertical-align: baseline;color:#ccc;font-weight:50;">Library</a>
                  </li>
                  <li style="margin-bottom: 1em;">
                    <a href="#" style="font-family: inherit;display: inline-block;padding: 7px 0;border: 0;
                    font-size: 14px;text-decoration: none;
                    vertical-align: baseline;color:#ccc;font-weight:50;">Lectures</a>
                  </li>
                  <li style="margin-bottom: 1em;">
                    <a href="#" style="font-family: inherit;display: inline-block;padding: 7px 0;border: 0;
                    font-size: 14px;text-decoration: none;
                    vertical-align: baseline;color:#ccc;font-weight:50;">Clubs</a>
                  </li>
                  <li style="margin-bottom: 1em;">
                    <a href="#" style="font-family: inherit;display: inline-block;padding: 7px 0;border: 0;
                    font-size: 14px;text-decoration: none;
                    vertical-align: baseline;color:#ccc;font-weight:50;">Office</a>
                  </li>
                </ul>
              </div>
            </div>

            <!--second link list-->
            <div class="col-md-3" style="margin-bottom: 1em;">
              <button class="accordion footql" style="color: white; margin-bottom: 1em;">Info</button>
              <div class="footer-panel">


                <!--link list-->

                <ul class="list-unstyled footl">
                  <li style="margin-bottom: 1em;">
                    <a href="#" style="font-family: inherit;display: inline-block;padding: 7px 0;border: 0;
                    font-size: 14px;text-decoration: none;
                    vertical-align: baseline;color:#ccc;font-weight:50;">Research</a>
                  </li>
                  <li style="margin-bottom: 1em;">
                    <a class="#" href="#" style="font-family: inherit;display: inline-block;padding: 7px 0;border: 0;
                    font-size: 14px;text-decoration: none;
                    vertical-align: baseline;color:#ccc;font-weight:50;">CP</a>
                  </li>
                  <li style="margin-bottom: 1em;">
                    <a href="#" style="font-family: inherit;display: inline-block;padding: 7px 0;border: 0;
                    font-size: 14px;text-decoration: none;
                    vertical-align: baseline;color:#ccc;font-weight:50;">Alumni</a>
                  </li>
                  <li style="margin-bottom: 1em;">
                    <a href="#" style="font-family: inherit;display: inline-block;padding: 7px 0;border: 0;
                    font-size: 14px;text-decoration: none;
                    vertical-align: baseline;color:#ccc;font-weight:50;">Community</a>
                  </li>
                  <li style="margin-bottom: 1em;">
                    <a href="#" style="font-family: inherit;display: inline-block;padding: 7px 0;border: 0;
                    font-size: 14px;text-decoration: none;
                    vertical-align: baseline;color:#ccc;font-weight:50;">Campus Life</a>
                  </li>
                </ul>
              </div>
            </div>

            <!--vedio-->
            <div class="col-md-6" style="margin-top: 1em;">
              <a href="#" class="getDirection" style="margin-left: 1em;"><em aria-hidden="true" class="fa fa-map-marker getDirection"></em>
                &nbsp Get directions</a>

              <div class=" container embed-responsive embed-responsive-4by3">
                <video autoplay="autoplay" muted="muted" loop="loop" class="embed-responsive-item">
                  <source src="storage/res/footer.mp4" type="video/mp4">
                </video>
              </div>
              <p class="text-white" style="font-size:12px;">5th floor,New Academic Building, Jagannath University</p>
              <p class="text-white" style="font-size:11px;">9-10 Chittaranjan Avenue, Dhaka 1100</p>
            </div>

          </div>



        </div>
      </div>


    </div>






  </footer>


  <div class="container-fluid">
    <div class="row align-items-center footer-black" style="background:#000; height:75px; padding: 2px; text-align: center;">
      <br>
      <div class="col-md-6">
        <div class="copyright " style="color:#fff">
          &copy; 2018
          <a href="#" target="">circle</a>
        </div>
      </div>

      <div class="col-md-6">
        <ul class="nav nav-footer justify-content-center">
          <li class="nav-item">
            <a href="#" class="nav-link" target="">csejnu</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link" target="">About Us</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link" target="">Blog</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link" target="">License</a>
          </li>
        </ul>
      </div>
    </div>
  </div>



  <script src="js/jquery.js"></script>
  <script src="js/sadia.js"></script>










@endsection