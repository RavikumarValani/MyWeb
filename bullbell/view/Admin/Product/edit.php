<?php $rowData = $this->getTableRow(); ?>
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3">
                            <?php if ($rowData->id) : ?>
                                <h4 class="card-title">Item Details</h4>
                                <a href="<?php echo $this->getDeleteUrl($rowData->id); ?>" class="btn btn-danger btn-small"><i class="fa fa-trash-o"></i>Delete Item</a>
                            <?php else : ?>
                                <h4 class="card-title">Add Item Detail</h4>
                            <?php endif ?>
                        </div>
                        <form class="form-sample" method="POST" action="<?php echo $this->getFormUrl() ?>">
                            <div class="row">
                                <?php if ($rowData->id) : ?>
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Id</label>
                                            <div class="col-sm-9">
                                                <input name="id" type="text" class="form-control" value="<?php echo $rowData->id ?>" disabled />
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Item Name</label>
                                        <div class="col-sm-9">
                                            <input name="product[name]" type="text" class="form-control" value="<?php echo $rowData->name ?>" required />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Item Description</label>
                                        <div class="col-sm-9">
                                            <textarea name="product[description]" class="form-control" rows="5"><?php echo $rowData->description ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Category</label>
                                        <div class="col-sm-9">
                                            <select name="product[category]" class="form-control" required>
                                                <option style="text-decoration: solid; color:blue" selected value="<?php echo $rowData->category ?>"><?php echo $rowData->category ?></option>
                                                <optgroup label="Indian Fusion Wear">
                                                    <optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;Kurtis & Set">
                                                        <option value="Indian Fusion Wear->Kurtis & Set->Anarkali Design">&nbsp;&nbsp;&nbsp;&nbsp;Anarkali Design</option>
                                                        <option value="Indian Fusion Wear->Kurtis & Set->Cotton">&nbsp;&nbsp;&nbsp;&nbsp;Cotton</option>
                                                        <option value="Indian Fusion Wear->Kurtis & Set->Quater & Full Sleeve">&nbsp;&nbsp;&nbsp;&nbsp;Quater & Full Sleeve</option>
                                                        <option value="Indian Fusion Wear->Kurtis & Set->Straight & A line">&nbsp;&nbsp;&nbsp;&nbsp;Straight & A line</option>
                                                        <option value="Indian Fusion Wear->Kurtis & Set->Prints">&nbsp;&nbsp;&nbsp;&nbsp;Prints</option>
                                                        <option value="Indian Fusion Wear->Kurtis & Set->Ethnic & Fushion Dress">&nbsp;&nbsp;&nbsp;&nbsp;Ethnic & Fushion Dress</option>
                                                    </optgroup>
                                                    <option value="Indian Fusion Wear->Handcrafts">&nbsp;&nbsp;&nbsp;&nbsp;Handcrafts</option>
                                                    <option value="Indian Fusion Wear->Occassion & Festive Wear">&nbsp;&nbsp;&nbsp;&nbsp;Occassion & Festive Wear</option>
                                                    <option value="Indian Fusion Wear->Skirts & Printed Plazzos">&nbsp;&nbsp;&nbsp;&nbsp;Skirts & Printed Plazzos</option>
                                                    <option value="Indian Fusion Wear->Lehenga & Choli">&nbsp;&nbsp;&nbsp;&nbsp;Lehenga & Choli</option>
                                                    <option value="Indian Fusion Wear->Solid Maxi Dress">&nbsp;&nbsp;&nbsp;&nbsp;Solid Maxi Dress</option>
                                                </optgroup>
                                                <optgroup label="Western Wear">
                                                    <optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;Jumpsuit & Dresses">
                                                        <option value="Western Wear->Jumpsuit & Dresses->A-Line Dress">&nbsp;&nbsp;&nbsp;&nbsp;A-Line Dress</option>
                                                        <option value="Western Wear->Jumpsuit & Dresses->Maxi Dress Floral Print">&nbsp;&nbsp;&nbsp;&nbsp;Maxi Dress Floral Print</option>
                                                        <option value="Western Wear->Jumpsuit & Dresses->Kaftan">&nbsp;&nbsp;&nbsp;&nbsp;Kaftan</option>
                                                    </optgroup>
                                                    <option value="Western Wear->Work">&nbsp;&nbsp;&nbsp;&nbsp;Work</option>
                                                    <option value="Western Wear->Party">&nbsp;&nbsp;&nbsp;&nbsp;Party</option>
                                                    <option value="Western Wear->Jumpsuit">&nbsp;&nbsp;&nbsp;&nbsp;Jumpsuit</option>
                                                    <option value="Western Wear->Shimmer">&nbsp;&nbsp;&nbsp;&nbsp;Shimmer</option>
                                                    <option value="Western Wear->Tops">&nbsp;&nbsp;&nbsp;&nbsp;Tops</option>
                                                    <option value="Western Wear->T-Shirt">&nbsp;&nbsp;&nbsp;&nbsp;T-Shirt</option>
                                                    <option value="Western Wear->Party Wear">&nbsp;&nbsp;&nbsp;&nbsp;Party Wear</option>
                                                    <option value="Western Wear->Jean's">&nbsp;&nbsp;&nbsp;&nbsp;Jean's</option>
                                                </optgroup>          
                                                <optgroup label="Sports Wear & Active Wear">
                                                    <option value="Sports Wear & Active Wear->Top Wear">&nbsp;&nbsp;Top Wear</option>
                                                    <option value="Sports Wear & Active Wear->Sports Bra">&nbsp;&nbsp;Sports Bra</option>
                                                    <option value="Sports Wear & Active Wear->Bottom Wear">&nbsp;&nbsp;Bottom Wear</option>
                                                    <option value="Sports Wear & Active Wear->Jackets">&nbsp;&nbsp;Jackets</option>
                                                </optgroup>
                                                <optgroup label="Footwear &  Fitness">
                                                    <option value="Footwear &  Fitness->Sports Shoes">&nbsp;&nbsp;Sports Shoes</option>
                                                    <option value="Footwear &  Fitness->Fitness Watch & Smart Watch">&nbsp;&nbsp;Fitness Watch & Smart Watch</option>
                                                    <option value="Footwear &  Fitness->Yoga Mats">&nbsp;&nbsp;Yoga Mats</option>
                                                    <option value="Footwear &  Fitness->Flip-Flops">&nbsp;&nbsp;Flip-Flops</option>
                                                </optgroup>
                                                <option value="Accessories">Accessories</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Brand</label>
                                        <div class="col-sm-9">
                                            <input name="product[brand]" type="text" class="form-control" value="<?php echo $rowData->brand ?>" required />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <a href="<?php echo $this->getGridUrl() ?>" type="button" class="btn btn-secondary cancel-anchor">Cancel</a>

                                <?php if ($rowData->id) : ?>
                                    <a href="<?php echo $this->getMediaUrl($rowData->id) ?>" type="button" class="btn btn-info">Media</a>
                                    <input type="submit" name="updateItemSubmitButton" class="btn btn-primary" value="Update Item">
                                <?php else : ?>
                                    <input type="submit" name="updateItemSubmitButton" class="btn btn-primary" value="Add Item">

                                <?php endif ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- content-wrapper ends -->
<!-- footer -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>

<!-- bootstrap modals -->

<!-- Edit Item Modal -->
<div class="modal fade" id="editItemModal" tabindex="-1" role="dialog" aria-labelledby="editItemModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editItemModal">Edit Item</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Update Item</button>
            </div>
        </div>
    </div>
</div>