<div class="main-panel">
        <div class="content-wrapper">
          
          <div class="card">
            <div class="card-body"> <a href="javascript:void(0)" class="float-right" id="add-logo-modal"><i class="fa fa-plus
"></i>New Video</a>
             
              <h4 class="card-title">Gallery Video List</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>#</th>
                            <th>Video</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                       <?php
                       $i=1;
                       if(!empty($list))
                       foreach($list as $row)
                       {
                    
                         ?>

                        <tr>
                            <td><?=$i?></td>
                            <td><a href="<?=urldecode($row['video'])?>" target="blank" title="click to play"><?=urldecode($row['video'])?></a>
                            <td>
                           <a href="javascript:void(0)" class="text-danger delete ml-5"  data-id='<?=$row['id']?>' ><i class="fa fa-trash"></i></a>
                            </td>
                            
                        </tr>
<?php $i++; }?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="logo-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-3" aria-hidden="true">
                    <div class="modal-dialog modal-md" role="document">
                      <div class="modal-content dta-ct">

                      <form class="logo-form">
    <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel-3">Add Video</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
<div class="row">

                        <div class="form-group col-12">
                      <label>Upload Video</label>
                      <br>
                      <input type="text" name="link" class="form-control">
                    </div>
                       
                    </div>
                    </div>
                        <div class="modal-footer">
                          <button type="submit" id="sbt-btn" class="btn btn-success">Submit</button>
                         </div>
                         </form>
                         <div class="progress mt-3" style="display:none;">
  <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
</div>
                      </div>
                    </div>
                    </div>
                  
        <script>
$("#add-logo-modal").click(function(){
$("#logo-modal").modal('show');

})
$(document).ready(function() {
  $('.logo-form').submit(function(e) {
    e.preventDefault();
    
    var form = $(this);
    var url = site_url + "admin/addgalleryvideo";
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
        alert(res.msg);
        if(res.status)
         location.reload();
      }
    });
  });
});
        $('.delete').click(function(){
                 id = $(this).data('id');
                 let bclass =$(this);
                $.ajax({
   url: site_url+"admin/videodelete",
   type: "POST",
   data:  {id:id},
   dataType: 'json',
  
   beforeSend:function(){
                      bclass.addClass('loading');
                        },
                        complete:function(){
                          bclass.removeClass('loading');
                        },
   success:function(res)
      {
        setTimeout(function(){
        location.reload();  
        },200)
      }

        });
        });

  
  
</script>