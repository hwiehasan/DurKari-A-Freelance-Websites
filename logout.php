<?php
session_start();
session_destroy();

exit(header("Location: login.html"));

?>