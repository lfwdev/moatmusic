<?php

namespace App\Moat;

use Illuminate\Support\Facades\Http;

class Artists extends Moat
{
    private $artists;

    public function __construct()
    {
        $this->setArtists();
    }

    private function setArtists()
    {
        $this->artists = $this->asArray();
    }

    public function getArtists()
    {
        return $this->artists;
    }

    public function fetch() {
        return  Http::withHeaders( $this->headers )->get( $this->uri )->body();
    }

    public function asArray() {
        return json_decode(strtr($this->fetch(),['}]' => '}', '[{' => '{']));
    }

    public function fetchDataLinkById($id) {
        return  Http::withHeaders( $this->headers )->get( $this->uri . '?id=' . $id)->object();
    }
}