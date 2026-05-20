<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Update Home Innovation</h4>
        <div class="row">
          <div class="col-12">
            <form class="forms-sample" id="blog-form">
           
              <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title" value="<?= html_entity_decode($title) ?>" required>
              </div>
              
              <div class="form-group ">
                  <label>Content</label>
                  <textarea class="form-control" name="shortdescription" id="summernoteExample" rows="4"><?= html_entity_decode($short_description) ?></textarea>
              </div>  
              <div class="form-group">
                <label>Select Image (Desktop 1536x430)  </label>
                <br>
                <button type="button" class="btn btn-primary select-image" data-img="image"><?= !empty($image)?'Image Exist':'Select Image' ?></button>
                <input type="hidden" class="image" value="<?= $image ?>" name="image" />
                <input type="hidden" value="<?= $id ?>" name="id" />
              </div>
               <!--<div class="form-group">
                <label>Select Image (Mobile 430x430) </label>
                <br>
                <button type="button" class="btn btn-primary select-image" data-img="imagem"><?//= !empty($mob_image)?'Image Exist':'Select Image' ?></button>
                <input type="hidden" class="imagem" value="<?//= $mob_image ?>" name="mimage" />
              </div>
             <div class="form-group">
                <label>CTA Button Label</label>
                <input type="text" class="form-control" name="ctabtn" value="<?//= $cta_btn ?>">
              </div>
              <div class="form-group">
                <label>CTA Button Link</label>
                <input type="text" class="form-control" name="ctalink" value="<?//= urldecode($cta_link) ?>">
              </div>
              <div class="form-group">
                <label>List Priority (0 for default)</label>
                <input type="text" class="form-control" name="orderby" value="<?//= $orderby ?>" required>
              </div>
               <div class="form-group">
                <label>Theme Color</label>
                <div class="col-sm-4">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="themecolor" id="membershipRadios1" value="0" <?= $theme==0?'checked':'' ?> >
                                Light
                              <i class="input-helper"></i></label>
                            </div>
                          </div>
                          <div class="col-sm-5">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="themecolor" id="membershipRadios2" value="1" <?= $theme==1?'checked':'' ?>>
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
          url: site_url + "admin/insertupdatehomeinnovation",
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