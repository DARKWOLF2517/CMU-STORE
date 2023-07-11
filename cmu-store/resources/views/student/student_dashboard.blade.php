<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@ 5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="/custom_css/Navbars.css" rel="stylesheet">
    @vite('resources/js/app.js')
    <style>
        .container {
          text-align: center;
          padding: 50px;
        }
      </style>
</head>
<body>
    <h1>Student Dashboard</h1>
    <ul><a class="dropdown-item" href="{{url('/logout')}}">Sign out</a></ul>

</body>
</html>