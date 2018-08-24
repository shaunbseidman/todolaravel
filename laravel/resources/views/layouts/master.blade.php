<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
  <title>To-Do</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
</head>

<body>
  <div class="container">
    <p>Logged in as <b>Shaun Seidman</b> <a class="waves-effect waves-light btn">Logout</a>
    </p>
    <ul class="collapsible">
      <li>
        <div class="collapsible-header">
          <i class="material-icons">person_add</i> Invitations
          <span class="new badge red">4</span></div>
        <div class="collapsible-body">
          <p>
            <span class="red-text"><b>Shaun Seidman</b> <a href="">accept</a> | <a href="">deny</a></span>
          </p>
          <p>
            <span class="red-text"><b>Person 2</b> <a href="">accept</a> | <a href="">deny</a></span>
          </p>
          <p>
            <span class="red-text"><b>Person 3</b> <a href="">accept</a> | <a href="">deny</a></span>
          </p>
          <p>
            <span class="red-text"><b>Person 4</b> <a href="">accept</a> | <a href="">deny</a></span>
          </p>
        </div>
      </li>
    </ul>

    <h1 class='center-align grey-text text-darken-5'>To-Do or Not-To-Do</h1>

    @yield('content')

  </div>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
  <script>
    var elem = document.querySelector('.collapsible')
    var options
    var instance = M.Collapsible.init(elem, options)
    var elem2 = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elem2);
  </script>

</body>

</html>
