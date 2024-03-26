<!doctype html>
<html lang="pt-br">

<head>
    <title>Produtos - Admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.3.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

    <div class="wrapper">
        <x-sidebar />

        <div class="main">
            <x-nav />

            <main class="content px-3 py-4">
                <div class="container-fluid">
                    <div class="mb-3">
                        <h3 class="fw-bold fs-4 mb-3">Jogadores</h3>
                        <div class="row d-flex justify-content-evenly mb-4">
                            <div class="col-12 col-md-3 rounded-3 fundo shadow">
                                <div class="card border-0">
                                    <div class="card-body py-4">
                                        <h5 class="mb-2 fw-bold">
                                            1800
                                        </h5>
                                        <p class="mb-0 fw-bold text-secondary">
                                            Total de jogadores
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-3 rounded-3 fundo shadow">
                                <div class="card border-0">
                                    <div class="card-body py-4">
                                        <h5 class="mb-2 fw-bold">
                                            R$77,290
                                        </h5>
                                        <p class="mb-0 fw-bold text-secondary">
                                            Receita gerada esse mês
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-3 rounded-3 fundo shadow">
                                <div class="card border-0">
                                    <div class="card-body py-4">
                                        <h5 class="mb-2 fw-bold">
                                            312
                                        </h5>
                                        <p class="mb-0 fw-bold text-secondary">
                                            Novos jogadores
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="row mb-3">
                                    <div class="col-12 col-md-12 d-flex justify-content-end">
                                        <a href="/registrarCliente" class="pirula rounded-pill shadow d-flex justify-content-center align-items-center">
                                            Novo
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-12">
                                        <table class="table table-striped table-hover shadow border">
                                            <thead>
                                                <tr class="highlight">
                                                    <th class="col-md-2 text-center">Username</th>
                                                    <th class="col-md-1 text-center">Cor</th>
                                                    <th class="col-md-2 text-center">Email</th>
                                                    <th class="col-md-1 text-center">ID</th>
                                                    <th class="col-md-1 text-center">Alterar</th>
                                                    <th class="col-md-1 text-center">Excluir</th>
                                                </tr>
                                            </thead>
                                            @foreach ($clientes as $cliente)
                                            <tbody>
                                                <track>
                                                <th scope="row" class="text-center">
                                                    {{$cliente->username}}
                                                </th>
                                                <td class="text-center">{{$cliente->cor}}</td>
                                                <td class="text-center">{{$cliente->email}}</td>
                                                <td class="text-center">{{$cliente->id}}</td>
                                                <td class="text-center">
                                                    <a href="/registrarCliente/{$id}">
                                                        <i class="lni lni-pencil"></i>
                                                    </a>
                                                </td>
                                                <td class="text-center">
                                                    <a class="dropdown-item">
                                                        <i class="lni lni-trash-can"></i>
                                                    </a>
                                                </td>
                                                </track>
                                            </tbody>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>


</body>

</html>