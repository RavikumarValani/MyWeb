<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Martina</title>

    <script type="text/javascript" src="skin/admin/js/jquery-3.6.0.js"></script>
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo "assets/css/shared/style.css" ?>">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo "assets/css/demo_1/style.css" ?>">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    <title></title>
    
</head>
<body>
  
    <div class="container-scroller">
        <!-- top navbar -->
        <?php echo  $this->getChild('header')->toHtml(); ?>
        <div class="page-body-wrapper">
            <!-- sidebar nav -->
            <?php echo $this->getChild('left')->toHtml(); ?>
            <div class="main-panel">
                <div class="content-wrapper">
                    <!-- Page title header starts -->
                    <div class="row page-title-header">
                        <div class="col-md-12">
                            <div class="page-header-toolbar">
                                <div class="filter-wrapper">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Page title header Ends-->
                    <?php echo $this->createBlock('Core\Layout\Message')->toHtml(); ?>
                    <?php echo $this->getChild('content')->toHtml(); ?>
                </div>
                <!-- Stacked bar chart ends -->

                <!-- content-wrapper ends -->
                <!-- footer -->
                <?php echo $this->getChild('footer')->toHtml(); ?>
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    
</body>

</html>