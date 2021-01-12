<?php

const SERVER = "localhost";
const LOGIN = "root";
const PASS = "root";
const DB = "december10";

$connect = mysqli_connect (SERVER, LOGIN, PASS, DB) or die ("Ошибка соединения!");
