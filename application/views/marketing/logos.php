<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/top_menu'); ?>
<?php $this->load->view('includes/breadcrumb'); ?>

<div class="hero-unit-acens">
  <h1>Logos e Fontes</h1>
  <p>Texto.</p> 
</div>

<div class="container-fluid">
    <!-- The file upload form used as target for the file upload widget -->
    <form id="fileupload" action="<? echo base_url() . 'upload/upload_img'; ?>" method="POST" enctype="multipart/form-data" data-ng-app="demo" data-ng-controller="DemoFileUploadController" data-file-upload="options" data-ng-class="{true: 'fileupload-processing'}[!!processing() || loadingFiles]">
        <!-- Redirect browsers with JavaScript disabled to the origin page -->
        <noscript><input type="hidden" name="redirect" value="<?php echo site_url('marketing/logos_e_fontes')?>"></noscript>
        <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
        <div class="row fileupload-buttonbar">
            <div class="span7">
                <!-- The fileinput-button span is used to style the file input field as button -->
                <span class="btn btn-success fileinput-button">
                    <i class="icon-plus icon-white"></i>
                    <span>Add arquivos...</span>
                    <input type="file" name="files[]" multiple>
                </span>
                <button type="button" class="btn btn-primary start" data-ng-click="submit()">
                    <i class="icon-upload icon-white"></i>
                    <span>Iniciar uploads</span>
                </button>
                <button type="button" class="btn btn-warning cancel" data-ng-click="cancel()">
                    <i class="icon-ban-circle icon-white"></i>
                    <span>Cancelar uploads</span>
                </button>
                <!-- The loading indicator is shown during file processing -->
                <div class="fileupload-loading"></div>
            </div>
            <!-- The global progress information -->
            <div class="span5 fade" data-ng-class="{true: 'in'}[!!active()]">
                <!-- The global progress bar -->
                <div class="progress progress-success progress-striped active" data-file-upload-progress="progress()"><div class="bar" data-ng-style="{width: num + '%'}"></div></div>
                <!-- The extended global progress information -->
                <div class="progress-extended">&nbsp;</div>
            </div>
        </div>
        <!-- The table listing the files available for upload/download -->
        <table class="table table-striped table-hover table-bordered files ng-cloak" data-toggle="modal-gallery" data-target="#modal-gallery">
            <tr data-ng-repeat="file in queue">
                <td data-ng-switch data-on="!!file.thumbnail_url">
                    <div class="preview" data-ng-switch-when="true">
                        <a data-ng-href="{{file.url}}" title="{{file.name}}" data-gallery="gallery" download="{{file.name}}"><img data-ng-src="{{file.thumbnail_url}}" alt=""></a>
                    </div>
                    <div class="preview" data-ng-switch-default data-file-upload-preview="file"></div>
                </td>
                <td>
                    <p class="name" data-ng-switch data-on="!!file.url">
                        <a data-ng-switch-when="true" data-ng-href="{{file.url}}" title="{{file.name}}" data-gallery="gallery" download="{{file.name}}">{{file.name}}</a>
                        <span data-ng-switch-default>{{file.name}}</span>
                    </p>
                    <div data-ng-show="file.error"><span class="label label-important">Error</span> {{file.error}}</div>
                </td>
                <td>
                    <p class="size">{{file.size | formatFileSize}}</p>
                    <div class="progress progress-success progress-striped active fade" data-ng-class="{pending: 'in'}[file.$state()]" data-file-upload-progress="file.$progress()"><div class="bar" data-ng-style="{width: num + '%'}"></div></div>
                </td>
                <td>
                    <button type="button" class="btn btn-primary start" data-ng-click="file.$submit()" data-ng-hide="!file.$submit">
                        <i class="icon-upload icon-white"></i>
                        <span>Iniciar</span>
                    </button>
                    <button type="button" class="btn btn-warning cancel" data-ng-click="file.$cancel()" data-ng-hide="!file.$cancel">
                        <i class="icon-ban-circle icon-white"></i>
                        <span>Cancelar</span>
                    </button>
                    <button data-ng-controller="FileDestroyController" type="button" class="btn btn-danger destroy" data-ng-click="file.$destroy()" data-ng-hide="!file.$destroy">
                        <i class="icon-ban-circle icon-white"></i>
                        <span>Deletar</span>
                    </button>
                </td>
            </tr>
        </table>
    </form>
</div>
<!-- modal-gallery is the modal dialog used for the image gallery -->
<div id="modal-gallery" class="modal modal-gallery hide fade" data-filter=":odd" tabindex="-1">
    <div class="modal-header">
        <a class="close" data-dismiss="modal">&times;</a>
        <h3 class="modal-title"></h3>
    </div>
    <div class="modal-body"><div class="modal-image"></div></div>
    <div class="modal-footer">
        <a class="btn modal-download" target="_blank">
            <i class="icon-download"></i>
            <span>Download</span>
        </a>
        <a class="btn btn-success modal-play modal-slideshow" data-slideshow="5000">
            <i class="icon-play icon-white"></i>
            <span>Slideshow</span>
        </a>
        <a class="btn btn-info modal-prev">
            <i class="icon-arrow-left icon-white"></i>
            <span>Anterior</span>
        </a>
        <a class="btn btn-primary modal-next">
            <span>Próximo</span>
            <i class="icon-arrow-right icon-white"></i>
        </a>
    </div>
</div>

<?php $this->load->view('includes/footer'); ?>
<?php $this->load->view('includes/scripts_upload'); ?>