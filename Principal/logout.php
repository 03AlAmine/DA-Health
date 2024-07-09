<?php
session_start();
session_unset();
session_destroy();
header("Location: ../Principal/DA.php");
exit();