@extends ("layout.master")

@section("contenido")

<?php
session_destroy();
redirect("login.php");
?>

@endsection