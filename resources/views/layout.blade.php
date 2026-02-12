<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee Dashboard</title>


  <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">

  <style>

    .sidebar {
      margin: 0;
      padding: 0;
      width: 200px;
      background-color: #f1f1f1;
      position: fixed;
      height: 100%;
      overflow: auto;
      top: 75px;
    }


    .sidebar a {
      display: block;
      color: rgb(0, 0, 0);
      padding: 16px;
      text-decoration: none;
    }


    .sidebar a.active {
      background-color: #cc0a0a;
      color: white;
    }


    .sidebar a:hover:not(.active) {
      background-color: #00008B;
      color: white;
    }


    .content {
      margin-left: 200px;
      padding: 16px;
      margin-top: 56px;
      min-height: 100vh;
    }

    .menu-toggle {
    position: relative;
    top: 70px;
    left: 10px;
    }



    @media screen and (max-width: 700px) {
    .sidebar {
        width: 100%;
        height: auto;
        position: relative;
        top: 56px;
    }
    .sidebar a {
        float: none;
        display: inline-block;
        text-align: center;
        width: 100%;
    }
    .content {
        margin-left: 0;
        margin-top: 56px;
    }




    .btn-danger.d-lg-none {
    margin-top: 70px;
    margin-left: 10px;
    }

    }

  </style>
</head>
<body>


    @include('partials.header')
    @include('partials.sidebar')


    @yield('content')

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    document.querySelectorAll('.sidebar a').forEach(link => {
      link.addEventListener('click', function() {

        document.querySelectorAll('.sidebar a').forEach(el => el.classList.remove('active'));

        this.classList.add('active');
      });
    });
  </script>

</body>
</html>
