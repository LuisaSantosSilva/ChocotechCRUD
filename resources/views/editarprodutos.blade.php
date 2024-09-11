<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar - Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</head>
<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Seja Bem Vindo(a) a nossa Chocotech') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">

                        <div class="container mt-5">
                            <strong><h1>Atualize os dados dos nossos chocolates</h1></strong>
                            <br>
                            <hr>
                            <br><br>

                            <form method="POST" action="/atualizar/{{$produto->id}}">
                                @csrf
                                <div class="form-group mb-2">
                                    <label>Nome do produto:</label>
                                    <input type="text" class="form-control" name="nomeprod" value="{{$produto->nomeprod}}" placeholder="Digite o nome do produto">
                                </div><br>
                                <div class="form-group mb-2">
                                    <label for="description">Descrição:</label><br>
                                    <textarea id="descprod" name="descprod" rows="5" cols="20" placeholder="Digite a descrição" required>{{ old('descprod', $produto->descprod) }}</textarea>
                                </div><br>
                                <div class="form-group mb-2">
                                    <label for="price">Valor:</label>
                                    <input type="number" class="form-control" step="0.01" name="valorprod" value="{{$produto->valorprod}}" placeholder="Digite o preço">
                                </div><br>
                                <button type="submit" class="btn btn-primary">Atualizar</button>
                            </form>
                        </div>

                        <br><br>
                        <!-- Footer Text -->
                        <footer>
                            <div class="border-t border-gray-600 py-4">
                                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                                    <!-- Copyright Symbol and Text -->
                                    <p class="text-sm">
                                        &copy; {{ date('Y') }} Luisa Santos e Revellin Mendes. Todos os direitos reservados.
                                    </p>
                                </div>
                            </div>
                        </footer>

                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>

</body>
</html>
