<?php $collection = $this->getCollection();  ?>
<?php $filterData = $this->getFilteredData();  ?>
<?php 
if (isset($_GET['name'])) {
    if ($_GET[$_GET['name']] == 1) { ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert" onload="messageHide()">
            <strong>Success!</strong> The item was <?php echo $_GET['name'] ?>.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php } else { ?>

        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> There was an error to processing your request.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
<?php }
} ?>
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12 grid-margin">

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3">
                            <h4 class="card-title">Lookup Items</h4>
                            <a class="btn btn-primary btn-small" href="<?php echo $this->getAddUrl() ?>"><i class="fa fa-plus"></i>Add Item</a>
                        </div>
                        <!-- <p>This table includes all the inventory items stored in your warehouse</p> -->

                        <form class="search-form d-none d-md-block" method="POST" action="<?php echo $this->getFilterUrl() ?>">
                            <div class="form-group">
                                <input type="text" name="filter[text][name]" class="auto form-control" placeholder="Start typing to lookup item by name">
                                <button class="btn btn-primary btn-small mt-3" type="submit" name="submitButton"><i class="fa fa-search"></i>Lookup</button>
                            </div>
                        </form>

                        <?php if (!empty($filterData)) : ?>

                            <!-- place the lookup search results in a table -->

                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Item id</th>
                                            <th>Item Name</th>
                                            <th>Item Desc</th>
                                            <th>Item Brand</th>
                                            <th>Item Category</th>
                                            <th>Created At</th>
                                            <th>Updated At</th>
                                            <th>Quick Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($filterData->getData() as $item) : ?>
                                            <tr>
                                                <td> <?php echo $item->id; ?> </td>
                                                <td> <?php echo $item->name; ?> </td>
                                                <td> <?php echo $item->description; ?> </td>
                                                <td> <?php echo $item->brand; ?> </td>
                                                <td> <?php echo $item->category; ?> </td>
                                                <td> <?php echo $item->created_at; ?> </td>
                                                <td> <?php echo $item->updated_at; ?> </td>
                                                <td>
                                                    <a class="btn btn-primary btn-small" href="<?php echo $this->getEditurl($item->id) ?> ">Details <i class="fa fa-mail-forward"></i></a>

                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card mt-4">
                    <div class="card-body">

                        <h4 class="card-title"><?php echo $this->getTitle() ?></h4>

                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Item id</th>
                                        <th>Item Name</th>
                                        <th>Item Desc</th>
                                        <th>Item Brand</th>
                                        <th>Item Category</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                        <th>Quick Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($collection)) : ?>
                                        <?php foreach ($collection->getData() as $item) : ?>
                                            <tr>
                                                <td> <?php echo $item->id; ?> </td>
                                                <td> <?php echo $item->name; ?> </td>
                                                <td> <?php echo $item->description; ?> </td>
                                                <td> <?php echo $item->brand; ?> </td>
                                                <td> <?php echo $item->category; ?> </td>
                                                <td> <?php echo $item->created_at; ?> </td>
                                                <td> <?php echo $item->updated_at; ?> </td>
                                                <td>
                                                    <a class="btn btn-primary btn-small" href="<?php echo $this->getEditurl($item->id) ?> ">Details <i class="fa fa-mail-forward"></i></a>

                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>
</div>