<div class="row">
    <div class="col-lg-12">
        <div class="col-md-12">
            <div class="content-box-large">
                <div class="panel-heading">
                    <div class="panel-title">Add a new category</div>
                </div>
                    <div class="panel-body">
                        <form action="<?php echo base_url();?>super_admin_controller/save_category" method="post" class="form-horizontal" role="form">
                              <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Category Name</label>
                                <div class="col-sm-10 col-md-10">
                                    <input type="text" name="cat_name" class="form-control" id="inputEmail3" placeholder="add a category name">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="col-sm-2 control-label">Category Description</label>
                                <div class="col-sm-10 col-md-10">
                                    <textarea name="cat_description" class="form-control" placeholder="Category description" rows="5"></textarea>
                                </div>
                              </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label"></label>
                                    <div class="col-md-10">
                                        <div class="radio">
                                          <label>
                                            <input type="radio" name="cat_status" id="optionsRadios1" value="1" checked>
                                            Published
                                          </label>
                                        </div>
                                        <div class="radio">
                                          <label>
                                            <input type="radio" name="cat_status" id="optionsRadios2" value="0">
                                            Unpublished
                                          </label>
                                        </div>
                                    </div>
                            </div>
                              <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                  <button type="submit" class="btn btn-primary">Add Category</button>
                                </div>
                              </div>
                            </form>
                    </div>
                </div>
        </div>
    </div>
</div>
