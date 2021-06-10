<!DOCTYPE html>
<html lang="en">
<head>
    <title>Anthology</title>
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
        <h2 align="center">Anthology</h2>
        <div class="card text-white bg-secondary mb-3 style="max-width: 18rem;">
          <img src="storage/Recomended5.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Kim Ji Yeong</h5>
            <p class="card-text">Kim Ji-yeong adalah mahasiswi yang tidak pernah direkomendasikan dosen untuk pekerjaan magang di perusahaan ternama, karyawan teladan yang tidak pernah mendapat promosi, dan istri yang melepaskan karier serta kebebasannya demi mengasuh anak.</p>
          </div>
        </div>
        <div class="row">
            <div class="col-3">
              <div class="card border-primary mb-3">
                <div class="card-img-top">
                  <img src="storage/TA.png" alt="" onclick="alert()" style="height: 180px; object-fit:contain; width: 100%">
                </div>
                <div class="card-body">
                  <h6 class="card-title">The Art Of Restaurant Review</h6>
                  <p> Kevindra P Soemantri</p>
                  Price : Rp.70.000
                  <br>
                  <br>
                  <input type="button" value="Book" class="btn btn-primary">
                </div>
              </div>
            </div>
            <div class="col-3">
                <div class="card border-primary mb-3">
                  <div class="card-img-top">
                    <img src="storage/cc.png" alt="" onclick="alert()" style="height: 180px; object-fit:contain; width: 100%">
                  </div>
                  <div class="card-body">
                    <h6 class="card-title">Champion! New Edition</h6>
                    <p> Darmadi Darmawangsa</p>
                    Price : Rp.88.800
                    <br>
                    <br>
                    <input type="button" value="Book" class="btn btn-primary">
                  </div>
                </div>
              </div>
     <div class="col-3">
       <div class="card border-primary mb-3">
         <div class="card-img-top">
           <img src="storage/masih.png" alt="" onclick="alert()" style="height: 180px; object-fit:contain; width: 100%">
         </div>
         <div class="card-body">
           <h5 class="card-title">Masih Ingatkah Kau Jalan Pulang</h5>
           <p>Sapardi Djoko Damono & Rintik Sedu</p>
           Price : Rp.72.000
           <br>
           <br>
           <input type="button" value="Book" class="btn btn-primary">
         </div>
       </div>
     </div>
     <div class="col-3">
       <div class="card border-primary mb-3">
         <div class="card-img-top">
           <img src="storage/minta.png" alt="" onclick="alert()" style="height: 180px; object-fit:contain; width: 100%">
         </div>
         <div class="card-body">
           <h5 class="card-title">Buku Minta Dibanting</h5>
           <p>Rintik Sedu</p>
           Price : Rp.63.000
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
           <img src="storage/prob.png" alt="" onclick="alert()" style="height: 180px; object-fit:contain; width: 100%">
         </div>
         <div class="card-body">
           <h5 class="card-title"> Lagi Probation</h5>
           <p>Samuel Ray</p>
           Price : Rp.98.000
           <br>
           <br>
           <input type="button" value="Book" class="btn btn-primary">
         </div>
       </div>
     </div>
     <div class="col-3">
       <div class="card border-primary mb-3">
         <div class="card-img-top">
           <img src="storage/kim.png" alt="" onclick="alert()" style="height: 180px; object-fit:contain; width: 100%">
         </div>
         <div class="card-body">
           <h5 class="card-title"> Kim Ji Yeong </h5>
           <p>Cho Nam Joo</p>
           Price : Rp.46.400
           <br>
           <br>
           <input type="button" value="Book" class="btn btn-primary">
         </div>
       </div>
     </div>
     <div class="col-3">
       <div class="card border-primary mb-3">
         <div class="card-img-top">
           <img src="storage/perjamuan.png" alt="" onclick="alert()" style="height: 180px; object-fit:contain; width: 100%">
         </div>
         <div class="card-body">
           <h6 class="card-title"> Perjamuan Khong Guan</h6>
           <p>Joko Pinurbo</p>
           Price : Rp.68.000
           <br>
           <br>
           <input type="button" value="Book" class="btn btn-primary">
         </div>
       </div>
     </div>
     <div class="col-3">
        <div class="card border-primary mb-3">
          <div class="card-img-top">
            <img src="storage/silent.png" alt="" onclick="alert()" style="height: 180px; object-fit:contain; width: 100%">
          </div>
          <div class="card-body">
            <h6 class="card-title">The Silent Patient</h6>
            <p>Alex Michaelides</p>
            Price : Rp.79.200
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