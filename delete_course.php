<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("location:login.php");
    exit;
}

if (isset($_GET['course_id'])) {
    $course_id = $_GET['course_id'];

    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "school_project";

    $data = mysqli_connect($host, $username, $password, $db);

    // Perform the course deletion
    $sql = "DELETE FROM courses WHERE id = $course_id";
    $result = mysqli_query($data, $sql);

    if ($result) {
        header("location:view_courses.php");
    } else {
        $_SESSION['message'] = "Error deleting the course: " . mysqli_error($data);
    }

    header("location:view_courses.php"); // Redirect back to the courses list page
}
?>
