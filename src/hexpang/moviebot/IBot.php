<?php
namespace hexpang\moviebot;

interface IBot{
  public $baseUrl;
  public function downloadTorrent($url, $fileName = null);
  public function loadUrl($url, $cache = false);
  public function loadWithPage($page = 1, $type = 0);
  public function loadTorrentInfo($url);
  public function loadMovieInfo($id);
  public function loadMovies($page, $type = 0);
}
