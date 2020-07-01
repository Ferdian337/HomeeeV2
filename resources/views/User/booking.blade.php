@extends ('layout')
   
  @section ('content')   


     <!-- TOP BAR -->
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="/homestay" class="nav-link">Homestay</a></li>
          <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
          <li class="nav-item active"><a href="/booking" class="nav-link">Booking</a></li>
          <li class="nav-item cta"><a href="#" data-toggle="modal" data-target="#ModalLogin" class="nav-link"><span>Login</span></a></li>
        </ul>
      </div>
    </div>
  </nav>
    <!-- END nav -->

    <div class="hero-wrap js-fullheight" style="background-image: url('user_bootstrap/images/bg_3.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Homestay</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Booking</h1>
          </div>
        </div>
      </div>
    </div>
  
  <?php
    $ApakahSudahLogin = "sudah";

    if ($ApakahSudahLogin == "belum") {
      ?>
      <section class="ftco-section">
        <div class="container">
          <h4 class="text-center">Oopppsss... Seems You Have Not Login Yet</h4>
          <h6 class="text-center">Login to See Your Booking List</h6>
        </div>
      </section>
      <?php
    } elseif ($ApakahSudahLogin == "sudah") {
      ?>
        <section class="ftco-section">
          <div class="container">
            <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Your Booked Homestay</h1>
          </div>

          <div class="row">
            <div class="col-lg-6">

              <!-- cardnya -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Ini Nama Homestay</h6>
                </div>
                <div class="card-body">
                  <img src="https://i.imgur.com/I86rTVl.jpg" class="img-fluid rounded mx-auto d-block" alt="Responsive image">
                  <hr>
                  <table class="table table-borderless">
                    <tr>
                      <th>Booking ID</th>
                      <td>: </td>
                      <td>123456789</td>
                    </tr>
                    <tr>
                      <th>Room Type</th>
                      <td>: </td>
                      <td>Suite</td>
                    </tr>
                    <tr>
                      <th>Check-in</th>
                      <td>: </td>
                      <td>12-06-2020</td>
                    </tr>
                    <tr>
                      <<th>Check-out</th>
                      <td>: </td>
                      <td>14-06-2020</td>
                    </tr>
                    <tr>
                      <th>Duration</th>
                      <td>: </td>
                      <td>2 Night(s)</td>
                    </tr>
                  </table>
                  <hr>
                 <a href="#" class="btn btn-primary btn-user btn-block">See Homestay Page</a>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <!-- Basic Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Ini Nama Homestay</h6>
                </div>
                <div class="card-body">
                  <img src="https://i.imgur.com/I86rTVl.jpg" class="img-fluid rounded mx-auto d-block" alt="Responsive image">
                  <hr>
                   <table class="table table-borderless">
                    <tr>
                      <th>Booking ID</th>
                      <td>: </td>
                      <td>123456789</td>
                    </tr>
                    <tr>
                      <th>Room Type</th>
                      <td>: </td>
                      <td>Suite</td>
                    </tr>
                    <tr>
                      <th>Check-in</th>
                      <td>: </td>
                      <td>12-06-2020</td>
                    </tr>
                    <tr>
                      <<th>Check-out</th>
                      <td>: </td>
                      <td>14-06-2020</td>
                    </tr>
                    <tr>
                      <th>Duration</th>
                      <td>: </td>
                      <td>2 Night(s)</td>
                    </tr>
                  </table>
                  <hr>
                 <a href="#" class="btn btn-primary btn-user btn-block">See Homestay Page</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Setiap 2 Card Harus Ada class Row dibawah biar satu baris hanya 2 card-->
          <div class="row">

            <div class="col-lg-6">
              <!-- Basic Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Ini Nama Homestay</h6>
                </div>
                <div class="card-body">
                  <img src="https://i.imgur.com/I86rTVl.jpg" class="img-fluid rounded mx-auto d-block" alt="Responsive image">
                  <hr>
                   <table class="table table-borderless">
                    <tr>
                      <th>Booking ID</th>
                      <td>: </td>
                      <td>123456789</td>
                    </tr>
                    <tr>
                      <th>Room Type</th>
                      <td>: </td>
                      <td>Suite</td>
                    </tr>
                    <tr>
                      <th>Check-in</th>
                      <td>: </td>
                      <td>12-06-2020</td>
                    </tr>
                    <tr>
                      <<th>Check-out</th>
                      <td>: </td>
                      <td>14-06-2020</td>
                    </tr>
                    <tr>
                      <th>Duration</th>
                      <td>: </td>
                      <td>2 Night(s)</td>
                    </tr>
                  </table>
                  <hr>
                 <a href="#" class="btn btn-primary btn-user btn-block">See Homestay Page</a>
                </div>
              </div>

            </div>
          </div>
        </div>
          </div>
        </section>


      <?php
    }
  ?>  
@endsection