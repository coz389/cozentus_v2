<div class="main-panel">
    <div class="content-wrapper">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Update Team</h4>
                <div class="row">
                    <div class="col-12">
                        <form class="forms-sample" id="blog-form">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Select Group</label>
                                        <select class="form-control" name="group" required>
                                            <option value="1" <?= $type == 1 ? 'selected' : '' ?>>Our Management</option>
                                            <option value="2" <?= $type == 2 ? 'selected' : '' ?>>Leadership</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="name" value="<?= $name ?>" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" class="form-control" name="title" value="<?= $title ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>LinkedIN Profile Link</label>
                                        <input type="text" class="form-control" name="link" value="<?= urldecode($link) ?>">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Twitter Profile Link</label>
                                        <input type="text" class="form-control" name="twitter_link" value="<?= urldecode($twitter_link) ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Instagram Profile Link</label>
                                        <input type="text" class="form-control" name="insta_link" value="<?= urldecode($insta_link) ?>">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Facebook Profile Link</label>
                                        <input type="text" class="form-control" name="facebook_link" value="<?= urldecode($facebook_link) ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Select Image</label>
                                        <br>
                                        <button type="button" class="btn btn-primary select-image" data-img="image">Select Image</button>
                                        <input type="hidden" class="image" value="<?= $image ?>" name="image" />
                                        <input type="hidden" value="<?= $id ?>" name="id" />
                                    </div>
                                </div>

                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" name="description" id="summernoteExample" rows="4"><?= htmlentities($details) ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Short Description</label>
                                <textarea class="form-control" name="short_description" rows="4"><?= $short_description ?></textarea>
                            </div>

                            <div class="form-group">
                                <label>List Priority (0 for default)</label>
                                <input type="text" class="form-control" name="orderby" value="<?= $orderby ?>" required>
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
                    url: site_url + "admin/insertupdateteam",
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