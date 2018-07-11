<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Relaciones de amistad</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">

    <div class="row">
        @if(Auth::check())
            <div class="col-md-12">
                <h1>{{ Auth::user()->name }}</h1>
            </div>

            @if (!is_null($friends) && count($friends) > 0)
                <div class="col-md-12">
                    <h3>Amigos</h3>
                    <ul>
                    @foreach ($friends as $friend)
                        <li>{{ $friend->name }}</li>
                    @endforeach
                    </ul>
                </div>
            @endif
        @endif

        <div class="col-md-12">
            <h3>Usuarios</h3>

            <table class="table">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                @foreach ($users as $user)
                    <tbody>
                    <tr>
                        <td>
                            {{ $user->name }}
                        </td>
                        <td>
                            | <a href="{{ route('be_friend', ['id' => $user->id]) }}">Ser Amigos</a>
                            | <a href="{{ route('remove_friend', ['id' => $user->id]) }}">Eliminar Amistad</a>
                        </td>
                    </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
