
<?php
$pageTitle="Admin dasboard";
include "header.php";
include "./dbconnect.php";
include  './dbconnectPDO.php';
$query = "SELECT * FROM water_consumer";
$selected = $connPDO->query($query);
$chart_data = '';
while ($row = $selected->fetch(PDO::FETCH_ASSOC)){
    $chart_data .= "{Year:'".$row['period']."', Consumption:".$row['consumption'].", Population:".$row['population']."}, ";
}
$chart_data = substr($chart_data, 0, -2);
?>

<div class="row">
    <div class="col-xl-5 col-md-6">
        <div class="card mini-stat m-b-30">
            <div class="p-3 bg-primary text-white">
                <div class="mini-stat-icon">
                    <i class=" mdi mdi-engine-outline float-right mb-0"></i>
                </div>
                <h6 class="text-uppercase mb-0">Connected devices</h6>
            </div>

            <div class="card-body">

                <div class="mt-4 text-muted">
                    <div class="float-right">
                        <?php
                        //$conn = new mysqli("localhost","root","","iot_water");

                        if ($conn -> connect_errno) {
                            echo "Failed to connect to MySQL: " . $conn->connect_error;
                            exit();
                        }
                        $sql = "SELECT * FROM `device`";
                        $result = $conn -> query($sql);
                        $count=0;
                        if($result->num_rows>0)
                        {
                            $count=mysqli_num_rows($result);

                        }
                       ?>
                        <p><a href="monitor_device.php"> device details</a></p>

                    </div>
                    <h5 class="m-0"> <?php echo $count;?> IoT Water meters<i class="text-success ml-2"></i></h5>

                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-5 col-md-6">
        <div class="card mini-stat m-b-30">
            <div class="p-3 bg-primary text-white">
                <div class="mini-stat-icon">
                    <i class="ion-person-stalker float-right mb-0"></i>
                </div>
                <h6 class="text-uppercase mb-0"> Number of users</h6>
            </div>
            <div class="card-body">

                <div class="mt-4 text-muted">
                    <div class="float-right">
                        <p class="m-0">L</p>
                    </div>
                    <h5 class="m-0">2</h5>

                </div>
            </div>
        </div>
    </div>

</div>

<div class="row">

    <div class="col-xl-10">
        <div class="card m-b-30">
            <div class="card-body">



                <!--<div id="morris-line-examples" style="height: 300px"></div>-->
                <div id="morris-bar-example" style="height: 300px"></div>

            </div>
        </div>
    </div> <!-- end col -->

</div> <!-- end row -->

<?php
include "footer.php";
?>
<script>

    /*
     Template Name: Drixo - Bootstrap 4 Admin Dashboard
     Author: Themesdesign
     Website: www.themesdesign.in
     File: Morris init js
     */

    !function($) {
        "use strict";

        var MorrisCharts = function() {};

        //creates Bar chart
        MorrisCharts.prototype.createBarChart  = function(element, data, xkey, ykeys, labels, lineColors) {
            Morris.Bar({
                element: element,
                data: data,
                xkey: xkey,
                ykeys: ykeys,
                labels: labels,
                gridLineColor: '#eef0f2',
                barSizeRatio: 0.4,
                resize: true,
                hideHover: 'auto',
                barColors: lineColors
            });
        },

            MorrisCharts.prototype.init = function() {

                //creating bar chart
                var $barData = [<?php echo $chart_data; ?>];
                this.createBarChart('morris-bar-example', $barData, 'Year', ['Consumption', 'Population'], ['Water Consumption', 'Population size'], ['#508aeb', '#fcc24c']);

            },
            //init
            $.MorrisCharts = new MorrisCharts, $.MorrisCharts.Constructor = MorrisCharts
    }(window.jQuery),

//initializing
        function($) {
            "use strict";
            $.MorrisCharts.init();
        }(window.jQuery);
</script>
