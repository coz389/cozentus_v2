<div class="main-panel">
    <div class="content-wrapper">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Update Home Banner</h4>
                <div class="row">
                    <div class="col-12">
                        <form class="forms-sample" id="blog-form">

                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title" value="<?= html_entity_decode($title) ?>" required>
                            </div>

                            <div class="form-group">
                                <label>Short Description</label>
                                <input type="text" class="form-control" name="shortdescription" value="<?= $short_description ?>">
                            </div>
                            <div class="form-group">
                                <label>Enter Youtube Iframe</label>
                                <input type="textarea" class="form-control" name="video_id" value="<?= htmlspecialchars($video_id) ?>">
                            </div>
                            <div class="form-group">
                                <label>Select Image (Desktop 1520x500) </label>
                                <br>
                                <button type="button" class="btn btn-primary select-image" data-img="image"><?= !empty($image) ? 'Image Exist' : 'Select Image' ?></button>
                                <input type="hidden" class="image" value="<?= $image ?>" name="image" />
                                <input type="hidden" value="<?= $id ?>" name="id" />
                            </div>
                            <div class="form-group">
                                <label>CTA Button Label</label>
                                <input type="text" class="form-control" name="ctabtn" value="<?= $cta_btn ?>">
                            </div>
                            <div class="form-group">
                                <label>CTA Button Link</label>
                                <input type="text" class="form-control" name="ctalink" value="<?= urldecode($cta_link) ?>">
                            </div>
                            <div class="form-group">
                                <label>Text Alignment (Title, Description and Button alignment)</label>
                                <select name="text_alignment" class="form-control" required>
                                    <option value="1" <?= ($text_align == 1) ? 'selected' : '' ?>>Left</option>
                                    <option value="2" <?= ($text_align == 2) ? 'selected' : '' ?>>Right</option>
                                    <option value="3" <?= ($text_align == 3) ? 'selected' : '' ?>>Center</option>
                                </select>
                            </div>
                            <!--<div class="form-group">
                                <label>Select Image (Mobile 430x430) </label>
                                <br>
                                <button type="button" class="btn btn-primary select-image" data-img="imagem"><? //= !empty($mob_image)?'Image Exist':'Select Image' 
                                                                                                                ?></button>
                                <input type="hidden" class="imagem" value="<? //= $mob_image 
                                                                            ?>" name="mimage" />
                            </div> 
                            <div class="form-group">
                                <label>CTA Button Label</label>
                                <input type="text" class="form-control" name="ctabtn" value="<? //= $cta_btn 
                                                                                                ?>">
                            </div>
                            <div class="form-group">
                                <label>CTA Button Link</label>
                                <input type="text" class="form-control" name="ctalink" value="<? //= urldecode($cta_link) 
                                                                                                ?>">
                            </div>-->
                            <div class="form-group">
                                <label>List Priority (0 for default)</label>
                                <input type="text" class="form-control" name="orderby" value="<?= $orderby ?>" required>
                            </div>
                            <!-- <div class="form-group">
                <label>Theme Color</label>
                <div class="col-sm-4">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="themecolor" id="membershipRadios1" value="0" <?= $theme == 0 ? 'checked' : '' ?> >
                                Light
                              <i class="input-helper"></i></label>
                            </div>
                          </div>
                          <div class="col-sm-5">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="themecolor" id="membershipRadios2" value="1" <?= $theme == 1 ? 'checked' : '' ?>>
                                Dark
                              <i class="input-helper"></i></label>
                            </div>
                          </div>
              </div> -->
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
                    url: site_url + "admin/insertupdatehomebanner",
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