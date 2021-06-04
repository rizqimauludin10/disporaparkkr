
<!-- Modal -->
<div class="modal fade" id="berita_tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" >
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Berita</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
            
        <?= form_open_multipart('', ['class' => 'form_beritaInput']) ?>
        <?= csrf_field(); ?>

        <div class="modal-body">
            <div class="form-group row">
                <label for="name_news" class="col-sm-3 col-form-label">Judul Berita</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" id="name_news" name="name_news">
                <div class="invalid-feedback errorNewstitle"></div>
                </div>
            </div>

            <div class="form-group row">
                <label for="name_poster" class="col-sm-3 col-form-label">Isi Berita</label>
                <div class="col-sm-9">
                    <textarea name="editor" id="editor" cols="30" rows="10" > </textarea>
                    <!-- <div class="invalid-feedback errorNewsdesc"></div> -->
                </div>
            </div>

            <div class="form-group row">
                <label for="date_poster" class="col-sm-3 col-form-label">Tanggal</label>
                <div class="col-sm-3">
                <input type="date" class="form-control" id="date_news" name="date_news">
                <div class="invalid-feedback errorNewsdate"></div>
                </div>
            </div>

            <div class="form-group row">
                <label for="date_poster" class="col-sm-3 col-form-label">Bidang</label>
                <div class="col-sm-3">
                    <select class="form-control" id="bidang_news" name="bidang_news">
                        <?php foreach($data_bidang as $bidang)  : ?>
                            <option value="<?= $bidang['id']; ?>">
                                <?= $bidang['bidang_name']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="image_poster" class="col-sm-3 col-form-label">Gambar</label>
                <div class="col-sm-5">
                <input class="form-control" type="file" id="image_news" name="image_news">
                <div class="invalid-feedback errorNewsimage"></div>
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary btnUpload">Upload</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>

        <?= form_close()?>

        </div>
    </div>
</div>

<script src="<?= base_url('ckeditor/ckeditor.js') ?>"></script>
<!-- Bootstrap core JavaScript-->
<script src="<?= base_url(); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>


<script>

CKEDITOR.replace('editor');

console.log("Berita Input")
$(document).ready(function() {
    $('.btnUpload').click(function(e) {
    e.preventDefault();

    let form = $('.form_beritaInput')[0];
    let data = new FormData(form);

    $.ajax({
            type: "post",
            url: "<?= site_url('berita/storeData') ?>",
            data: data,
            enctype : 'multipart/form-data',
            processData : false,
            contentType : false,
            cache: false,
            dataType: "json",
            beforeSend : function(e) {
                $('.btnUpload').prop('disable', 'disabled');
                $('.btnUpload').html('<i class="fa fa-spin fa-spinner"></i>');
            },
            complete : function(e){
                $('.btnUpload').removeAttr('disabled');
                $('.btnUpload').html('Upload');
            },
            success : function (response) {
                if(response.error) {
                    if(response.error.namenews) {
                        $('#name_news').addClass('is-invalid');
                        $('.errorNewstitle').html(response.error.namenews);
                    } else {
                        $('#name_news').removeClass('is-invalid');
                        $('.errorNewstitle').html('');
                    }

                    if(response.error.editor) {
                        $('#editor').addClass('is-invalid');
                        $('.errorNewsdesc').html(response.error.editor);
                    } else {
                        $('#editor').removeClass('is-invalid');
                        $('.errorNewsdesc').html('');
                    }

                    if(response.error.datenews) {
                        $('#date_news').addClass('is-invalid');
                        $('.errorNewsdate').html(response.error.datenews);
                    } else {
                        $('#date_news').removeClass('is-invalid');
                        $('.errorNewsdate').html('');
                    }

                    if(response.error.image_news) {
                        $('#image_news').addClass('is-invalid');
                        $('.errorNewsimage').html(response.error.image_news);
                    } else {
                        $('#image_news').removeClass('is-invalid');
                        $('.errorNewsimage').html('');
                    }
                } else {
                    console.log("Akhir")
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: response.sukses,
                    })
                    
        
                    $('#berita_tambah').modal('hide');
                    console.log("Sukses")
                    dataBerita();
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
            }
        });
    
    });
});


</script>