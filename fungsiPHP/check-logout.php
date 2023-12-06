<?php
session_start();

// Hapus sesi atau cookie
session_destroy();

// Redirect ke halaman login setelah logout
header("Location: ../login1.php");