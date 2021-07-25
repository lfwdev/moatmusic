<?php

namespace App\Moat;

use Illuminate\Support\Facades\Http;

class Artists extends Moat
{
    public function fecth() {
        return  Http::withHeaders( $this->headers )->get( $this->uri )->body();
    }
    public function asArray() {
        return json_decode(strtr($this->fecth(),['}]' => '}', '[{' => '{']));
    }
}