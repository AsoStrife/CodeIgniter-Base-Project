<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view('admin/inc/header'); ?>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header"> Modifica un'immagine</h1>
            </div> <!-- /.col-md-12 -->
        </div> <!-- /.row -->

        <?php echo form_open('/admin/images/update_image?id=' . $this->input->get('id') ); ?>

        <div class="row">
		<div class="col-lg-8">
			<div class="panel panel-default">
                <div class="panel-heading"> Inserisci le informazioni della galleria </div>
                <div class="panel-body">
                    <div class="form-group <? if(form_error('image_title')) echo 'has-error'; ?>">
						<label for="image_title">Titolo</label>
                        <input type="text" class="form-control" id="image_title" name="image_title" 
                            value="<?php if(set_value('image_title') != null) echo set_value('image_title'); else echo $image->image_title;?>">
                        <span id="helpBlock_image_title" class="help-block"> <?php echo form_error('image_title'); ?> </span>
                    </div>

                    <div class="form-group <? if(form_error('image_description')) echo 'has-error'; ?>">
                        <label for="image_description">Descrizione</label>
                        <input type="text" class="form-control" id="image_description" name="image_description" 
                            value="<?php if(set_value('image_description') != null) echo set_value('image_description'); else echo $image->image_description;?>">
                        <span id="helpBlock_image_description" class="help-block"> <?php echo form_error('image_description'); ?> </span>
                    </div>              

                </div> <!-- ./ panel-body -->
            </div> <!-- ./ panel panel-default -->
        </div> <!-- ./ col-lg-8 -->

        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading"> Pubblica  </div>
                <div class="panel-body">
                    <img class="img-responsive" src="<?=$image->image_thumbnail_url;?>" />
                </div> <!-- ./ panel-body -->
                <div class="panel-footer"> <button class="btn btn-primary" type="submit">Salva </button>  </div>
            </div> <!-- ./ panel panel-default -->
        </div> <!-- ./ col-lg-4 -->

    </div> <!-- ./ row -->

    <?php echo form_close(); ?>

    </div> <!-- /#page-wrapper -->


<?php $this->load->view('admin/inc/footer'); ?>