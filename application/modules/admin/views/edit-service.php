<div class="main-panel">
    <div class="content-wrapper">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Service</h4>
                <div class="row">
                    <div class="col-12">
                        <form class="forms-sample " id="service-form">
                            <h5>Service Cards for home page</h5>
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" name="card_heading" id="title" value="<?= $card_heading ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Slug</label>
                                <input type="text" class="form-control" name="slug" id="slug" value="<?= $slug ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" class="form-control" name="card_description" value="<?= $card_description ?>" required>
                            </div>
                            <div class="form-group">
                                <?php
                                $checkbox_value = $is_home;
                                $is_checked = ($checkbox_value == 1) ? 'checked' : '';
                                ?>
                                <input type="checkbox" name="is_home" value="1" <?php echo $is_checked; ?>>&nbsp Display on the home page
                            </div>
                            <div class="form-group">
                                <label>Priority</label>
                                <input type="text" class="form-control" name="priority" id="priority" value="<?= $priority ?>">
                            </div>

                            <div class="form-group">
                                <label>Select Image</label>
                                <br>
                                <button type="button" class="btn btn-primary select-image" data-img="card_image"><?= !empty($card_image) ? 'Image Exist' : 'Select Image' ?></button>
                                <input type="hidden" class="card_image" name="card_image" value="<?= $card_image ?>" />
                            </div>
                            <div class="form-group">
                                <label>Tags</label>
                                <input type="text" class="form-control" name="tags" id="tags" value="<?= $tags ?>">
                            </div>
                            <div class="form-group">
                                <label>Parent Service</label>
                                <select class="form-control" id="pserv" name="pserv" required>
                                    <option value="">Select Service</option>
                                    <?php if (!empty($pservArr)) {
                                        foreach ($pservArr as $sv) { ?>
                                            <option value="<?= $sv['id'] ?>" <?= $pserv == $sv['id'] ? 'selected' : '' ?>><?= $sv['name'] ?></option>
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
                                <input type="text" class="form-control" name="inner_banner_heading" value="<?= $inner_banner_heading ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Banner Description</label>
                                <input type="text" class="form-control" name="inner_banner_description" value="<?= $inner_banner_description ?>">
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Select Banner Image (Desktop 1536x430)</label>
                                    <br>
                                    <button type="button" class="btn btn-primary select-image" data-img="inner_banner_image"><?= !empty($inner_banner_image) ? 'Image Exist' : 'Select Image' ?></button>
                                    <input type="hidden" class="inner_banner_image" name="inner_banner_image" value="<?= $inner_banner_image ?>" />
                                </div>
                                <div class="form-group col-6">
                                    <label>Select Banner Image (Mobile 430x430)</label>
                                    <br>
                                    <button type="button" class="btn btn-primary select-image" data-img="inner_banner_mimage"><?= !empty($inner_banner_mimage) ? 'Image Exist' : 'Select Image' ?></button>
                                    <input type="hidden" class="inner_banner_mimage" name="inner_banner_mimage" value="<?= $inner_banner_mimage ?>" />
                                </div>
                            </div>
                            <hr>
                            <h5>Section 2</h5>
                            <div class="form-group">
                                <label>Heading</label>
                                <input type="text" class="form-control" name="advantage_heading" value="<?= $advantage_heading ?>">
                            </div>
                            <div class="form-group">
                                <label>Short Description</label>

                                <input type="textarea" class="form-control" name="advantage_short_description" value="<?php echo htmlspecialchars($advantage_short_description); ?>">


                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Insert Youtube Video Link</label>
                                    <br>
                                    <input type="text" class="form-control form-control-sm" name="advantage_video" value="<?= urldecode($advantage_video) ?>">
                                </div>
                                <div class="form-group col-6">
                                    <label>Select Image</label>
                                    <br>
                                    <button type="button" class="btn btn-primary select-image" data-img="advantage_image"><?= !empty($advantage_image) ? 'Image Exist' : 'Select Image' ?></button>
                                    <input type="hidden" class="advantage_image" name="advantage_image" value="<?= $advantage_image ?>" />
                                </div>
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
                            <h5>Section 3</h5>
                            <div class="form-group">
                                <label>Heading</label>
                                <input type="text" class="form-control" name="about_heading" value="<?= $about_heading ?>">
                            </div>
                            <div class="form-group">
                                <label>Short Description Left</label>
                                <input type="text" class="form-control" name="about_short_description_left" value="<?= htmlspecialchars($about_short_description_left) ?>">
                            </div>
                            <div class="form-group">
                                <label>Short Description Right</label>
                                <input type="text" class="form-control" name="about_short_description_right" value="<?= htmlspecialchars($about_short_description_right) ?>">
                            </div>
                            <div class="form-group">
                                <label>Select Image</label>
                                <br>
                                <button type="button" class="btn btn-primary select-image" data-img="about_image"><?= !empty($about_image) ? 'Image Exist' : 'Select Image' ?></button>
                                <input type="hidden" class="about_image" name="about_image" value="<?= $about_image ?>" />
                            </div>

                            <!-- New Custom Section v2 -->
                            <div class="repeater">
                                <?php
                                if (!empty($about_new_json)) {
                                    $count = 0;
                                    $about_news = json_decode($about_new_json, true);
                                    foreach ($about_news as $key => $about_new) {
                                        $count++;

                                ?>
                                        <div id="about-new-<?= $count ?>" class="border p-3">
                                            <div class="row">
                                                <div class="form-group col-6">
                                                    <label>Title</label>
                                                    <input type="text" class="form-control" name="about_new_exist[<?= $count ?>][about_new_tite]" value="<?= $about_new['about_new_tite'] ?>">
                                                </div>
                                                <div class="form-group col-6">
                                                    <label>Description</label>
                                                    <input type="text" class="form-control" name="about_new_exist[<?= $count ?>][about_new_desc]" value="<?= $about_new['about_new_desc'] ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Select Image</label>
                                                    <br>
                                                    <button type="button" class="btn btn-primary addmore-image-select">
                                                        <?= !empty($about_new['about_new_icon']) ? 'Image Exist' : 'Select Image' ?>
                                                    </button>
                                                    <input type="hidden" class="hidden-image" name="about_new_exist[<?= $count ?>][about_new_icon]" value="<?= $about_new['about_new_icon'] ?>" />
                                                </div>
                                            </div>

                                            <button type="button" data-id="about-new-<?= $count ?>" class="delete-btn btn btn-danger about-new-delete  btn-sm icon-btn ml-2">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>


                                    <?php } ?>
                                <?php } ?>

                                <div data-repeater-list="about_new">
                                    <div data-repeater-item class="border p-3">
                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label>Title</label>
                                                <input type="text" class="form-control" name="about_new_tite" value="">
                                            </div>
                                            <div class="form-group col-6">
                                                <label>Description</label>
                                                <input type="text" class="form-control" name="about_new_desc" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Select Icon</label>
                                            <br>
                                            <button type="button" class="btn btn-primary addmore-image-select" data-img="about_new_icon">Select Icon</button>
                                            <input type="hidden" class="about_new_icon" name="about_new_icon" />
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



                            <div class="form-group">
                                <label>Why Cozentus Heading</label>
                                <input type="text" class="form-control" name="why_heading" value="<?= $why_heading ?>">
                            </div>
                            <div class="form-group">
                                <label>Short Description</label>
                                <input type="text" class="form-control" name="why_heading_desc" value="<?= $why_heading_desc ?>">
                            </div>
                            <hr>
                            <h5>Section Industries</h5>
                            <div class="form-group">
                                <label>Heading</label>
                                <input type="text" class="form-control" name="industries_heading" value="<?= $industries_heading ?>">
                            </div>
                            <div class="form-group">
                                <label>Short Description Left</label>
                                <input type="text" class="form-control" name="industries_short_description_left" value="<?= $industries_short_description_left ?>">
                            </div>
                            <div class="form-group">
                                <label>Select Image</label>
                                <br>
                                <button type="button" class="btn btn-primary select-image" data-img="industries_image"><?= !empty($industries_image) ? 'Image Exist' : 'Select Image' ?></button>
                                <input type="hidden" class="industries_image" name="industries_image" value="<?= $industries_image ?>" />
                            </div>
                            <hr>
                            <h5>Section 4 For Cards (Optional)</h5>
                            <hr>
                            <div class="form-group">
                                <label>Heading</label>
                                <input type="text" class="form-control" name="cardsecop_heading" value="<?= $cardsecop_heading ?>">
                            </div>
                            <div class="repeater">
                                <?php if (!empty($cardsecop)) {
                                    $count = 0;
                                    $mbObj = json_decode($cardsecop);
                                    foreach ($mbObj as $obj) {
                                        $count++;
                                ?>
                                        <div id="cardsecop-<?= $count ?>" class="border p-3">
                                            <div class="form-group">
                                                <label>Select Image</label>
                                                <br>
                                                <button type="button" class="btn btn-primary addmore-image-select"><?= !empty($obj->image) ? 'Image Exist' : 'Select Image' ?></button>
                                                <input type="hidden" class="hidden-image" name="cardsecop_exist[<?= $count ?>][image]" value="<?= $obj->image ?>" />
                                            </div>
                                            <div class="form-group">
                                                <label>Heading</label>
                                                <input type="text" class="form-control" name="cardsecop_exist[<?= $count ?>][heading]" value="<?= $obj->heading ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="form-control multiple-op" name="cardsecop_exist[<?= $count ?>][description]"><?= $obj->description ?></textarea>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-6">
                                                    <label>Link</label>
                                                    <input type="text" class="form-control" name="cardsecop_exist[<?= $count ?>][link]" value="<?= urldecode($obj->link) ?>">
                                                </div>

                                            </div>
                                            <button type="button" data-id="cardsecop-<?= $count ?>" class="delete-btn btn btn-danger rec-delete btn-sm icon-btn ml-2">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                <?php }
                                }
                                ?>
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
                                <input type="text" class="form-control" name="buisness_heading" value="<?= $buisness_heading ?>">
                            </div>
                            <div class="repeater">
                                <?php if (!empty($buisness_json)) {
                                    $count = 0;
                                    $buiObj = json_decode($buisness_json);
                                    foreach ($buiObj as $obj) {
                                        $count++;
                                ?>
                                        <div id="buisness-<?= $count ?>" class="border p-3">
                                            <div class="form-group">
                                                <label>Select Image</label>
                                                <br>
                                                <button type="button" class="btn btn-primary addmore-image-select"><?= !empty($obj->image) ? 'Image Exist' : 'Select Image' ?></button>
                                                <input type="hidden" class="hidden-image" name="buisness_content_exist[<?= $count ?>][image]" value="<?= $obj->image ?>" />
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-6">
                                                    <label>Tab Title</label>
                                                    <input type="text" class="form-control" name="buisness_content_exist[<?= $count ?>][tab]" value="<?= $obj->tab ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Heading</label>
                                                    <input type="text" class="form-control" name="buisness_content_exist[<?= $count ?>][heading]" value="<?= $obj->heading ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label>
                                                <input type="text" class="form-control" name="buisness_content_exist[<?= $count ?>][description]" value="<?= $obj->description ?>">
                                            </div>
                                            <button type="button" data-id="buisness-<?= $count ?>" class="delete-btn btn btn-danger rec-delete btn-sm icon-btn ml-2">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                <?php }
                                }
                                ?>
                                <div data-repeater-list="buisness_content">
                                    <div data-repeater-item class="border p-3">
                                        <div class="form-group">
                                            <label>Select Image</label>
                                            <br>
                                            <button type="button" class="btn btn-primary addmore-image-select">Select Image</button>
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
                                <input type="text" class="form-control" name="believe_heading" value="<?= $believe_heading ?>">
                            </div>
                            <?php
                            $blcon = json_decode($believe_json, true);
                            if (!empty($blcon)) {
                                $ctr = 1;
                                foreach ($blcon as $bk) {
                                    $pk[$ctr] = $bk['key'];
                                    $pv[$ctr] = $bk['value'];
                                    $ctr++;
                                }
                            }
                            ?>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Point 1</label>
                                    <input type="text" class="form-control" name="believe_point1" value="<?= !empty($pk[1]) ? $pk[1] : '' ?>">
                                </div>
                                <div class="form-group col-6">
                                    <label>Description</label>
                                    <input type="text" class="form-control" name="believe_point1_detail" value="<?= !empty($pv[1]) ? $pv[1] : '' ?>">
                                </div>
                                <div class="form-group col-6">
                                    <label>Point 2</label>
                                    <input type="text" class="form-control" name="believe_point2" value="<?= !empty($pk[2]) ? $pk[2] : '' ?>">
                                </div>
                                <div class="form-group col-6">
                                    <label>Description</label>
                                    <input type="text" class="form-control" name="believe_point2_detail" value="<?= !empty($pv[2]) ? $pv[2] : '' ?>">
                                </div>
                                <div class="form-group col-6">
                                    <label>Point 3</label>
                                    <input type="text" class="form-control" name="believe_point3" value="<?= !empty($pk[3]) ? $pk[3] : '' ?>">
                                </div>
                                <div class="form-group col-6">
                                    <label>Description</label>
                                    <input type="text" class="form-control" name="believe_point3_detail" value="<?= !empty($pv[3]) ? $pv[3] : '' ?>">
                                </div>
                                <div class="form-group col-6">
                                    <label>Point 4</label>
                                    <input type="text" class="form-control" name="believe_point4" value="<?= !empty($pk[4]) ? $pk[4] : '' ?>">
                                </div>
                                <div class="form-group col-6">
                                    <label>Description</label>
                                    <input type="text" class="form-control" name="believe_point4_detail" value="<?= !empty($pv[4]) ? $pv[4] : '' ?>">
                                </div>
                            </div>
                            <hr>
                            <h5>Section 7</h5>
                            <hr>
                            <div class="repeater">
                                <?php if (!empty($mbanners)) {
                                    $count = 0;
                                    $mbObj = json_decode($mbanners);
                                    foreach ($mbObj as $obj) {
                                        if (!empty($obj->description)) {
                                            $obj->description = str_replace(array(":"), "\r\n", $obj->description);
                                        }
                                        $count++;
                                ?>
                                        <div id="mbanners-<?= $count ?>" class="border p-3">
                                            <div class="form-group">
                                                <label>Select Image</label>
                                                <br>
                                                <button type="button" class="btn btn-primary addmore-image-select"><?= !empty($obj->image) ? 'Image Exist' : 'Select Image' ?></button>
                                                <input type="hidden" class="hidden-image" name="mbanners_exist[<?= $count ?>][image]" value="<?= $obj->image ?>" />
                                            </div>
                                            <div class="form-group">
                                                <label>Heading</label>
                                                <input type="text" class="form-control" name="mbanners_exist[<?= $count ?>][heading]" value="<?= $obj->heading ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="form-control multiple-op" name="mbanners_exist[<?= $count ?>][description]"><?= $obj->description ?></textarea>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-6">
                                                    <label>CTA Button Label</label>
                                                    <input type="text" class="form-control" name="mbanners_exist[<?= $count ?>][ctabtn]" value="<?= $obj->ctabtn ?>">
                                                </div>
                                                <div class="form-group col-6">
                                                    <label>CTA Button Link</label>
                                                    <input type="text" class="form-control" name="mbanners_exist[<?= $count ?>][ctalink]" value="<?= $obj->ctalink ?>">
                                                </div>
                                            </div>
                                            <button type="button" data-id="mbanners-<?= $count ?>" class="delete-btn btn btn-danger rec-delete btn-sm icon-btn ml-2">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                <?php }
                                }
                                ?>
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
                                <input type="text" class="form-control" name="toolbenefits_heading" value="<?= $toolbenefits_heading ?>">
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>CTA Button Label</label>
                                    <input type="text" class="form-control" name="toolbenefits_ctabtn" value="<?= $toolbenefits_ctabtn ?>">
                                </div>
                                <div class="form-group col-6">
                                    <label>CTA Button Link</label>
                                    <input type="text" class="form-control" name="toolbenefits_ctalink" value="<?= urldecode($toolbenefits_ctalink) ?>">
                                </div>
                            </div>
                            <div class="repeater">
                                <?php if (!empty($toolbenefits_json)) {
                                    $count = 0;
                                    $buiObj = json_decode($toolbenefits_json);
                                    foreach ($buiObj as $obj) {
                                        $count++;
                                ?>
                                        <div id="toolbenefits-<?= $count ?>" class="border p-3">
                                            <div class="form-group">
                                                <label>Select Image</label>
                                                <br>
                                                <button type="button" class="btn btn-primary addmore-image-select"><?= !empty($obj->image) ? 'Image Exist' : 'Select Image' ?></button>
                                                <input type="hidden" class="hidden-image" name="toolbenefits_exist[<?= $count ?>][image]" value="<?= $obj->image ?>" />
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-6">
                                                    <label>Tab Title</label>
                                                    <input type="text" class="form-control" name="toolbenefits_exist[<?= $count ?>][tab]" value="<?= $obj->tab ?>">
                                                </div>
                                                <div class="form-group  col-6">
                                                    <label>Heading</label>
                                                    <input type="text" class="form-control" name="toolbenefits_exist[<?= $count ?>][heading]" value="<?= $obj->heading ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label>
                                                <input type="text" class="form-control" name="toolbenefits_exist[<?= $count ?>][description]" value="<?= $obj->description ?>">
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-6">
                                                    <label>CTA Button Label</label>
                                                    <input type="text" class="form-control" name="toolbenefits_exist[<?= $count ?>][ctabtn]" value="<?= $obj->ctabtn ?>">
                                                </div>
                                                <div class="form-group col-6">
                                                    <label>CTA Button Link</label>
                                                    <input type="text" class="form-control" name="toolbenefits_exist[<?= $count ?>][ctalink]" value="<?= urldecode($obj->ctalink) ?>">
                                                </div>
                                            </div>
                                            <button type="button" data-id="toolbenefits-<?= $count ?>" class="delete-btn btn btn-danger rec-delete btn-sm icon-btn ml-2">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                <?php }
                                }
                                ?>

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
                            <h5>Section 9 (FAQ Section)</h5>
                            <hr>
                            <div class="form-group">
                                <label>Heading</label>
                                <input type="text" class="form-control" name="faq_heading" value="<?= $heading_faq ?>">
                            </div>
                            <div class="repeater">
                                <?php if (!empty($card_json_faq)) {
                                    $count = 0;
                                    $faqObj = json_decode($card_json_faq);
                                    foreach ($faqObj as $obj) {
                                        $count++;
                                ?>
                                        <div id="faq-<?= $count ?>" class="border p-3">
                                            <div class="form-group">
                                                <label>Heading</label>
                                                <input type="text" class="form-control" name="faqexist[<?= $count ?>][heading]" value="<?= $obj->heading ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label>
                                                <input type="text" class="form-control" name="faqexist[<?= $count ?>][description]" value="<?= $obj->description ?>">
                                            </div>
                                            <button type="button" data-id="faq-<?= $count ?>" class="delete-btn btn btn-danger rec-delete btn-sm icon-btn ml-2">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                <?php }
                                }
                                ?>
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
                                <input type="text" class="form-control" name="info_heading" value="<?= $info_heading ?>">
                            </div>
                            <div class="form-group">
                                <label>Select Image</label>
                                <br>
                                <button type="button" class="btn btn-primary select-image" data-img="info_image"><?= !empty($info_image) ? 'Image Exist' : 'Select Image' ?></button>
                                <input type="hidden" class="info_image" name="info_image" value="<?= $info_image ?>" />
                            </div>

                            <hr>
                            <div class="form-group">
                                <label>Page Head Script</label>
                                <textarea class="form-control" rows="4" cols="50" name="page_header"><?= $page_header ?></textarea>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Main CTA Button Label</label>
                                    <input type="text" class="form-control" name="mainctabtn" value="<?= $main_cta_btn ?>">
                                </div>
                                <div class="form-group col-6">
                                    <label>Main CTA Button Link</label>
                                    <input type="text" class="form-control" name="mainctalink" value="<?= $main_cta_link ?>">
                                </div>
                                <div class="form-group col-6">
                                    <label>Main CTA Button PDF</label>
                                    <input type="file" class="form-control" name="file">
                                    <?= !empty($main_cta_pdf) ? "<span>" . $main_cta_pdf . " <button type='button' class='btn btn-danger mt-3 remove-main-pdf'>x</button></span>" : '' ?>
                                </div>
                            </div>


                            <hr>
                            <h5>Section 11 New Section</h5>
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" name="section11_title" value="<?= html_entity_decode($section11_title) ?>">
                            </div>

                            <div class="form-group ">
                                <label>Content</label>
                                <textarea class="form-control" name="section11_description" id="summernoteExample" rows="4"><?= html_entity_decode($section11_description) ?></textarea>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>CTA Button Label</label>
                                    <input type="text" class="form-control" name="section11_ctabtn" value="<?= $section11_ctabtn ?>">
                                </div>
                                <div class="form-group col-6">
                                    <label>CTA Button Link</label>
                                    <input type="text" class="form-control" name="section11_ctalink" value="<?= urldecode($section11_ctalink) ?>">
                                </div>
                            </div>
                            <hr>

                            <h5>Section 1 </h5>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Heading</label>
                                    <input type="text" class="form-control" name="section11_one_title" value="<?= $section11_one_title ?>">
                                </div>
                                <div class="form-group col-6">
                                    <label>Description</label>
                                    <input type="text" class="form-control" name="section11_one_desc" value="<?= $section11_one_desc ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Select Icon</label>
                                    <br>
                                    <button type="button" class="btn btn-primary select-image" data-img="section11_one_img"><?= !empty($section11_one_img) ? 'Image Exist' : 'Select Image' ?></button>
                                    <input type="hidden" class="section11_one_img" name="section11_one_img" value="<?= $section11_one_img ?>" />
                                </div>
                            </div>
                            <hr>
                            <h5>Section 2 </h5>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Heading</label>
                                    <input type="text" class="form-control" name="section11_two_title" value="<?= $section11_two_title ?>">
                                </div>
                                <div class="form-group col-6">
                                    <label>Description</label>
                                    <input type="text" class="form-control" name="section11_two_desc" value="<?= $section11_two_desc ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Select Icon</label>
                                    <br>
                                    <button type="button" class="btn btn-primary select-image" data-img="section11_two_img"><?= !empty($section11_two_img) ? 'Image Exist' : 'Select Image' ?></button>
                                    <input type="hidden" class="section11_two_img" name="section11_two_img" value="<?= $section11_two_img ?>" />
                                </div>
                            </div>
                            <hr>
                            <h5>Section 3</h5>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Heading</label>
                                    <input type="text" class="form-control" name="section11_three_title" value="<?= $section11_three_title ?>">
                                </div>
                                <div class="form-group col-6">
                                    <label>Description</label>
                                    <input type="text" class="form-control" name="section11_three_desc" value="<?= $section11_three_desc ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Select Icon</label>
                                    <br>
                                    <button type="button" class="btn btn-primary select-image" data-img="section11_three_img"><?= !empty($section11_three_img) ? 'Image Exist' : 'Select Image' ?></button>
                                    <input type="hidden" class="section11_three_img" name="section11_three_img" value="<?= $section11_three_img ?>" />
                                </div>
                            </div>



                            <hr>
                            <h5>Section 12 New Section</h5>
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" name="section12_title" value="<?= $section12_title ?>">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" class="form-control" name="section12_description" value="<?= $section12_description ?>">
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>CTA Button Label</label>
                                    <input type="text" class="form-control" name="section12_ctabtn" value="<?= $section12_ctabtn ?>">
                                </div>
                                <div class="form-group col-6">
                                    <label>CTA Button Link</label>
                                    <input type="text" class="form-control" name="section12_ctalink" value="<?= urldecode($section12_ctalink) ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-3">
                                    <label>Select Image (Desktop 1536x430)</label>
                                    <br>
                                    <button type="button" class="btn btn-primary select-image" data-img="section12_image"><?= !empty($section12_image) ? 'Image Exist' : 'Select Image' ?></button>
                                    <input type="hidden" class="section12_image" name="section12_image" value="<?= $section12_image ?>" />
                                </div>
                                <div class="form-group col-3">
                                    <label>Select Image (Mobile 430x430)</label>
                                    <br>
                                    <button type="button" class="btn btn-primary select-image" data-img="section12_mimage"><?= !empty($section12_mimage) ? 'Image Exist' : 'Select Image' ?></button>
                                    <input type="hidden" class="section12_mimage" name="section12_mimage" value="<?= $section12_mimage ?>" />
                                </div>
                                <div class="form-group col-6">
                                    <label>Image Text</label>
                                    <input type="text" class="form-control" name="section12_image_text" value="<?= $section12_image_text ?>">
                                </div>
                            </div>

                            <?php

                            if (!empty($section12_list_json)) {
                                $section12_lists = json_decode($section12_list_json, true);
                                $section12_one_title = $section12_lists[0]['section12_one_title'];
                                $section12_one_desc = $section12_lists[0]['section12_one_desc'];
                                $section12_one_img = $section12_lists[0]['section12_one_img'];

                                $section12_two_title = $section12_lists[0]['section12_two_title'];
                                $section12_two_desc = $section12_lists[0]['section12_two_desc'];
                                $section12_two_img = $section12_lists[0]['section12_two_img'];

                                $section12_three_title = $section12_lists[0]['section12_three_title'];
                                $section12_three_desc = $section12_lists[0]['section12_three_desc'];
                                $section12_three_img = $section12_lists[0]['section12_three_img'];
                            } else {
                                $section12_one_title = '';
                                $section12_one_desc = '';
                                $section12_one_img = '';

                                $section12_two_title = '';
                                $section12_two_desc = '';
                                $section12_two_img = '';

                                $section12_three_title = '';
                                $section12_three_desc = '';
                                $section12_three_img = '';
                            }

                            ?>

                            <h6>Sub Section 1</h6>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="section12_one_title" value="<?= $section12_one_title ?>">
                                </div>
                                <div class="form-group col-6">
                                    <label>Description</label>
                                    <input type="text" class="form-control" name="section12_one_desc" value="<?= $section12_one_desc ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Select Icon</label>
                                    <br>
                                    <button type="button" class="btn btn-primary select-image" data-img="section12_one_img"><?= !empty($section12_one_img) ? 'Image Exist' : 'Select Image' ?></button>
                                    <input type="hidden" class="section12_one_img" name="section12_one_img" value="<?= $section12_one_img ?>" />
                                </div>
                            </div>
                            <h6>Sub Section 2</h6>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="section12_two_title" value="<?= $section12_two_title ?>">
                                </div>
                                <div class="form-group col-6">
                                    <label>Description</label>
                                    <input type="text" class="form-control" name="section12_two_desc" value="<?= $section12_two_desc ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Select Icon</label>
                                    <br>
                                    <button type="button" class="btn btn-primary select-image" data-img="section12_two_img"><?= !empty($section12_two_img) ? 'Image Exist' : 'Select Image' ?></button>
                                    <input type="hidden" class="section12_one_img" name="section12_two_img" value="<?= $section12_two_img ?>" />
                                </div>
                            </div>
                            <h6>Sub Section 3</h6>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="section12_three_title" value="<?= $section12_three_title ?>">
                                </div>
                                <div class="form-group col-6">
                                    <label>Description</label>
                                    <input type="text" class="form-control" name="section12_three_desc" value="<?= $section12_three_desc ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Select Icon</label>
                                    <br>
                                    <button type="button" class="btn btn-primary select-image" data-img="section12_three_img"><?= !empty($section12_three_img) ? 'Image Exist' : 'Select Image' ?></button>
                                    <input type="hidden" class="section12_one_img" name="section12_three_img" value="<?= $section12_three_img ?>" />
                                </div>
                            </div>

                            <h6>Quote</h6>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="section12_quote_title" value="<?= $section12_quote_title ?>">
                                </div>
                                <div class="form-group col-6">
                                    <label>Name </label>
                                    <input type="text" class="form-control" name="section12_quote_name" value="<?= $section12_quote_name ?>">
                                </div>
                            </div>
                            <hr>

                            <h5>Section 13 New Section</h5>
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" name="section13_title" value="<?= $section13_title ?>">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" class="form-control" name="section13_description" value="<?= $section13_description ?>">
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>CTA Button Label</label>
                                    <input type="text" class="form-control" name="section13_ctabtn" value="<?= $section13_ctabtn ?>">
                                </div>
                                <div class="form-group col-6">
                                    <label>CTA Button Link</label>
                                    <input type="text" class="form-control" name="section13_ctalink" value="<?= urldecode($section13_ctalink) ?>">
                                </div>
                            </div>
                            <?php

                            if (!empty($section13_list_json)) {
                                $section13_lists = json_decode($section13_list_json, true);
                                $section13_list_tite_1 = $section13_lists[0]['section13_list_tite_1'];
                                $section13_list_desc_1 = $section13_lists[0]['section13_list_desc_1'];
                                $section13_list_tite_2 = $section13_lists[0]['section13_list_tite_2'];
                                $section13_list_desc_2 = $section13_lists[0]['section13_list_desc_2'];
                                $section13_list_tite_3 = $section13_lists[0]['section13_list_tite_3'];
                                $section13_list_desc_3 = $section13_lists[0]['section13_list_desc_3'];
                                $section13_list_tite_4 = $section13_lists[0]['section13_list_tite_4'];
                                $section13_list_desc_4 = $section13_lists[0]['section13_list_desc_4'];
                            } else {
                                $section13_list_tite_1 = '';
                                $section13_list_desc_1 = '';
                                $section13_list_tite_2 = '';
                                $section13_list_desc_2 = '';
                                $section13_list_tite_3 = '';
                                $section13_list_desc_3 = '';
                                $section13_list_tite_4 = '';
                                $section13_list_desc_4 = '';
                            }

                            ?>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="section13_list_tite_1" value="<?= $section13_list_tite_1 ?>">
                                </div>
                                <div class="form-group col-6">
                                    <label>Description</label>
                                    <input type="text" class="form-control" name="section13_list_desc_1" value="<?= $section13_list_desc_1 ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="section13_list_tite_2" value="<?= $section13_list_tite_2 ?>">
                                </div>
                                <div class="form-group col-6">
                                    <label>Description</label>
                                    <input type="text" class="form-control" name="section13_list_desc_2" value="<?= $section13_list_desc_2 ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="section13_list_tite_3" value="<?= $section13_list_tite_3 ?>">
                                </div>
                                <div class="form-group col-6">
                                    <label>Description</label>
                                    <input type="text" class="form-control" name="section13_list_desc_3" value="<?= $section13_list_desc_3 ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="section13_list_tite_4" value="<?= $section13_list_tite_4 ?>">
                                </div>
                                <div class="form-group col-6">
                                    <label>Description</label>
                                    <input type="text" class="form-control" name="section13_list_desc_4" value="<?= $section13_list_desc_4 ?>">
                                </div>
                            </div>





                            <input type="hidden" name="mainctapdf_exist" id="main-cta-pdf" value="<?= $main_cta_pdf ?>">
                            <br>
                            <br>
                            <input type="hidden" name="id" value="<?= $id ?>">
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
                        $("#sserv").val(<?= $sserv ?>);
                    }
                }
            });
        }).trigger('change');
        $(document).ready(function() {
            // $("#pserv").trigger('change');
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

                    },
                    error: function(xhr, status, error) {
                        // Handle the error
                    }
                });
            });
        });
        $(".rec-delete").click(function() {
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

        $(".remove-main-pdf").click(function() {
            $(this).parent().remove();
            $("#main-cta-pdf").val('');
        })

        $(".about-new-delete").click(function() {
            let id = $(this).attr("data-id");
            $("#" + id).remove();
        })
    </script>