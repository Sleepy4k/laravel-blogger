<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">

        <meta name="author" content="">
        <meta name="keywords" content="">
        <meta name="description" content="">

        <meta property="og:site_name" content="">
        <meta property="og:title" content="">
        <meta property="og:description" content="">
        <meta property="og:type" content="website">
        <meta property="og:locale" content="{{ str_replace('_', '-', app()->getLocale()) }}">
        <meta property="og:url" content="">
        <meta property="og:image" content="">
        <meta property="og:image:width" content="">
        <meta property="og:image:height" content="">
        <meta property="og:image:alt" content="">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="">
        <meta name="twitter:image" content="">

        <title>Print Table</title>

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

        <style>
            body {margin: 20px}
        </style>
    </head>
    <body>
        <table class="table table-bordered table-condensed table-striped">
            @yield('table')
        </table>
    </body>
</html>
