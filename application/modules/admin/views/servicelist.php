<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Service List</h4>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="order-listing" class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Parent service</th>

                    <th>Image</th>
                    <!-- <th>Featured</th> -->
                    <th>Actions</th>
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
                      <td><?= $row['card_heading'] ?></td>
                      <td><?= $row['pservice'] ?></td>

                      <td><img src="<?=base_url('uploads/images/').$row['image']?>"></td>
                    <!--   <td><input type="checkbox" class="form-check-input featured-service" data-id="<?= $row['id'] ?>" <?=($row['fservice'] == 1) ? "checked" : ""?>></td>
                     -->  <td>
                        <a class="text-primary mr-5" href="<?= base_url('admin/editservice/') . $row['id'] ?>"><i class="fa fa-edit"></i></a>
                        | <a class="text-danger delete ml-5" data-id='<?= $row['id'] ?>'><i class="fa fa-trash"></i></a>
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
    $('.delete').click(function() {
      id = $(this).data('id');
      let bclass = $(this);
      $.ajax({
        url: site_url + "admin/service_delete",
        type: "POST",
        data: {
          id: id
        },
        dataType: 'json',
        beforeSend: function() {
          bclass.addClass('loading');
        },
        complete: function() {
          bclass.removeClass('loading');
        },
        success: function(res) {
          setTimeout(function() {
            location.reload();
          }, 200)
        }
      });
    });
    $('.featured-service').click(function() {
      id = $(this).data('id');
      $.ajax({
        url: site_url + "admin/markservicefeature",
        type: "POST",
        data: {
          id: id
        },
        dataType: 'json',
        success: function(res) {
          
        }
      });
    });
  </script>