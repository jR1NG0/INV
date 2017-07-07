<!DOCTYPE html>
<html>
<title>Biblioteca</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-sidebar w3-bar-block w3-card-2 w3-animate-left w3-grey" style="display:none" id="leftMenu">
  <button onclick="closeLeftMenu()" class="w3-bar-item w3-button w3-large">Cerrar &times;</button>
  <a href="/inicio" class="w3-bar-item w3-button">INICIO</a>
  <a href="/ejemplares" class="w3-bar-item w3-button">PRODUCTOS</a>
  <a href="/libros" class="w3-bar-item w3-button">AREAS</a>
  <a href="/usuarios" class="w3-bar-item w3-button">USUARIOS</a>
</div>

<script>
function openLeftMenu() {
    document.getElementById("leftMenu").style.display = "block";
}
function closeLeftMenu() {
    document.getElementById("leftMenu").style.display = "none";
}
</script>

<ul class="nav navbar-nav navbar-right">
    <!-- Authentication Links -->
    @if (Auth::guest())
        <li><a href="{{ url('/login') }}">Iniciar Sesión</a></li>
        <li><a href="{{ url('/register') }}">Registrarse</a></li>
    @else
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <ul class="dropdown-menu" role="menu">
                <li>
                    <a href="{{ url('/logout') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        Salir
                    </a>

                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </li>
    @endif
</ul>


<div class="w3-teal">
  
     <button class="w3-button w3-teal w3-xlarge w3-left" onclick="openLeftMenu()">&#9776;</button>
  

  <div class="w3-container">
    <h3>Gestor Iventarios</h3>
  </div>
</div>

     

     
</body>
</html>
