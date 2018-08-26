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

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <p>Logged in as <b>{{ Auth::user()->name}}</b> <button type='submit' class="waves-effect waves-light btn">Logout</button>
        </p>
    </form>

    @isAdmin
    @if($invitations->count()>0)
    <ul class="collapsible">
      <li>
        <div class="collapsible-header">
          <i class="material-icons">person_add</i> invitations
          <span class="new badge red">{{$invitations->count()}}</span></div>
        <div class="collapsible-body">
          @foreach($invitations as $invitation)
          <p>
            <span class="green-text"><b>{{$invitation->worker->name}}</b></span><a href="{{route('acceptInvitation',['id'=>$invitation->id])}}"> Accept</a> or <a href="{{route('denyInvitation',['id'=>$invitation->id])}}">Deny</a>
          </p>
          @endforeach
        </div>
      </li>
    </ul>
    @endif
    @endisAdmin

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
