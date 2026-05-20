<div class="main-panel">
    <div class="content-wrapper">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Update Post</h4>
                <div class="row">
                    <div class="col-12">
                        <form class="forms-sample" id="blog-form">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title" id="title" value="<?= $title ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Slug</label>
                                <input type="text" class="form-control" name="slug" id="slug" value="<?= $slug ?>" required>
                            </div>
                            <div class="">
                                <div class="form-group <?= $type == 3 ? '' : 'd-none' ?>">
                                    <label>Case Type</label>
                                    <select name="type" class="form-control">
                                        <option value="0" <?= $ctype == 0 ? 'selected' : '' ?>>Case Studies</option>
                                        <option value="1" <?= $ctype == 1 ? 'selected' : '' ?>>Use Case</option>

                                    </select>
                                </div>
                                <?php if ($type == 1) {  ?>
                                    <div class="form-group">
                                        <label>Sidebar Heading </label>
                                        <input type="text" class="form-control" name="sheading" value="<?= $sheading ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Sidebar Description </label>
                                        <input type="text" class="form-control" name="sdecription" value="<?= $sdecription ?>">
                                    </div>
                                    <div class="form-group col-6">
                                        <label>Sidebar Download link </label>
                                        <input type="text" class="form-control" name="slink" value="<?= urldecode($slink) ?> ">
                                    </div>
                                <?php } ?>
                                <div class="form-group">
                                    <?php
                                    $checkbox_value = $is_webinar;
                                    $is_checked = ($checkbox_value == 1) ? 'checked' : '';
                                    ?>
                                    <input type="checkbox" name="is_webinar" value="1" <?php echo $is_checked; ?>>&nbsp Webinar
                                </div>
                                <?php //if($checkbox_value == 1) { 
                                ?>
                                <!---- case Study--->
                                <?php if ($type == 3) {  ?>
                                    <hr>
                                    <div class="">
                                        <h5>Section 1</h5>
                                        <div class="form-group">
                                            <label>Heading </label>
                                            <input type="text" class="form-control" name="top_left_heading" value="<?= $top_left_heading  ?>">
                                        </div>
                                        <!-- <div class="form-group">
                                            <label>Heading Right</label>
                                            <input type="text" class="form-control" name="top_right_heading" value="<?= $top_right_heading  ?>">
                                        </div> -->
                                        <div class="form-group">
                                            <label>Short Description </label>
                                            <input type="text" class="form-control" name="short_description_left" value="<?= $short_description_left  ?>">
                                        </div>
                                        <!-- <div class="form-group">
                                            <label>Short Description Right</label>
                                            <input type="text" class="form-control" name="short_description_right" value="<?= $short_description_right  ?>">
                                        </div> -->

                                        <div class="Section 5">
                                            <hr>
                                            <h5>Section 2</h5>
                                            <hr>
                                            <div class="form-group">
                                                <label>Heading</label>
                                                <input type="text" class="form-control" name="section_5_heading" value="<?= $section_5_heading ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Image (Max File Size 2MB)</label>
                                                <br>
                                                <button type="button" class="btn btn-primary select-image" data-img="section_5_image">
                                                    <?= !empty($section_5_image) ? 'Image Exist' : 'Select Image' ?></button>
                                                <input type="hidden" class="section_5_image" name="section_5_image" value="<?= $section_5_image ?>" />
                                            </div>
                                            <div class="repeater">
                                                <h5>Left Site</h5>
                                                <?php if (!empty($section_5_left_json)) {
                                                    $count = 0;
                                                    $buiObj = json_decode($section_5_left_json);
                                                    foreach ($buiObj as $obj) {
                                                        $count++;
                                                ?>
                                                        <div id="section_5-<?= $count ?>" class="border p-3">
                                                            <div class="row" style="margin-bottom: 1.5rem;">
                                                                <div class="col">
                                                                    <label>Heading</label>
                                                                    <input type="text" class="form-control multiple-op" placeholder="Heading" aria-label="Heading"
                                                                        name="section_5_exist[<?= $count ?>][left_heading]"
                                                                        value="<?= trim($obj->heading) ?>">
                                                                </div>
                                                                <div class="col">
                                                                    <label>Description</label>
                                                                    <input type="text" class="form-control multiple-op" placeholder="Description"
                                                                        aria-label="Description" name="section_5_exist[<?= $count ?>][left_description]"
                                                                        value="<?= trim($obj->description) ?>">
                                                                </div>
                                                            </div>
                                                            <button type="button" data-id="section_5-<?= $count ?>"
                                                                class="delete-btn btn btn-danger rec-delete btn-sm icon-btn ml-2">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                        </div>
                                                    <?php } ?>
                                                <?php }  ?>
                                                <div data-repeater-list="section_5_content">
                                                    <div data-repeater-item class="border p-3">

                                                        <div class="row">
                                                            <div class="col">
                                                                <label>Heading</label>
                                                                <input type="text" class="form-control multiple-op" placeholder="Heading"
                                                                    aria-label="Heading" name="left_heading">
                                                            </div>
                                                            <div class="col">
                                                                <label>Description</label>
                                                                <input type="text" class="form-control multiple-op" placeholder="Description"
                                                                    aria-label="Description" name="left_description">
                                                            </div>
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

                                            <div class="repeater">
                                                <h5>Right Site</h5>
                                                <?php if (!empty($section_5_right_json)) {
                                                    $count = 0;
                                                    $buiObj = json_decode($section_5_right_json);
                                                    foreach ($buiObj as $obj) {
                                                        $count++;
                                                ?>
                                                        <div id="section_5-<?= $count ?>" class="border p-3">
                                                            <div class="form-group">
                                                                <label>Heading</label>
                                                                <input type="text" class="form-control" name="section_5_exist[<?= $count ?>][right_heading]"
                                                                    value="<?= $obj->heading ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Description</label>
                                                                <textarea class="form-control multiple-op" name="section_5_exist[<?= $count ?>][right_description]"
                                                                    id="summernoteExample" rows="4">
                                                                    <?= html_entity_decode($obj->description) ?>
                                                                </textarea>
                                                            </div>
                                                            <!-- <button type="button" data-id="section_5-<?= $count ?>" 
                                                             class="delete-btn btn btn-danger rec-delete btn-sm icon-btn ml-2">
                                                                <i class="fas fa-trash"></i>
                                                            </button> -->
                                                        </div>
                                                    <?php }
                                                } else { ?>

                                                    <div data-repeater-list="section_5_content">
                                                        <div data-repeater-item class="border p-3">

                                                            <div class="form-group">
                                                                <label>Heading</label>
                                                                <input type="text" class="form-control" name="right_heading">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Description</label>
                                                                <textarea class="form-control multiple-op" name="right_description" id="summernoteExample" rows="4">
                                                            </textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                            <hr>
                                        </div>

                                        <div class="Section 2">
                                            <h5>Section 3</h5>
                                            <hr>
                                            <div class="form-group">
                                                <label>Heading</label>
                                                <input type="text" class="form-control" name="section_2_heading" value="<?= $section_2_heading ?>">
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
                                            <hr>
                                        </div>
                                        <div class="Section 3">
                                            <h5>Section 4</h5>
                                            <hr>
                                            <div class="form-group">
                                                <label>Heading</label>
                                                <input type="text" class="form-control" name="section_3_heading" value="<?= $section_3_heading ?>">
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
                                            <hr>
                                        </div>
                                        <div class="Section 4">
                                            <h5>Section 5</h5>
                                            <hr>
                                            <div class="form-group">
                                                <label>Heading</label>
                                                <input type="text" class="form-control" name="section_4_heading" value="<?= $section_4_heading ?>">
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
                                    </div>
                                <?php } ?>
                                <hr>
                                <!-- <div class="form-group <? //= $type == 2 ? '' : 'd-none' 
                                                            ?>"> -->
                                <div class="form-group">
                                    <label>End Date</label>
                                    <div class="datepicker-popup input-group date datepicker">
                                        <input type="text" class="form-control" name="enddate" value="<?= date('m/d/Y', strtotime($end_date)) ?>">
                                        <span class="input-group-addon input-group-append border-left">
                                            <span class="far fa-calendar input-group-text"></span>
                                        </span>
                                    </div>
                                </div>

                                <div class="form-group <?= $type == 3 ? '' : 'd-none' ?>">
                                    <label>Botttom Heading</label>
                                    <input type="text" class="form-control" name="botttom_heading" value="<?= $botttom_heading ?>">
                                </div>

                                <div class="form-group ">
                                    <label>Content</label>
                                    <textarea class="form-control" name="content" id="summernoteExample" rows="4"><?= html_entity_decode($content) ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Enter Youtube/Podcast Iframe</label>
                                <input type="textarea" class="form-control" name="video" value="<?= htmlspecialchars($video) ?>">
                            </div>



                            <hr>
                            <div class="form-group <?= $type == 7 ? '' : 'd-none' ?> ">
                                <label>Apple podcasts URL</label>

                                <?php $apple_pod = urldecode($apple_pod ?? ''); ?>

                                <input type="text" class="form-control" name="apple_pod" value="<?= urldecode($apple_pod) ?>">
                            </div>
                            <div class="form-group  <?= $type == 7 ? '' : 'd-none' ?>">
                                <label>Google podcasts URL</label>

                                <?php $google_pod = urldecode($google_pod ?? ''); ?>

                                <input type="text" class="form-control" name="google_pod" value="<?= urldecode($google_pod) ?>">
                            </div>
                            <div class="form-group <?= $type == 7 ? '' : 'd-none' ?>">
                                <label>Spotify podcasts URL</label>
                                <?php $spotify_pod = urldecode($spotify_pod ?? ''); ?>

                                <input type="text" class="form-control" name="spotify_pod" value="<?= urldecode($spotify_pod) ?>">
                            </div>
                            <div class="form-group <?= $type == 7 ? '' : 'd-none' ?>">
                                <label>Sound cloud URL</label>
                                <?php $sound_pod = urldecode($sound_pod ?? ''); ?>

                                <input type="text" class="form-control" name="sound_pod" value="<?= urldecode($sound_pod) ?>">
                            </div>

                            <div class="form-group <?= $type == 7 ? '' : 'd-none' ?>">
                                <label>Speaker Name</label>
                                <input type="text" class="form-control" name="speaker_name" value="<?= $speaker_name ?>">
                            </div>
                            <hr>


                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Card Image Thumbnail (Max File Size 2MB)</label>
                                    <br>
                                    <button type="button" class="btn btn-primary select-image" data-img="thumb-image"><?= !empty($thumbnail) ? 'Image Exist' : 'Select Image' ?></button>
                                    <input type="hidden" class="thumb-image" name="thumbnail" value="<?= $thumbnail ?>" />
                                </div>
                                <div class="form-group">
                                    <label>Image (Max File Size 2MB)</label>
                                    <br>
                                    <button type="button" class="btn btn-primary select-image" data-img="image"><?= !empty($image) ? 'Image Exist' : 'Select Image' ?></button>
                                    <input type="hidden" class="image" name="image" value="<?= $image ?>" />
                                </div>
                            </div>
                            <input type="hidden" name="id" value="<?= $id ?>">
                            <input type="hidden" name="type" value="<?= $type ?>">
                            <input type="hidden" name="download_exist" value="<?= $download ?>">
                            <div class="form-group <?= $type == 3 ? '' : 'd-none' ?>">
                                <label>Upload Pdf</label>
                                <input type="file" name="file" class="form-control">
                                <span><?= $download ?> file exist</span>
                            </div>

                            <div class="form-group">
                                <label>Page Head Script</label>
                                <textarea rows="4" class="form-control" name="page_header"><?= html_entity_decode($page_header) ?></textarea>
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

            $("#service-slug").change(function() {

                var sname = $("#service-slug :selected").text();
                // console.log(sname);
                $("#service-name").val(sname);
            })
        })
        $(".rec-delete").click(function() {
            let id = $(this).attr("data-id");
            $("#" + id).remove();
        })
    </script>