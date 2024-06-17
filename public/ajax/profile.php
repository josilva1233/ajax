<?php

require "../../config.php";

use app\models\Profile;

#atrasar a chamada em 3 segundos
sleep(3);

$profile = new Profile;

echo json_encode($profile->all());
