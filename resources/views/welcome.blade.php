<!DOCTYPE html>
<html">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body>
    <div id="app">
        <nav class=" navbar navbar-expand-md navbar-light bg.white shadow-sm">
            <div class="container">
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link">Shop list</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Add new Shop</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
        <div class="container">
            <comments-index></comments-index>
        </div> 
        </main> 
    </div>
    <script src ="{{ asset('js/app.js') }}"></script>

    </body>
</html>
