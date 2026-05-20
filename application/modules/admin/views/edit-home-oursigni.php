<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Slider Bottom Content</h4>
        <div class="row">
          <div class="col-12">
            <form class="forms-sample" id="blog-form">
            <div class="form-group">
                <label>Why Cozentus Title</label>
                <input type="text" class="form-control" name="whytitle" value="<?= html_entity_decode($whytitle) ?>" required>
              </div>
              <h4 class="card-title">Our Significant Achievements</h4>

              <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title" value="<?= html_entity_decode($title) ?>" required>
              </div>
              
              <div class="form-group ">
                  <label>Content</label>
                  <textarea class="form-control" name="shortdescription"  rows="4"><?= html_entity_decode($short_description) ?></textarea>
              </div> 
              <div class="form-group">
                <label>Select Image ( 550x550)  </label>
                <br>
                <button type="button" class="btn btn-primary select-image" data-img="image"><?= !empty($image)?'Image Exist':'Select Image' ?></button>
                <input type="hidden" class="image" value="<?= $image ?>" name="image" />
                <input type="hidden" value="<?= $id ?>" name="id" />
              </div>
              <div class="form-group">
                <label>Significant 1</label>
                <input type="textarea" class="form-control" name="significant_1" value="<?= html_entity_decode($significant_1) ?>" required>
              </div>
              <div class="form-group">
                <label>Significant 2 </label>
                <input type="textarea" class="form-control" name="significant_2" value="<?= html_entity_decode($significant_2) ?>" required>
              </div>
              <div class="form-group">
                <label>Significant 3 </label>
                <input type="textarea" class="form-control" name="significant_3" value="<?= html_entity_decode($significant_3) ?>" required>
              </div>
              <div class="form-group">
                <label>Significant 4</label>
                <input type="textarea" class="form-control" name="significant_4" value="<?= html_entity_decode($significant_4) ?>" required>
              </div>
              <div class="form-group">
                <label>Significant 5 </label>
                <input type="textarea" class="form-control" name="significant_5" value="<?= html_entity_decode($significant_5) ?>" required>
              </div>
              <div class="form-group">
                <label>Significant 6 </label>
                <input type="textarea" class="form-control" name="significant_6" value="<?= html_entity_decode($significant_6) ?>" required>
              </div>
             <!-- <div class="form-group">
                <label>Select Image (Mobile 430x430) </label>
                <br>
                <button type="button" class="btn btn-primary select-image" data-img="imagem"><?//= !empty($mob_image)?'Image Exist':'Select Image' ?></button>
                <input type="hidden" class="imagem" value="<?//= $mob_image ?>" name="mimage" />
              </div>
              <div class="form-group">
                <label>CTA Button Label</label>
                <input type="text" class="form-control" name="ctabtn" value="<?= $cta_btn ?>">
              </div>
              <div class="form-group">
                <label>CTA Button Link</label>
                <input type="text" class="form-control" name="ctalink" value="<?= urldecode($cta_link) ?>">
              </div>
              <div class="form-group">
                <label>List Priority (0 for default)</label>
                <input type="text" class="form-control" name="orderby" value="<?= $orderby ?>" required>
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
          url: site_url + "admin/insertupdatehomesig",
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
    $(".rec-delete").click(function() {
      let id = $(this).attr("data-id");
      $("#" + id).remove();
    })
    $(document).ready(function() {
      autosize();
      $('#title').on('input', function() {
        var title = $(this).val().toLowerCase();
        var slug = title.replace(/\s+/g, '-').replace(/[^a-z0-9-]/g, '');
        $('#slug').val(slug);
      });
    })

    $(".remove-main-pdf").click(function(){
      $(this).parent().remove();
$("#main-cta-pdf").val('');
    })
  </script>
  