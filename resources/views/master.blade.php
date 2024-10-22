<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>CV - Olivia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            color: #343a40;
        }

        .navbar {
            background-color: #003366;
        }

        .navbar-brand,
        .nav-link {
            color: #ffd700 !important;
        }

        .nav-link:hover {
            color: #fff !important;
        }

        .header h1 {
            color: #003366;
        }

        .footer {
            background-color: #003366;
            color: #ffd700;
            padding: 10px 0;
        }

        .footer p {
            margin: 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light mb-5">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Olivia's CV</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/blog/portofolio">Portofolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/blog/kontak">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <header class="header text-center ">
            <h1>Curriculum Vitae</h1>
        </header>
        <div class="content">
            @yield('konten')
        </div>
    </div>
    <footer class="footer text-center py-4">
        <p class="footer-text mb-0">Copyright &copy; 2021 Olivia</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-QnDkN3bWV4N0phqfXGpyKmk5R4UpHvWhEmFPbje5vFYTR7O5jMe5/cc9N4I9pP0Q" crossorigin="anonymous">
    </script>
</body>

</html>
