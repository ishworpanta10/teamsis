 <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <a class="navbar-brand" href="/">Road Expansion</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="{{Request::is('/') ? 'active' : '' }} ">
            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
          </li>
           <li class="{{Request::is('victim') ? 'active' : '' }} ">
            <a class="nav-link" href="/victim">Victim</a>
          </li>
          <li class="{{Request::is('vdetails') ? 'active' : '' }} ">
            <a class="nav-link" href="/vdetails">Victim's Details</a>
          </li>
           <li class="{{Request::is('property') ? 'active' : '' }} ">
            <a class="nav-link" href="/property">Property</a>
          </li>

         <!--  <li class="{{Request::is('messages') ? 'active' : '' }} ">
            <a class="nav-link" href="/messages">Message</a>
          </li> -->
           <li class="{{Request::is('compensation') ? 'active' : '' }} ">
            <a class="nav-link" href="/compensation">Compensation</a>
          </li>
                 
         <!--  <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Jump To</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Gallery</a>
              <a class="dropdown-item" href="#">Service</a>
              <a class="dropdown-item" href="#">Somethig else</a>
            </div>
          </li> -->
        </ul>
      
      </div>
    </nav>
