<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Registration Form</title>
  </head>
  <body>
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h1>Student Registration Form</h1>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" placeholder="Enter your name" class="form-control">

                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="Enter your email" class="form-control">

                            <label for="phone">Phone</label>
                            <input type="number" id="phone" name="phone" placeholder="Enter your phone" class="form-control">

                            <label for="img">Select a Image</label>
                            <input type="file" id="img" name="img" placeholder="Enter your Image" class="form-control">

                            <label for="address">Address</label>
                            <textarea name="address" id="address" class="form-control">
                            
                            </textarea>
                            <br>
                            <input type="submit"  name="btnsubmit" value="Register" class="btn btn-info form-control">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>