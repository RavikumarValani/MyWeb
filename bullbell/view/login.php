<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="col-md-8 p-5 border border-dark position-absolute top-50 start-50 translate-middle">
        <div class="container">
            <h1 style="margin-bottom: 40px;">Login to your account</h1>
        </div>
        <form class="row g-3" style="padding-top: 0px;" method="POST" action="<?php echo $this->getSubmitUrl(); ?>">
            <div class="col-md-4">
                <label for="FirstName" class="form-label"><strong>User Name*</strong></label>
                <input type="text" class="form-control" id="UserName" name="admin[username]">
            </div>
            <div class="col-6">
                <label for="Password" class="form-label"><strong> Password*</strong></label>
                <input type="password" class="form-control" id="Password" name="admin[password]">
            </div>
            <div class="col-12">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>

        </form>
    </div>
</body>

</html>