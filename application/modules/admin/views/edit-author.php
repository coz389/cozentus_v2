<div class="main-panel">
    <div class="content-wrapper">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Update Author</h4>
                <div class="row">
                    <div class="col-12">
                        <form class="forms-sample" id="blog-form">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="name" required value="<?= $name ?>">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Designation</label>
                                        <input type="text" class="form-control" name="title" required value="<?= $title ?>">
                                    </div>
                                </div>
                            </div>



                            <div class="row">

                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Select Image</label>
                                        <br>
                                        <button type="button" class="btn btn-primary select-image" data-img="image"><?= !empty($image) ? 'Image Exist' : 'Select Image' ?></button>
                                        <input type="hidden" class="image" name="image" value="<?= $image ?>" />
                                    </div>
                                </div>
                            </div>

                            <input type="hidden" name="id" value="<?= $id ?>" />


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
                    url: site_url + "admin/insertupdateauthor",
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
    </script>