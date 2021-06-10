<!DOCTYPE html>
<html lang="en">
<head>
    <title>Comic</title>
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
        <h2 align="center">Comic</h2>
        <div class="card text-white bg-secondary mb-3 style="max-width: 18rem;">
          <img src="storage/Recomended4.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Detektif Conan</h5>
            <p class="card-text"> Shinichi Kudo, seorang detektif SMA berusia 17 tahun yang biasanya membantu polisi memecahkan kasus, diserang oleh 2 anggota sindikat misterius ketika mengawasi sebuah pemerasan. Ia kemudian diberi minum racun misterius yang baru selesai dikembangkan untuk membunuhnya.</p>
          </div>
        </div>
        <div class="col-3">
            <div class="card border-primary mb-3">
              <div class="card-img-top">
                <img src="storage/kk.png" alt="" onclick="alert()" style="height: 180px; object-fit:contain; width: 100%">
              </div>
              <div class="card-body">
                <h5 class="card-title">Kariage Kun 42 (Terbit Ulang)</h5>
                <p> Masashi Ueda </p>
                Price : Rp.22.500
                <br>
                <br>
                <input type="button" value="Book" class="btn btn-primary">
              </div>
            </div>
          </div>
     <div class="col-3">
       <div class="card border-primary mb-3">
         <div class="card-img-top">
           <img src="storage/banana.png" alt="" onclick="alert()" style="height: 180px; object-fit:contain; width: 100%">
         </div>
         <div class="card-body">
           <h5 class="card-title">Banana Fish</h5>
           <p>Yoshida Akimi</p>
           Price : Rp.37.000
           <br>
           <br>
           <input type="button" value="Book" class="btn btn-primary">
         </div>
       </div>
     </div>
     <div class="col-3">
       <div class="card border-primary mb-3">
         <div class="card-img-top">
           <img src="storage/bird.png" alt="" onclick="alert()" style="height: 180px; object-fit:contain; width: 100%">
         </div>
         <div class="card-body">
           <h5 class="card-title">Birdmen</h5>
           <p>Yellow Tanabe</p>
           Price : Rp.35.600
           <br>
           <br>
           <input type="button" value="Book" class="btn btn-primary">
         </div>
       </div>
     </div>
     <div class="col-3">
       <div class="card border-primary mb-3">
         <div class="card-img-top">
           <img src="storage/conan.png" alt="" onclick="alert()" style="height: 180px; object-fit:contain; width: 100%">
         </div>
         <div class="card-body">
           <h5 class="card-title">Detektif Conan</h5>
           <p>Aoyama Gosho</p>
           Price : Rp.48.000
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
           <img src="storage/scram.png" alt="" onclick="alert()" style="height: 180px; object-fit:contain; width: 100%">
         </div>
         <div class="card-body">
           <h5 class="card-title">Scrambled</h5>
           <p>Rosalina Lintang</p>
           Price : Rp.36.000
           <br>
           <br>
           <input type="button" value="Book" class="btn btn-primary">
         </div>
       </div>
     </div>
     <div class="col-3">
       <div class="card border-primary mb-3">
         <div class="card-img-top">
           <img src="storage/love.png" alt="" onclick="alert()" style="height: 180px; object-fit:contain; width: 100%">
         </div>
         <div class="card-body">
           <h5 class="card-title">Lover’s Place</h5>
           <p>Saito Chiho</p>
           Price : Rp.25.400
           <br>
           <br>
           <input type="button" value="Book" class="btn btn-primary">
         </div>
       </div>
     </div>
     <div class="col-3">
       <div class="card border-primary mb-3">
         <div class="card-img-top">
           <img src="storage/star.png" alt="" onclick="alert()" style="height: 180px; object-fit:contain; width: 100%">
         </div>
         <div class="card-body">
           <h6 class="card-title">The Star and I</h6>
           <p>Ilana Tan</p>
           Price : Rp.79.000
           <br>
           <br>
           <input type="button" value="Book" class="btn btn-primary">
         </div>
       </div>
     </div>
     <div class="col-3">
        <div class="card border-primary mb-3">
          <div class="card-img-top">
            <img src="storage/ktj.png" alt="" onclick="alert()" style="height: 180px; object-fit:contain; width: 100%">
          </div>
          <div class="card-body">
            <h6 class="card-title">Kisah Tanah Jawa : Tikungan Maut</h6>
            <p> Bonaventura D. Genta DKK </p>
            Price : Rp.77.000
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