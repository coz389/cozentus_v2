<div class="main-panel">
        <div class="content-wrapper">
          
          <div class="card">
            <div class="card-body"> 
             
              <h4 class="card-title">Job Enquir List</h4>
           
              <div class="row">
              &nbsp &nbsp<a href="<?php echo base_url('admin/jobenquiryexportcsv'); ?>" class="btn-download">Download Data</a>
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            
                            <th>Applied For</th>
                            <th>Resume</th>
                            <th>Date</th>
                            <th>Delete</th>

                        </tr>
                      </thead>
                      <tbody>
                       <?php
                       $i=1;
                       if(!empty($list))
                       foreach($list as $row)
                       {
                        if(!empty($row['resume']))
                        {
                          $link =base_url('uploads/resumes/').$row['resume'];
                          $text = "View";
                        }else
                        {
                          $link="javascript:void(0)";
                          $text = "No File Found";
                        }
                       
                        ?>

                        <tr>
                            <td><?=$i?></td>
                            <td><?=$row['name']?></td>
                            <td><?=$row['email']?></td>
                            <td><?=$row['phone']?></td>
                            
                            <td><?=!empty($row['applied_for'])?$row['applied_for']:'-'?></td>
                            <td><a href="<?=$link?>" target="_blank"><?=$text?></a></td>
                            
                           
                            <td><?=date('d-M-Y',strtotime($row['created_at']))?></td>
                            <td>
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

        $('.delete').click(function(){
                 id = $(this).data('id');
                 let bclass =$(this);
                $.ajax({
   url: site_url+"admin/career_delete",
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