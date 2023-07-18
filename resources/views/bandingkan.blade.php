@extends('layouts.mainclient')

@section('containerclient')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Web Nutrisheesh | Bandingkan USER</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/cssbandingkan">
  <link rel="stylesheet" href="css/cssbandingkan.css">
</head>
<body>
  <!-- ikon search -->
  <nav class="body bg-body-tertiary">
    <div class="search_section">
      <h2>Cari makananmu</h2>
      <form id="searchFood">
        <input id="searchFoodTitle" type="text">
        <button id="searchSubmit" type="submit"><i class="bi bi-search"></i>Cari</button>
      </form>
    </div>
  </nav>
  <!-- ikon search -->
  <nav class="body bg-body-tertiary">
    <div class="search_section">
      <h2>Cari makananmu</h2>
      <form id="searchFood">
        <input id="searchFoodTitle" type="text">
        <button id="searchSubmit" type="submit"><i class="bi bi-search"></i>Cari</button>
      </form>
    </div>
  </nav>
</body>
</html>
@endsection
