<?php

$conn = mysqli_connect('localhost', 'root', '', 'commentsection');

if (!$conn) {
    die("Connection faield: ".mysqli_connect_error());
}