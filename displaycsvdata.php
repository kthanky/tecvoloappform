<html>
    <head>
        <title>Data</title>
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.1/bootstrap-table.min.css"/>
        <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.1/bootstrap-table.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.1/locale/bootstrap-table-zh-CN.min.js"></script>
        <link href='http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
        <style>
            body{
                background-color:cornflowerblue ;
            }
        </style>
    </head>
    <body>
        <h3 style="font-family:'Cookie';font-size: 55px;text-align: center;">Form Data</h3><br><br>
        <?php
        class readData
        {


            function readCSV($filename)
            {
                $handle = fopen($filename, "r");
                echo '<table class="table table-responsive table-bordered table-hover">';
                echo '<thead style="background-color:black;color: #ffffff"><tr><td>Title</td>';
                echo '<td>First Name</td>';
                echo '<td>Last Name</td>';
                echo '<td>Gender</td>';
                echo '<td>Date Of Birth</td>';
                echo '<td>Email</td>';
                echo '<td>Contact Number</td>';
                echo '<td>Address Line 1</td>';
                echo '<td>Address Line 2</td>';
                echo '<td>Nationality</td>';
                echo '<td>Education Level</td>';
                echo '<td>Education Field</td>';
                echo '<td>Preferred Mode Of Contact</td></tr></thead>';
                echo'<tbody>';
                while ($csvcontents = fgetcsv($handle)) {
                    echo '<tr>';
                    foreach ($csvcontents as $column) {
                        echo "<td>$column</td>";
                    }
                    echo '</tr>';
                }
                echo '</tbody></table>';
                fclose($handle);
            }
        }
        $r=new readData();
        $r->readCSV("formdata.csv");
        ?>
    </body>
</html>