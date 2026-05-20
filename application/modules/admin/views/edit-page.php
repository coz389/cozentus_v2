<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Banner Bottom content</h4>
        <div class="row">
          <div class="col-12">
            <form class="forms-sample" id="blog-form">
            <div class="row">
              <div class="form-group col-6">
                <label>Sub Menu 1</label>
                <input type="text" class="form-control" name="sub_menu_title1" id="title" value="<?= $sub_menu_title1 ?>" required>
              </div>
              <div class="form-group col-6">
                <label>Sub Menu 2</label>
                <input type="text" class="form-control" name="sub_menu_title2" id="sub_menu_title2" value="<?= $sub_menu_title2 ?>" required>
              </div>
              <div class="form-group col-6">
                <label>Sub Menu 3</label>
                <input type="text" class="form-control" name="sub_menu_title3" id="sub_menu_title3" value="<?= $sub_menu_title3 ?>" required>
              </div>
              <div class="form-group col-6">
                <label>Sub Menu 4</label>
                <input type="text" class="form-control" name="sub_menu_title4" id="sub_menu_title4" value="<?= $sub_menu_title4 ?>" required>
              </div>
            </div>
              <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title" id="title" value="<?= $title ?>" required>
              </div>
             <!--<div class="form-group">
                <label>Slug</label>
                <input type="text" class="form-control" name="slug" id="slug" value="<?// = $slug ?>" required>
              </div>-->
              <div class="">
              <div class="form-group <?= $type == 3 ? '' : 'd-none' ?>">
                <label>Case Type</label>
                <select name="type" class="form-control" >
                  <option value="0" <?=$ctype==0?'selected':''?>>Case Studies</option>
                  <option value="1" <?=$ctype==1?'selected':''?>>Use Case</option>
                 
                </select>
              </div>
               
                <div class="form-group">
                  <label>Short Description (Max 200 Charachters)</label>
                  <input type="text" class="form-control" name="description" value="<?= $description ?>" required>
                </div>               
                <div class="form-group ">
                  <label>Content</label>
                  <textarea class="form-control" name="content" id="summernoteExample" rows="4"><?= html_entity_decode($content) ?></textarea>
                </div>
              </div>
              <div class="row">
              <!---<div class="form-group col-6">
                <label>Card Image Thumbnail (Max File Size 2MB)</label>
                <br>
                <button type="button" class="btn btn-primary select-image" data-img="thumb-image"><?= !empty($thumbnail)?'Image Exist':'Select Image' ?></button>
                <input type="hidden" class="thumb-image" name="thumbnail" value="<?= $thumbnail ?>" />
              </div> --->
              <div class="form-group">
                <label>Image (Max File Size 2MB)</label>
                <br>
                <button type="button" class="btn btn-primary select-image" data-img="image"><?= !empty($image)?'Image Exist':'Select Image' ?></button>
                <input type="hidden" class="image" name="image" value="<?= $image ?>" />
              </div>
              </div>
              <input type="hidden" name="id" value="<?= $id ?>">
              <input type="hidden" name="type" value="<?= $type ?>">
              <input type="hidden" name="download_exist" value="<?= $download ?>">
              <div class="form-group <?= $type == 3 ? '' : 'd-none' ?>">
                <label>Upload Pdf</label>
                <input type="file" name="file" class="form-control">
                <span><?=$download?> file exist</span>
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
                <label>Transforming Title</label>
                <input type="text" class="form-control" name="trans_title" id="title" value="<?= $offerin_heading ?>" required>
              </div>
              <div class="form-group">
                  <label>Transforming Content (Max 200 Charachters)</label>
                  <input type="text" class="form-control" name="trans_description" value="<?= $offerin_content ?>" required>
                </div>  
             <!-- <div class="form-group">
                <label>Page Head Script</label>
              <textarea rows="4" class="form-control" name="page_header" ><?//=html_entity_decode($page_header)?></textarea>
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
          url: site_url + "admin/insertupdatepage",
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
    $(document).ready(function() {
      $('#title').on('input', function() {
        var title = $(this).val().toLowerCase();
        var slug = title.replace(/\s+/g, '-').replace(/[^a-z0-9-]/g, '');
        $('#slug').val(slug);
      });

      $("#service-slug").change(function() {

var sname = $("#service-slug :selected").text();
// console.log(sname);
$("#service-name").val(sname);
})
    })
  </script>