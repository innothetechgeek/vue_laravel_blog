<template>
    <div class="row">
                <div class="col-md-8 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Add New Post</h4>
                        <form class="forms-sample">
                          <div class="form-group">
                            <label for="exampleInputName1">Title</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Title">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail3">Keywords</label>
                            <input type="text" class="form-control" id="keywords" placeholder="Keywords">
                          </div>
                          <div class="form-group">
                            <label>Post Image</label>
                            <input type="file" name="img[]" class="file-upload-default">
                            <div class="input-group col-xs-12">
                              <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                              <span class="input-group-append">
                                <button class="file-upload-browse btn btn-info" type="button">Upload</button>
                              </span>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="exampleTextarea1">Content</label>
                            <textarea class="form-control" id="exampleTextarea1" rows="7"></textarea>
                          </div>
                          <button type="submit" class="btn btn-success mr-2">Submit</button>
                          <button class="btn btn-light">Cancel</button>
                        </form>
                      </div>
                    </div>
                </div>
            </div>
</template>