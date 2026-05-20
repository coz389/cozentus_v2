<div class="main-panel">
        <div class="content-wrapper">
          
          <div class="card">
            <div class="card-body"> <a href="<?=base_url('admin/addblog')?>" class="float-right"><i class="fa fa-plus
"></i>New Post</a>
             
              <h4 class="card-title">Post List</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Posted Date</th>
                            <th>Type</th>
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
                        $type = $row['type']==1?'Article':($row['type']==2?'News':'Case');
                        ?>

                        <tr>
                            <td><?=$i?></td>
                            <td><?=$row['title']?></td>
                            <td><?=date('d-M-Y',strtotime($row['posted']))?></td>
                            <td><?=$type?></td>
                            <td>
                            <button class="btn btn-<?=$class?> change-status"  data-id='<?=$row['id']?>' data-status='<?=$row['is_active']?>' ><?=$status?></button>
                            </td>
                            <td>
                              <a href="<?=base_url('admin/editblog/').$row['id']?>" class="text-primary"><i class="fa fa-edit"></i></a> 
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
$('.change-status').click(function(){
               let bclass =$(this);
               let   id = $(this).data('id');
               let   status = $(this).data('status');
                $.ajax({
   url: site_url+"admin/blogstatus",
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
        $('.delete').click(function(){
                 id = $(this).data('id');
                 let bclass =$(this);
                $.ajax({
   url: site_url+"admin/blog_delete",
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