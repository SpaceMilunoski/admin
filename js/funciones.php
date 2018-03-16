var oilCanvas = document.getElementById("oilChart");

Chart.defaults.global.defaultFontFamily = "Lato";
Chart.defaults.global.defaultFontSize = 18;

var oilData = {
    labels: [
        "Licenciaturas Médico Cirujano",
        "Licenciaturas Terapia Física",
        "Ingenierías Biomédica",
        "Ingenierías Biotecnología",
        "Ingenierías Financiera",
        "Ingenierías Mecánica Automotriz",
        "Ingenierías Mecatrónica",
        "Ingenierías Software",
        "Ingenierías Telemática",
        "Especialidades Biotecnología Ambiental",
        "Especialidades Mecatrónica",
        "Especialidades Seguridad Informática",
        "Maestrías Biotecnología",
        "Maestrías Enseñanza de la Ciencias",
        "Maestrías Mecatrónica",
        "Maestrías TICs",
        "Doctorado Biotecnología"
    ],
    <?php $lterapiaFisica=133.3;?>
    datasets: [
        {
            data: [133.3, <?php echo($lterapiaFisica); ?>, 52.2, 51.2, 50.2,50,50,300,50,50,50,50,50,50,50,50,50],
            backgroundColor: [
                "#716DF9",
                "#4931A8",
                "#807EFB",
                "#75E2E4",
                "#48CDD2",
                "#3B444B",
                "#0095B6",
                "#00FF00",
                "#0047AB",
                "#003153",
                "#73C2FB",
                "#002366",
                "#007FFF",
                "#F5F5DC",
                "#990066",
                "#800020",
                "#87CEFF",
                "#008080"
            ],
            borderColor: "black",
            borderWidth: 1
        }]
};

var chartOptions = {
  rotation: -Math.PI,
  cutoutPercentage: 70,
  circumference: Math.PI*2,
  legend: {
    position: 'left'
  },
  animation: {
    animateRotate: false,
    animateScale: true
  }
};

var pieChart = new Chart(oilCanvas, {
  type: 'doughnut',
  data: oilData,
  options: chartOptions
});