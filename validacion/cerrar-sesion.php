<?php
session_start();
session_destroy();
header("Location: ../app/ingreso.php");