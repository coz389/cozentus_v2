<div class="main-panel">
        <div class="content-wrapper">
          
          <div class="card">
            <div class="card-body"> <a href="<?=base_url('admin/addteammember')?>" class="float-right"><i class="fa fa-plus
"></i>New Team Member</a>
             
              <h4 class="card-title">Team List</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Title</th>
                            <th>List Priority</th>
                           
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
                            <td><img src="<?=base_url('uploads/images/').$row['image']?>"></td>
                            <td><?=$row['name']?></td>
                            <td><?=$row['title']?></td>
                            <td><?=$row['orderby']?></td>
                            
                            <td>
                              <a href="<?=base_url('admin/editteam/').$row['id']?>" class="text-primary"><i class="fa fa-edit"></i></a> 
                              <a href="javascript:void(0)" class="text-danger ml-5 delete"  data-id="<?=$row['id']?>"><i class="fa fa-trash"></i></a>
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

        $('.delete').click(function(){
                 id = $(this).data('id');
                 let bclass =$(this);
                $.ajax({
   url: site_url+"admin/deleteteam",
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