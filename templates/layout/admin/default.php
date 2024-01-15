<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Admin - Dashboard HTML Template</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="/admin/css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="/admin/css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
   
    <link href="/admin/css/theme.css" rel="stylesheet">
    <link href="/admin/css/vendor.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/admin/css/templatemo-style.css">
    <link rel="stylesheet" href="/admin/css/style_modify.css">
    <script src="/admin/js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
</head>
<body>
    <div class="main">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </div>
   
    <script src="/admin/js/moment.min.js"></script>
    <!-- https://momentjs.com/ -->
    <script src="/admin/js/Chart.min.js"></script>
   <!-- http://www.chartjs.org/docs/latest/ -->
   <script src="/admin/js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script src="/admin/js/tooplate-scripts.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/12.3.1/classic/ckeditor.js"></script>
    <?= $this->Html->script('/admin/js/jquery.validate.min.js') ?>
    <script src="/admin/js/setting.js"></script>
    <script>
        if(typeof barChart != "undefined"){
            Chart.defaults.global.defaultFontColor = 'white';
            let ctxLine,
                ctxBar,
                ctxPie,
                optionsLine,
                optionsBar,
                optionsPie,
                configLine,
                configBar,
                configPie,
                lineChart;
            barChart, pieChart;
            // DOM is ready
            $(function () {
                drawLineChart(); // Line Chart
                drawBarChart(); // Bar Chart
                drawPieChart(); // Pie Chart

                $(window).resize(function () {
                    updateLineChart();
                    updateBarChart();                
                });
            })
        }
        
    </script>
</body>
</html>
