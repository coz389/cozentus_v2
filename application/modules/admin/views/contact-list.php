<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Contact List</h4>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="order-listing" class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Interest</th>
                    <th>Company</th>
                    <th>Employees</th>
                    <th>Date</th>
                    <th></th>

                  </tr>
                </thead>
                <tbody>
                  <?php
                  $i = 1;
                  if (!empty($list))
                    foreach ($list as $row) {
                  ?>
                    <tr>
                      <td><?= $i ?></td>
                      <td><?= $row['name'] ?></td>
                      <td><?= $row['email'] ?></td>
                      <td><?= $row['phone'] ?></td>
                      <td><?= $row['interest'] ?></td>
                      <td><?= !empty($row['company']) ? $row['company'] : '-' ?></td>
                      <td><?= $row['employees'] ?></td>
                      <td><?= date('d-M-Y | h:i A', strtotime($row['created_at'])) ?></td>
                        <td>
                           <a class="text-danger delete ml-5"  data-id='<?=$row['id']?>' ><i class="fa fa-trash"></i></a>
                            </td>
                           
                    </tr>
                  <?php $i++;
                    } ?>
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
   url: site_url+"admin/contact_delete",
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
    // $('.delete').click(function() {
    //   id = $(this).data('id');
    //   let bclass = $(this);
    //   $.ajax({
    //     url: site_url + "admin/",
    //     type: "POST",
    //     data: {
    //       id: id
    //     },
    //     dataType: 'json',
    //     beforeSend: function() {
    //       bclass.addClass('loading');
    //     },
    //     complete: function() {
    //       bclass.removeClass('loading');
    //     },
    //     success: function(res) {
    //       setTimeout(function() {
    //         location.reload();
    //       }, 200)
    //     }
    //   });
    // });
  </script>