<?php

define('MB', 1048576);

function filterRequest($param) {
  return isset($_POST[$param]) ? htmlspecialchars(trim($_POST[$param])) : '';
}

function filterRequestGet($requestName) {
    return htmlspecialchars(strip_tags($_GET[$requestName]));
}