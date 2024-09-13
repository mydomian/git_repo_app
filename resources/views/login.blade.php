<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login with github</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container">
  <div class="row d-flex justify-content-center my-5">
    <div class="col-sm-6 ">
        <div class="card ">
            <div class="card-header text-center">
              <span class="text-info">SIGN IN WITH GITHUB</span>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-center align-items-center">
                    <img width="120px" src="data:image/png;base64,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" alt="">
                </div>
                <div class="d-flex justify-content-center align-items-center my-2">
                    <a href="{{ route('auth.redirect') }}" class="btn btn-md btn-dark">Click to sign in</a>
                </div>
            </div>
          </div>
    </div>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
