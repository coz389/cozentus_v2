<div class="main-panel">
        <div class="content-wrapper">
          
          <div class="card">
            <div class="card-body"> 
             
              <h4 class="card-title">Update Testimonial</h4>
              <div class="row">
                <div class="col-12">
                <form class="forms-sample" id="blog-form">
                    <div class="form-group">
                      <label>Title</label>
                      <input type="text" class="form-control"name="title" value="<?=$title?>" required>
                    </div>
                   
                    <div class="form-group">
                      <label>Details</label>
                      <input type="text" class="form-control" name="details"value="<?=$detail?>" required>
                    </div>
                   
                    <div class="form-group">
                      <label >Description</label>
                      <textarea class="form-control" name="description" id="" rows="4"><?=$description?></textarea>
                    </div>

                    <div class="form-group">
                <label>Video</label>
                <input type="file" class="form-control" id="file" name="file">
                <input type="hidden" name="exist_video" value="<?=$video?>">
              </div>

                    <div class="form-group">
                      <label>Select Image</label>
                      <br>
                      <button type="button" class="btn btn-primary select-image"  data-img="image">Select Image</button>
                      <input type="hidden" class="image" value="<?=$image?>" name="image" />
                      <input type="hidden" value="<?=$id?>" name="id" />
                    </div>
                    <div class="progress mb-3">
                <div class="progress-bar progress-bar-success progress-bar-striped 
active" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                  0%
                </div>
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
   function Filevalidation() {
      const fi = document.getElementById('file');
      // Check if any file is selected.
      if (fi.files.length > 0) {
        for (const i = 0; i <= fi.files.length - 1; i++) {
          const fsize = fi.files.item(i).size;
          const file = Math.round((fsize / 1024));
          // The size of the file.
          if (file >= 5300) {
            alert(
              "File too Big, please select a file less than 6 MB");
          } else {
            return true;
          }
        }
      }
    }
    $(document).ready(function(e) {
      $("#blog-form").on('submit', (function(e) {
        e.preventDefault();
        if (Filevalidation() === false) {
          return false;
        }
        $.ajax({
          xhr: function() {
            $('.progress').fadeIn();
            var xhr = new window.XMLHttpRequest();
            xhr.upload.addEventListener("progress", function(evt) {
              if (evt.lengthComputable) {
                var percentComplete = evt.loaded / evt.total;
                percentComplete = parseInt(percentComplete * 100);
                $('.progress-bar').width(percentComplete + '%');
                $('.progress-bar').html(percentComplete + '%');
              }
            }, false);
            return xhr;
          },
     
   url:site_url+"admin/insertupdatetestimonial",
   type: "POST",
   data:  new FormData(this),
   dataType:'json',
   contentType: false,
         cache: false,
   processData:false,
   beforeSend:function(){
                          $('#sbt-btn').addClass('loading');
                        },
                        complete:function(){
                          $('#sbt-btn').removeClass('loading');
                          $('.progress').fadeOut();
            setTimeout(() => {
              $('.progress-bar').width('0%');
            }, 500);
                        },
   success: function(res) {
    $(".msg").html(res.msg);
     }       
    });
 }));
});
				</script>