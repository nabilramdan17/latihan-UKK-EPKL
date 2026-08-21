<!DOCTYPE html>
<html lang="id">
<head>
 <meta charset="UTF-8">
 <title>@yield('title', 'Sistem E-PKL')</title>
</head>
<body>
 <nav>Sistem Informasi PKL — SMK</nav>
 <main>
 @yield('content')
 </main>
 <footer>&copy; {{ date('Y') }} SMK — Modul E-PKL</footer>
</body>
</html>
