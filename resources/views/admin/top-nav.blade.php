
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="index.html">My Restaurant</a>
   <ul class="mx-auto mt-3">
       <li class="nav-item btn btn-info btn-sm">
           <a class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();" href="#">Logout</a>
       </li>
   </ul>
    <form action="{{ route('logout') }}" method="post" id="logoutForm">
        @csrf
    </form>
</nav>
