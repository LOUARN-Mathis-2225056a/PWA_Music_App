<?php
session_start();

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

