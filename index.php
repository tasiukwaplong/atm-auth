<?php require 'head.php'; ?>

<body class="bg-blue-700 text-white">
  <div class="container">
    <div class="row">
      <div class="col-md-12 p-3 text-center">
        <h1>Welcome to Konnect ATM</h1>
        <div class="img-fluid m-4">
          <img src="assets/images/logo.jpg" style="width:200px;">
        </div>
        <small><i>Konnect ATM is a product of Konnect Bank. With our centralized banking solution, you dont have to worry about moving around with multiple ATM cards!</i></small>
      </div>

      <div class="col-md text-center p-4">
        <form action="scan.php">
          <input type="hidden" name="trigger">
          <input type="submit" value="GET STARTED" name="t" class="btn btn-warning btn-lg">
        </form>
      </div>
    </div>
  </div>
</body>
</html>