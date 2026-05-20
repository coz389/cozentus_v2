<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add New Client</h4>
        <div class="row">
          <div class="col-12">
            <form class="forms-sample" id="blog-form">
              
             
              <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title" required>
              </div>
              <!-- <div class="form-group">
                <label>Category</label>
              <select name="categoryid" class="form-control"   required>
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
                <input type="text" class="form-control" name="link">
              </div>
             <!--  <div class="form-group">
                <label>Short Description</label>
                <input type="text" class="form-control" name="shortdescription" required>
              </div>
             
              <div class="form-group d-none">
                <label>Content</label>
                <textarea class="form-control" name="description" id="" rows="4"></textarea>
              </div> -->
              <div class="form-group">
                <label>Select Image</label>
                <br>
                <button type="button" class="btn btn-primary select-image" data-img="image">Select Image</button>
                <input type="hidden" class="image" name="image" />
              </div>
              <div class="form-group d-none">
                <label>List Priority (0 for default)</label>
                <input type="text" class="form-control" name="orderby" value="0" required>
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
            if (res.status) {
              $("#blog-form")[0].reset();
            }
          }
        });
      }));
    });
  </script>