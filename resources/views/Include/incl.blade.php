<nav class="navbar navbar-expand navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav pl-5">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home</a>
      </li>
      @guest
      <li class="nav-item pl-5 ml-5">
        <a class="nav-link" href="login">LogIn</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register">Register</a>
      </li>
      @endguest
      @auth
      <li class="nav-item">
      <form class="inline" action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit">Logout</button>
      </form>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">{{ auth()->user()->name }}</a>
      </li>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout">LogOut</a>
      </li>
      @endauth
    </ul>
  </div>
</nav>