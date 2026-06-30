<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Susan's Portfolio</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

  <aside class="sidebar">
    <div class="side-top"></div>
    <div class="side-bot">
      <span class="logo-text">susan's portfolio</span>
    </div>
  </aside>

  <div class="main-container">
    <nav class="navbarhorizontal">
      <ul class="nav-list">
        <li class="nav-left">
          <button class="menu-toggle" onclick="toggleMenu()">☰</button>
        </li>
        <li class="nav-right">
          <ul class="nav-links">
            <li><a href="{{ route('index') }}">About</a></li>
            <li><a href="{{ route('admin.projects.index') }}">Projects</a></li>
            <li><a href="{{ route('admin.skills.index') }}">Skills</a></li>
            <li><a href="{{ route('admin.contact.index') }}">Contact</a></li>
            <li><a href="{{ route('admin.cv.index') }}">CV</a></li>
          </ul>
        </li>
      </ul>
    </nav>

    @yield('content')
  </div>

  <script>
    function toggleMenu() {
      const sidebar = document.querySelector('.sidebar');
      sidebar.classList.toggle('collapsed');
    }
  </script>

  @stack('scripts')
</body>
</html>