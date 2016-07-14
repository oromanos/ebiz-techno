<?php
session_start();

unset($_SESSION["username"]);


header("Location:1st.html");
?>