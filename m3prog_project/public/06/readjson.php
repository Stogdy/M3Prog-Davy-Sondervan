<?php


$stedenRead =json_decode(jsonString)


print_r($stedenRead)


$json = '{
    "studenten": [
      {
        "name": "mario",
        "gemiddeldCijfer": 7.5
      },
      {
        "name": "wario",
        "gemiddeldCijfer": 4.5
      }
    ]
  }';


  echo "br>";
  echo $dataObject->studenten[0]->name;

  