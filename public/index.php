<?php
  require_once("socrata.php");
  function array_get($needle, $haystack) {
    return (in_array($needle, array_keys($haystack)) ? $haystack[$needle] : NULL);
  }
  $view_uid = "u4d7-xz8k";
  $root_url = "data.cdc.gov";
  $app_token = "bjp8KrRvAPtuf809u1UXnI0Z8";
  $response = NULL;
  
  //Swap the comments to see the difference between in constructors
  //$socrata = new Socrata($root_url, $app_token);
  $socrata = new Socrata($root_url, $app_token, "","",20000);
  
  //uncomment so you can see the difference in limits
  //Remeber to change the offset and limit BEFORE you get
  //$socrata->set_limit(5000);
  
  
  $response = $socrata->get($view_uid);
  $total = 0;

?>
<html>
  <head>
    <title>Leading Cause of Death Info</title>
  </head>
  <body>
    <h1>Leading Cause of Death Info</h1>

      <h2>Results</h2>

      <?# Create a table for our actual data ?>
      <table border="1">
        <?# Print rows ?>
        <?php foreach($response as $row) { ?>
          <tr>
            <td><?= $row["_113_cause_name"] ?></td>
            <td><?= $row["aadr"] ?></td>
            <td><?= $row["cause_name"] ?></td>
            <td><?= $row["deaths"] ?></td>
            <td><?= $row["state"] ?></td>
            <td><?= $row["year"] ?></td>
            </tr>
        <?php $total++;}  ?>
      </table>
      <?php echo "Total entries: $total"; ?>
      

      <!--<h3>Raw Response</h3>-->
     <!--<pre><?//= var_dump($response) ?></pre>-->
  </body>
</html>