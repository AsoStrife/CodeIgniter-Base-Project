<!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/admin"> DCS Management</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>
                        <?=$this->user->full_name;?>
                        <i class="fa fa-caret-down"></i>

                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="/admin/auth/change_password"><i class="fa fa-edit fa-fw"></i> Cambia password</a> </li>
                        <li><a href="/admin/auth/logout"><i class="fa fa-sign-out fa-fw"></i> Esci</a> </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li> <a href="/admin/dashboard"><i class="fa fa-dashboard fa-fw"></i> Bacheca </a> </li>

                        <li> <a href="_"><i class="fa fa-rss fa-fw"></i> Notizie <span class="fa arrow"></span>  </a> 
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Articoli <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="/admin/news/add">Aggiungi un'articolo</a>
                                        </li>
                                        <li>
                                            <a href="/admin/news/index">Visualizza articoli</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                                
                                <li>
                                    <a href="#">Categorie <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="/admin/news/add_category">Aggiungi una categoria</a>
                                        </li>
                                        <li>
                                            <a href="/admin/news/show_categories">Visualizza categorie</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>                              
                            </ul>
                        </li>

                        <li> <a href="_"><i class="fa fa-file-o fa-fw"></i> Pagine <span class="fa arrow"></span>  </a> 
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Gestisci pagine <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="/admin/pages/add">Aggiungi una pagina</a>
                                        </li>
                                        <li>
                                            <a href="/admin/pages/index">Visualizza pagine</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                                
                                <li>
                                    <a href="#">Categorie <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="/admin/pages/add_category">Aggiungi una categoria</a>
                                        </li>
                                        <li>
                                            <a href="/admin/pages/show_categories">Visualizza categorie</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                        </li>

                        <li> <a href="/admin/imageUploader/index"><i class="fa fa-image fa-fw"></i> Gestore Immagini</a> </li>

                        <li>
                            <a href="_"><i class="fa fa-user fa-fw"></i> Gestione Utente <span class="fa arrow"></span> </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/admin/auth/create_user"> Aggiungi </a>
                                </li>
                                <li>
                                    <a href="/admin/auth/index"> Visualizza</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>