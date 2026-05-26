<div class="main-panel">
    <div class="content-wrapper">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Update Home Section 8</h4>
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

                            <h5>F&Q </h5>
                            <div class="repeater">
                                <?php
                                if (!empty($question_ans)) {
                                    $count = 0;
                                    $faqs = json_decode($question_ans, true);
                                    foreach ($faqs as $key => $faq) {
                                        $count++;

                                ?>
                                        <div id="question_ans-<?= $count ?>" class="border p-3">
                                            <div class="row">
                                                <div class="form-group col-6">
                                                    <label>Question</label>
                                                    <input type="text" class="form-control" name="question_ans_exist[<?= $count ?>][question]" value="<?= $faq['question'] ?>">
                                                </div>
                                                <div class="form-group col-6">
                                                    <label>Answer</label>
                                                    <input type="text" class="form-control" name="question_ans_exist[<?= $count ?>][answer]" value="<?= $faq['answer'] ?>">
                                                </div>
                                            </div>

                                            <button type="button" data-id="question_ans-<?= $count ?>" class="delete-btn btn btn-danger tailored-delete btn-sm icon-btn ml-2">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>


                                    <?php } ?>
                                <?php } ?>
                                <div data-repeater-list="faq">
                                    <div data-repeater-item class="border p-3">
                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label>Question</label>
                                                <input type="text" class="form-control" name="question" value="<?= $section_one_title ?>">
                                            </div>
                                            <div class="form-group col-6">
                                                <label>Answer</label>
                                                <input type="text" class="form-control" name="answer" value="<?= $section_one_desc ?>">
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
                    url: site_url + "admin/insertupdatehomesection8",
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