<nav class="navbar navbar-expand-lg navbar-light ">
  <div class="container">
              <a class="navbar-brand" href="index"><img class="img-fluid" src="{{ asset('assets/images/logo.png') }}">
            </a>
              <button class="navbar-toggler navbar-toggler-cus" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="form-inline form-cus d-flex ml-5 align-items-center ">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <a type="submit" class="ml-2"><img class="img-fluid" src="{{ asset('assets/images/mappin-blue.png') }}"></a>
                </form>
                <ul class="navbar-nav navbar-nav-cus ml-auto">
                  <li class="nav-item ">
                    <a class="nav-link " href="home">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="nearby">Nearby</a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link " href="whatshot">What's Hot</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link  btn btn-blue" href="login">Log In</a>
                  </li>
                </ul>
              </div>
          </div>
</nav>