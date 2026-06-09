<div class="main-panel">
    <div class="content-wrapper">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add Service</h4>
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
                                <button type="button" class="btn btn-primary select-image" data-img="card_image">Select
                                    Image</button>
                                <input type="hidden" class="card_image" name="card_image" />
                            </div>
                            <div class="form-group">
                                <label>Tags</label>
                                <input type="text" class="form-control" name="tags" id="tags">
                            </div>
                            <div class="form-group">
                                <label>Parent Service</label>
                                <select class="form-control" id="pserv" name="pserv" required>
                                    <option value="">Select Service</option>
                                    <?php if (!empty($pserv)) {
                                        foreach ($pserv as $sv) { ?>
                                            <option value="<?= $sv['id'] ?>"><?= $sv['name'] ?></option>
                                    <?php }
                                    } ?>
                                </select>
                            </div>
                            <div class="form-group" id="sserv-div">
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
                            <hr>
                            <h5>Section 2</h5>
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
                                    <button type="button" class="btn btn-primary select-image" data-img="advantage_image">Select Image</button>
                                    <input type="hidden" class="advantage_image" name="advantage_image" />
                                </div>
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
                            <h5>Section 3</h5>
                            <div class="form-group">
                                <label>Heading</label>
                                <input type="text" class="form-control" name="about_heading">
                            </div>
                            <div class="form-group">
                                <label>Short Description Left</label>
                                <input type="text" class="form-control" name="about_short_description_left">
                            </div>
                            <div class="form-group">
                                <label>Short Description Right</label>
                                <input type="text" class="form-control" name="about_short_description_right">
                            </div>
                            <div class="form-group">
                                <label>Select Image</label>
                                <br>
                                <button type="button" class="btn btn-primary select-image" data-img="about_image">Select
                                    Image</button>
                                <input type="hidden" class="about_image" name="about_image" />
                            </div>
                            <hr>
                            <h5>Section 4 For Cards (Optional)</h5>
                            <hr>
                            <div class="form-group">
                                <label>Heading</label>
                                <input type="text" class="form-control" name="cardsecop_heading">
                            </div>
                            <div class="repeater">
                                <div data-repeater-list="cardsecop">
                                    <div data-repeater-item class="border p-3">
                                        <div class="form-group">
                                            <label>Select Image</label>
                                            <br>
                                            <button type="button" class="btn btn-primary addmore-image-select">Select
                                                Image</button>
                                            <input type="hidden" class="hidden-image" name="image" />
                                        </div>
                                        <div class="form-group">
                                            <label>Heading</label>
                                            <input type="text" class="form-control" name="heading">
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control multiple-op" name="description"></textarea>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label>Link (Optional)</label>
                                                <input type="text" class="form-control" name="link">
                                            </div>

                                        </div>
                                        <button data-repeater-delete type="button" class="btn btn-danger btn-sm icon-btn ml-2">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div> <br>
                                <button data-repeater-create type="button" class="float-right btn btn-info btn-sm icon-btn ml-2 mb-2">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                            <hr>
                            <h5>Section 5</h5>
                            <hr>
                            <div class="form-group">
                                <label>Heading</label>
                                <input type="text" class="form-control" name="buisness_heading">
                            </div>
                            <div class="repeater">
                                <div data-repeater-list="buisness_content">
                                    <div data-repeater-item class="border p-3">
                                        <div class="form-group">
                                            <label>Select Image</label>
                                            <br>
                                            <button type="button" class="btn btn-primary addmore-image-select">Select
                                                Image</button>
                                            <input type="hidden" class="hidden-image" name="image" />
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label>Tab Title</label>
                                                <input type="text" class="form-control" name="tab">
                                            </div>
                                            <div class="form-group col-6">
                                                <label>Heading</label>
                                                <input type="text" class="form-control" name="heading">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <input type="text" class="form-control" name="description">
                                        </div>
                                        <button data-repeater-delete type="button" class="btn btn-danger btn-sm icon-btn ml-2">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div> <br>
                                <button data-repeater-create type="button" class="float-right btn btn-info btn-sm icon-btn ml-2 mb-2">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                            <hr>
                            <h5>Section 6</h5>
                            <div class="form-group">
                                <label>Heading</label>
                                <input type="text" class="form-control" name="believe_heading">
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Point 1</label>
                                    <input type="text" class="form-control" name="belive_point1">
                                </div>
                                <div class="form-group col-6">
                                    <label>Description</label>
                                    <input type="text" class="form-control" name="belive_point1_detail">
                                </div>
                                <div class="form-group col-6">
                                    <label>Point 2</label>
                                    <input type="text" class="form-control" name="belive_point2">
                                </div>
                                <div class="form-group col-6">
                                    <label>Description</label>
                                    <input type="text" class="form-control" name="belive_point2_detail">
                                </div>
                                <div class="form-group col-6">
                                    <label>Point 3</label>
                                    <input type="text" class="form-control" name="belive_point3">
                                </div>
                                <div class="form-group col-6">
                                    <label>Description</label>
                                    <input type="text" class="form-control" name="belive_point3_detail">
                                </div>
                                <div class="form-group col-6">
                                    <label>Point 4</label>
                                    <input type="text" class="form-control" name="belive_point4">
                                </div>
                                <div class="form-group col-6">
                                    <label>Description</label>
                                    <input type="text" class="form-control" name="belive_point4_detail">
                                </div>
                            </div>
                            <hr>
                            <h5>Section 7</h5>
                            <hr>
                            <div class="repeater">
                                <div data-repeater-list="mbanners">
                                    <div data-repeater-item class="border p-3">
                                        <div class="form-group">
                                            <label>Select Image</label>
                                            <br>
                                            <button type="button" class="btn btn-primary addmore-image-select">Select
                                                Image</button>
                                            <input type="hidden" class="hidden-image" name="image" />
                                        </div>
                                        <div class="form-group">
                                            <label>Heading</label>
                                            <input type="text" class="form-control" name="heading">
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control multiple-op" name="description"></textarea>
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
                                        <button data-repeater-delete type="button" class="btn btn-danger btn-sm icon-btn ml-2">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div> <br>
                                <button data-repeater-create type="button" class="float-right btn btn-info btn-sm icon-btn ml-2 mb-2">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                            <hr>
                            <h5>Section 8</h5>
                            <hr>
                            <div class="form-group">
                                <label>Heading</label>
                                <input type="text" class="form-control" name="toolbenefits_heading">
                            </div>
                            <div class="repeater">
                                <div data-repeater-list="toolbenefits_content">
                                    <div data-repeater-item class="border p-3">
                                        <div class="form-group">
                                            <label>Select Image</label>
                                            <br>
                                            <button type="button" class="btn btn-primary addmore-image-select">Select
                                                Image</button>
                                            <input type="hidden" class="hidden-image" name="image" />
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label>Tab Title</label>
                                                <input type="text" class="form-control" name="tab">
                                            </div>
                                            <div class="form-group col-6">
                                                <label>Heading</label>
                                                <input type="text" class="form-control" name="heading">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <input type="text" class="form-control" name="description">
                                        </div>
                                        <button data-repeater-delete type="button" class="btn btn-danger btn-sm icon-btn ml-2">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div> <br>
                                <button data-repeater-create type="button" class="float-right btn btn-info btn-sm icon-btn ml-2 mb-2">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                            <hr>
                            <h5>Section 9 (FAQ Section)</h5>
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
                            <h5>Section 10 (Optional)</h5>
                            <div class="form-group">
                                <label>Heading</label>
                                <input type="text" class="form-control" name="info_heading">
                            </div>
                            <div class="form-group">
                                <label>Select Image</label>
                                <br>
                                <button type="button" class="btn btn-primary select-image" data-img="info_image">Select
                                    Image</button>
                                <input type="hidden" class="info_image" name="info_image" />
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




                            <hr>
                            <h5>Section 11 New Section</h5>
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" name="section11_title">
                            </div>

                            <div class="form-group ">
                                <label>Content</label>
                                <textarea class="form-control" name="section11_description" id="summernoteExample" rows="4"></textarea>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>CTA Button Label</label>
                                    <input type="text" class="form-control" name="section11_ctabtn">
                                </div>
                                <div class="form-group col-6">
                                    <label>CTA Button Link</label>
                                    <input type="text" class="form-control" name="section11_ctalink">
                                </div>
                            </div>
                            <hr>

                            <h5>Section 1 </h5>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Heading</label>
                                    <input type="text" class="form-control" name="section11_one_title">
                                </div>
                                <div class="form-group col-6">
                                    <label>Description</label>
                                    <input type="text" class="form-control" name="section11_one_desc">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Select Icon</label>
                                    <br>
                                    <button type="button" class="btn btn-primary select-image" data-img="section11_one_img">Select Image</button>
                                    <input type="hidden" class="section11_one_img" name="section11_one_img" />
                                </div>
                            </div>
                            <hr>
                            <h5>Section 2 </h5>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Heading</label>
                                    <input type="text" class="form-control" name="section11_two_title">
                                </div>
                                <div class="form-group col-6">
                                    <label>Description</label>
                                    <input type="text" class="form-control" name="section11_two_desc">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Select Icon</label>
                                    <br>
                                    <button type="button" class="btn btn-primary select-image" data-img="section11_two_img">Select Image</button>
                                    <input type="hidden" class="section11_two_img" name="section11_two_img" />
                                </div>
                            </div>
                            <hr>
                            <h5>Section 3</h5>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Heading</label>
                                    <input type="text" class="form-control" name="section11_three_title">
                                </div>
                                <div class="form-group col-6">
                                    <label>Description</label>
                                    <input type="text" class="form-control" name="section11_three_desc">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Select Icon</label>
                                    <br>
                                    <button type="button" class="btn btn-primary select-image" data-img="section11_three_img">Select Image</button>
                                    <input type="hidden" class="section11_three_img" name="section11_three_img" />
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
        $("#pserv").change(function() {
            var pid = $(this).val();
            var sid = 0;
            $.ajax({
                type: 'POST',
                url: site_url + 'admin/getsubserviceslist',
                data: {
                    pid: pid,
                    sid: sid
                },
                dataType: 'json',
                success: function(res) {
                    if (res.length > 0) {
                        var temp = `<label>Select Sub Service</label>
            <select class="form-control" name="sserv" id="sserv"><option value="0">Select Sub-Service</option>`;
                        res.forEach(e => {
                            temp += `<option value="${e.id}">${e.name}</option>`;
                        })
                        temp += `</select>`;
                        $("#sserv-div").html(temp);
                    }
                }
            });
        });
        $(document).ready(function() {
            $('#service-form').submit(function(e) {
                e.preventDefault();
                var form = $(this);
                var url = site_url + "admin/addupdatesubservice";
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
                                $('.progress-bar').attr('aria-valuenow', percent).css(
                                    'width', percent + '%').text(percent + '%');
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
                        $(".msg").html(res.msg);
                        if (res.status) {
                            form[0].reset();
                        }
                    },
                    error: function(xhr, status, error) {
                        // Handle the error
                    }
                });
            });
        });
        $(".delete-so-unique").click(function() {
            let id = $(this).attr("data-id");
            $("#" + id).remove();
        })
        $(document).ready(function() {
            autosize();
            $('#title').on('input', function() {
                var title = $(this).val().toLowerCase();
                var slug = title.replace(/\s+/g, '-').replace(/[^a-z0-9-]/g, '');
                $('#slug').val(slug);
            });
        })
    </script>