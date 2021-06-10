<!DOCTYPE html>
<html lang="en">
<head>
    <title>Picture Story</title>
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
        <h2 align="center">Picture Story</h2>
        <div class="card text-white bg-secondary mb-3 style="max-width: 18rem;">
          <img src="storage/Recomended2.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Cerita Anak Binatang : Orang Utan</h5>
            <p class="card-text">Para anak orangutan masuk ke penangkaran sampai mereka mulai memperlihatkan kemampuan untuk bertahan hidup. Pasalnya, hidup di tengah hutan jauh lebih keras. Selain mempekenalkan anak orangutan untuk beradaptasi, mereka juga harus mendapat pembekalan agar lebih kuat.</p>
          </div>
        </div>
     <div class="col-3">
       <div class="card border-primary mb-3">
         <div class="card-img-top">
           <img src="storage/anak.png" alt="" onclick="alert()" style="height: 180px; object-fit:contain; width: 100%">
         </div>
         <div class="card-body">
           <h6 class="card-title">Kumpulan Cerita Anak Muslim Hebat</h6>
           <p>Avan Fathurahman</p>
           Price : Rp.125.000
           <br>
           <br>
           <input type="button" value="Book" class="btn btn-primary">
         </div>
       </div>
     </div>
     <div class="col-3">
       <div class="card border-primary mb-3">
         <div class="card-img-top">
           <img src="storage/cerdas.png" alt="" onclick="alert()" style="height: 180px; object-fit:contain; width: 100%">
         </div>
         <div class="card-body">
           <h6 class="card-title">Kumpulan Cerita Anak Cerdas</h6>
           <p>Durroh Fuadin K.</p>
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
           <img src="storage/hari.png" alt="" onclick="alert()" style="height: 180px; object-fit:contain; width: 100%">
         </div>
         <div class="card-body">
           <h6 class="card-title">Cerita Anak Muslim Sehari-Hari</h6>
           <p>Widya Ross</p>
           Price : Rp.117.000
           <br>
           <br>
           <input type="button" value="Book" class="btn btn-primary">
         </div>
       </div>
     </div>
     <div class="col-3">
       <div class="card border-primary mb-3">
         <div class="card-img-top">
           <img src="storage/utan.png" alt="" onclick="alert()" style="height: 180px; object-fit:contain; width: 100%">
         </div>
         <div class="card-body">
           <h6 class="card-title">Cerita Anak Binatang : Orang Utan</h6>
           <p>Nabila Anwar</p>
           Price : Rp.28.000
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
           <img src="storage/berani.png" alt="" onclick="alert()" style="height: 180px; object-fit:contain; width: 100%">
         </div>
         <div class="card-body">
           <h6 class="card-title">Kumpulan Cerita Anak Istimewa : Pemberani dan Mandiri</h6>
           <p>Erna Fitri,Ratih Sumiratingrati</p>
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
           <img src="storage/akhlak.png" alt="" onclick="alert()" style="height: 180px; object-fit:contain; width: 100%">
         </div>
         <div class="card-body">
           <h6 class="card-title">Kumpulan Cerita Anak Muslim Berakhlak</h6>
           <p>Endang Firdaus, Bambang Irwanto, Liliawati</p>
           Price : Rp.95.000
           <br>
           <br>
           <input type="button" value="Book" class="btn btn-primary">
         </div>
       </div>
     </div>
     <div class="col-3">
       <div class="card border-primary mb-3">
         <div class="card-img-top">
           <img src="storage/eskrim.png" alt="" onclick="alert()" style="height: 180px; object-fit:contain; width: 100%">
         </div>
         <div class="card-body">
           <h6 class="card-title">Kumpulan Cerita Anak: Es Krim dari Sampah dan cerita lucu lainnya</h6>
           <p>Stephen King</p>
           Price : Rp.92.000
           <br>
           <br>
           <input type="button" value="Book" class="btn btn-primary">
         </div>
       </div>
     </div>
     <div class="col-3">
       <div class="card border-primary mb-3">
         <div class="card-img-top">
           <img src="storage/jujur.png" alt="" onclick="alert()" style="height: 180px; object-fit:contain; width: 100%">
         </div>
         <div class="card-body">
           <h6 class="card-title">Seri Cerita Anak Pembentuk Karakter: Berani Jujur</h6>
           <p>Kak Anna Dan Kak Ester</p>
           Price : Rp.39.000
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