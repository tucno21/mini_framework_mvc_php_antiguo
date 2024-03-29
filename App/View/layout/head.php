<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Carlos Tucno vasquez">
    <title><?= isset($title) ? $title : 'Mini Framework' ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            /* min-height: 75rem; */
            padding-top: 4.5rem;
        }

        .form-signin {
            max-width: 400px;
            padding: 15px;
        }

        .form-product {
            max-width: 800px;
            padding: 15px;
        }
    </style>
</head>

<body>
    <main>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" aria-label="Fourth navbar example">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?= route('home') ?>">Mini Framework mvc Php</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExample04">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <?php if (!auth()->has()) : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= route('login') ?>">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= route('register') ?>">Register</a>
                            </li>
                        <?php else : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= route('dashboard') ?>">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= route('logout') ?>">Cerrar Sesión</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>