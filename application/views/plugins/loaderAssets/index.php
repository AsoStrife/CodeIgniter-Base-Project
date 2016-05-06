<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view('inc/header'); ?>

<div class="container">
	<div class="row">
		<div class="col-lg-12">
        
            <p>Simple CodeIgniter helper to load dinamically your css and js files.</p>
            
            <h2> Usage </h2>

            <h3> Config file </h3>
            <p> In your config folder you can find <code> assets_loader.php </code> file. Set on <code> css_basepath </code> and <code> js_basepath </code> your assets folder. <br>
                Then in <code>header_css</code> and <code>header_js</code> put your css and js files do you want always load on your site. Currently default setted with bootstrap and jquery files. 
            </p>

            <h3> Autoload </h3>
            <p> Your autoload must be setted like this: <code> $autoload['helper'] = array(assets_loader'); </code>.</p>

            <h3> Controller </h3>
            <p> If you want to load other files, you can easily add on your controller this two line of code: 
                <ul>
                    <li> For your css files: <code> add_css(array('plugins/colorPicker/bootstrap-colorpicker.min.css', 'other/css/files.css')); </code> </li>
                    <li> For your js files: <code> add_js(array('plugins/colorPicker/bootstrap-colorpicker.min.js', 'other/js/files.css')); </code> </li>
                </ul>

            </p>

            <h3> View </h3>
            <p> Now the real magic. How to include all files on your project? Simple, put this on your header/footer: <code> echo get_css();</code> and <code> echo get_js(); </code></p>
            <p> For more detail look all files in this project </p>

			<p>Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>

		</div> <!-- ./ col-lg-12 -->
	</div> <!-- ./ row -->
</div> <!-- ./ container -->

<?php $this->load->view('inc/footer'); ?>
