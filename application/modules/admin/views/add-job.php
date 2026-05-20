<div class="main-panel">
        <div class="content-wrapper">
          
          <div class="card">
            <div class="card-body"> 
             
              <h4 class="card-title">Add New Job</h4>
              <div class="row">
                <div class="col-12">
                <form class="forms-sample" id="blog-form">
                
               
                <div class="form-group">
                      <label>Title</label>
                      <input type="text" class="form-control"name="title"  required>
                    </div>

                <div class="form-group">
                      <label>Tags</label>
                      <input type="text" class="form-control"name="tags" id="tags"  required>
                    </div>
                
                   
                    <div class="form-group">
                      <label >Short Description</label>
                      <textarea class="form-control" name="description" rows="4"></textarea>
                    </div>
                   
                    <div class="form-group">
                      <label>Content</label>
                      <textarea class="form-control" name="content" id="summernoteExample"></textarea>
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

			  $(document).ready(function (e) {

          autosize();

 $("#blog-form").on('submit',(function(e) {
	
  e.preventDefault();
  var formdata = new FormData(this);
/*   var respons = $('.responsibilities').val();
  var responsarr = respons.split('\n');
  responsarr = responsarr.filter(ar=> ar != "")
  responsarr.forEach(ar=>{
    formdata.append('responsibilities[]',ar);
  })
  var requ = $('.requirements').val();
  var requarr = requ.split('\n');
  requarr = requarr.filter(ar=> ar != "")
  requarr.forEach(ar=>{
    formdata.append('requirements[]',ar);
  }) */
  $.ajax({
   url:site_url+"admin/insert_update_job",
   type: "POST",
   data:  formdata,
   dataType:'json',
   contentType: false,
         cache: false,
   processData:false,
   beforeSend:function(){
                          $('#sbt-btn').addClass('loading');
                        },
                        complete:function(){
                          $('#sbt-btn').removeClass('loading');
                        },
   success: function(res) {
    $(".msg").html(res.msg);
     }       
    });
 }));
});
				</script>