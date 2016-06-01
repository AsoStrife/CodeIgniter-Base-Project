<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view('admin/inc/header'); ?>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Bacheca</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        <div class="row">
        	<div class="col-md-12">

	        	<div class="row">
	                <div class="col-lg-3 col-md-6">
	                    <div class="panel panel-primary">
	                        <div class="panel-heading">
	                            <div class="row">
	                                <div class="col-xs-3">
	                                    <i class="fa fa-rss fa-5x"></i>
	                                </div>
	                                <div class="col-xs-9 text-right">
	                                    <div class="huge">26</div>
	                                    <div> Articoli inseriti!</div>
	                                </div>
	                            </div>
	                        </div>
	                        <a href="/admin/news/index">
	                            <div class="panel-footer">
	                                <span class="pull-left">Vedi dettagli</span>
	                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
	                                <div class="clearfix"></div>
	                            </div>
	                        </a>
	                    </div>
	                </div>
	                <div class="col-lg-3 col-md-6">
	                    <div class="panel panel-green">
	                        <div class="panel-heading">
	                            <div class="row">
	                                <div class="col-xs-3">
	                                    <i class="fa fa-file-o fa-5x"></i>
	                                </div>
	                                <div class="col-xs-9 text-right">
	                                    <div class="huge">12</div>
	                                    <div> Pagine scritte</div>
	                                </div>
	                            </div>
	                        </div>
	                        <a href="/admin/pages/index">
	                            <div class="panel-footer">
	                                <span class="pull-left">Vedi dettagli</span>
	                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
	                                <div class="clearfix"></div>
	                            </div>
	                        </a>
	                    </div>
	                </div>
	                <div class="col-lg-3 col-md-6">
	                    <div class="panel panel-yellow">
	                        <div class="panel-heading">
	                            <div class="row">
	                                <div class="col-xs-3">
	                                    <i class="fa fa-image fa-5x"></i>
	                                </div>
	                                <div class="col-xs-9 text-right">
	                                    <div class="huge"> 22 </div>
	                                    <div>Immagini caricate!</div>
	                                </div>
	                            </div>
	                        </div>
	                        <a href="/admin/imageUploader/index">
	                            <div class="panel-footer">
	                                <span class="pull-left">Vedi dettagli</span>
	                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
	                                <div class="clearfix"></div>
	                            </div>
	                        </a>
	                    </div>
	                </div>
	                <div class="col-lg-3 col-md-6">
	                    <div class="panel panel-red">
	                        <div class="panel-heading">
	                            <div class="row">
	                                <div class="col-xs-3">
	                                    <i class="fa fa-user fa-5x"></i>
	                                </div>
	                                <div class="col-xs-9 text-right">
	                                    <div class="huge"> 1</div>
	                                    <div> Utenti registrati!</div>
	                                </div>
	                            </div>
	                        </div>
	                        <a href="/admin/auth/index">
	                            <div class="panel-footer">
	                                <span class="pull-left"> Vedi dettagli </span>
	                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
	                                <div class="clearfix"></div>
	                            </div>
	                        </a>
	                    </div>
	                </div>
	            </div><!-- ./row -->
        	</div>
        </div>
    </div> <!-- /#page-wrapper -->


<?php $this->load->view('admin/inc/footer'); ?>