<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

public function vhk(){
$shifts = Shift::all();

$shifts->every(2);

foreach ($shifts as $shift) {
    echo $shift->typed;
}
}