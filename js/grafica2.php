<?php $Meses =["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"]; 
$jsonArray = array("meses"=>$Meses);?>
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