<!-- TODO: Bootstrap richiede in testa alla pagine l'impostazione di tipo doctype che indica il riferimento all'uso di HTML 5-->
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- TODO: Importo i CSS di Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h3>
                    Sezione responsabile turnistica agenzia trasporti Velbel s.r.l
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <ul>
                    <li class="list-item">
                        <a href="/">Home</a>
                    </li>
                    <li class="list-item">
                        <a href="/news">News</a>
                    </li>
                    <li class="list-item">
                        <a href="/about">Chi siamo</a>
                    </li>
                    <li class="list-item">
                        <a href="/login">Login</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-8">
                <h2>Benvenuti al reparto turnistica di Velbel s.r.l</h2>
                <div>
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <!-- TODO: Importo il file JavaScript di Bootstrap e di Popper. Popper è una libreria che viene usata per inserire elementi quali menu dropdown, popover e tooltip in  -->
    <!-- maniera responsiva adattabile allo scrolling e alla risoluzione della pagina -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>