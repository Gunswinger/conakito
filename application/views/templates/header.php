<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="<?= base_url('https://code.jquery.com/jquery-3.3.1.min.js'); ?>"></script>
    <script src="<?= base_url('https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js'); ?>" type="text/javascript"></script>
    <link href="<?= base_url('https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css'); ?>'" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/scss/mdb.scss'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/mdb.min.css'); ?>" rel="stylesheet">
    <script src="<?= base_url('assets/js/mdb.min.js'); ?>" charset="utf-8"></script>
    <link rel="icon" href="<?= base_url('https://pbs.twimg.com/profile_images/808258644038983680/5OOAp25v_400x400.jpg'); ?>">
    <title><?php echo $judul; ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><img src="<?= base_url('assets/img/a.png'); ?>" alt="logo" width="100px" height="60px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('Home/index'); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('Menu/index_menu'); ?>">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('Shop/index_shop'); ?>">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('Event/index_event'); ?>">Event</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('Reservation/index_reservation'); ?>">Reservation</a>
                </li>
            </ul>
        </div>
    </nav>