@extends('layouts.mainclient')

@section('containerclient')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Nutrisheesh | Resep USER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/csshomeblade">
  </head>
  <body>
    <!-- buat kolom berita -->
    <div class="d-flex justify-content-center">
      <!-- Kolom-kolom berita disini -->
      <div class="column">
        <div class="card">
          <img src="img/makanan.png" alt="Resep untukmu" style="width:100%">
          <div class="container">
            <h2>Makanan Sehat</h2>
            <p> Makanan yang sehat adalah makanan yang mengandung berbagai macam nutrisi yang dibutuhkan oleh tubuh. Silahkan lihat resep-resep makanan sehat yang bisa kalian buat </p> 
            <p><a href="https://superapp.id/blog/resep/resep-makanan-sehat/#:~:text=12%20Resep%20Makanan%20Sehat%20untuk%20Diet%20%26%20Penambah,8.%20Tumis%20Kacang%20Panjang%20selerasa.com%20...%20More%20items"><button class="button">Click here</button></a></p>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center">
        <!-- Kolom-kolom berita disini -->
        <div class="column">
          <div class="card">
            <img src="img/drink.png" alt="Resep untukmu" style="width:100%">
            <div class="container">
              <h2>Minuman Sehat</h2>
              <p> Minuman yang sehat adalah minuman yang memiliki kandungan oksigen yang tinggi. Berikut anda bisa melihat berbagai resep minuman sehat yang bisa kalian buat </p> 
              <p><a href="https://superapp.id/blog/resep/resep-makanan-sehat/#:~:text=12%20Resep%20Makanan%20Sehat%20untuk%20Diet%20%26%20Penambah,8.%20Tumis%20Kacang%20Panjang%20selerasa.com%20...%20More%20items"><button class="button">Click here</button></a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
@endsection
