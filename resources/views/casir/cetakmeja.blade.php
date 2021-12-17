<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Halaman Struk</title>
  </head>
  <body>
      <div class="form-grup">
        <h4 style="text-align : center"><b>JELOVA CAFE AND RESTO</b></h4>
        <h6 style="text-align : center">Bukti Pembayaran</h6>
        <table class="table" style="width:500px" align="center">
          <thead class="thead-dark" >
              <tr>
                <th scope="col">Nama Pesanan</th>
                <th scope="col">Porsi</th>
                <th scope="col">Total Harga</th>
              </tr>
          </thead>
          <tbody>
            @php($total = 0)
              @foreach($cetakfood as $item)
              <tr>
                  <td>{{$item->food['food_name']}}</td>
                  <td>{{$item->porsi_makanan}}</td>
                  <td>{{$item->porsi_makanan * $item->food['price']}}</td>
              </tr>
              @php($total += $item->porsi_makanan * $item->food['price'])
              @endforeach

              @foreach($cetakdrink as $item)
              <tr>
                  <td>{{$item->drinks['drink_name']}}</td>
                  <td>{{$item->porsi_minuman}}</td>
                  <td>{{$item->porsi_minuman * $item->drinks['price']}}</td>
              </tr>
              @php($total += $item->porsi_minuman * $item->drinks['price'])
              @endforeach
              <tr>
                <th>Total Harga </th>
                <th>:</th>
                <th>{{ $total }}</th>
              </tr>
          </tbody>
          <br>
    </table>
    <br>
    <h5 style="text-align : center"><i>"Terimakasih Sudah Berkunjung ! "</i></h5>
      </div>
  
      <script type="text/javascript">
          window.print();
      </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>