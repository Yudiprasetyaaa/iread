<!DOCTYPE html>
<html lang="en">
<head>
    <title>Biography</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        body {
            background-image: url("storage/bg1.png");
            background-repeat: no-repeat;
            background-size:cover
        }
      </style>
</head>
<body>
    @extends('template')

    @section('content')
    <div class="row">
        <h2 align="center">Biography</h2>
        <div class="card text-white bg-secondary mb-3 style="max-width: 18rem;">
          <img src="storage/Recomended6.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Alex Ferguson, Autobiografi Saya</h5>
            <p class="card-text">Selama seperempat abad terakhir, telah terjadi perubahan-perubahan besar di Manchester United, yang saat ini telah menjadi kekuatan olahraga global. Satu-satunya yang tidak berubah hanya sang Manajer, kualitas timnya, dan kelangsungan keberhasilan klub itu, termasuk meraih gelar juara Liga Champions Eropa pada 2008 dan Liga Premier Inggris pada 2013.</p>
          </div>
        </div>
        <div class="row">
            <div class="col-3">
              <div class="card border-primary mb-3">
                <div class="card-img-top">
                  <img src="storage/jokowi.png" alt="" onclick="alert()" style="height: 180px; object-fit:contain; width: 100%">
                </div>
                <div class="card-body">
                  <h6 class="card-title">Jokowi Menuju Cahaya</h6>
                  <p>Alberthiene Endah</p>
                  Price : Rp.149.000
                  <br>
                  <br>
                  <input type="button" value="Book" class="btn btn-primary">
                </div>
              </div>
            </div>
            <div class="col-3">
                <div class="card border-primary mb-3">
                  <div class="card-img-top">
                    <img src="storage/bapak.png" alt="" onclick="alert()" style="height: 180px; object-fit:contain; width: 100%">
                  </div>
                  <div class="card-body">
                    <h6 class="card-title">Bapakku Indonesia</h6>
                    <p>Kang Maman</p>
                    Price : Rp.60.800
                    <br>
                    <br>
                    <input type="button" value="Book" class="btn btn-primary">
                  </div>
                </div>
              </div>
     <div class="col-3">
       <div class="card border-primary mb-3">
         <div class="card-img-top">
           <img src="storage/teresa.png" alt="" onclick="alert()" style="height: 180px; object-fit:contain; width: 100%">
         </div>
         <div class="card-body">
           <h6 class="card-title">Bunda Teresa, Inspirasi dari Seorang Perempuan Penyayang</h6>
           <p>Anom Whani Wicaksana</p>
           Price : Rp.39.000
           <br>
           <br>
           <input type="button" value="Book" class="btn btn-primary">
         </div>
       </div>
     </div>
     <div class="col-3">
       <div class="card border-primary mb-3">
         <div class="card-img-top">
           <img src="storage/ciputra.png" alt="" onclick="alert()" style="height: 180px; object-fit:contain; width: 100%">
         </div>
         <div class="card-body">
           <h5 class="card-title"> Ciputra: The Entrepreneur</h5>
           <p>Alberthiene Endah</p>
           Price : Rp.118.000
           <br>
           <br>
           <input type="button" value="Book" class="btn btn-primary">
         </div>
       </div>
     </div>
     <div class="row">
     <div class="col-3">
       <div class="card border-primary mb-3">
         <div class="card-img-top">
           <img src="storage/heavier.png" alt="" onclick="alert()" style="height: 180px; object-fit:contain; width: 100%">
         </div>
         <div class="card-body">
           <h5 class="card-title">Heavier than Heaven</h5>
           <p>Charles R Cross</p>
           Price : Rp.120.000
           <br>
           <br>
           <input type="button" value="Book" class="btn btn-primary">
         </div>
       </div>
     </div>
     <div class="col-3">
       <div class="card border-primary mb-3">
         <div class="card-img-top">
           <img src="storage/etos.png" alt="" onclick="alert()" style="height: 180px; object-fit:contain; width: 100%">
         </div>
         <div class="card-body">
           <h5 class="card-title">Johnny Darmawan Cerita tentang Etos Bisnis</h5>
           <p>Herman Effendi</p>
           Price : Rp.89.000
           <br>
           <br>
           <input type="button" value="Book" class="btn btn-primary">
         </div>
       </div>
     </div>
     <div class="col-3">
       <div class="card border-primary mb-3">
         <div class="card-img-top">
           <img src="storage/steve.png" alt="" onclick="alert()" style="height: 180px; object-fit:contain; width: 100%">
         </div>
         <div class="card-body">
           <h6 class="card-title">101 Cara Kreatif ala Steve Jobs</h6>
           <p>Saad Pamungkas</p>
           Price : Rp.88.500
           <br>
           <br>
           <input type="button" value="Book" class="btn btn-primary">
         </div>
       </div>
     </div>
     <div class="col-3">
        <div class="card border-primary mb-3">
          <div class="card-img-top">
            <img src="storage/alex.png" alt="" onclick="alert()" style="height: 180px; object-fit:contain; width: 100%">
          </div>
          <div class="card-body">
            <h6 class="card-title">Alex Ferguson, Autobiografi Saya</h6>
            <p>Alex Ferguson</p>
            Price : Rp.125.000
            <br>
            <br>
            <input type="button" value="Book" class="btn btn-primary">
          </div>
        </div>
      </div>
     
    </div>
    </div>
    


    @endsection
</body>
</html>