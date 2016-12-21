<!DOCTYPE html>
<html lang="en"> 
<head>
<title>Dashboard</title>
<link rel="shortcut icon" href="{{ asset("/public/assets/backend/images/favicon.png") }}" type="image/x-icon" />
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<!-- Load Datepicker CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset("/public/assets/backend/css/bootstrap-datepicker.css") }}" media="screen">

<!-- Load Data Table CSS -->
<link rel="stylesheet" href="{{ asset("/public/assets/backend/css/vendors/jquery.dataTables.min.css") }}" media="screen">

<!-- Load the site CSS after Boostrap's to override -->
<link rel="stylesheet" type="text/css" href="{{ asset("/public/assets/backend/css/main.min.css") }}" media="screen">

<!-- Load Font Awesome CSS -->
<link rel="stylesheet" href="{{ asset("/public/assets/backend/css/vendors/font-awesome.min.css") }}" media="screen">

<!--[if lt IE 9]>
  	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body>
<div id="wrapper">

    <!-- Sidebar -->
    @include('layout.admin.sidebar')

    <!-- BEGIN OF PAGES -->
    <div id="page-content-wrapper">
        
        <!-- Sidebar -->
        @include('layout.admin.topbar')
        
        <!-- Content -->
        @yield('content')
    </div>
    <!-- END OF PAGES -->

</div>
</body>

<!-- Load jQuery -->
<script src="{{ asset("/public/assets/backend/js/vendors/jquery-1.12.1.min.js") }}" type="text/javascript"></script>

<!-- Load Bootstrap JavaScript -->
<script src="{{ asset("/public/assets/backend/js/vendors/bootstrap.min.js") }}" type="text/javascript"></script>

<!-- Load DatePicker Js -->
<script src="{{ asset("/public/assets/backend/js/vendors/bootstrap-datepicker.min.js") }}"></script>

<!-- Load Data Table Js -->
<script src="{{ asset("/public/assets/backend/js/vendors/jquery.dataTables.min.js") }}"></script>

<!-- Load custom.js -->
<script src="{{ asset("/public/assets/backend/js/scripts.min.js") }}" type="text/javascript"></script>

<!-- Load Chart Js -->
<script src="{{ asset("/public/assets/backend/js/vendors/Chart.bundle.min.js") }}"></script>
<script type="text/javascript">
var ctx = document.getElementById("vendor");
var vendor = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["BR", "CAT", "DEC", "PH", "SOU", "ENT", "INV", "PB", "VE", "VID", "JEW", "WA", "WP", "OT"],
        datasets: [{
            label: 'Vendors',
            data: [12, 16, 7, 14, 2, 6],
            backgroundColor: [
                'rgba(241, 80, 70, 0.6)',
                'rgba(74, 131, 198, 0.6)',
                'rgba(137, 179, 229, 0.6)',
                'rgba(255, 216, 52, 0.6)',
                'rgba(153, 102, 255, 0.6)',
                'rgba(255, 159, 64, 0.6)'
            ],
            borderColor: [
                'rgba(241, 80, 70, 1)',
                'rgba(74, 131, 198, 1)',
                'rgba(137, 179, 229, 1)',
                'rgba(255, 216, 52, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        legend: {
            display: false
        },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>
<script type="text/javascript">
	// Bar Chart Region
	var region = {
        type: 'pie',
        data: {
            datasets: [{
                data: [500, 400, 200, 50],
                backgroundColor: [
                    "#f15c4f",
                    "#6982c1",
                    "#f89821",
                    "#f7d63c"

                ],
                hoverBackgroundColor: [
                    "#f06e63",
                    "#7d94ce",
                    "#f69f33",
                    "#f6d849"
                ],
                label: 'Dataset 1'
            }],
            labels: [
                "JABAR",
                "JATIM",
                "JATENG",
                "BALI"
            ]
        },
        options: {
            responsive: true
        }
    };
    window.onload = function() {
        var ctx = document.getElementById("chart-area").getContext("2d");
        window.myPie = new Chart(ctx, region);
    };
    var colorNames = Object.keys(window.chartColors);
    // Bar Chart Customer Region
	var myBarChart = new Chart(ctx, {
	    type: 'bar',
	    data: data,
	    options: options
	});
</script>

</html>
