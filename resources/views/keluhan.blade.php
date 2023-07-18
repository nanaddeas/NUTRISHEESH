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
    <link rel="stylesheet" href="css/csskeluhan">
  </head>
<body>
    <div class="complaint-box">
        <h2>Form Keluhan</h2>
        <form action="#">
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Username:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="complaint">Keluhan:</label>
            <textarea id="complaint" name="complaint" rows="4" required></textarea>
            
            <button type="submit">Kirim</button>
        </form>
    </div>
</body>
</html>
@endsection