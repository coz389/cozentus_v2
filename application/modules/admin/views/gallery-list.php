<div class="main-panel">
        <div class="content-wrapper">
          
          <div class="card">
            <div class="card-body"> <a href="javascript:void(0)" class="float-right" id="add-logo-modal"><i class="fa fa-plus
"></i>New Gallery Image</a>
             
              <h4 class="card-title">Gallery Image List</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
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
                            <td><img src="<?=base_url('uploads/images/').$row['image']?>" alt="<?=$row['alt_text']?>"  style="width:150px;height:150px;border-radius: 0;"></td>
                            
                            <td>
                           <a class="text-danger delete ml-5"  data-id='<?=$row['imid']?>' ><i class="fa fa-trash"></i></a>
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

                        
                     
                      </div>
                    </div>
                    </div>
                  
        <script>
$("#add-logo-modal").click(function(){
    let temp = `<form class="logo-form">
    <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel-3">Add Logo</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
<div class="row">

                        <div class="form-group col-12">
                      <label>Select Image</label>
                      <br>
                      <button type="button" class="btn btn-primary select-image" multis="true" data-img="image1">Select Image</button>
                      <input type="hidden"  name="type" value="2" /> 
                      <input type="hidden" class="image1" name="image" />   </div>
                       
                    </div>
                    </div>
                        <div class="modal-footer">
                          <button type="submit" id="sbt-btn" class="btn btn-success">Submit</button>
                         </div>
                         </form>`;
                         $(".dta-ct").html(temp);
$("#logo-modal").modal('show');

})

$(document).on('submit','.logo-form',function(e){
    e.preventDefault();
            let   form = $(this).serialize();
              
                $.ajax({
   url: site_url+"admin/insertlogogallery",
   type: "POST",
   data:  form,
   dataType: 'json',
  
   beforeSend:function(){
                      $("#sbt-btn").addClass('loading');
                        },
                        complete:function(){
                            $("#sbt-btn").removeClass('loading');
                        },
                        success:function(res)
      {
        setTimeout(function(){
        location.reload();  
        },200)
      }

        });
        });
        $('.delete').click(function(){
                 id = $(this).data('id');
                 let bclass =$(this);
                $.ajax({
   url: site_url+"admin/logo_gallery_delete",
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