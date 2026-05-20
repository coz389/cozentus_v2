<div class="main-panel">
        <div class="content-wrapper">
          
          <div class="card">
            <div class="card-body"> <a href="javascript:void(0)" class="float-right" id="add-category-modal"><i class="fa fa-plus
"></i>New Images</a>
             
              <h4 class="card-title">Images List</h4>
              <div class="row">
                <div class="col-12">
                <div class="table-responsive">
<table id='empTable' class='data-table table stripe hover nowrap'>

                      <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Alt Tag</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="cat-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-3" aria-hidden="true">
                    <div class="modal-dialog modal-md" role="document">
                      <div class="modal-content dta-img">

                        
                     
                      </div>
                    </div>
                    </div>
               
                    
                    <div class="modal fade" id="image-edit" tabindex="-1" role="dialog" aria-labelledby="formModal"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="formModal">Update Alt Tag </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form class="image-update-form">
                  
                  <div class="form-group" id="update-f">
                 
                  </div>
                
                  <button type="submit" id="update-btn" class="btn btn-primary m-t-15 waves-effect">Update</button>
                </form>
              </div>
            </div>
          </div>
        </div>

        <script>

$(document).on('click','.edit-image',function(){
$("#image-edit").modal('show');
 var id = $(this).data('id'); 
 var alttext = $(this).data('text'); 
 var nname = $(this).data('nname'); 
 var oname = $(this).data('oname'); 

 var temp =`<label>Alt Tag</label>
    <input type="text" class="form-control" placeholder="Alt Tag" name="alt_text" value="${alttext}">
    <br>
    <label>Image Name (Image Extension Required)</label>
    <input type="text" class="form-control" placeholder="Image Name" name="nname" value="${nname}">
    <input type="hidden" name="id" value="${id}">
    <input type="hidden" name="oname" value="${oname}">`;
$("#update-f").html(temp);
})


$('.image-update-form').submit(function(e){
  e.preventDefault();
var data =$(this).serialize();
               $.ajax({

   url: site_url+"admin/updateimagetext",

   type: "POST",

   data:  data,
   dataType: 'json',
  success:function(res)
 {
        $('#empTable').DataTable().ajax.reload(null, false);
        $("#image-edit").modal('hide');
      }



        });

        });


$("#add-category-modal").click(function(){
    let temp = `
    <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel-3">Add Images</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
<div class="row">

<div class="form-group col-md-12">
                      <label>Image (Max File Size 2MB)</label>
                      <div class="file-upload-wrapper">
                    <div id="fileuploader">Upload</div>
                  </div></div>
                       
                    </div>
                    </div>
                       
                        `;
                         $(".dta-img").html(temp);
$("#cat-modal").modal('show');
jqfileupload();
})
$(document).ready(function(){
	   	$('#empTable').DataTable({
		   	'processing': true,
	      	'serverSide': true,
			 'cache': false,
	      	'serverMethod': 'POST',
			'ajax': {
	          'url':site_url+'admin/getimageslist',
				}, 
	      	'columns': [
	         	{ data: 'id'},
	         	{ data: 'image' },
	         	{ data: 'name' },
	         	{ data: 'alt' },
	         	{ data: 'delete' },
	         	
	         	
	       	],
			  scrollCollapse: true,
		autoWidth: true,
		responsive: false,
		columnDefs: [{
			targets: "datatable-nosort",
			orderable: false,
		}],
		"lengthMenu": [[10, 25, 50, 1000], [10, 25, 50, 1000]],
		"language": {
			"info": "_START_-_END_ of _TOTAL_ entries",
			searchPlaceholder: "Search",
			paginate: {
				next: '<i class="ion-chevron-right"></i>',
				previous: '<i class="ion-chevron-left"></i>'  
			}
		},
			  dom: 'lBfrtip',
		buttons: [
		'copy', 'csv', 'pdf', 'print'
		]
	   	});
		  
		   
	});
        $(document).on('click','.delete-btn',function(){
                 id = $(this).data('id');
                 $.ajax({
   url: site_url+"admin/imagedelete",
   type: "POST",
   data:  {id:id},
   dataType: 'json',
  
   success:function(res)
      {
        $('#empTable').DataTable().ajax.reload(null, false);
      }

        });
        });

        function jqfileupload() { 
  $("#fileuploader").uploadFile({
      url: site_url+"admin/imageupload",
      fileName: "image",
      onSuccess: function() {
         $('#empTable').DataTable().ajax.reload(null, false);}
    
    });
 }
</script>
