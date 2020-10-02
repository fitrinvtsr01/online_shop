<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<style>
    .btn:focus,
    .btn:active,
    button:focus,
    button:active {
        outline: none !important;
        box-shadow: none !important;
    }

    #image-gallery .modal-footer {
        display: block;
    }

    .title-img-galeri {
        font-size: 14px;
        font-weight: bold;
    }

    .thumb {
        margin-top: 15px;
        margin-bottom: 15px;
    }

    .controls-galeri span {
        cursor: pointer;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-3 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="img-1.jpg" data-target="#image-gallery">
                <img class="img-thumbnail" src="<?= base_url(); ?>/homemade.jpg" alt="Another alt text">
            </a>
        </div>
        <div class="col-lg-4 col-md-3 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="img-2.jpg" data-target="#image-gallery">
                <img class="img-thumbnail" src="<?= base_url(); ?>/produksi.jpg" alt="Another alt text">
            </a>
        </div>
        <div class="col-lg-4 col-md-3 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="img-3.jpg" data-target="#image-gallery">
                <img class="img-thumbnail" src="<?= base_url(); ?>/umursimpan.jpg" alt="Another alt text">
            </a>
        </div>
        <!-- MODAL -->
        <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-bottom-0">
                        <h4 class="modal-title" id="image-gallery-title"></h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                        </button>
                    </div>
                    <div class="modal-body py-0">
                        <img id="image-gallery-image" class="rounded img-fluid" src="<?= base_url(); ?>/product.jpg">
                    </div>
                    <div class="modal-footer border-top-0">
                        <p class="title-img-galeri float-left mb-0">Healthy Drink</p>
                        <div class="controls-galeri float-right">
                            <span id="show-next-image" class="mr-1"><i class="fas fa-chevron-left"></i></span>
                            <span id="show-prev-image" class="ml-1"><i class="fas fa-chevron-right"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MODAL -->
    </div>
</div>

<?= $this->endSection() ?>