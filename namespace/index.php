<?php

require_once 'app/init.php';

use app\service\user as serviceuser;
use app\produk\user as produkuser;
new serviceuser();
echo "<br>";
new produkuser();
