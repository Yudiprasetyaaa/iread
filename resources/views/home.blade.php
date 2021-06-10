<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    @extends('template')

    @section('content')
      <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="storage/cover1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="storage/cover2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="storage/cover3.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <hr>

      <!-- Bawah cover -->
      <div class="alert alert-danger alert-dismissable fade show" id="exampleAlert" role="alert">
        <strong> Ups! </strong> You Must Login First!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
<div class="row">
     <marquee scrollamount="30"><h2>Best Seller</h2></marquee>
  <div class="col-4">
    <div class="card border-primary mb-3">
      <div class="card-img-top">
        <img src="storage/kata.jpg" alt="" onclick="alert()" style="height: 250px; object-fit:contain; width: 100%">
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
  <div class="col-4">
    <div class="card border-primary mb-3">
      <div class="card-img-top">
        <img src="storage/bodo.jpg" alt="" onclick="alert()" style="height: 250px; object-fit:contain; width: 100%">
      </div>
      <div class="card-body">
        <h5 class="card-title">Sebuah Seni Untuk Bersikap Bodo Amat</h5>
        <p> Mark Manson </p>
        Price : Rp.67.000
        <br>
        <br>
        <input type="button" value="Book" class="btn btn-primary">
      </div>
    </div>
  </div>
  <div class="col-4">
    <div class="card border-primary mb-3">
      <div class="card-img-top">
        <img src="storage/ktj.png" alt="" onclick="alert()" style="height: 250px; object-fit:contain; width: 100%">
      </div>
      <div class="card-body">
        <h5 class="card-title">Kisah Tanah Jawa : Tikungan Maut</h5>
        <p> Bonaventura D. Genta DKK </p>
        Price : Rp.77.000
        <br>
        <br>
        <input type="button" value="Book" class="btn btn-primary">
      </div>
    </div>
  </div>
  <hr>
  </div>
</div>
<div class="row">
  <div class="col-4">
    <div class="card border-primary mb-3">
      <div class="card-img-top">
        <img src="storage/TA.png" alt="" onclick="alert()" style="height: 250px; object-fit:contain; width: 100%">
      </div>
      <div class="card-body">
        <h5 class="card-title">The Art Of Restaurant Review</h5>
        <p> Kevindra P Soemantri</p>
        Price : Rp.70.000
        <br>
        <br>
        <input type="button" value="Book" class="btn btn-primary">
      </div>
    </div>
  </div>
  <div class="col-4">
    <div class="card border-primary mb-3">
      <div class="card-img-top">
        <img src="storage/kk.png" alt="" onclick="alert()" style="height: 250px; object-fit:contain; width: 100%">
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
  <div class="col-4">
    <div class="card border-primary mb-3">
      <div class="card-img-top">
        <img src="storage/cc.png" alt="" onclick="alert()" style="height: 250px; object-fit:contain; width: 100%">
      </div>
      <div class="card-body">
        <h5 class="card-title">Champion! New Edition</h5>
        <p> Darmadi Darmawangsa</p>
        Price : Rp.88.800
        <br>
        <br>
        <input type="button" value="Book" class="btn btn-primary">
      </div>
    </div>
  </div>
    
    @endsection  
</body>
</html>