@extends('admin.main')
@section('content')
<section class="section">

        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Grafik Jumlah Pengunjung</h5>
              <!-- Bar Chart -->
              <canvas id="barChart" style="max-height: 400px;"></canvas>
              <script>
                //ambil data nama pegawai dan kekayaan dari DashboardController di fungsi index
                document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#barChart'), {
                    type: 'bar',
                    data: {
                      labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                      //labels: lbl,
                      datasets: [{
                        label: 'Jumlah Pengunjung',
                        data: [65, 59, 80, 61, 56, 55, 40, 30, 40, 70, 82, 20],
                        //data: hrt,
                        backgroundColor: [
                          'rgba(255, 99, 132, 0.2)',
                          'rgba(255, 159, 64, 0.2)',
                          'rgba(255, 205, 86, 0.2)',
                          'rgba(75, 192, 192, 0.2)',
                          'rgba(54, 162, 235, 0.2)',
                          'rgba(153, 102, 255, 0.2)',
                          'rgba(201, 203, 207, 0.2)',
                          'rgba(200, 155, 86, 0.2)',
                          'rgba(75, 192, 94, 0.2)',
                          'rgba(123, 162, 132, 0.2)',
                          'rgba(167, 102, 167, 0.2)',
                          'rgba(178, 123, 214, 0.2)'
                        ],
                        borderColor: [
                          'rgb(255, 99, 132)',
                          'rgb(255, 159, 64)',
                          'rgb(255, 205, 86)',
                          'rgb(75, 192, 192)',
                          'rgb(54, 162, 235)',
                          'rgb(153, 102, 255)',
                          'rgb(201, 203, 207)',
                          'rgba(200, 155, 86)',
                          'rgba(75, 192, 94)',
                          'rgba(123, 162, 132)',
                          'rgba(167, 102, 167)',
                          'rgba(178, 123, 214)'
                        ],
                        borderWidth: 1
                      }]
                    },
                    options: {
                      scales: {
                        y: {
                          beginAtZero: true
                        }
                      }
                    }
                  });
                });
              </script>
              <!-- End Bar CHart -->

            </div>
          </div>
        </div>

      </div>
    </section>
@endsection