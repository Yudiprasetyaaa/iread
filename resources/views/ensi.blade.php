<!DOCTYPE html>
<html lang="en">
<head>
    <title>Encyclopedia</title>
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
        <h2 align="center">Encyclopedia</h2>
        <div class="card text-white bg-secondary mb-3 style="max-width: 18rem;">
          <img src="storage/Recomended3.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Ensiklopedia Hari Kebangkitan</h5>
            <p class="card-text">Para anak orangutan masuk ke penangkaran sampai mereka mulai memperlihatkan kemampuan untuk bertahan hidup. Pasalnya, hidup di tengah hutan jauh lebih keras. Selain mempekenalkan anak orangutan untuk beradaptasi, mereka juga harus mendapat pembekalan agar lebih kuat.</p>
          </div>
        </div>
     <div class="col-3">
       <div class="card border-primary mb-3">
         <div class="card-img-top">
           <img src="storage/sirkus.png" alt="" onclick="alert()" style="height: 180px; object-fit:contain; width: 100%">
         </div>
         <div class="card-body">
           <h5 class="card-title">Ensiklopedia Cilik : Sirkus</h5>
           <p>Groupe Fleurus</p>
           Price : Rp.25.000
           <br>
           <br>
           <input type="button" value="Book" class="btn btn-primary">
         </div>
       </div>
     </div>
     <div class="col-3">
       <div class="card border-primary mb-3">
         <div class="card-img-top">
           <img src="storage/manusia.png" alt="" onclick="alert()" style="height: 180px; object-fit:contain; width: 100%">
         </div>
         <div class="card-body">
           <h6 class="card-title">Ensiklopedia 4D: Tubuh Manusia</h6>
           <p>Devar Entertainment</p>
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
           <img src="storage/sains.png" alt="" onclick="alert()" style="height: 180px; object-fit:contain; width: 100%">
         </div>
         <div class="card-body">
           <h5 class="card-title">Ensiklopedia Saintis Junior: Sains</h5>
           <p>Giles Sparrow</p>
           Price : Rp.121.600
           <br>
           <br>
           <input type="button" value="Book" class="btn btn-primary">
         </div>
       </div>
     </div>
     <div class="col-3">
       <div class="card border-primary mb-3">
         <div class="card-img-top">
           <img src="storage/sekolah.png" alt="" onclick="alert()" style="height: 180px; object-fit:contain; width: 100%">
         </div>
         <div class="card-body">
           <h5 class="card-title">Ensiklopedia Cerdas : Sekolah</h5>
           <p>Larousse</p>
           Price : Rp.98.000
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
           <img src="storage/bangkit.png" alt="" onclick="alert()" style="height: 180px; object-fit:contain; width: 100%">
         </div>
         <div class="card-body">
           <h5 class="card-title">Ensiklopedia Hari Kebangkitan</h5>
           <p>Ibnu Katsir</p>
           Price : Rp.80.000
           <br>
           <br>
           <input type="button" value="Book" class="btn btn-primary">
         </div>
       </div>
     </div>
     <div class="col-3">
       <div class="card border-primary mb-3">
         <div class="card-img-top">
           <img src="storage/bumi.png" alt="" onclick="alert()" style="height: 180px; object-fit:contain; width: 100%">
         </div>
         <div class="card-body">
           <h5 class="card-title">Ensiklopedia Saintis Junior: Bumi</h5>
           <p>Clare Hibbert & Honor Head</p>
           Price : Rp.118.400
           <br>
           <br>
           <input type="button" value="Book" class="btn btn-primary">
         </div>
       </div>
     </div>
     <div class="col-3">
       <div class="card border-primary mb-3">
         <div class="card-img-top">
           <img src="storage/fisika.png" alt="" onclick="alert()" style="height: 180px; object-fit:contain; width: 100%">
         </div>
         <div class="card-body">
           <h6 class="card-title">Ensiklopedia Ilmuwan Fisika Abad 20</h6>
           <p>Taufik Hidayat</p>
           Price : Rp.169.000
           <br>
           <br>
           <input type="button" value="Book" class="btn btn-primary">
         </div>
       </div>
     </div>
     <div class="col-3">
       <div class="card border-primary mb-3">
         <div class="card-img-top">
           <img src="storage/hadits.png" alt="" onclick="alert()" style="height: 180px; object-fit:contain; width: 100%">
         </div>
         <div class="card-body">
           <h6 class="card-title">Ensiklopedia Hadits Ibadah</h6>
           <p>Syamsul Rijal Hamid</p>
           Price : Rp.175.000
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