<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add New Home Slider</h4>
        <div class="row">
          <div class="col-12">
            <form class="forms-sample" id="blog-form">
              
              <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title" >
              </div>
              <div class="form-group">
                <label>Short Description</label>
                <input type="text" class="form-control" name="shortdescription">
              </div>
              
              <div class="form-group">
                <label>Select Image 1520x520</label>
                <br>
                <button type="button" class="btn btn-primary select-image" data-img="image">Select Image</button>
                <input type="hidden" class="image" name="image" />
              </div>
             <!-- <div class="form-group">
                <label>Select Image (Mobile 430x430)</label>
                <br>
                <button type="button" class="btn btn-primary select-image" data-img="imagem">Select Image</button>
                <input type="hidden" class="imagem" name="mimage" />
              </div>
              <div class="form-group">
                <label>CTA Button Label</label>
                <input type="text" class="form-control" name="ctabtn" >
              </div>
              <div class="form-group">
                <label>CTA Button Link</label>
                <input type="text" class="form-control" name="ctalink">
              </div>-->
              <div class="form-group">
                <label>List Priority (0 for default)</label>
                <input type="text" class="form-control" name="orderby" value="0" required>
              </div>
             <!--  <div class="form-group">
                <label>Theme Color</label>
                <div class="col-sm-4">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="themecolor" id="membershipRadios1" value="0" checked >
                                Light
                              <i class="input-helper"></i></label>
                            </div>
                          </div>
                          <div class="col-sm-5">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="themecolor" id="membershipRadios2" value="1">
                                Dark
                              <i class="input-helper"></i></label>
                            </div>
                          </div>
              </div> -->
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
          url: site_url + "admin/insertupdatehomeslider",
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