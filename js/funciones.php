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
    <?php
    $lMedicoCirujano=50; 
    $lTerapiaFisica=133.3;
    $iBiomedica=50;
    $iBiotecnologia=50;
    $iFinanciera=50;
    $iMecanicaAutomotriz=50;
    $iMecatronica =50;
    $iSoftware=50;
    $iTelematica=50;
    $eBiotecnologiaAmbiental=50;
    $eMecatronica=50;
    $eSeguridadInformatica=50;
    $mBiotecnologia=50;
    $mEnsenanzaCiencias=50;
    $mMecatronica=50;
    $mTics=50;
    $dBiotecnologia=50;?>
    datasets: [
        {
            data: [<?php echo($lMedicoCirujano); ?>,
                <?php echo($lTerapiaFisica); ?>,
                <?php echo($iBiomedica); ?>,
                <?php echo($iBiotecnologia); ?>,
                <?php echo($iFinanciera); ?>,
                <?php echo($iMecanicaAutomotriz); ?>,
                <?php echo($iMecanicaAutomotriz); ?>,
                <?php echo($iSoftware); ?>,
                <?php echo($iTelematica); ?>,
                <?php echo($eBiotecnologiaAmbiental); ?>,
                <?php echo($eMecatronica); ?>,
                <?php echo($eSeguridadInformatica); ?>,
                <?php echo($mBiotecnologia); ?>,
                <?php echo($mEnsenanzaCiencias); ?>,
                <?php echo($mMecatronica); ?>,
                <?php echo($mTics); ?>,
                <?php echo($dBiotecnologia); ?>],
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

 google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Año', 'Ingresos', 'Gastos'],
          ['2004',  1000,      400],
          ['2005',  1170,      460],
          ['2006',  660,       1120],
          ['2007',  1030,      540]
        ]);
        var options = {
          title: 'Balance de la Compañía'
        };
        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }