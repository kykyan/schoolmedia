<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Freelancer - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
        <style>
            /* Full-width input fields */
            input[type=text], input[type=password] {
                width: 100%;
                padding: 15px;
                margin: 5px 0 22px 0;
                display: inline-block;
                border: none;
                background: #f1f1f1;
            }

            input[type=text]:focus, input[type=password]:focus {
                background-color: #ddd;
                outline: none;
            }

            /* Set a style for the submit button */
            .registerbtn {
                background-color: #04AA6D;
                color: white;
                padding: 16px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
                opacity: 0.9;
            }

            .registerbtn:hover {
                opacity: 1;
            }
        </style>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">Sistem Informasi Sekolah</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('logout') }}" class="btn btn-link" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Logout</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->

        <form method='post' action="{{ route('updateprofile', Auth::user()->id) }}">
            @method('patch')
            @csrf
            <div class="container" style="margin-top: 125px">
              <h1>Masukkan Biodata Anda</h1>
          
              <label><b>Nama</b></label>
              <input type="text" name="name" required value="{{ Auth::user()->name }}">
          
              <label><b>Alamat</b></label>
              <input type="text" name="address" required value="{{ Auth::user()->address }}">
              
              <label><b>No Telfon</b></label>
              <input type="text" name="phone" required value="{{ Auth::user()->phone }}">
              
              <label><b>Jenis Kelamin</b></label>
              <select class="form-control" style="margin-bottom: 25px" name="gender" required="required">
                  <option value="{{ Auth::user()->gender }}" selected>@if (Auth::user()->gender == 'P')
                      <p>Perempuan</p>
                  @else
                      <p>Laki-laki</p>
                  @endif</option>
                  <option value="L">Laki-laki</option>
                  <option value="P">Perempuan</option>
              </select>

              <label><b>Tempat Lahir</b></label>
              <input type="text" name="birthcity" required value="{{ Auth::user()->birthcity }}">
          
              <label>Tanggal Lahir</label>
              <input type="date" style="margin-bottom: 25px" class="form-control" name="birthdate"required="required" value="{{ Auth::user()->birthdate }}">

              <button type="submit" class="registerbtn">Update Data</button>
            </div>
          </form>

        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; Your Website 2021</small></div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/scripts.js') }}"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
