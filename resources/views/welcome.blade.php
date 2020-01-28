    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lobster:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Sigmar+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                background-color: #72b5b7;
            }
            h1 {
                font-family: 'Sigmar One';
                font-size: 55px;
                font-weight: 200;
            }
            table {
                font-family: 'Roboto Slab', serif;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <h1 style="text-align: center; margin-top: 70px;">Welcome To My Profile</h1>
            <div class="row">
              <div class="col-sm-2"></div>
              <div class="col-sm-3">
                <img style="width: 270px; height: 400px;" src="{{ ('img/formal.png ') }}">
              </div>
              <div class="col-sm-5">
               <table class="table table-borderless" style="margin-top: 70px;">
                  <tr>
                    <th>Nama Lengkap</th>
                    <th colspan="2">: Adhyaksa Ammar R</th>
                  </tr>
                  <tr>
                    <th>Tempat Tanggal Lahir</th>
                    <th colspan="2">: Sidoarjo, 14 Desember 1999</th>
                  </tr>
                  <tr>
                    <th>Bidang Keahlian</th>
                    <th colspan="2">: Teknologi Informasi & Komputer</th>
                  </tr>
                  <tr>
                    <th>NIM</th>
                    <th colspan="2">: 183140714111046</th>
                  </tr>
                  <tr>
                    <th>Peminatan</th>
                    <th colspan="2">: Software</th>
                  </tr>
                  <tr>
                    <th>Jenis Kelamin</th>
                    <th colspan="2">: Laki - Laki</th>
                  </tr>
                  <tr>
                    <th>Agama</th>
                    <th colspan="2">: Islam</th>
                  </tr>
              </table>
              </div>
              <div class="col-sm-2"></div>
            </div>
        </div>
        
    </body>
</html>
