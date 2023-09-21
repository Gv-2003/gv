<?php
include 'db.php';
if ($_SESSION['isadmin'] !== true) {
  header('location: index1.php');
}
$result = mysqli_query($conn, "SELECT * FROM pent");
?>

<html>

<head>
  <title>admin page</title>
  <link rel="stylesheet" href="admins.css">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
</head>

<body>
  <div class="root">
    <div class="sidebar">
      <div class="fs-2">
        <h1>List</h1>
        <ul>
          <li><a href="#" class="list-shirts">List Shirts</a></li>
          <li><a href="#" class="list-pent">List Pants</a></li>
          <li><a href="#" class="list-tshirt">List T-Shirts</a></li>
          <li><a href="#" class="list-user">List Users</a></li>
          <li><a href="#" class="list-feedback">List User Feedbacks</a></li>
        </ul>
      </div>
      <div class="fs-2">
        <h1>Add</h1>
        <ul>
          <li><a href="#" data-bs-toggle="modal" data-bs-target="#shirtModal">Add Shirts</a></li>
          <li><a href="#" data-bs-toggle="modal" data-bs-target="#pantModal">Add Pants</a></li>
          <li><a href="#" data-bs-toggle="modal" data-bs-target="#tshirtModal">Add T-Shirts</a></li>
        </ul>
      </div><br /><br /><br />
      <div>
        <a href="./signout.php" class="fs-1">
          <h2 style="text-align:center">SIGN OUT</h2>
        </a>
      </div>
    </div>
    <div class="main-section">
      <!-- Modal -->
      <div class="modal fade" id="shirtModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Shirt Modal</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form class='shirt-form' enctype="multipart/form-data">
                <div class="mb-3">
                  <label for="shirt-brand" class="form-label">shirt Brand </label>
                  <input type="text" name="shirt_brand" class="form-control" id="shirt-brand">
                </div>
                <div class="mb-3">
                  <label for="shirt-size" class="form-label">shirt-size </label>
                  <input type="text" class="form-control" name="shirt_size" id="shirt-size">
                </div>
                <div class="mb-3">
                  <label class="shirt-price" for="form-label">shirt-price</label>
                  <input type="number" name="shirt_price" class="form-control" id="shirt-price">
                </div>
                <div class="mb-3">
                  <label class="shirt-img" for="form-label">shirt-Image </label>
                  <input type="file" class="form-control" name="shirt_image" id="shirt-img">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="tshirtModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">tShirt Modal</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form class="tshirt-form" enctype="multipart/form-data">
                <div class="mb-3">
                  <label for="tshirt-brand" class="form-label">tshirt Brand </label>
                  <input type="text" name="tshirt_brand" class="form-control" id="tshirt-brand">
                </div>
                <div class="mb-3">
                  <label for="tshirt-Size" class="form-label">tshirt-size </label>
                  <input type="text" name="tshirt_size" class="form-control" id="tshirt-size">
                </div>
                <div class="mb-3">
                  <label class="tshirt-price" for="form-label">tshirt-price</label>
                  <input type="number" class="form-control" name="tshirt_price" id="tshirt-price">
                </div>
                <div class="mb-3">
                  <label class="tshirt-img" for="form-label">tshirt-Image</label>
                  <input type="file" class="form-label" name="tshirt_image" id="tshirt-img">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="pantModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">pant Modal</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form class="pant-form" enctype="multipart/form-data">
                <div class="mb-3">
                  <label for="pant-brand" class="form-label">pant Brand </label>
                  <input type="text" name="pant_brand" class="form-control" id="pant-brand">
                </div>
                <div class="mb-3">
                  <label for="pant-Size" class="form-label">pant-size </label>
                  <input type="text" class="form-control" id="pant-size">
                </div>
                <div class="mb-3">
                  <label class="pant-price" for="form-label">pant-price</label>
                  <input type="number" class="form-control" id="pant-price">
                </div>
                <div class="mb-3">
                  <label class="pant-img" for="form-label">pant-Image </label>
                  <input type="file" class="form-control" id="pant-img">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="product-display">
      </div>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="./ajax.js"></script>

</html>