<?php

  $jsonurl = "https://api.whitehouse.gov/v1/petitions/2440436.json";
  $json = file_get_contents($jsonurl);
  $json_object = json_decode($json);
  var_dump($json_object);