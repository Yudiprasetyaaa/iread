<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/home">
              <img src="storage/Logo.png" alt="" width="50" height="50">
            </a>
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="/home">Home</a>
              <a class="nav-link" href="/profil">About Us</a>
              <div class="btn-group">
                <button type="button" class="btn outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  Category
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/novel-buku">Novel</a></li>
                  <li><a class="dropdown-item" href="/cergam-buku">Picture Story</a></li>
                  <li><a class="dropdown-item" href="/ensiklopedi-buku">Encyclopedia</a></li>
                  <li><a class="dropdown-item" href="/komik-buku">Comic</a></li>
                  <li><a class="dropdown-item" href="/antologi-buku">Anthology</a></li>
                  <li><a class="dropdown-item" href="/biografi-buku">Biography</a></li>
                </ul>
                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                  Login
                </button>
                <!-- Modal -->
                <div id="myModal" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
    
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Please Login</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
    
                        <form>
                          <div class="form-group">
                            <label for="expaleInputEmail">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Your Email">
                          </div>
                          <div class="form-group">
                            <label for="expaleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1"  placeholder="Enter Your Password">
                          </div>
                          <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1"  placeholder="Password">
                            <label class="form-check-label" for="exampleCheck1">Always Login</label>
                          </div>
                          <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleAlert">Login</button>
                          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myRegist">
                            Create Account
                          </button>

                          <div id="myRegist" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
              
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Create Your Account</h5>
                                  <button type="button" class="close" data-bs-dismiss="modal" aria-label="close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
              
                                  <form>
                                    <div class="form-group">
                                      <label for="expaleInputEmail">Username</label>
                                      <input type="name" class="form-control" id="exampleInputName" aria-describedby="nameHelp" placeholder="Enter Your Username">
                                    </div>
                                    <div class="form-group">
                                      <label for="expaleInputEmail">Email</label>
                                      <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Your Email">
                                    </div>
                                    <div class="form-group">
                                      <label for="expaleInputPassword1">Password</label>
                                      <input type="password" class="form-control" id="exampleInputPassword1"  placeholder="Enter Your Password">
                                    </div>
                                    <div class="form-group form-check">
                                      <input type="checkbox" class="form-check-input" id="exampleCheck2"  placeholder="Password">
                                      <label class="form-check-label" for="exampleCheck2">The data entered is correct</label>
                                    </div>
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myRegist">
                                      Create Account
                                    </button>
          
                                    
                                  </form>
                                </div>
                              </div>
                            </div>
                        </div>


                        </form>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
        </div>
      </nav>

      <diiv class="container" style="min-height: 500px">

      
        @yield('content')
          </diiv>
    
          <footer class="footer bg-dark text-white" style="height: 50px; padding: 50px;">
            <div class="row">
              <div class="col col-md-6">
                <p style="color: #FFFFFF; text-align:center;">
                   Call Center : 0212345678
                </p>
              </div>
              <div class="col col-md-6">
                <p style="color: #FFFFFF; text-align:center;">
                   Find Us On Instagram : I.Read
                </p>
              </div>
            </div>
          
    
          </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>