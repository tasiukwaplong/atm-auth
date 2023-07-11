<?php require 'head.php'; ?>

<body class="bg-blue-700 text-white">
  <div class="container text-center">
    <img class="rounded-circle" src="assets/images/thumb.jpeg" style="width:200px;">
    <h3>Place your finger on the fingerprint sensor</h3>
    <div class="alert alert-danger">
      Authentication error: Thumb print not recognized. 
    </div>

    <div class="alert alert-success">
      Authentication success. Processing....
      <a href="dashboard.php">menu</a>
    </div>
  </div>
</body>
</html>