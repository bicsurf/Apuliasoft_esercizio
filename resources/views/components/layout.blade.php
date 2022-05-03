<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apuliasoft Esercizio Selezione</title>
    <link rel="icon" type="image/x-icon" href="../img/sfondo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    {{-- BOTTONI AGGREGAZIONI --}}
    <div class="container-fluid mt-5 mb-3">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-md-8">
                <img src="../img/sfondo.png" class="rounded mx-auto d-block" alt="logo Apuliasoft" width="150">
                {{-- BOTTONE PER ORDINARE PER PROGETTO --}}
                <button class="btn btn-warning border border-black mb-3"><a class="text-decoration-none" href="{{ route('home') }}">Tabella completa</a></button><br>
                <button id="button_custom" class="btn btn-light border border-black"><a id="link_custom" class="text-decoration-none" href="{{ route('project') }}">Project</a></button>
                <button id="button_custom" class="btn btn-light border border-black ms-3"><a id="link_custom" class="text-decoration-none" href="{{ route('project_employee') }}">Project -> Employee</a></button>
                <button id="button_custom" class="btn btn-light border border-black mx-3"><a id="link_custom" class="text-decoration-none" href="{{ route('employee_project') }}">Employee -> Project</a></button>
            </div>
        </div>
    </div>
    {{-- END BOTTONI AGGREGAZIONI --}}
    {{-- LAYOUT TABELLA --}}
    <div class="container-fluid m-0">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-md-8">
                <table class="table table-bordered">
                    {{ $slot }}
                </table>
            </div>
        </div>
    </div>
    {{-- END LAYOUT TABELLA --}}


    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>