<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Akar Printing</title>
    <link rel="shortcut icon" href="{{asset('img/LOGO AKAR PRINTING.png')}}">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-navbar></x-navbar>
    <x-header></x-header>

    <div class="text-3xl py-8 px-4 border-2 font-Roboto font-bold bg-gray-200 text-center">
        <h4>Kategori</h4>
    </div>
    <x-kategori></x-kategori>

    <div class="text-3xl py-8 px-4 border-2 font-Roboto font-bold bg-gray-200 text-center">
        <h5>Paling Populer</h5>
    </div>
    <x-populer></x-populer>
    <x-alamat></x-alamat>

    <x-footer></x-footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>

</html>
