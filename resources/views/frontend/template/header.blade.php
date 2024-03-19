<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ $title }}</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('images/Logo Kryia-02.png') }}">
    @include('css')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">


    <link href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css" rel="stylesheet">

    <?php
    $description = 'Pameraan “Kriya Indonesia 2024” menampilkan keaneka-ragaman produk kriya berbasiss umber daya alam dan budaya Nusantara sebagai keunggulan dan keunikan yang semakin dicari dan dicinta oleh masyarakat dari dalam dan luar negeri. Paduan kreatifitas dan inovasi dengan sentuhan budaya dan nuansa etnik dari setiap kategori produk kriya berpotensi merebut ceruk pasar lokal dan global.';
    $keywoards = 'keywoards';
    $author = 'kriya Indonesia';
    $name = 'Kriya Indonesia';
    $image = 'https://kriya-indonesia.com/asset/images/Logo Kryia-03.png';
    $title = 'Kriya Indonesia';
    $type = 'website';
    $url = 'https://kriya-indonesia.com/';
    ?>

    <!-- SEO -->
    <meta name="description" content="<?= $description ?>">
    <meta name="keywords" content="<?= $keywoards ?>">
    <meta name="author" content="<?= $author ?>">

    <!-- Meta Google -->
    <meta itemprop="name" content="<?= $name ?>">
    <meta itemprop="description" content="<?= $description ?>">
    <meta itemprop="image" content="<?= $image ?>">

    <!-- Meta Facebook -->
    <meta property="og:title" content="<?= $title ?>" />
    <meta property="og:type" content="<?= $type ?>">
    <meta property="og:description" content="<?= $description ?>" />
    <meta property="og:image" content="<?= $image ?>" />
    <meta property="og:url" content="<?= $url ?>" />
</head>

<body style="font-family: 'Open Sans', sans-serif;">
    @include('frontend.template.navbar')
