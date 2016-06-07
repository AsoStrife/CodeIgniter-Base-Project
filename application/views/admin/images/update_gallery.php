<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view('admin/inc/header'); ?>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header"> Modifica una galleria</h1>
            </div> <!-- /.col-md-12 -->
        </div> <!-- /.row -->

        <?php echo form_open('/admin/images/update_gallery?id=' . $this->input->get('id') ); ?>

        <div class="row">
		<div class="col-lg-8">
			<div class="panel panel-default">
                <div class="panel-heading"> Inserisci le informazioni della galleria </div>
                <div class="panel-body">
                    <div class="form-group <? if(form_error('gallery_name')) echo 'has-error'; ?>">
						<label for="gallery_name">Nome Galleria</label>
                        <input type="text" class="form-control" id="gallery_name" name="gallery_name" 
                            value="<?php if(set_value('gallery_name') != null) echo set_value('gallery_name'); else echo $gallery->gallery_name;?>">
                        <span id="helpBlock_page_title" class="help-block"> <?php echo form_error('gallery_name'); ?> </span>
                    </div>

                    <hr>
                    <h4> Seleziona le foto da inserire nella galleria </h4>
                    <div id="adminCheckboxGallery">
						<? foreach($images as $image): ?>
							<a href="#">
								<img src="<?=$image->image_thumbnail_url;?>" data-id="<?=$image->image_id;?>" 
                                    class="image-checkbox <? if($this->images_model->isInGallery($this->input->get('id'), $image->image_id)) echo 'selected';?>" />
								<input type="checkbox" id="<?=$image->image_id;?>" value="<?=$image->image_id;?>"  name="gallery_image_image_id[]" class="hidden" 
                                    <? if($this->images_model->isInGallery($this->input->get('id'), $image->image_id)) echo 'checked';?>>
							</a>	
						<? endforeach; ?>
					</div>

                </div> <!-- ./ panel-body -->
            </div> <!-- ./ panel panel-default -->
        </div> <!-- ./ col-lg-8 -->

        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading"> Pubblica  </div>
                <div class="panel-body">
                  
                    <div class="form-group">
                        <label for="gallery_status">Visibilità</label>
                        <div class="radio">
                            <label>
                                <input type="radio" name="gallery_status" id="published" value="published" <? if($gallery->gallery_status == 'published') echo 'checked'; ?>>
                                    Pubblica
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="gallery_status" id="draft" value="draft" <? if($gallery->gallery_status == 'draft') echo 'checked'; ?>>
                                    Bozza
                            </label>
                        </div>
                    </div>
                </div> <!-- ./ panel-body -->
                <div class="panel-footer"> <button class="btn btn-primary">Salva </button>  </div>
            </div> <!-- ./ panel panel-default -->
        </div> <!-- ./ col-lg-4 -->

    </div> <!-- ./ row -->

    <?php echo form_close(); ?>

    </div> <!-- /#page-wrapper -->


<?php $this->load->view('admin/inc/footer'); ?>