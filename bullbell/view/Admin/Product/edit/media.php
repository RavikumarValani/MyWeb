<?php $media = $this->getImages();  ?>
<?php $image = $this->getImage();  ?>
<?php 
if (isset($_GET['name'])) {
    if ($_GET[$_GET['name']] == 1) { ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert" onload="messageHide()">
            <strong>Success!</strong> Image was <?php echo $_GET['name'] ?>.
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
                        <form method="POST" action="<?php echo $this->getUrl()->geturl('upload', 'Product\Media'); ?>" id="product-media" enctype="multipart/form-data">
                            <input class="media-image" type="file" id="file" name="image" value="Upload Image"> <br><br>
                            <input id="upload" type="submit" class="btn btn-primary m-2" value="Upload" disabled>
                        </form>
                        <form method="POST" action="<?php echo $this->getUrl()->getUrl('update', 'Product\Media'); ?>" id="media">

                            <table class="table table-success table-striped ">
                                <tr>
                                    <th scope="col">ImageId</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Label</th>
                                    <th scope="col">slider</th>
                                    <th scope="col">base</th>
                                    <th scope="col">remove</th>
                                </tr>
                                <?php if (!$media) : ?>
                                    <tr>
                                        <td colspan="8" style="text-align: center;">Record Not Found</td>
                                    </tr>
                                <?php else : ?>
                                    <?php foreach ($media->getData() as $key => $value) : ?>
                                        <tr>
                                            <td><?php echo $value->imageId ?></td>
                                            <td>
                                                <img style="width:200px;height:200px; border-radius: 0;" class="product-media-image" src="Images/Product/<?php echo $value->image;  ?>" alt="Product Image" />
                                            </td>
                                            <td>
                                                <input type="text" name="image[data][<?php echo $value->imageId; ?>][label]" value="<?php echo $value->label ?>">
                                            </td>
                                            <td>
                                                <input type="checkbox" name="image[slider][<?php echo $value->imageId ?>]" <?php if ($value->slider) : ?> checked <?php endif; ?>>
                                            </td>
                                            <td>
                                                <input type="radio" name="image[base]" value="<?php echo $value->imageId ?>" <?php if ($value->base) : ?> checked <?php endif; ?>>
                                            </td>
                                            <td>
                                                <input type="checkbox" name="image[remove][<?php echo $value->imageId ?>]" value="remove">
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>

                            </table>
                            <div class="d-flex justify-content-end mb-3">
                                <input type="submit" class="btn btn-primary mr-1" value="Update">
                                <a class="btn btn-secondary" href="<?php echo $this->getBackUrl() ?>">Back</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(
        function() {
            $('input:file').change(
                function() {
                    if ($(this).val()) {
                        $('#upload').attr('disabled', false);
                    }
                }
            );
        });
</script>