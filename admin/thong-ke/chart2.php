<!DOCTYPE html>
<html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<body>

<canvas id="myChart" style="width:100%;max-width:900px"></canvas>

<script>
var xValues = [
    <?php
        foreach ($hang_hoa as $key => $value) {
           echo "'" . $value['ten_hh'] . "',";
        }
    ?>
];
var yValues = [
    <?php
        foreach ($hang_hoa as $key => $value) {
           echo "'" . $value['so_luot_xem'] . "',";
        }
    ?>
];
var barColors = ["red", "green", "blue", "orange", "brown"];

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Top 5 sản phẩm có lượt xem cao nhất"
    }
  }
});
</script>
<a class="btn bg-primary text-white" href="index.php">Quay lại</a>
</body>
</html>
