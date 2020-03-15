diff --git "a/E:\\xampp\\htdocs\\userregistration\\home.php" "b/C:\\Users\\lenovo\\AppData\\Local\\Temp\\TortoiseGit\\home-9c35380.001.php"
index e69de29..3e0a815 100644
--- "a/E:\\xampp\\htdocs\\userregistration\\home.php"
+++ "b/C:\\Users\\lenovo\\AppData\\Local\\Temp\\TortoiseGit\\home-9c35380.001.php"
@@ -0,0 +1,83 @@
+<?php
+session_start();
+if(!isset($_SESSION['username'])){
+    header('location:login.php');
+}
+
+?>
+<html>
+<head>
+<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
+<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
+<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
+<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
+<link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
+<link rel="stylesheet" href="style.css">
+<title> Home Page</title>
+</head>
+<body>
+<div class="container">
+<a class="float-right" href="logout.php">LOGOUT</a>
+<h1>Welcome <?php  echo $_SESSION['username']; ?></h1>
+</div>
+<div class="container">
+        <div class="table-wrapper">
+            <div class="table-title">
+                <div class="row">
+                    <div class="col-sm-8"><h2>Real Estate <b>Details</b></h2></div>
+                    <div class="col-sm-4">
+                        <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
+                    </div>
+                </div>
+            </div>
+            <table class="table table-bordered">
+                <thead>
+                    <tr>
+                        <th>Real estate</th>
+                        <th>Type</th>
+                        <th>Price</th>
+                        <th>Actions</th>
+                    </tr>
+                </thead>
+                <tbody>
+                    <tr>
+                        <td>estate</td>
+                        <td>apartment</td>
+                        <td>88***88***</td>
+                        <td>
+							<a class="add" title="Add" data-toggle="tooltip"><i class="material-icons"></i></a>
+                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons"></i></a>
+                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons"></i></a>
+                        </td>
+                    </tr>
+                    <tr>
+                        <td>estate</td>
+                        <td>apartment</td>
+                        <td>88***88***</td>
+                        <td>
+							<a class="add" title="Add" data-toggle="tooltip"><i class="material-icons"></i></a>
+                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons"></i></a>
+                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons"></i></a>
+                        </td>
+                    </tr>
+                    <tr>
+                        <td>estate</td>
+                        <td>apartment</td>
+                        <td>88***88***</td>
+                        <td>
+							<a class="add" title="Add" data-toggle="tooltip"><i class="material-icons"></i></a>
+                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons"></i></a>
+                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons"></i></a>
+                        </td>
+                    </tr>      
+                </tbody>
+            </table>
+        </div>
+    </div>    
+<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
+<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
+<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
+<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
+</body>
+
+</html>
\ No newline at end of file
