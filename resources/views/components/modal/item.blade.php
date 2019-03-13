<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Item</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            <div class="col-md-12 row">

                <div class="col-md-12">
                    <input type="file" name="file" id="file" class="inputfile" accept="image/*" onchange="loadFile(event)"/>
                    <label for="file">Choose a file</label>
                    <div class="imageContainer">                    
                        <img id="previewImage" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/1024px-No_image_available.svg.png"/>                    
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label>Title/Name</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control"></textarea>
                    </div>
                </div>
                    <div class="col-md-4">
                        <div class="form-group numbers">
                            <label>Price</label>
                            <input class="form-control" type="number">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group numbers">
                            <label>Maintenance</label>
                            <input class="form-control" type="number">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group numbers">
                            <label>Monthly Bill</label>
                            <input class="form-control" type="number">
                        </div>
                    </div>
            </div>  
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>