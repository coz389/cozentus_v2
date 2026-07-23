<div class="main-panel">
    <div class="content-wrapper">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add New Post</h4>
                <div class="row">
                    <div class="col-12">
                        <form class="forms-sample" id="blog-form">
                            <div class="form-group">
                                <label>Post Type</label>
                                <select name="type" class="form-control" id="post-type">
                                    <option value="1">Blog</option>
                                    <option value="2">Event</option>
                                    <option value="3">Case studies</option>
                                    <option value="5">Reports</option>
                                    <option value="6">Webinar</option>
                                    <option value="7">Podcast</option>

                                </select>
                            </div>
                            <div class="form-group case-type d-none">
                                <label>Case Type</label>
                                <select name="ctype" class="form-control">
                                    <option value="0">Case Studies</option>
                                    <option value="1">Use Case</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title" id="title" required>
                            </div>
                            <div class="form-group">
                                <label>Slug</label>
                                <input type="text" class="form-control" name="slug" id="slug" required>
                            </div>
                            <div class="form-group webinarIframe d-none">
                                <label>Sub Title</label>
                                <input type="text" class="form-control" name="sub_title" id="sub_title">
                            </div>
                            <div class="form-group webinarIframe d-none">

                                <input type="checkbox" name="is_webinar" value="1">&nbsp Webinar
                            </div>
                            <!---- Blog Sidebar --->
                            <div class="form-group sblog">
                                <label>Sidebar Heading </label>
                                <input type="text" class="form-control" name="sheading">
                            </div>
                            <div class="form-group sblog">
                                <label>Sidebar Description </label>
                                <input type="text" class="form-control" name="sdecription">
                            </div>
                            <div class="form-group col-6 sblog">
                                <label>Sidebar Download link </label>
                                <input type="text" class="form-control" name="slink">
                            </div>
                            <!---- case Study--->

                            <hr>
                            <div class="case-type d-none">
                                <h5>Section 1</h5>
                                <div class="form-group">
                                    <label>Heading</label>
                                    <input type="text" class="form-control" name="top_left_heading">
                                </div>
                                <!-- <div class="form-group">
                                    <label>Heading Right</label>
                                    <input type="text" class="form-control" name="top_right_heading">
                                </div> -->
                                <div class="form-group">
                                    <label>Short Description</label>
                                    <input type="text" class="form-control" name="short_description_left">
                                </div>
                                <!-- <div class="form-group">
                                    <label>Short Description Right</label>
                                    <input type="text" class="form-control" name="short_description_right">
                                </div> -->
                            </div>


                            <div class="case-type d-none Section 5">
                                <hr>
                                <h5>Section 2</h5>
                                <hr>
                                <div class="form-group">
                                    <label>Heading</label>
                                    <input type="text" class="form-control" name="section_5_heading">
                                </div>
                                <div class="row p-3">
                                    <div class="form-group">
                                        <label>Image (Max File Size 2MB)</label>
                                        <br>
                                        <button type="button" class="btn btn-primary select-image" data-img="image">
                                            Select Image</button>
                                        <input type="hidden" class="image" name="section_5_image" />
                                    </div>
                                </div>
                                <div class="repeater">
                                    <h5>Left Site</h5>
                                    <div data-repeater-list="section_5_content">
                                        <div data-repeater-item class="border p-3">
                                            <div class="row">
                                                <div class="form-group col-6">
                                                    <label>Heading</label>
                                                    <input type="text" class="form-control" name="left_heading">
                                                </div>
                                                <div class="form-group col-6">
                                                    <label>Description</label>
                                                    <input type="text" class="form-control" name="left_description">
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
                                <div class="repeater">
                                    <h5>Right Site</h5>
                                    <div data-repeater-list="section_5_content">
                                        <div data-repeater-item class="border p-3">
                                            <div class="form-group">
                                                <label>Heading</label>
                                                <input type="text" class="form-control" name="right_heading">
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="form-control multiple-op" id="summernoteExample" name="right_description"></textarea>
                                            </div>

                                            <!-- <button data-repeater-delete type="button" class="btn btn-danger btn-sm icon-btn ml-2">
                                                <i class="fas fa-trash"></i>
                                            </button> -->
                                        </div>
                                    </div> <br>
                                    <!-- <button data-repeater-create type="button" class="float-right btn btn-info btn-sm icon-btn ml-2 mb-2">
                                        <i class="fa fa-plus"></i>
                                    </button> -->
                                </div>
                            </div>

                            <div class="case-type d-none Section 2">
                                <h5>Section 3</h5>
                                <hr>
                                <div class="form-group">
                                    <label>Heading</label>
                                    <input type="text" class="form-control" name="section_2_heading">
                                </div>
                                <div class="form-group">
                                    <label>Image (Max File Size 2MB)</label>
                                    <br>
                                    <button type="button" class="btn btn-primary select-image" data-img="section_2_image">
                                        <?= !empty($section_2_image) ? 'Image Exist' : 'Select Image' ?></button>
                                    <input type="hidden" class="section_2_image" name="section_2_image" value="<?= $section_2_image ?>" />
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control multiple-op" name="section_2_json" id="summernoteExample1" rows="4">
                                                    <?= html_entity_decode($section_2_json) ?>
                                                </textarea>
                                </div>
                            </div>
                            <div class="case-type d-none Section 3">
                                <hr>
                                <h5>Section 4</h5>
                                <hr>
                                <div class="form-group">
                                    <label>Heading</label>
                                    <input type="text" class="form-control" name="section_3_heading">
                                </div>
                                <div class="form-group">
                                    <label>Image (Max File Size 2MB)</label>
                                    <br>
                                    <button type="button" class="btn btn-primary select-image" data-img="section_3_image">
                                        <?= !empty($section_3_image) ? 'Image Exist' : 'Select Image' ?></button>
                                    <input type="hidden" class="section_3_image" name="section_3_image" value="<?= $section_3_image ?>" />
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control multiple-op" name="section_3_json" id="summernoteExample2" rows="4">
                                                    <?= html_entity_decode($section_3_json) ?>
                                                </textarea>
                                </div>
                            </div>
                            <div class="case-type d-none Section 4">
                                <hr>
                                <h5>Section 5</h5>
                                <hr>
                                <div class="form-group">
                                    <label>Heading</label>
                                    <input type="text" class="form-control" name="section_4_heading">
                                </div>
                                <div class="form-group">
                                    <label>Image (Max File Size 2MB)</label>
                                    <br>
                                    <button type="button" class="btn btn-primary select-image" data-img="section_4_image">
                                        <?= !empty($section_4_image) ? 'Image Exist' : 'Select Image' ?></button>
                                    <input type="hidden" class="section_4_image" name="section_4_image" value="<?= $section_4_image ?>" />
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control multiple-op" name="section_4_json" id="summernoteExample3" rows="4">
                                                    <?= html_entity_decode($section_4_json) ?>
                                                </textarea>
                                </div>
                            </div>
                            <div class="case-type d-none Section 6">
                                <hr>
                                <h5>Section 6 (Client Review)</h5>
                                <hr>
                                <div class="form-group">
                                    <label>Heading</label>
                                    <input type="text" class="form-control" name="client_review_heading">
                                </div>

                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control multiple-op" name="client_review_desc" rows="4"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Designation</label>
                                    <input type="text" class="form-control" name="client_designation">
                                </div>
                                <hr>
                            </div>





                            <hr>
                            <div class="form-group webinarIframe d-none">
                                <label>Enter Youtube/Podcast Iframe</label>
                                <input type="textarea" class="form-control" name="video" value="">
                            </div>
                            <hr>

                            <hr>
                            <div class="form-group webinarIframe d-none">
                                <label>Apple podcasts URL</label>
                                <input type="text" class="form-control" name="apple_pod" value="">
                            </div>
                            <div class="form-group webinarIframe d-none">
                                <label>Google podcasts URL</label>
                                <input type="text" class="form-control" name="google_pod" value="">
                            </div>
                            <div class="form-group webinarIframe d-none">
                                <label>Spotify podcasts URL</label>
                                <input type="text" class="form-control" name="spotify_pod" value="">
                            </div>
                            <div class="form-group webinarIframe d-none">
                                <label>Sound cloud URL</label>
                                <input type="text" class="form-control" name="sound_pod" value="">
                            </div>

                            <div class="form-group webinarIframe d-none">
                                <label>Speaker Name</label>
                                <input type="text" class="form-control" name="speaker_name" value="">
                            </div>
                            <div class="form-group webinarIframe d-none">
                                <label>Designation</label>
                                <input type="text" class="form-control" name="client_designation" value="<?= $client_designation ?>">
                            </div>
                            <hr>

                            <div class="New Section webinarIframe d-none"">
                                <h5>New Section</h5>
                                <hr>
                                <div class=" row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Heading</label>
                                        <input type="text" class="form-control" name="new_podcast_heading" value="<?= $new_podcast_heading ?>">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" class="form-control" name="new_podcast_title" value="<?= $new_podcast_title ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control multiple-op" name="new_podcast_desc" rows="4"><?= $new_podcast_desc ?></textarea>
                            </div>
                    </div>

                    <hr>
                    <div class="form-group blog-sec">
                        <label>Author</label>
                        <select class="form-control" name="author">
                            <option value="">Select Author</option>
                            <?php if (!empty($authors)) {
                                foreach ($authors as $at) {
                            ?>
                                    <option value="<?= $at['id'] ?>"><?= $at['name'] ?></option>
                            <?php
                                }
                            } ?>
                        </select>
                    </div>
                    <div class="form-group ">
                        <label>Service</label>
                        <select class="form-control" name="serviceid">
                            <option value="">Select Service</option>
                            <?php if (!empty($services)) {
                                foreach ($services as $at) {
                            ?>
                                    <option value="<?= $at['id'] ?>"><?= $at['name'] ?></option>
                            <?php
                                }
                            } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Short Description (Max 200 Charachters)</label>
                        <input type="text" class="form-control" name="description" required>
                    </div>
                    <div class="form-group ">
                        <label>Tags</label>
                        <input type="text" class="form-control" id="tags" name="tags">
                    </div>
                    <div class="form-group">
                        <label>Post Date</label>
                        <div class="datepicker-popup input-group date datepicker">
                            <input type="text" class="form-control" name="date">
                            <span class="input-group-addon input-group-append border-left">
                                <span class="far fa-calendar input-group-text"></span>
                            </span>
                        </div>
                    </div>
                    <div class="news-sec d-none">
                        <div class="form-group">
                            <label>End Date</label>
                            <div class="datepicker-popup input-group date datepicker">
                                <input type="text" class="form-control" name="enddate">
                                <span class="input-group-addon input-group-append border-left">
                                    <span class="far fa-calendar input-group-text"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="case-type d-none">
                        <div class="form-group">
                            <label>Botttom Heading</label>
                            <input type="text" class="form-control" name="botttom_heading" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea class="form-control" name="content" id="summernoteExample4" rows="4"></textarea>
                    </div>

                    <div class="row">
                        <div class="form-group col-6">
                            <label>Card Image Thumbnail (Max File Size 2MB)</label>
                            <br>
                            <button type="button" class="btn btn-primary select-image" data-img="thumb-image">Select Image</button>
                            <input type="hidden" class="thumb-image" name="thumbnail" />
                        </div>
                        <div class="form-group col-6">
                            <label>Image (Max File Size 2MB)</label>
                            <br>
                            <button type="button" class="btn btn-primary select-image" data-img="image">Select Image</button>
                            <input type="hidden" class="image" name="image" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Upload Pdf</label>
                        <input type="file" name="file" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Page Head Script</label>
                        <textarea rows="4" class="form-control" name="page_header"></textarea>
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
    $("#post-type").change(function() {
        let type = $(this).val();
        if (type == 3) {
            $(".case-type").removeClass("d-none");
        } else {
            $(".case-type").addClass("d-none");
        }
        if (type == 1 || type == 3) {
            $(".news-sec").addClass('d-none');
            $(".webinarIframe").addClass('d-none');

            $(".blog-sec").removeClass('d-none');
        }
        if (type == 6 || type == 7) {
            $(".webinarIframe").removeClass('d-none');
        } else {
            $(".blog-sec").addClass('d-none');
            $(".news-sec").removeClass('d-none');
            $(".webinarIframe").addClass('d-none');
        }
        if (type != 1) {
            $(".sblog").addClass("d-none");
        }
    })
    $(document).ready(function(e) {
        $("#blog-form").on('submit', (function(e) {
            e.preventDefault();
            $.ajax({
                url: site_url + "admin/insertupdateblog",
                type: "POST",
                data: new FormData(this),
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
                    if (res.status) {
                        $("#blog-form")[0].reset();
                    }
                }
            });
        }));
    });
    $(document).ready(function() {
        $('#title').on('input', function() {
            var title = $(this).val().toLowerCase();
            var slug = title.replace(/\s+/g, '-').replace(/[^a-z0-9-]/g, '');
            $('#slug').val(slug);
        });



    })
</script>