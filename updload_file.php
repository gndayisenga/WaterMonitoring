<?php
include"./dbconnect.php";
?>
    <html>
    <body>
    <div id="wrapper">
        <form method="post" action="./updload_file.php" enctype="multipart/form-data">
            <input type="file" name="file"/>
            <input type="submit" name="submit_file" value="Submit"/>
        </form>
    </div>
    </body>
    </html>
<?php
 $count=0;
if(isset($_POST["submit_file"]))
{
    $file = $_FILES["file"]["tmp_name"];
    $file_open = fopen($file,"r");
    while(($csv = fgetcsv($file_open, 1000, ",")) !== false)
    {
        $month_1 = $csv[0];
        $month_2 = $csv[1];
        $month_3 = $csv[2];
        if( $count!=0)
        {
              //echo "<pre>".$branch_name."  ". $month_1."  ".$month_2."</pre><br>";
        $sql="INSERT INTO `water_consumer`(`period`, `Consumption`, `population`)
        VALUES ('$month_1','$month_2','$month_3')";
        if ($conn->query($sql) === TRUE) {

            ?>
            <script>
                window.alert('New dataset inserted successfully');
                window.location = 'updload_file.php';
            </script>

            <?php
        }
        else {

            echo "<p style='color: #b21f2d'>"."dataset not inserted".$conn->error."</p><br>";
        }
        }
        $count++;
    }
    $count=0;
}
?>