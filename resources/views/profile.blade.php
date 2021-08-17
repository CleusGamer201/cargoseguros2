<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfil</title>
</head>

<body>
    <h1>{{ $user->id }}</h1>
    <h3>{{ $user->name }}, {{ $user->lastname }}</h3>
    <br>
    <h1>{{ $business->name }}</h1>
    <br>
    <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre y Apellido</th>
                                            <th>Salida</th>
                                            <th>Destino</th>
                                            <th>Empresa</th>
                                            <th>Respaldo</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre y Apellido</th>
                                            <th>Salida</th>
                                            <th>Destino</th>
                                            <th>Empresa</th>
                                            <th>Respaldo</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                        @foreach ($backs as $back)
                                            <tr>
                                                <td>{{ $back->getConsecutivoFormatted() }}</td>
                                                <td>{{ $back->user_generator }}</td>
                                                <td>{{ $back->exit_departament }}</td>
                                                <td>{{ $back->arrival_departament }}</td>
                                                <td>{{ $back->findBusiness()->name }}</td>
                                                <td>${{number_format($back->total, 0, ",", ".")}} COP</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
</body>

</html>