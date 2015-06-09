<?php get_header( ); ?>
  <?php

          $json = file_get_contents("http://wordpress.sucuri.net/api/?v1=1&p=wordpress&a=get_logs&l=9000&k=34ae0d1978d07313bd97a5aac3eb43b4");
          $data =  json_decode($json);

          $data = $data->output;

            $i = 0;
            if (count($data)) {

                    // Open the table
                    echo "<table class='table table-striped'>";

                    // Cycle through the array
                    foreach ($data as $idx => $output) {
                      $i++;

                        // Output a row
                        echo "<tr>";
                        echo "<td>$output</td>";

                        echo "</tr>";
                    }

                    // Close the table
                    echo "</table>";
                }
         
        ?>
<?php get_footer( ); ?>