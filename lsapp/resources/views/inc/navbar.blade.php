<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/">{{config('app.name','LSAPP')}}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
                <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/services">Services</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="/Post">Blog</a>
                </li>
          </ul>
          
          <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
              <a class="nav-link" href="/Post/create">Create Post<span class="sr-only">(current)</span></a>
              </li>
             
        </ul>
          
        </div>
      </nav>