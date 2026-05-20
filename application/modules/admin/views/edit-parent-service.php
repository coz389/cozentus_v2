<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Update Parent Service</h4>
        <div class="row">
          <div class="col-12">
            <form class="forms-sample " id="service-form">
            <h5>Service Cards for home page</h5>
              <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="card_heading" id="title" value="<?=$card_heading?>" required>
              </div> 
               <div class="form-group">
                <label>Slug</label>
                <input type="text" class="form-control" name="slug" id="slug" value="<?=$slug?>" required>
              </div> 
              <div class="form-group">
                <label>Description</label>
                <input type="text" class="form-control" name="card_description" value="<?=$card_description?>" required>
              </div>
              <div class="form-group">
                <label>Select Image</label>
                <br>
                <button type="button" class="btn btn-primary select-image" data-img="card_image"><?= !empty($card_image) ? 'Image Exist' : 'Select Image' ?></button>
                <input type="hidden" class="card_image" name="card_image" value="<?=$card_image?>"  />
              </div>
              <div class="form-group">
                <label>Tags</label>
                <input type="text" class="form-control" name="tags" id="tags" value="<?=$tags?>" >
              </div>
              <div class="form-group">
                <label>Select Clients</label>
                <select class="js-example-basic-multiple w-100 form-control" multiple="multiple" name="clientid[]">
              <option value="">Select Client</option>
              <?php if(!empty($clients)) {
                $serviceClients = explode(',', $clientid);
                foreach($clients as $cs){?>
                <option value="<?=$cs['id']?>" <?=in_array($cs['id'],$serviceClients)?'selected':''?>><?=$cs['title']?></option>
                <?php }}?>  
              </select>
              </div>
              <h5>Section 1 (Service Inner Page Banner Section)</h5>
              <div class="form-group">
                <label>Banner Heading</label>
                <input type="text" class="form-control" name="inner_banner_heading" value="<?=$inner_banner_heading?>" required>
              </div>
               <div class="form-group">
                <label>Banner Description</label>
                <input type="text" class="form-control" name="inner_banner_description" value="<?=$inner_banner_description?>">
              </div>
              <div class="row">
              <div class="form-group col-6">
                <label>Select Banner Image (Desktop 1536x430)</label>
                <br>
                <button type="button" class="btn btn-primary select-image" data-img="inner_banner_image"><?= !empty($inner_banner_image) ? 'Image Exist' : 'Select Image' ?></button>
                <input type="hidden" class="inner_banner_image" name="inner_banner_image" value="<?=$inner_banner_image?>" />
              </div>
              <div class="form-group col-6">
                <label>Select Banner Image (Mobile 430x430)</label>
                <br>
                <button type="button" class="btn btn-primary select-image" data-img="inner_banner_mimage"><?= !empty($inner_banner_mimage) ? 'Image Exist' : 'Select Image' ?></button>
                <input type="hidden" class="inner_banner_mimage" name="inner_banner_mimage" value="<?=$inner_banner_mimage?>"  />
              </div>
              </div>
              <div class="row">
              <div class="form-group col-6">
                <label>CTA Button Label</label>
                <input type="text" class="form-control" name="ctabtn" value="<?=$ctabtn?>">
              </div>
              <div class="form-group col-6">
                <label>CTA Button Link</label>
                <input type="text" class="form-control" name="ctalink" value="<?=urldecode($ctalink)?>">
              </div>
              </div>
              <hr>
              <h5>Section 2</h5>
             
              <div class="form-group">
                <label>Heading</label>
                <input type="text" class="form-control" name="about_heading" value="<?=$about_heading?>">
              </div>
              <div class="form-group">
                <label>Short Description</label>
                <input type="text" class="form-control" name="about_short_description" value="<?=$about_short_description?>">
              </div>
              <?php  if($id != 4) { ?>
             
              <hr>
              <h5>Section 3</h5>
             
              <div class="form-group">
                <label>Heading</label>
                <input type="text" class="form-control" name="advantage_heading" value="<?=$advantage_heading?>">
              </div>
              <div class="form-group">
                <label>Short Description</label>
                <input type="text" class="form-control" name="advantage_short_description" value="<?=$advantage_short_description?>">
              </div>
              <div class="row">
              <div class="form-group col-6">
                <label>Insert Youtube Video Link</label>
                <br>
                <input type="text"  class="form-control form-control-sm" name="advantage_video" value="<?=urldecode($advantage_video)?>">
                <?php } ?>
              </div>
            
              <div class="form-group col-6">
                <label>Select Image</label>
                <br>
                <button type="button" class="btn btn-primary select-image" multis="true" data-img="advantage_image"><?= !empty($advantage_image) ? 'Image Exist' : 'Select Image' ?></button>
                <input type="hidden" class="advantage_image" name="advantage_image" value="<?=$advantage_image?>" />
              </div>
              
              </div>
              <?php  if($id != 4) { ?>

              <hr>
              <h5>Section 4</h5>
              <hr>
              <div class="form-group">
                <label>Heading</label>
                <input type="text" class="form-control" name="transformation_heading" value="<?=$transformation_heading?>">
              </div>
              <div class="form-group">
                <label>Short Description</label>
                <input type="text" class="form-control" name="transformation_short_description" value="<?=$transformation_short_description?>">
              </div>
              <div class="form-group">
                <label>Select Image</label>
                <br>
                <button type="button" class="btn btn-primary select-image" data-img="transformation_image"><?= !empty($transformation_image) ? 'Image Exist' : 'Select Image' ?></button>
                <input type="hidden" class="transformation_image" name="transformation_image" value="<?=$transformation_image?>"  />
              </div>
              <hr>
              <h5>Section 4 (FAQ Section)</h5>
              <hr>
              <div class="form-group">
                <label>Heading</label>
                <input type="text" class="form-control"  name="faq_heading" value="<?=$heading_faq?>">  
              </div>
              <div class="repeater">
              <?php if (!empty($card_json_faq)) {
                  $count = 0;
                  $faqObj = json_decode($card_json_faq);
                  if(!empty($faqObj)) 
                  foreach ($faqObj as $obj) {
                    $count++;
                ?>
                    <div id="faq-<?= $count ?>" class="border p-3">

                      <div class="form-group">
                        <label>Heading</label>
                        <input type="text" class="form-control" name="faqexist[<?= $count ?>][heading]" value="<?= $obj->heading ?>">
                      </div>
                      <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" name="faqexist[<?= $count ?>][description]" value="<?= $obj->description ?>">
                      </div>
                      <button type="button" data-id="faq-<?= $count ?>" class="delete-btn btn btn-danger faq-delete btn-sm icon-btn ml-2">
                        <i class="fas fa-trash"></i>
                      </button>
                    </div>
                <?php }
                }
                ?>
                <div data-repeater-list="faq">
                  <div data-repeater-item class="border p-3">

                    <div class="form-group">
                      <label>Heading</label>
                      <input type="text" class="form-control" name="heading">
                    </div>
                    <div class="form-group">
                      <label>Description</label>
                      <input type="text" class="form-control" name="description">
                    </div>
                    <button data-repeater-delete type="button" class="btn btn-danger  btn-sm icon-btn ml-2">
                      <i class="fas fa-trash"></i>
                    </button>
                  </div>
                </div>
                <br>
                <button data-repeater-create type="button" class="float-right btn btn-info btn-sm icon-btn ml-2 mb-2">
                  <i class="fa fa-plus"></i>
                </button>
              </div>
              <hr>
               <div class="form-group">
                <label>Page Head Script</label>
                <textarea  class="form-control" rows="4" cols="50" name="page_header"><?=$page_header?></textarea>
              </div>
              <hr>
              <div class="row">
              <div class="form-group col-6">
                <label>Main CTA Button Label</label>
                <input type="text" class="form-control" name="mainctabtn" value="<?=$main_cta_btn?>" >
              </div>
              <div class="form-group col-6">
                <label>Main CTA Button Link</label>
                <input type="text" class="form-control" name="mainctalink" value="<?=$main_cta_link?>">
              </div>
              <div class="form-group col-6">
                <label>Main CTA Button PDF</label>
                <input type="file" class="form-control" name="file">
                <?=!empty($main_cta_pdf)?"<span>".$main_cta_pdf." <button type='button' class='btn btn-danger mt-3 remove-main-pdf'>x</button></span>":''?>
             
              </div>
              </div>
              <input type="hidden"name="mainctapdf_exist" id="main-cta-pdf" value="<?=$main_cta_pdf?>">
              <br>
              <br>
      
              <?php } ?>
              <input type="hidden" name="id" value="<?=$id?>">

              <?php  if($id == 4) { ?>
              <!-- Industries -->

              <hr>
              <h5>Our Focus</h5>
              <hr> 
              <hr> 
              <div class="form-group">
                <label>Heading</label>
                <input type="text" class="form-control" name="focus_heading" value="<?=$focus_heading?>">
              </div>
              <div class="repeater">
              <?php if (!empty($focus_json)) {
                  $count = 0;
                  $buiObj = json_decode($focus_json);
                  foreach ($buiObj as $obj) {
                    $count++;
                ?>
                    <div id="focus_json-<?= $count ?>" class="border p-3">
                        <div class="form-group">
                          <label>Title</label>
                          <input type="text" class="form-control" name="focus_json_exist[<?= $count ?>][heading]" value="<?= $obj->heading ?>">
                        </div>
                      <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" name="focus_json_exist[<?= $count ?>][description]" value="<?= $obj->description ?>">
                      </div>
                      <div class="form-group col-6">
                          <label>CTA Button Link</label>
                          <input type="text" class="form-control" name="focus_json_exist[<?= $count ?>][ctalink]" value="<?= $obj->ctalink ?>">
                        </div>
                      <button type="button" data-id="focus_json-<?= $count ?>" class="delete-btn btn btn-danger focus-delete btn-sm icon-btn ml-2">
                        <i class="fas fa-trash"></i>
                      </button>
                  </div>
                <?php }
                }
                ?>
              
                <div data-repeater-list="focus_json">
                  <div data-repeater-item class="border p-3">
                   <!--  <div class="form-group">
                      <label>Select Image</label>
                      <br>
                      <button type="button" class="btn btn-primary addmore-image-select">Select
                        Image</button>
                      <input type="hidden" class="hidden-image" name="image" />
                    </div> -->
                      <!-- <div class="form-group col-6">
                        <label>Tab Title</label>
                        <input type="text" class="form-control" name="tab">
                      </div> -->
                      <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="heading">
                      </div>
                      

                    <div class="form-group">
                      <label>Description</label>
                      <input type="text" class="form-control" name="description">
                    </div>
                    <div class="form-group col-6">
                        <label>CTA Link</label>
                        <input type="text" class="form-control" name="ctalink">
                      </div>
                    <button data-repeater-delete type="button" class="btn btn-danger btn-sm icon-btn ml-2">
                      <i class="fas fa-trash"></i>
                    </button>
                <button data-repeater-create type="button" class="float-right btn btn-info btn-sm icon-btn ml-2 mb-2">
                  <i class="fa fa-plus"></i>
                </button>

              </div>
              </div>

              <?php } ?>

              <hr>
              <h5>Why Cozentus</h5>
              <hr> 
              <hr> 
              <div class="form-group">
                <label>Heading</label>
                <input type="text" class="form-control" name="tailored_heading" value="<?=$tailored_heading?>">
              </div>
              <div class="repeater">
              <?php if (!empty($tailored_json)) {
                  $count = 0;
                  $buiObj = json_decode($tailored_json);
                  foreach ($buiObj as $obj) {
                    $count++;
                ?>
                    <div id="tailored_json-<?= $count ?>" class="border p-3">
                    	<div class="form-group">
                        <label>Select Image</label>
                        <br>
                        <button type="button" class="btn btn-primary addmore-image-select"><?= !empty($obj->image) ? 'Image Exist' : 'Select Image' ?></button>
                        <input type="hidden" class="hidden-image" name="tailored_json_exist[<?= $count ?>][image]" value="<?= $obj->image ?>" />
                      </div>
                        <div class="form-group">
                          <label>Title</label>
                          <input type="text" class="form-control" name="tailored_json_exist[<?= $count ?>][heading]" value="<?= $obj->heading ?>">
                        </div>
                      <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" name="tailored_json_exist[<?= $count ?>][description]" value="<?= $obj->description ?>">
                      </div>
                      <div class="form-group col-6">
                          <label>CTA Button Link</label>
                          <input type="text" class="form-control" name="tailored_json_exist[<?= $count ?>][ctalink]" value="<?= $obj->ctalink ?>">
                        </div>
                      <button type="button" data-id="tailored_json-<?= $count ?>" class="delete-btn btn btn-danger tailored-delete btn-sm icon-btn ml-2">
                        <i class="fas fa-trash"></i>
                      </button>
                  </div>
                <?php }
                }
                ?>
              
                <div data-repeater-list="tailored_json">
                  <div data-repeater-item class="border p-3">
                   <div class="form-group">
                      <label>Select Image</label>
                      <br>
                      <button type="button" class="btn btn-primary addmore-image-select">Select
                        Image</button>
                      <input type="hidden" class="hidden-image" name="image" />
                    </div> 
                      <!-- <div class="form-group col-6">
                        <label>Tab Title</label>
                        <input type="text" class="form-control" name="tab">
                      </div> -->
                      <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="heading">
                      </div>
                      

                    <div class="form-group">
                      <label>Description</label>
                      <input type="text" class="form-control" name="description">
                    </div>
                    <div class="form-group col-6">
                        <label>CTA Link</label>
                        <input type="text" class="form-control" name="ctalink">
                      </div>
                    <button data-repeater-delete type="button" class="btn btn-danger btn-sm icon-btn ml-2">
                      <i class="fas fa-trash"></i>
                    </button>
                <button data-repeater-create type="button" class="float-right btn btn-info btn-sm icon-btn ml-2 mb-2">
                  <i class="fa fa-plus"></i>
                </button>

              </div>
              </div>

              

              
              <button type="submit" class="btn btn-primary btn-icon-text" id="sbt-btn">
                <i class="far fa-check-square btn-icon-prepend"></i>
                Submit
              </button>
            </form>
            <div class="progress mt-3" style="display:none;">
  <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
</div>
          </div>
        </div>
      </div>
      <div class="msg text-center"></div>
    </div>
  </div>
  <script>
     /* $("#service-form").on('submit',function(e) {
        e.preventDefault();
        var formdata = new FormData(this);
        $.ajax({
          url: site_url + "admin/addupdateparentservice",
          type: "POST",
          data: formdata,
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
      }); */ 

      $(document).ready(function() {
  $('#service-form').submit(function(e) {
    e.preventDefault();
    
    var form = $(this);
    var url = site_url + "admin/addupdateparentservice";
    var formData = new FormData(form[0]);
    
    $.ajax({
      url: url,
      type: 'POST',
      data: formData,
      dataType: 'json',
      contentType: false,
      cache: false,
      processData: false,
      xhr: function() {
        var xhr = new window.XMLHttpRequest();
        
        xhr.upload.addEventListener('progress', function(e) {
          if (e.lengthComputable) {
            var percent = Math.round((e.loaded / e.total) * 100);
            $('.progress').show();
            $('.progress-bar').attr('aria-valuenow', percent).css('width', percent + '%').text(percent + '%');
          }
        });
        
        return xhr;
      },
      beforeSend: function() {
        $('#sbt-btn').addClass('loading');
      },
      complete: function() {
        $('#sbt-btn').removeClass('loading');
        
        $('.progress').hide();
      },
      success: function(res) {
        $(".msg").html(res.msg);
      },
      error: function(xhr, status, error) {
        // Handle the error
      }
    });
  });
});


    $(".faq-delete").click(function(){
        let id = $(this).attr("data-id");
        $("#" + id).remove();
    })
    $(".focus-delete").click(function(){
        let id = $(this).attr("data-id");
        $("#" + id).remove();
    })
    $(".tailored-delete").click(function(){
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