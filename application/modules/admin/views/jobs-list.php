<div class="main-panel">
        <div class="content-wrapper">
          
          <div class="card">
            <div class="card-body"> <a href="<?=base_url('admin/addjob')?>" class="float-right"><i class="fa fa-plus
"></i>New Job</a>
             
              <h4 class="card-title">Jobs List</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Status</th>
                           
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                       <?php
                       $i=1;
                       if(!empty($list))
                       foreach($list as $row)
                       {
                        $status= $row['is_active']==1?'Active':'Inactive';
                        $class= $row['is_active']==1?'success':'danger';
                        $btn = "<button class='btn btn-$class change-status' data-id='' >$status</button>";
                       
                         ?>

                        <tr>
                            <td><?=$i?></td>
                            <td><?=$row['title']?></td>
                        
                            <td style="max-width: 80px;"><?=$row['description']?></td>
                            <td>
                            <button class="btn btn-<?=$class?> change-status"  data-id='<?=$row['id']?>' data-status='<?=$row['is_active']?>' ><?=$status?></button>
                            </td>
                            <td>
                            <a class="text-primary edit-category-modal mr-5" href="<?=base_url('admin/editjob/').$row['id']?>" ><i class="fa fa-edit"></i></a>
                           <a class="text-danger delete ml-5"  data-id='<?=$row['id']?>' ><i class="fa fa-trash"></i></a>
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
                  
        <script>




// $(document).on('submit','.cat-form',function(e){
//     e.preventDefault();
//             let   form = $(this).serialize();
              
//                 $.ajax({
//    url: site_url+"admin/insert_update_job",
//    type: "POST",
//    data:  form,
//    dataType: 'json',
  
//    beforeSend:function(){
//                       $("#sbt-btn").addClass('loading');
//                         },
//                         complete:function(){
//                             $("#sbt-btn").removeClass('loading');
//                         },
//                         success:function(res)
//       {
//         setTimeout(function(){
//         location.reload();  
//         },200)
//       }

//         });
//         });
        $('.delete').click(function(){
                 id = $(this).data('id');
                 let bclass =$(this);
                $.ajax({
   url: site_url+"admin/job_delete",
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

        $('.change-status').click(function(){
               let bclass =$(this);
               let   id = $(this).data('id');
               let   status = $(this).data('status');
                $.ajax({
   url: site_url+"admin/jobstatus",
   type: "POST",
   data:  {id:id,status:status},
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