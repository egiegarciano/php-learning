<?php

// Responsible for the "behind-the-scenes" work:
$query = require 'bootstrap.php';

$tasks = $query->selectAll('todos');

require 'index.view.php';