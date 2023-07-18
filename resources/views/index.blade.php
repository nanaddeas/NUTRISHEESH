@extends('layouts.main')

@section('container2')

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Nutrisheesh | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/csshomeblade">
  </head>
<body>
  <!-- ikon search -->
  <nav class="body bg-body-tertiary">
  <section class="search_section">
    <h2>Cari makananmu</h2>
    <form id="searchFood">
      <input id="searchFoodTitle" type="text">
      <button id="searchSubmit" type="submit"><i class="bi bi-search-heart"></i>Cari</button>
    </form>
  </section>
  <!-- buat kolom berita -->
  <div class="d-flex flex-row mt-4"> 
  <div class="column">
    <div class="card">
      <img src="img/th (1).jpeg" alt="Pict1" style="width:100%">
      <div class="container">
        <h3>Jane Doe</h3>
        <a href="https://www.detik.com/tag/diet/">hhhh</a>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="th (2).jpeg" alt="Pict2" style="width:100%">
      <div class="container">
        <h3>Mike Ross</h3>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="th (3).jpeg" alt="Pict3" style="width:100%">
      <div class="container">
        <h3>John Doe</h3>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="th(4).jpeg" alt="Pict4" style="width:100%">
      <div class="container">
        <h3>Mike Ross</h3>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>
</nav>
</body>
@endsection  
