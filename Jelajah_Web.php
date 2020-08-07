<?php

class Jelajah_Web {
    private $judul;
    private $link_url;
    function __construct($in_judul, $in_link_url) {
      $this->set_judul($in_judul);
      $this->set_link_url($in_link_url);
    }
    public function ambil_judul() {
      return $this->judul;
    }
    public function set_judul($in_judul) {
      $this->judul = $in_judul;
    }
    public function ambil_link_url() {
      return $this->link_url;
    }
    public function set_link_url($in_link_url) {
      $this->link_url = $in_link_url;
    }
}

class Tandai_Web {
    private $judul;
    private $link_url;
    function __construct(Jelajah_Web $Jelajah_Web) {
      $this->set_judul($Jelajah_Web);
      $this->set_link_url($Jelajah_Web);
    }
    public function ambil_judul(Jelajah_Web $Jelajah_Web) {
      $Jelajah_Web->ambil_judul($this->judul);
    }
    public function set_judul(Jelajah_Web $Jelajah_Web) {
      $this->judul = $Jelajah_Web->ambil_judul();
    }
    public function ambil_link_url(Jelajah_Web $Jelajah_Web) {
      $Jelajah_Web->set_link_url($this->link_url);
    }
    public function set_link_url(Jelajah_Web $Jelajah_Web) {
      $this->link_url = $Jelajah_Web->ambil_link_url();
    }
}

?>