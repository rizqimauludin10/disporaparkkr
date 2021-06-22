
<!-- Modal -->
<div class="modal fade" id="berita_edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" >
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Berita</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
            
        <?= form_open_multipart('', ['class' => 'form_beritaEdit']) ?>
        <?= csrf_field(); ?>

        <div class="modal-body">
            <div class="form-group row">
                <label for="name_news" class="col-sm-3 col-form-label">Judul Berita</label>
                <input type="text" class="form-control" id="id" name="id" value="<?= $id ?>" hidden>
                <div class="col-sm-9">
                <input type="text" class="form-control" id="name_news" name="name_news" value="<?= $news_title ?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="name_poster" class="col-sm-3 col-form-label">Isi Berita</label>
                <div class="col-sm-9">
                    
                    <textarea name="editor" id="editor" cols="30" rows="10" ><?= $news_desc ?></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="date_poster" class="col-sm-3 col-form-label">Tanggal</label>
                <div class="col-sm-3">
                <input type="date" class="form-control" id="date_news" name="date_news" value="<?= $news_tanggal ?>">
                </div>
            </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary btnUpdate">Update</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>

        <?= form_close()?>

        </div>
    </div>
</div>

<script src="<?= base_url('ckeditor/ckeditor.js') ?>"></script>
<!-- Bootstrap core JavaScript-->
<script src="<?= base_url(); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url(''); ?>/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>


<script>

CKEDITOR.replace('editor');

$(document).ready(function() {
    console.log("Berita Edit")
    $('.btnUpdate').click(function(e) {
    e.preventDefault();

    let form = $('.form_beritaEdit')[0];
    let data = new FormData(form);
    data.append('editor', CKEDITOR.instances['editor'].getData());

    $.ajax({
        type : "post",
        url : "<?= site_url('berita/editData') ?>",
        data : data,
        enctype : 'multipart/form-data',
        processData : false,
        contentType : false,
        cache : false,
        dataType : "json",
        beforeSend : function(e) {
                $('.btnUpload').prop('disable', 'disabled');
                $('.btnUpload').html('<i class="fa fa-spin fa-spinner"></i>');
        },
        
        complete : function(e){
            $('.btnUpload').removeAttr('disabled');
            $('.btnUpload').html('Upload');
        },

        success : function (response) {
                Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: response.sukses,
                })

                $('#berita_edit').modal('hide');
                dataBerita();
            
        },

        error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
            }
    });
});
});

</script>