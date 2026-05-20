<div class="main-panel">
        <div class="content-wrapper">
          
          <div class="card">
            <div class="card-body"> 
             
              <h4 class="card-title">Web Management</h4>
              <div class="row">
              <div class="col-12">

				  <form  class="tag-form" id="tag-form" method="POST" enctype="multipart/form-data">

                  <div class="card-body">

                 
                    <div class="form-group row mb-4">

                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Footer marquee content</label>

                      <div class="col-sm-12 col-md-7">

                        <textarea name="sliding_description" class="form-control header" style="height:150px!important;">

                        <?= htmlspecialchars($rows['sliding_description'] ) ?>
                        </textarea>

                      </div>

                    </div> 
                

				 	          <div class="form-group row mb-4">

                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Button Lebel</label>

                      <div class="col-sm-12 col-md-7">

                       <div class="input-group">

                       <input type="text" class="form-control" name="btn_label" value="<?= htmlspecialchars($rows['button_label'] ) ?>">
                        
                      </div>

                      </div>
                    </div> 

                    <div class="form-group row mb-4">

                          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Button link</label>

                          <div class="col-sm-12 col-md-7">

                          <div class="input-group">

                          <input type="text" class="form-control" name="btn_link" value="<?= urldecode($rows['button_Link'] ) ?>">
                            
                          </div>

                          </div>
                          </div> 

                    <div class="form-group row mb-4 product-schema">
                    </div> 

					

                                  

                    <div class="form-group row mb-4">

                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>

                      <div class="col-sm-12 col-md-7">

                        <button class="btn btn-primary"id="submit-btn" type="submit">Submit</button>

                      </div>

					

    

                    </div>

					

                  </div>

				

				  </form>

				  </div>
                </div>
                
                </div>
                <div class="msg text-center"></div>
              
                </div>
                </div>
		<script>

	let id;
$("#page").change(function(){
  id = $('#page').val();
   $.ajax({
    type:'post',
    data:{id:id},
    dataType:'json',
    url:site_url+'admin/webmanupdate',
    success:function(res)
    {
     $(".header").text(res.header);
      $(".footer").text(res.footer);
    }
  })
})

			  $(document).ready(function (e) {


 $("#tag-form").on('submit',(function(e) {

	

  e.preventDefault();

  $.ajax({

   url: site_url+"admin/webmanupdate",

   type: "POST",

   dataType:'json',

   data: $(this).serialize(),

  beforesend:function(){

                $('#submit-btn').text('Wait..');

                $('#submit-btn').attr('disabled',true);

                $('#submit-btn').css('pointer-events','none');

            },

            complete:function(){

                $('#submit-btn').text('Submit');

                $('#submit-btn').attr('disabled',false);

                $('#submit-btn').css('pointer-events','auto');

            },

   success: function(res) {

 $('.msg').html('Text Updated');
   }       

    });

 }));

});

				</script>