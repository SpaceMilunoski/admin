var MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
		var config = {
			type: 'line',
			data: {
				labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
				datasets: [{
					label: 'My First dataset',
					backgroundColor: window.chartColors.red,
					borderColor: window.chartColors.red,
					data: [
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor()
					],
					fill: false,
				}, {
					label: 'My Second dataset',
					fill: false,
					backgroundColor: window.chartColors.blue,
					borderColor: window.chartColors.blue,
					data: [
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor()
					],
				}]
			},
			options: {
				responsive: true,
				title: {
					display: true,
					text: 'Chart.js Line Chart'
				},
				tooltips: {
					mode: 'index',
					intersect: false,
				},
				hover: {
					mode: 'nearest',
					intersect: true
				},
				scales: {
					xAxes: [{
						display: true,
						scaleLabel: {
							display: true,
							labelString: 'Month'
						}
					}],
					yAxes: [{
						display: true,
						scaleLabel: {
							display: true,
							labelString: 'Value'
						}
					}]
				}
			}
		};

		window.onload = function() {
			var ctx = document.getElementById('myChart').getContext('2d');
			window.myLine = new Chart(ctx, config);
		};

		document.getElementById('randomizeData').addEventListener('click', function() {
			config.data.datasets.forEach(function(dataset) {
				dataset.data = dataset.data.map(function() {
					return randomScalingFactor();
				});

			});

			window.myLine.update();
		});

		var colorNames = Object.keys(window.chartColors);
		document.getElementById('addDataset').addEventListener('click', function() {
			var colorName = colorNames[config.data.datasets.length % colorNames.length];
			var newColor = window.chartColors[colorName];
			var newDataset = {
				label: 'Dataset ' + config.data.datasets.length,
				backgroundColor: newColor,
				borderColor: newColor,
				data: [],
				fill: false
			};

			for (var index = 0; index < config.data.labels.length; ++index) {
				newDataset.data.push(randomScalingFactor());
			}

			config.data.datasets.push(newDataset);
			window.myLine.update();
		});

		document.getElementById('addData').addEventListener('click', function() {
			if (config.data.datasets.length > 0) {
				var month = MONTHS[config.data.labels.length % MONTHS.length];
				config.data.labels.push(month);

				config.data.datasets.forEach(function(dataset) {
					dataset.data.push(randomScalingFactor());
				});

				window.myLine.update();
			}
		});

		document.getElementById('removeDataset').addEventListener('click', function() {
			config.data.datasets.splice(0, 1);
			window.myLine.update();
		});

		document.getElementById('removeData').addEventListener('click', function() {
			config.data.labels.splice(-1, 1); // remove the label first

			config.data.datasets.forEach(function(dataset) {
				dataset.data.pop();
			});

			window.myLine.update();
		});












		var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: <?php echo json_encode($Meses,JSON_PRETTY_PRINT); ?>,
        datasets: [{
            label:  "Licenciaturas Médico Cirujano",
            backgroundColor: "#716DF9",
            borderColor: "#716DF9",
            data: [0, 15, 3, 12, 2, 30, 45],
            fill: false
        },{
            label: "Licenciaturas Terapia Física",
            backgroundColor: "#4931A8",
            borderColor: "#4931A8",
            data: [0, 10, 5, 2, 20, 30, 45,76,8],
            fill: false
        },{
            label:  "Ingenierías Biomédica",
            backgroundColor: "#807EFB",
            borderColor: "#807EFB",
            data: [0, 10, 5, 2, 20, 30, 45,76,8],
            fill: false
        },{
            label:"Ingenierías Biotecnología",
            backgroundColor: "#75E2E4",
            borderColor: "#75E2E4",
            data: [0, 10, 5, 2, 20, 30, 45,76,8],
            fill: false
        },{
            label: "Ingenierías Financiera",
            backgroundColor: "#48CDD2",
            borderColor: "#48CDD2",
            data: [0, 10, 5, 2, 20, 30, 45,76,8],
            fill: false
        },{
            label: "Ingenierías Mecánica Automotriz",
            backgroundColor: "#3B444B",
            borderColor: "#3B444B",
            data: [0, 10, 5, 2, 20, 30, 45,76,8],
            fill: false
        },{
            label: "Ingenierías Mecatrónica",
            backgroundColor: "#0095B6",
            borderColor: "#0095B6",
            data: [0, 10, 5, 2, 20, 30, 45,76,8],
            fill: false
        },{
            label: "Ingenierías Software",
            backgroundColor: "#00FF00",
            borderColor: "#00FF00",
            data: [0, 10, 5, 2, 20, 30, 45,76,8],
            fill: false
        },{
            label: "Ingenierías Telemática",
            backgroundColor:"#0047AB",
            borderColor:"#0047AB",
            data: [0, 10, 5, 2, 20, 30, 45,76,8],
            fill: false
        },{
            label: "Especialidades Biotecnología Ambiental",
            backgroundColor:"#003153",
            borderColor: "#003153",
            data: [0, 10, 5, 2, 20, 30, 45,76,8],
            fill: false
        },{
            label: "Especialidades Mecatrónica",
            backgroundColor: "#73C2FB",
            borderColor: "#73C2FB",
            data: [0, 10, 5, 2, 20, 30, 45,76,8],
            fill: false
        },{
            label: "Especialidades Seguridad Informática",
            backgroundColor: "#002366",
            borderColor: "#002366",
            data: [0, 10, 5, 2, 20, 30, 45,76,8],
            fill: false
        },{
            label: "Maestrías Biotecnología",
            backgroundColor: "#007FFF",
            borderColor: "#007FFF",
            data: [0, 10, 5, 2, 20, 30, 45,76,8],
            fill: false
        },{
            label: "Maestrías Enseñanza de la Ciencias",
            backgroundColor: "#000641",
            borderColor:"#000641",
            data: [0, 10, 5, 2, 20, 30, 45,76,8],
            fill: false
        },{
            label: "Maestrías Mecatrónica",
            backgroundColor:"#990066",
            borderColor: "#990066",
            data: [0, 10, 5, 2, 20, 30, 45,76,8],
            fill: false
        },{
            label: "Maestrías TICs",
            backgroundColor: "#800020",
            borderColor: "#800020",
            data: [0, 10, 5, 2, 20, 30, 45,76,8],
            fill: false
        },{
            label: "Doctorado Biotecnología",
            backgroundColor: "#87CEFF",
            borderColor: "#87CEFF",
            data: [0, 10, 5, 2, 20, 30, 45,76,8],
            fill: false
        }]
    },

    // Configuration options go here
    options: {}
});