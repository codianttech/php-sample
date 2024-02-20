<?php
if (empty($_SESSION['email'])) {
    header("location:./");
}