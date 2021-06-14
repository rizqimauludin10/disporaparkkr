<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Kategori</h1>

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-sm-10">
                        <h5>Kategori Disporapar Kubu Raya</h5> 
                    </div>
                    
                    <div class="col-sm-2">
                        <button type="button" class="btn btn-primary btn-sm float-end btnAddData">
                          <i class="fa fa-plus"></i> Tambah Data
                        </button>
                    </div>

                </div>
            </div>

            <div class="card-body">
                <div class="table-responsive viewdata">

                </div>
            </div>
        </div>
    </div>

</div>


<div class="viewmodal" style="display:none;"></div>

<script src="<?= base_url(); ?>/vendor/jquery/jquery.min.js"></script>

<script>

function dataCategory() {
    console.log("Kategori Get Data")
    $.ajax({
        url : "<?= site_url('category/getdata') ?>",
        dataType : "json",
        success: function(response) {
        $('.viewdata').html(response.data);
        },
        error: function(xhr, ajaxOptions, thrownError) {
        alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
        }
    });
}

$(document).ready(function(){
    dataCategory();

    $('.btnAddData').click(function(e){
      e.preventDefault();
      $.ajax({
        url : "<?= site_url('berita/formAddData') ?>",
        dataType : "json",
          success: function(response) {
            $('.viewmodal').html(response.data).show();
            $('#berita_tambah').modal('show');
          },
            error: function(xhr, ajaxOptions, thrownError) {
              alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
          }

      });
    });
});
</script>

<?= $this->endSection(); ?>
