<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Update Award</h4>
        <div class="row">
          <div class="col-12">
            <form class="forms-sample" id="blog-form">
           
              <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title" value="<?= $title ?>" required>
              </div>
              <div class="form-group">
                <label>Link</label>
                <input type="text" class="form-control" name="link" value="<?= $link ?>">
              </div>
              <div class="form-group">
                <label>Short Description</label>
                <input type="text" class="form-control" name="shortdescription" value="<?= $short_description ?>">
              </div>
              <div class="form-group">
                <label>date</label>
                <div id="datepicker-popup" class="input-group date datepicker">

<input type="text"  class="form-control" name="date" value="<?= $date ?>">

<span class="input-group-addon input-group-append border-left">

  <span class="far fa-calendar input-group-text"></span>

</span>

</div> </div>
              <div class="form-group">
                <label>Select Image</label>
                <br>
                <button type="button" class="btn btn-primary select-image" data-img="image">Select Image</button>
                <input type="hidden" class="image" value="<?= $image ?>" name="image" />
                <input type="hidden" value="<?= $id ?>" name="id" />
              </div>
              <div class="form-group">
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
      $("#blog-form").on('submit', (function(e) {
        e.preventDefault();
        $.ajax({
          url: site_url + "admin/insertupdateaward",
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