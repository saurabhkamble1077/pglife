<?php
$conn = mysqli_connect("sql6.freesqldatabase.com", "sql6516414", "YwsJFvaItY", "sql6516414");

if (mysqli_connect_errno()) {
    // Throw error message based on ajax or not
    echo "Failed to connect to MySQL! Please contact the admin.";
    return;
}
