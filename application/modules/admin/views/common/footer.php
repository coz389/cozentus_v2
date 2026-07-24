<div class="modal fade" id="password-change" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-3" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <form id="password-form">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel-3">Change Admin Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label>New Password</label>
                    <input class="form-control" name="password" placeholder="********">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success pass-btn">Submit</button>
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                </div>
            </form>
            <p class="text-center pass-msg"></p>
        </div>
    </div>
</div>
<style>
    .ajax-file-upload-container {
        display: none;
    }
</style>
<div class="modal fade bd-image-modal-md" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">All Images</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="form-group col-md-12">
                <label>Image (Max File Size 2MB)</label>
                <div class="file-upload-wrapper">
                    <div id="fileuploader">Upload</div>
                </div>
                <div class="progress mt-3" style="display:none;">
                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <div class="images-list">
            </div>

        </div>
    </div>
</div>
<footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <?= date('Y') ?>. All rights reserved.</span>
    </div>
</footer>
<style>
    .img-selector-wrap {
        height: 300px;
        overflow-x: hidden;
        margin: 20px 0px;
        overflow-y: auto;
    }
</style>
<!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="<?= base_url() ?>backend/assets/vendors/js/vendor.bundle.base.js"></script>
<script src="<?= base_url() ?>backend/assets/vendors/js/vendor.bundle.addons.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="<?= base_url() ?>backend/assets/js/off-canvas.js"></script>
<script src="<?= base_url() ?>backend/assets/js/hoverable-collapse.js"></script>
<script src="<?= base_url() ?>backend/assets/js/misc.js"></script>
<script src="<?= base_url() ?>backend/assets/js/settings.js"></script>
<script src="<?= base_url() ?>backend/assets/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="<?= base_url() ?>backend/assets/js/dashboard.js"></script>
<script src="<?= base_url() ?>backend/assets/js/data-table.js"></script>
<script src="<?= base_url() ?>backend/assets/js/dropify.js"></script>
<script src="<?= base_url() ?>backend/assets/js/formpickers.js"></script>
<script src="<?= base_url() ?>backend/assets/js/form-addons.js"></script>
<script src="<?= base_url() ?>backend/assets/vendors/summernote/dist/summernote-bs4.min.js"></script>
<!-- End custom js for this page-->
<script>
    if ($("#summernoteExample").length) {
        $('#summernoteExample').summernote({
            height: 300,
            tabsize: 2,
            callbacks: {
                // Clear default <p><br></p>
                onInit: function() {
                    const content = $(this).val().trim();

                    if (content === '' || content === '<p><br></p>') {
                        $(this).summernote('code', '');
                    }
                },
                onPaste: function(e) {
                    e.preventDefault();
                    const clipboard = e.originalEvent.clipboardData || window.clipboardData;
                    if (!clipboard) return;
                    let text = clipboard.getData('text/plain');
                    // Normalize line endings
                    text = text.replace(/\r\n/g, '\n');
                    // Remove extra blank lines
                    text = text.replace(/\n{2,}/g, '\n');
                    document.execCommand('insertText', false, text);
                }
            }
        });
    }
    $('#summernoteExample1').summernote({
        height: 300,
        tabsize: 2,
        callbacks: {
            // Clear default <p><br></p>
            onInit: function() {
                const content = $(this).val().trim();

                if (content === '' || content === '<p><br></p>') {
                    $(this).summernote('code', '');
                }
            },
            onPaste: function(e) {
                e.preventDefault();
                const clipboard = e.originalEvent.clipboardData || window.clipboardData;
                if (!clipboard) return;
                let text = clipboard.getData('text/plain');
                // Normalize line endings
                text = text.replace(/\r\n/g, '\n');
                // Remove extra blank lines
                text = text.replace(/\n{2,}/g, '\n');
                document.execCommand('insertText', false, text);
            }
        }
    });
    $('#summernoteExample2').summernote({
        height: 300,
        tabsize: 2,
        callbacks: {
            // Clear default <p><br></p>
            onInit: function() {
                const content = $(this).val().trim();

                if (content === '' || content === '<p><br></p>') {
                    $(this).summernote('code', '');
                }
            },
            onPaste: function(e) {
                e.preventDefault();
                const clipboard = e.originalEvent.clipboardData || window.clipboardData;
                if (!clipboard) return;
                let text = clipboard.getData('text/plain');
                // Normalize line endings
                text = text.replace(/\r\n/g, '\n');
                // Remove extra blank lines
                text = text.replace(/\n{2,}/g, '\n');
                document.execCommand('insertText', false, text);
            }
        }
    });
    $('#summernoteExample3').summernote({
        height: 300,
        tabsize: 2,
        callbacks: {
            // Clear default <p><br></p>
            onInit: function() {
                const content = $(this).val().trim();

                if (content === '' || content === '<p><br></p>') {
                    $(this).summernote('code', '');
                }
            },
            onPaste: function(e) {
                e.preventDefault();
                const clipboard = e.originalEvent.clipboardData || window.clipboardData;
                if (!clipboard) return;
                let text = clipboard.getData('text/plain');
                // Normalize line endings
                text = text.replace(/\r\n/g, '\n');
                // Remove extra blank lines
                text = text.replace(/\n{2,}/g, '\n');
                document.execCommand('insertText', false, text);
            }
        }
    });
    $('#summernoteExample4').summernote({
        height: 300,
        tabsize: 2,
        callbacks: {
            // Clear default <p><br></p>
            onInit: function() {
                const content = $(this).val().trim();

                if (content === '' || content === '<p><br></p>') {
                    $(this).summernote('code', '');
                }
            },
            onPaste: function(e) {
                e.preventDefault();
                const clipboard = e.originalEvent.clipboardData || window.clipboardData;
                if (!clipboard) return;
                let text = clipboard.getData('text/plain');
                // Normalize line endings
                text = text.replace(/\r\n/g, '\n');
                // Remove extra blank lines
                text = text.replace(/\n{2,}/g, '\n');
                document.execCommand('insertText', false, text);
            }
        }
    });

    (function($) {
        'use strict';

        if ($(".js-example-basic-single").length) {
            $(".js-example-basic-single").select2();
        }
        if ($(".js-example-basic-multiple").length) {
            $(".js-example-basic-multiple").select2();
        }
    })(jQuery);
    $("#password-setting").click(function() {
        $("#password-change").modal('show');
    })
    $("#password-form").submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: 'post',
            data: $(this).serialize(),
            url: site_url + 'admin/changeadminpassword',
            beforeSend: function() {
                $(".pass-btn").addClass('loading');
            },
            complete: function() {
                $(".pass-btn").removeClass('loading');
            },
            success: function(res) {
                $('.pass-msg').html('Password Updated');
                setTimeout(() => {
                    $("#password-change").modal('hide');
                }, 3000);
            }
        })
    })
    $(document).on('click', '.select-image', function() {
        var thisclass = $(this);
        var cname = $(this).data('img');
        var type = $(this).attr('multis');
        jqfileuploadnew(cname, type);
        imgupload(cname, type, thisclass);
    })
    $(document).on('click', '.addmore-image-select', function() {
        var thisclass = $(this);
        var cname = 'uk-' + $.now();
        $(this).next().addClass(cname);
        $(this).attr('data-img', cname);
        // console.log($(this).next(),cname)
        var type = $(this).attr('multis');
        jqfileuploadnew(cname, type);
        imgupload(cname, type, thisclass);
    })

    function imgupload(cname, type, thisclass) {

        //thisclass.addClass('loading');
        $.ajax({
            url: site_url + 'admin/getallimages',
            dataType: 'json',
            success: function(res) {
                $(".bd-image-modal-md").modal('show');
                let img = '';
                if (res.length)
                    res.forEach(e => {
                        const extension = e.image.split('.').pop().toLowerCase();

                        if (type) {
                            img += `  <div class="col-6 col-sm-4">
                          <label class="imagecheck mb-4">
                            <input name="cna" type="checkbox" value="${e.id}" data-id="${cname}" data-name="${e.image}" class="imagecheck-input" />
                            <span class="imagecheck-figure">
                              <img src="${site_url+'uploads/images/'+e.image}" class="imagecheck-image ${type}" title="${e.image}">
                            </span>
                          </label>
                        </div>`;
                        }
                        /*else if(extension == 'mp4'){
                                     img += `  <div class="col-6 col-sm-4">
                                                 <label class="imagecheck mb-4">
                                                   <input name="cna" type="radio" value="${e.id}" data-id="${cname}" data-name="${e.image}" class="imagecheck-input" />
                                                   <span class="imagecheck-figure">
                                                     <img src="${site_url+'uploads/images/video-icon.png'}" class="imagecheck-image ${extension}"  title="${e.image}">
                                                   </span>
                                                 </label>
                                               </div>`;
                                   } */
                        else {
                            img += `  <div class="col-6 col-sm-4">
                          <label class="imagecheck mb-4">
                            <input name="cna" type="radio" value="${e.id}" data-id="${cname}" data-name="${e.image}" class="imagecheck-input" />
                            <span class="imagecheck-figure">
                              <img src="${site_url+'uploads/images/'+e.image}" class="imagecheck-image"  title="${e.image}">
                            </span>
                          </label>
                        </div>`;
                        }
                    })
                var temp = ` <div class="card-body">
        <input type="text" class="search-image form-control"  data-id="${cname}"  placeholder="Search By Image Name">
                    <div class="form-group">
                      
                      <div class="row img-selector-wrap gutters-sm">
                      <div class="col-6 col-sm-4">
                          <label class="imagecheck mb-4">
                          <input name="cna" type="checkbox" value=" " data-id="${cname}" data-name="No Image" class="imagecheck-input" />
                         
                            <span class="imagecheck-figure">
                              <img src="${site_url+'backend/assets/images/no-image.jpg'}" class="imagecheck-image" title="">
                            </span>
                          </label>
                        </div>
                      ${img}
                      </div>
                    </div>
                    <button type="button" class="btn btn-primary float-right" data-dismiss="modal" aria-label="Close">
                 Close
                </button>
                  </div>`;
                $(".images-list").html(temp);
                thisclass.removeClass('loading');
            }
        })
        $(document).on('keyup', '.search-image', function() {
            let cname = $(this).data('id');
            let val = $(this).val();
            if (val.length < 3) {
                return false;
            }
            $.ajax({
                url: site_url + 'admin/getallimages/' + val,
                dataType: 'json',
                success: function(res) {
                    let img = '';
                    if (res.length) {
                        res.forEach(e => {
                            if (type) {
                                img += `  <div class="col-6 col-sm-4">
                          <label class="imagecheck mb-4">
                            <input name="cna" type="checkbox" value="${e.id}" data-id="${cname}" data-name="${e.image}" class="imagecheck-input" />
                            <span class="imagecheck-figure">
                              <img src="${site_url+'uploads/images/'+e.image}" class="imagecheck-image"  title="${e.image}">
                            </span>
                          </label>
                        </div>`;
                            } else {
                                img += `  <div class="col-6 col-sm-4">
                          <label class="imagecheck mb-4">
                            <input name="cna" type="radio" value="${e.id}" data-id="${cname}" data-name="${e.image}" class="imagecheck-input" />
                            <span class="imagecheck-figure">
                              <img src="${site_url+'uploads/images/'+e.image}" class="imagecheck-image"  title="${e.image}">
                            </span>
                          </label>
                        </div>`;
                            }
                        })
                    } else {
                        img += `No image available`;
                    }
                    $(".gutters-sm").html(img);
                }
            })
        })
        $(document).on('click', '.imagecheck-input', function() {
            let cname = $(this).data('id');
            let name = $(this).data('name');
            let id = $(this).val();
            let mid = [];
            if (type) {
                //console.log($(".imagecheck-input :checked"));
                $(".imagecheck-input").each((e, elem) => {
                    if ($(elem).is(":checked")) {
                        mid.push($(elem).val());
                    }
                })
                $("." + cname).val(mid.join(','));
                $("button[data-img=" + cname + "]").text('Selected');
            } else {
                $("." + cname).val(id);
                let temp = `<span>${name}</span>`;
                $("button[data-img=" + cname + "]").text('Selected - ');
                $("button[data-img=" + cname + "]").append(temp);
            }
        })
    }

    function jqfileuploadnew(cname, type) {
        $("#fileuploader").uploadFile({
            url: site_url + "admin/imageupload",
            fileName: "image",
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
            onSuccess: function() {
                imgupload(cname, type)
            }
        });
    }

    function autosize() {
        var text = $('.multiple-op');
        text.each(function() {
            $(this).attr('rows', 2);
            resize($(this));
        });
        text.on('input', function() {
            resize($(this));
        });

        function resize($text) {
            $text.css('height', 'auto');
            $text.css('height', $text[0].scrollHeight + 'px');
        }
    }
    $(".clear-cache").click(function() {
        $.ajax({
            type: 'get',
            url: site_url + 'admin/clear_all_cache',
            success: function() {
                $(".clear-cache").text('Cache Cleared');
            }
        })
    })



    $('.repeater').repeater({
        // (Optional)
        // "defaultValues" sets the values of added items.  The keys of
        // defaultValues refer to the value of the input's name attribute.
        // If a default value is not specified for an input, then it will
        // have its value cleared.
        defaultValues: {
            'text-input': 'foo'
        },
        // (Optional)
        // "show" is called just after an item is added.  The item is hidden
        // at this point.  If a show callback is not given the item will
        // have $(this).show() called on it.
        show: function() {
            $(this).slideDown();

        },
        // (Optional)
        // "hide" is called when a user clicks on a data-repeater-delete
        // element.  The item is still visible.  "hide" is passed a function
        // as its first argument which will properly remove the item.
        // "hide" allows for a confirmation step, to send a delete request
        // to the server, etc.  If a hide callback is not given the item
        // will be deleted.
        hide: function(deleteElement) {
            if (confirm('Are you sure you want to delete this element?')) {
                $(this).slideUp(deleteElement);
            }
        },
        // (Optional)
        // Removes the delete button from the first list item,
        // defaults to false.
        isFirstItemUndeletable: true
    })
    if ($(".datepicker-popup").length) {
        $('.datepicker-popup').datepicker({
            enableOnReadonly: true,
            todayHighlight: true,
            dateFormat: 'dd-mm-yyyy',

        });
    }
</script>

</body>

</html>