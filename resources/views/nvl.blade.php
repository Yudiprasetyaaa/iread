<!DOCTYPE html>
<html lang="en">
<head>
    <title>Novel</title>
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
        <h2 align="center" >Novel</h2>
        <div class="card text-white bg-secondary mb-3 style="max-width: 18rem;">
          <img src="storage/Recomended1.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Konspirasi Alam Semesta</h5>
            <p class="card-text">Sempat dilema dan bingung harus melakukan apa, Ana pun membuat sebuah keputusan besar. Dia memutuskan untuk memperjuangkan cintanya bersama Juang. Dan itu jadi awal mulai kisah mereka dengan berbagai lika-liku yang mau tak mau harus dihadapi sendiri.</p>
          </div>
        </div>
     <div class="col-3">
       <div class="card border-primary mb-3">
         <div class="card-img-top">
           <img src="storage/kata.jpg" alt="" onclick="alert()" style="height: 180px; object-fit:contain; width: 100%">
         </div>
         <div class="card-body">
           <h5 class="card-title">Kata</h5>
           <p> Rintik Sedu</p>
           Price : Rp.99.000
           <br>
           <br>
           <input type="button" value="Book" class="btn btn-primary">
         </div>
       </div>
     </div>
     <div class="col-3">
       <div class="card border-primary mb-3">
         <div class="card-img-top">
           <img src="storage/bodo.jpg" alt="" onclick="alert()" style="height: 180px; object-fit:contain; width: 100%">
         </div>
         <div class="card-body">
           <h6 class="card-title">Sebuah Seni Untuk Bersikap Bodo Amat</h6>
           <p> Mark Manson</p>
           Price : Rp.67.000
           <br>
           <br>
           <input type="button" value="Book" class="btn btn-primary">
         </div>
       </div>
     </div>
     <div class="col-3">
       <div class="card border-primary mb-3">
         <div class="card-img-top">
           <img src="storage/biasa.png" alt="" onclick="alert()" style="height: 180px; object-fit:contain; width: 100%">
         </div>
         <div class="card-body">
           <h5 class="card-title">Orang-orang Biasa</h5>
           <p> Andrea Hirata</p>
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
           <img src="storage/11.png" alt="" onclick="alert()" style="height: 180px; object-fit:contain; width: 100%">
         </div>
         <div class="card-body">
           <h5 class="card-title">11.11</h5>
           <p>Fiersa Besari</p>
           Price : Rp.74.800
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
           <img src="storage/konspirasi.png" alt="" onclick="alert()" style="height: 180px; object-fit:contain; width: 100%">
         </div>
         <div class="card-body">
           <h5 class="card-title">Konspirasi Alam Semesta</h5>
           <p>Fiersa Besari</p>
           Price : Rp.63.700
           <br>
           <br>
           <input type="button" value="Book" class="btn btn-primary">
         </div>
       </div>
     </div>
     <div class="col-3">
       <div class="card border-primary mb-3">
         <div class="card-img-top">
           <img src="storage/l.png" alt="" onclick="alert()" style="height: 180px; object-fit:contain; width: 100%">
         </div>
         <div class="card-body">
           <h5 class="card-title">Lumiere Blanche</h5>
           <p>Cecillia Wang</p>
           Price : Rp.154.000
           <br>
           <br>
           <input type="button" value="Book" class="btn btn-primary">
         </div>
       </div>
     </div>
     <div class="col-3">
       <div class="card border-primary mb-3">
         <div class="card-img-top">
           <img src="storage/pet.png" alt="" onclick="alert()" style="height: 180px; object-fit:contain; width: 100%">
         </div>
         <div class="card-body">
           <h5 class="card-title">Pet Sematry</h5>
           <p>Stephen King</p>
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
           <img src="storage/cinta.png" alt="" onclick="alert()" style="height: 180px; object-fit:contain; width: 100%">
         </div>
         <div class="card-body">
           <h6 class="card-title">Cinta Kala Fajar (Another Dawn)</h6>
           <p>Sandra Brown</p>
           Price : Rp.92.000
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