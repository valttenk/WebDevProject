<?php
include 'Scripts/query.php';
session_start();

if (session_destroy()) {
	header('Location: ../frontpage.php');
}