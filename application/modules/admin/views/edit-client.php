<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Update Client</h4>
        <div class="row">
          <div class="col-12">
            <form class="forms-sample" id="blog-form">
              
              <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title" value="<?= $title ?>" required>
              </div>
              <!-- <div class="form-group">
                <label>Category</label>
              <select name="categoryid" class="form-control" id="categoryid"  required>
<option value="">Select Category</option>
<?php if(!empty($category))
{
foreach($category as $ct)
{
  echo "<option value='".$ct['id']."'>".$ct['name']."</option>";
}
}?>
              </select>
              </div> -->
              <div class="form-group">
                <label>Link</label>
                <input type="text" class="form-control" name="link" value="<?= urldecode($link) ?>">
              </div>
             <!--
              <div class="form-group">
                <label>Short Description</label>
                <input type="text" class="form-control" name="shortdescription" value="<?= $short_description ?>" required>
              </div>
              <div class="form-group d-none">
                <label>Description</label>
                <textarea class="form-control" name="description" id="" rows="4"><?= $details ?></textarea>
              </div> -->
              <div class="form-group">
                <label>Select Image</label>
                <br>
                <button type="button" class="btn btn-primary select-image" data-img="image">Select Image</button>
                <input type="hidden" class="image" value="<?= $image ?>" name="image" />
                <input type="hidden" value="<?= $id ?>" name="id" />
              </div>
              <div class="form-group d-none">
                <label>List Priority (0 for default)</label>
                <input type="text" class="form-control" name="orderby" value="<?= $orderby ?>" required>
              </div>
              <button type="submit" class="btn btn-primary btn-icon-text" id="sbt-btn">
                <i class="far fa-check-square btn-icon-prepend"></i>
                Submit
              </button>
            </form>
          </div>
        </div>
      </div>
      <div class="msg text-center"></div>
    </div>
  </div>
  <script>
    $(document).ready(function(e) {
      $("#categoryid").val(<?=$categoryid?>);
      $("#blog-form").on('submit', (function(e) {
        e.preventDefault();
        $.ajax({
          url: site_url + "admin/insertupdateclient",
          type: "POST",
          data: new FormData(this),
          dataType: 'json',
          contentType: false,
          cache: false,
          processData: false,
          beforeSend: function() {
            $('#sbt-btn').addClass('loading');
          },
          complete: function() {
            $('#sbt-btn').removeClass('loading');
          },
          success: function(res) {
            $(".msg").html(res.msg);
          }
        });
      }));
    });
  </script>