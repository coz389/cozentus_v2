<div class="main-panel">
    <div class="content-wrapper">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Update Home Section 7</h4>
                <div class="row">
                    <div class="col-12">
                        <form class="forms-sample" id="blog-form">

                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title" value="<?= html_entity_decode($title) ?>" required>
                            </div>

                            <div class="form-group ">
                                <label>Content</label>
                                <textarea class="form-control" name="description" id="summernoteExample" rows="4"><?= html_entity_decode($description) ?></textarea>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>CTA Button Label</label>
                                    <input type="text" class="form-control" name="ctabtn" value="<?= $ctabtn ?>">
                                </div>
                                <div class="form-group col-6">
                                    <label>CTA Button Link</label>
                                    <input type="text" class="form-control" name="ctalink" value="<?= urldecode($ctalink) ?>">
                                </div>
                            </div>
                            <hr>

                            <h5>Section 1 </h5>
                            <div class="form-group">
                                <label>Heading</label>
                                <input type="text" class="form-control" name="section_one_title" value="<?= $section_one_title ?>">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" class="form-control" name="section_one_desc" value="<?= $section_one_desc ?>">
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Select Icon</label>
                                    <br>
                                    <button type="button" class="btn btn-primary select-image" data-img="section_one_img"><?= !empty($section_one_img) ? 'Image Exist' : 'Select Image' ?></button>
                                    <input type="hidden" class="section_one_img" name="section_one_img" value="<?= $section_one_img ?>" />
                                </div>
                            </div>
                            <hr>
                            <h5>Section 2 </h5>
                            <div class="form-group">
                                <label>Heading</label>
                                <input type="text" class="form-control" name="section_two_title" value="<?= $section_two_title ?>">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" class="form-control" name="section_two_desc" value="<?= $section_two_desc ?>">
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Select Icon</label>
                                    <br>
                                    <button type="button" class="btn btn-primary select-image" data-img="section_two_img"><?= !empty($section_two_img) ? 'Image Exist' : 'Select Image' ?></button>
                                    <input type="hidden" class="section_two_img" name="section_two_img" value="<?= $section_two_img ?>" />
                                </div>
                            </div>
                            <hr>
                            <h5>Section 3</h5>
                            <div class="form-group">
                                <label>Heading</label>
                                <input type="text" class="form-control" name="section_three_title" value="<?= $section_three_title ?>">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" class="form-control" name="section_three_desc" value="<?= $section_three_desc ?>">
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Select Icon</label>
                                    <br>
                                    <button type="button" class="btn btn-primary select-image" data-img="section_three_img"><?= !empty($section_three_img) ? 'Image Exist' : 'Select Image' ?></button>
                                    <input type="hidden" class="section_three_img" name="section_three_img" value="<?= $section_three_img ?>" />
                                </div>
                            </div>

                            <input type="hidden" name="id" value="<?= $id ?>">

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
        $(document).ready(function(e) {
            $("#blog-form").on('submit', (function(e) {
                e.preventDefault();
                $.ajax({
                    url: site_url + "admin/insertupdatehomesection7",
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
                    }
                });
            }));
        });
    </script>