<?php
session_start();
session_destroy();
return header('location:../0-Index.html');
?>