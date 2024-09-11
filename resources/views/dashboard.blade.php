<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Principal</title>
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

                        <img src="{{ asset('build/assets/imagens/Banner.png') }}" alt="Imagem" class="img-fluid">

                        <br><br>
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <h1>Aqui na <strong>Chocotech</strong>, transformamos a magia do chocolate em uma experiência única e inesquecível. Somos apaixonados por cada pedaço de chocolate que oferecemos, e nosso compromisso é trazer até você o melhor em qualidade, sabor e inovação.</h1>
                                </div>
                            </div>
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
