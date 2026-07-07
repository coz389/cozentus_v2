<div class="main-panel">
    <div class="content-wrapper">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add Parent Service</h4>
                <div class="row">
                    <div class="col-12">
                        <form class="forms-sample " id="service-form">
                            <h5>Service Cards for home page</h5>
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" name="card_heading" id="title" required>
                            </div>
                            <div class="form-group">
                                <label>Slug</label>
                                <input type="text" class="form-control" name="slug" id="slug" required>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" class="form-control" name="card_description" required>
                            </div>
                            <div class="form-group">
                                <label>Select Image</label>
                                <br>
                                <button type="button" class="btn btn-primary select-image" data-img="card_image">Select Image</button>
                                <input type="hidden" class="card_image" name="card_image" />
                            </div>
                            <div class="form-group">
                                <label>Tags</label>
                                <input type="text" class="form-control" name="tags" id="tags">
                            </div>
                            <div class="form-group">
                                <label>Select Clients</label>
                                <select class="js-example-basic-multiple w-100 form-control" multiple="multiple" name="clientid[]">
                                    <option value="">Select Client</option>
                                    <?php if (!empty($clients)) {
                                        foreach ($clients as $cs) { ?>
                                            <option value="<?= $cs['id'] ?>"><?= $cs['title'] ?></option>
                                    <?php }
                                    } ?>
                                </select>
                            </div>
                            <hr>

                            <h5>Section 1 (Service Inner Page Banner Section)</h5>
                            <div class="form-group">
                                <label>Banner Heading</label>
                                <input type="text" class="form-control" name="inner_banner_heading" required>
                            </div>
                            <div class="form-group">
                                <label>Banner Description</label>
                                <input type="text" class="form-control" name="inner_banner_description">
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Select Banner Image (Desktop 1536x430)</label>
                                    <br>
                                    <button type="button" class="btn btn-primary select-image" data-img="inner_banner_image">Select Image</button>
                                    <input type="hidden" class="inner_banner_image" name="inner_banner_image" />
                                </div>
                                <div class="form-group col-6">
                                    <label>Select Banner Image (Mobile 430x430)</label>
                                    <br>
                                    <button type="button" class="btn btn-primary select-image" data-img="inner_banner_mimage">Select Image</button>
                                    <input type="hidden" class="inner_banner_mimage" name="inner_banner_mimage" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>CTA Button Label</label>
                                    <input type="text" class="form-control" name="ctabtn">
                                </div>
                                <div class="form-group col-6">
                                    <label>CTA Button Link</label>
                                    <input type="text" class="form-control" name="ctalink">
                                </div>
                            </div>
                            <hr>
                            <h5>Section 2</h5>

                            <div class="form-group">
                                <label>Heading</label>
                                <input type="text" class="form-control" name="about_heading">
                            </div>
                            <div class="form-group">
                                <label>Short Description</label>
                                <input type="text" class="form-control" name="about_short_description">
                            </div>

                            <hr>
                            <h5>Section 3</h5>

                            <div class="form-group">
                                <label>Heading</label>
                                <input type="text" class="form-control" name="advantage_heading">
                            </div>
                            <div class="form-group">
                                <label>Short Description</label>
                                <input type="text" class="form-control" name="advantage_short_description">
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Insert Youtube Video Link</label>
                                    <br>
                                    <input type="text" class="form-control form-control-sm" name="advantage_video">
                                </div>
                                <div class="form-group col-6">
                                    <label>Select Image</label>
                                    <br>
                                    <button type="button" class="btn btn-primary select-image" multis="true" data-img="advantage_image">Select Image</button>
                                    <input type="hidden" class="advantage_image " name="advantage_image" />
                                </div>

                            </div>
                            <hr>
                            <h5>Section 4</h5>
                            <hr>
                            <div class="form-group">
                                <label>Heading</label>
                                <input type="text" class="form-control" name="transformation_heading">
                            </div>
                            <div class="form-group">
                                <label>Short Description</label>
                                <input type="text" class="form-control" name="transformation_short_description">
                            </div>
                            <div class="form-group">
                                <label>Select Image</label>
                                <br>
                                <button type="button" class="btn btn-primary select-image" data-img="transformation_image">Select Image</button>
                                <input type="hidden" class="transformation_image" name="transformation_image" />
                            </div>
                            <hr>
                            <h5>Section 4 (FAQ Section)</h5>
                            <hr>
                            <div class="form-group">
                                <label>Heading</label>
                                <input type="text" class="form-control" name="faq_heading">
                            </div>
                            <div class="repeater">

                                <div data-repeater-list="faq">
                                    <div data-repeater-item class="border p-3">

                                        <div class="form-group">
                                            <label>Heading</label>
                                            <input type="text" class="form-control" name="heading">
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <input type="text" class="form-control" name="description">
                                        </div>
                                        <button data-repeater-delete type="button" class="btn btn-danger btn-sm icon-btn ml-2">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                                <br>
                                <button data-repeater-create type="button" class="float-right btn btn-info btn-sm icon-btn ml-2 mb-2">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label>Page Head Script</label>
                                <textarea class="form-control" rows="4" cols="50" name="page_header"></textarea>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Main CTA Button Label</label>
                                    <input type="text" class="form-control" name="mainctabtn">
                                </div>
                                <div class="form-group col-6">
                                    <label>Main CTA Button Link</label>
                                    <input type="text" class="form-control" name="mainctalink">
                                </div>
                                <div class="form-group col-6">
                                    <label>Main CTA Button PDF</label>
                                    <input type="file" class="form-control" name="file">
                                </div>
                            </div>
                            <br>
                            <br>
                            <button type="submit" class="btn btn-primary btn-icon-text" id="sbt-btn">
                                <i class="far fa-check-square btn-icon-prepend"></i>
                                Submit
                            </button>
                        </form>
                        <div class="progress mt-3" style="display:none;">
                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="msg text-center"></div>
        </div>
    </div>
    <script>
        /* $("#service-form").on('submit',function(e) {
        e.preventDefault();
        var formdata = new FormData(this);
        $.ajax({
          url: site_url + "admin/addupdateparentservice",
          type: "POST",
          data: formdata,
          dataType: 'json',
          contentType: false,
          cache: false,
          processData: false,
          beforeSend: function() {
            $('#sbt-btn').addClass('loading');
          },
          complete: function() {
            $('#sbt-btn').removeClass('loading');
          },
          success: function(res) {
            $(".msg").html(res.msg);
           
          }
        });
      }); */

        $(document).ready(function() {
            $('#service-form').submit(function(e) {
                e.preventDefault();

                var form = $(this);
                var url = site_url + "admin/addupdateparentservice";
                var formData = new FormData(form[0]);

                $.ajax({
                    url: url,
                    type: 'POST',
                    data: formData,
                    dataType: 'json',
                    contentType: false,
                    cache: false,
                    processData: false,
                    xhr: function() {
                        var xhr = new window.XMLHttpRequest();

                        xhr.upload.addEventListener('progress', function(e) {
                            if (e.lengthComputable) {
                                var percent = Math.round((e.loaded / e.total) * 100);
                                $('.progress').show();
                                $('.progress-bar').attr('aria-valuenow', percent).css('width', percent + '%').text(percent + '%');
                            }
                        });

                        return xhr;
                    },
                    beforeSend: function() {
                        $('#sbt-btn').addClass('loading');
                    },
                    complete: function() {
                        $('#sbt-btn').removeClass('loading');
                        $('.progress').hide();
                    },
                    success: function(res) {
                        if (res.status)
                            form[0].reset();
                        $(".msg").html(res.msg);
                    }
                });
            });
        });


        $(document).ready(function() {
            autosize();
            $('#title').on('input', function() {
                var title = $(this).val().toLowerCase();
                var slug = title.replace(/\s+/g, '-').replace(/[^a-z0-9-]/g, '');
                $('#slug').val(slug);
            });
        })
    </script>