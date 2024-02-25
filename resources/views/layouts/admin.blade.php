<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <link rel="icon" href="{{ url('assets/logo.svg') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        crossorigin="anonymous" />

    <title>@yield('title') :: Home Deco</title>

</head>

<body class="admin-body">
    
    <aside>
        <ul class="admin-links-container">
          <li><a class="admin-links-link" href="#">Dashboard</a></li>
          <li><a class="admin-links-link" href="#">Users</a></li>
          <li><a class="admin-links-link" href="#">Settings</a></li>
        </ul>
      </aside>
    <main class="admin-main">
        <h1>Administration Panel</h1>
        @yield('main')
    </main>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
