<div class="main-panel">
	<div class="content-wrapper">
		<div class="col-lg-6 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Total Pemasukkan Tiap Bulan</h4>
					<canvas id="Pemasukkan" style="height:230px"></canvas>
				</div>
			</div>
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Total Pengeluaran Tiap Bulan</h4>
          <canvas id="pengeluaran" style="height:230px"></canvas>
        </div>
      </div>
		</div>
      
		<div class="col-lg-12 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Pendapatan Terbesar</h4>
					<canvas id="Supply" style="height:230px"></canvas>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
  var BalokChart = document.getElementById("Pemasukkan").getContext('2d');
  var Pemasukkan = new Chart(BalokChart, {
    type: 'bar',
    data: {
      labels: ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Ags", "Sep", "Okt", "Nov", "Des"],
      datasets: [{
        label: 'Juta',
        data: [12, 19, 3, 5, 2, 3, 20, 15, 9, 2, 1, 18],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)'
        ],
        borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });

</script>

<script>
  var BalokChart2 = document.getElementById("pengeluaran").getContext('2d');
  var pengeluaran = new Chart(BalokChart2, {
    type: 'bar',
    data: {
      labels: ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Ags", "Sep", "Okt", "Nov", "Des"],
      datasets: [{
        label: 'Juta',
        data: [12, 19, 3, 5, 2, 3, 20, 15, 9, 2, 1, 18],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)'
        ],
        borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });

</script>
<script>
  var DonatChart = document.getElementById("Supply").getContext('2d');
  var LineChart = new Chart(DonatChart, {
    type: 'doughnut',
    data: {
      labels: ["SMKN 1 Bawang", "SMKN 1 Brambang", "SMAN 1 Bawang", "SMAN 1 Brambang", "SMP IT Permata Hati"],
      datasets: [{
        data: [300, 50, 100, 180, 70],
        backgroundColor: [
          'rgba(255, 99, 132, 0.7)',
          'rgba(0, 90, 90, 0.7)',
          'rgba(255, 206, 86, 0.7)',
          'rgba(75, 192, 192, 0.7)',
          'rgba(153, 102, 255, 0.7)'],
        hoverBackgroundColor: [
       	  'rgba(255, 99, 132, 1)',
          'rgba(0, 90, 90, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)']
      }]
    },
    options: {
      responsive: true
    }
  });

</script>