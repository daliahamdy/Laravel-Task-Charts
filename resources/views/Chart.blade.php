<section class="content" style="margin-left:20px;margin-right:20px;margin-top:50px;">

	<label for="cars">Select Chart Style</label>
	<select name="chart" onchange="myFunction()" class="form-control" id="chart" style="width:120px;">
		<option value="pie">Pie</option>
		<option value="column">Column</option>
		<option value="bar">Bar Chart</option>
	</select>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    {{--  Chart Out Put is printinh here  --}}
	
    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
	
	<div class="row justify-content-center">
        <button type="button" class="btn btn-outline-secondary" onclick="window.location='{{ url("index") }}'">View Data</button>
      </div>
</section>

<script>
 function  myFunction() {
var chartType = document.getElementById("chart").value;
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
		text:  "Number Of Empolyess in Each Department"
	},
	axisY: {
		includeZero: true,
	},
	data: [{
		type: chartType,
		indexLabel: "{y}",
		indexLabelPlacement: "inside",
		indexLabelFontWeight: "bolder",
		indexLabelFontColor: "white",
		dataPoints: <?php echo json_encode($data, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>