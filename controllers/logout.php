<?php
session_start();
// permet de detruir la variable session
session_destroy();
header('Location: /');