
   <header class="main-header">
    <nav class="navbar fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
         </div>
        <div class="collapse navbar-collapse mobile-menu" id="navbar-collapse">
			<ul class="nav navbar-nav" id="menu-principale">
             <li @if (\Request::is('home*','home*')) class="actives" @endif><a href="{{route('home')}}"> <span>ACCUEIL</span></a> </li>
				        <li @if (\Request::is('bord*','bord*')) class="actives" @endif><a href="{{route('bord')}}"> <span>TABLEAU DE BORD</span></a></li>
                  <li @if (\Request::is('cheque*','cheque*')) class="actives" @endif><a href="{{route('cheque.index')}}"><span> CHEQUES</a></span></a></li>
                 <li class="" id="" style="max-width: 130px;white-space: nowrap;">
                <a href="{{ url('/logout') }}" id="logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span>SE DECONNECTER</span>
             </a>
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
              @csrf
                <input type="submit" value="logout" style="display: none;">
            </form>
            </li>
		 </ul>
      </div>
        <!-- /.navbar-collapse -->
	  </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  