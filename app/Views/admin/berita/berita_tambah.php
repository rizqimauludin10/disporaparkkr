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
                <label for="name_poster" class="col-sm-3 col-form-label">Judul Berita</label>
                <div class="col-sm-5">
                <input type="text" class="form-control" id="name_poster" name="name_poster">
                <!-- <div class="invalid-feedback errorNamaposter"></div> -->
                </div>
            </div>

            <div class="form-group row">
                <label for="name_poster" class="col-sm-3 col-form-label">Isi Berita</label>
                <div class="col-sm-8">
                <div id="editor">
                    <textarea name="editor" id="editor" cols="30" rows="10" > </textarea>
                </div>
                <!-- <div class="invalid-feedback errorNamaposter"></div> -->
                </div>
            </div>

            <div class="form-group row">
                <label for="date_poster" class="col-sm-3 col-form-label">Tanggal</label>
                <div class="col-sm-3">
                <input type="date" class="form-control" id="date_poster" name="date_poster">
                <!-- <div class="invalid-feedback errorDatePoster"></div> -->
                </div>
            </div>

            <div class="form-group row">
                <label for="date_poster" class="col-sm-3 col-form-label">Bidang</label>
                <div class="col-sm-3">
                    <select class="form-control" id="exampleFormControlSelect1" name="bidang">
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
                <input class="form-control" type="file" id="image_poster" name="image_poster">
                <!-- <div class="invalid-feedback errorImagePoster"></div> -->
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

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url(); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>

ClassicEditor
    .create(document.querySelector('#editor'))
    .then(editor => {
        console.log(editor);
    })
    .catch(error => {
        console.error(error);
    });


console.log("TES A")
$(document).ready(function() {
    $('.btnUpload').click(function(e) {
    e.preventDefault();

    let form = $('.form_beritaInput')[0];
    let data = new FormData(form);

    $.ajax({
            type: "post",
            url: "<?= site_url('b_poster/storeData') ?>",
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
                    if(response.error.namaposter) {
                        $('#name_poster').addClass('is-invalid');
                        $('.errorNamaposter').html(response.error.namaposter);
                    } else {
                        $('#name_poster').removeClass('is-invalid');
                        $('.errorNamaposter').html('');
                    }

                    if(response.error.dateposter) {
                        $('#date_poster').addClass('is-invalid');
                        $('.errorDatePoster').html(response.error.dateposter);
                    } else {
                        $('#date_poster').removeClass('is-invalid');
                        $('.errorDatePoster').html('');
                    }

                    if(response.error.image_poster) {
                        $('#image_poster').addClass('is-invalid');
                        $('.errorImagePoster').html(response.error.image_poster);
                    } else {
                        $('#image_poster').removeClass('is-invalid');
                        $('.errorImagePoster').html('');
                    }
                } else {
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: response.sukses,
                    })
        
                    $('#poster_tambah').modal('hide');
                    console.log("Sukses")
                    dataPoster();
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
            }
        });
    
    });
});


</script>