<!DOCTYPE html>
<html>
<body>
<div class="card">
<div class="container">
<form action="index.php?page=proses-restore" method="post" enctype="multipart/form-data">
	<br/>
    <h5>Pilih Data yang akan di restore :</h5>
    <div class="form-row">
    <div class="col-md-4 mb-3">
    <div class="custom-file">
    <input class="custom-file-input" type="file" name="fileToUpload" id="fileToUpload">
    <label class="custom-file-label" for="validatedCustomFile">Pilih Disini...</label>
  </div>
    </div>
    <div class="col-md-4 mb-3">
    <button type="submit"  name="submit" class="btn btn-primary">Restore</button>
    </div>
</form>
</div>
</div>
</div>
</body>
</html>