@extends('layout.template')

@section('content')
<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>SELAMAT DATANG!</h1>
          </div>
          <div class="card">
          <div class="col-md-12 text-center">
            <br><br><br>
            <h4>Tentang Kafe</h4><br>
            <img src="../assets/img/jelova1.jpeg" alt="jelovaCafe" width="800px" height="300px">
          </div>
          <br>
          <div class="col-md-12 text-center">
              <p>
                Nama kafe      : Jelova Cafe and Resto <br>
                Pemilik        : Royani Limbong <br>
                Alamat         : Jl. Sentosa, Ps. Dolok Sanggul, Dolok sanggul, Kabupaten Humbang Hasundutan, Sumatera Utara 22457 <br>
                
              </p>
          </div>
          <br><br>
          <div class="col-md-12 text-center">
            <h4>Jadwal Kafe</h4>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                      <th scope="col">Hari</th>
                      <th scope="col">Jam Buka</th>
                      <th scope="col">Jam Tutup</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                      <td>Senin</td>
                      <td>08.00 AM</td>
                      <td>23.00 PM</td>
                    </tr>
                    <tr>
                      <td>Selasa</td>
                      <td>08.00 AM</td>
                      <td>23.00 PM</td>
                    </tr>
                    <tr>
                      <td>Rabu</td>
                      <td>08.00 AM</td>
                      <td>23.00 PM</td>
                    </tr>
                    <tr>
                      <td>Kamis</td>
                      <td>08.00 AM</td>
                      <td>23.00 PM</td>
                    </tr>
                    <tr>
                      <td>Jumat</td>
                      <td>08.00 AM</td>
                      <td>23.00 PM</td>
                    </tr>
                    <tr>
                      <td>Sabtu</td>
                      <td>08.00 AM</td>
                      <td>23.00 PM</td>
                    </tr>
                    <tr>
                      <td>Minggu</td>
                      <td>08.00 AM</td>
                      <td>23.00 PM</td>
                    </tr>
                </tbody>
            </table>
            <br><br><br>
          </div>
          </div>
        </section>
      </div>
@endsection

