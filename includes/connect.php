<?php

$connect = mysqli_connect('localhost', 'root', '', 'login');

if (!$connect){
  die('nu s-a conectat la db');
}