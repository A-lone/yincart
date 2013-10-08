<!DOCTYPE html><html lang="en">    <head>	<!-- Meta, title, CSS, favicons, etc. -->	<meta charset="utf-8">	<meta name="viewport" content="width=device-width, initial-scale=1.0">	<meta name="description" content="">	<meta name="author" content="">	<title><?php echo $_SESSION['store']['name'] ?></title>	<!-- Bootstrap core CSS -->	<link href="<?php echo F::themeUrl() ?>/assets/css/bootstrap.css" rel="stylesheet">	<link href="<?php echo F::themeUrl() ?>/assets/css/admin.css" rel="stylesheet">	<link href="<?php echo F::themeUrl() ?>/assets/css/bootstrap-glyphicons.css" rel="stylesheet">	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->	<!--[if lt IE 9]>	  <script src="<?php echo F::themeUrl() ?>/assets/js/html5shiv.js"></script>	  <script src="<?php echo F::themeUrl() ?>/assets/js/respond/respond.min.js"></script>	<![endif]-->	<!-- Favicons -->	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo F::themeUrl() ?>/assets/ico/apple-touch-icon-144-precomposed.png">	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo F::themeUrl() ?>/assets/ico/apple-touch-icon-114-precomposed.png">	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo F::themeUrl() ?>/assets/ico/apple-touch-icon-72-precomposed.png">	<link rel="apple-touch-icon-precomposed" href="<?php echo F::themeUrl() ?>/assets/ico/apple-touch-icon-57-precomposed.png">	<link rel="shortcut icon" href="<?php echo F::themeUrl() ?>/assets/ico/favicon.png">	<!-- Place anything custom after this. -->    </head>    <body screen_capture_injected='true'>	<div class="navbar navbar-inverse navbar-fixed-top ">	    <div class="wrapper">		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">		    <span class="icon-bar"></span>		    <span class="icon-bar"></span>		    <span class="icon-bar"></span>		</button>		<a class="navbar-brand" href="#" style="padding-left:35px"><i class="glyphicon glyphicon-cog"></i>&nbsp;商家管理中心</a>		<div class="nav-collapse collapse">		    <ul class="nav navbar-nav pull-right">			<li class="dropdown">			    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> Guest <b class="caret"></b></a>			    <ul class="dropdown-menu">				<li><a href="#"><i class="glyphicon glyphicon-user"></i>  个人资料</a></li>				<li><a href="#"><i class="glyphicon glyphicon-off"></i>  退出</a></li>			    </ul>			</li>		    </ul>		</div><!--/.nav-collapse -->	    </div>	</div>	<div id="wrapper" class="wrapper">	    <div id="body" class="clearfix">		<div id="sidebar" class="separate-layer">		    <nav class="nav-admin">			<h2 class="sidebar-heading">Your store</h2>			<ol class="main-nav unstyled">			    <li><a class="sidebar-link dashboard" href="/admin"><i class="glyphicon glyphicon-home"></i>&nbsp;&nbsp;控制面板</a></li>			    <li><a class="sidebar-link orders" href="/admin/orders"><i class="glyphicon glyphicon-inbox"></i>&nbsp;&nbsp;<span class="badge pull-right">42</span>订单</a></li>			    <li><a class="sidebar-link customers" href="/admin/customers"><i class="glyphicon glyphicon-user"></i>&nbsp;&nbsp;客户</a></li>			    <li><a class="sidebar-link discounts" href="/admin/discounts"><i class="glyphicon glyphicon-bullhorn"></i>&nbsp;&nbsp;折扣</a></li>			    <li><a class="sidebar-link products" href="/admin/item/list"><i class="glyphicon glyphicon-tags"></i>&nbsp;&nbsp;商品列表</a></li>			    <li><a class="sidebar-link collections selected" href="/admin/collections"><i class="glyphicon glyphicon-th-large"></i>&nbsp;&nbsp;Collections</a></li>			</ol>			<h2 class="sidebar-heading">Your website</h2>			<ol class="main-nav unstyled">			    <li><a class="sidebar-link blogs" href="/admin/articles"><i class="glyphicon glyphicon-list-alt"></i>&nbsp;&nbsp;Blog posts</a></li>			    <li><a class="sidebar-link pages" href="/admin/pages"><i class="glyphicon glyphicon-bookmark"></i>&nbsp;&nbsp;Pages</a></li>			    <li>				<a class="sidebar-link links" href="/admin/link_lists"><i class="glyphicon glyphicon-link"></i>&nbsp;&nbsp;Navigation</a>			    </li>			    <li class="themes"><a class="sidebar-link themes" href="/admin/themes"><i class="glyphicon glyphicon-picture"></i>&nbsp;&nbsp;Themes</a></li>			</ol>			<h2 class="sidebar-heading">Configuration</h2>			<ol class="main-nav unstyled">			    <li class="apps"><a class="sidebar-link apps" href="/admin/apps"><i class="glyphicon glyphicon-phone"></i>&nbsp;&nbsp;Apps</a></li>			    <li class="settings"><a class="sidebar-link settings" href="/admin/settings/general"><i class="glyphicon glyphicon-cog"></i>&nbsp;&nbsp;Settings</a></li>			</ol>			<h2 class="sidebar-heading">Child Menu</h2>			<ol class="main-nav unstyled">			    <?php			    $this->widget('zii.widgets.CMenu', array(			    'items' => $this->menu				    ));			    ?>			</ol>		    </nav>		    <!--        <nav class="nav-settings">			      <ol class="main-nav unstyled pt">				<li><a data-route="'/'" class="sidebar-link dashboard" href="/admin"><i class="ico ico-sidebar ico-go-back"></i>Back to Admin</a></li>			      </ol>			      <h2 class="sidebar-heading">Store Settings</h2>			      <ol class="main-nav unstyled">				<li data-addclass-selected="currentRoute.controller | matches section.controller" data-addclass-disabled="'preferences' | userHasAccess | not" class="">				  <a data-route="section.route" class="sidebar-link" href="/admin/settings/general">				    <i data-bind-class="section.name | downcase | prepend 'ico ico-sidebar ico-'" class="ico ico-sidebar ico-general"></i>				    <span class="settings-navigation-label" data-bind="section.name">General</span>				  </a>				</li><li data-addclass-selected="currentRoute.controller | matches section.controller" data-addclass-disabled="'preferences' | userHasAccess | not" class="">				  <a data-route="section.route" class="sidebar-link" href="/admin/settings/payments">				    <i data-bind-class="section.name | downcase | prepend 'ico ico-sidebar ico-'" class="ico ico-sidebar ico-checkout"></i>				    <span class="settings-navigation-label" data-bind="section.name">Checkout</span>				  </a>				</li><li data-addclass-selected="currentRoute.controller | matches section.controller" data-addclass-disabled="'preferences' | userHasAccess | not" class="">				  <a data-route="section.route" class="sidebar-link" href="/admin/settings/shipping">				    <i data-bind-class="section.name | downcase | prepend 'ico ico-sidebar ico-'" class="ico ico-sidebar ico-shipping"></i>				    <span class="settings-navigation-label" data-bind="section.name">Shipping</span>				  </a>				</li><li data-addclass-selected="currentRoute.controller | matches section.controller" data-addclass-disabled="'preferences' | userHasAccess | not" class="">				  <a data-route="section.route" class="sidebar-link" href="/admin/settings/taxes">				    <i data-bind-class="section.name | downcase | prepend 'ico ico-sidebar ico-'" class="ico ico-sidebar ico-taxes"></i>				    <span class="settings-navigation-label" data-bind="section.name">Taxes</span>				  </a>				</li><li data-addclass-selected="currentRoute.controller | matches section.controller" data-addclass-disabled="'preferences' | userHasAccess | not" class="">				  <a data-route="section.route" class="sidebar-link" href="/admin/settings/notifications">				    <i data-bind-class="section.name | downcase | prepend 'ico ico-sidebar ico-'" class="ico ico-sidebar ico-notifications"></i>				    <span class="settings-navigation-label" data-bind="section.name">Notifications</span>				  </a>				</li><li data-addclass-selected="currentRoute.controller | matches section.controller" data-addclass-disabled="'preferences' | userHasAccess | not" class="">				  <a data-route="section.route" class="sidebar-link" href="/admin/settings/domains">				    <i data-bind-class="section.name | downcase | prepend 'ico ico-sidebar ico-'" class="ico ico-sidebar ico-domains"></i>				    <span class="settings-navigation-label" data-bind="section.name">Domains</span>				  </a>				</li><li data-addclass-selected="currentRoute.controller | matches section.controller" data-addclass-disabled="'preferences' | userHasAccess | not" class="">				  <a data-route="section.route" class="sidebar-link" href="/admin/settings/files">				    <i data-bind-class="section.name | downcase | prepend 'ico ico-sidebar ico-'" class="ico ico-sidebar ico-files"></i>				    <span class="settings-navigation-label" data-bind="section.name">Files</span>				  </a>				</li><li data-addclass-selected="currentRoute.controller | matches section.controller" data-addclass-disabled="'preferences' | userHasAccess | not" class="">				  <a data-route="section.route" class="sidebar-link" href="/admin/settings/account">				    <i data-bind-class="section.name | downcase | prepend 'ico ico-sidebar ico-'" class="ico ico-sidebar ico-account"></i>				    <span class="settings-navigation-label" data-bind="section.name">Account</span>				  </a>				</li>batman-iterator-section="controllers.settingsArea.sections"			      </ol>			    </nav>-->		</div>		<div id="content"><?php echo $content; ?>		</div><!-- content -->	    </div>	</div>	<!-- JS and analytics only. -->	<!-- Bootstrap core JavaScript    ================================================== -->	<!-- Placed at the end of the document so the pages load faster -->	<script src="<?php echo F::themeUrl() ?>/assets/js/jquery.js"></script>	<script src="<?php echo F::themeUrl() ?>/assets/js/bootstrap.js"></script>	<script src="<?php echo F::themeUrl() ?>/assets/js/holder/holder.js"></script>	<script src="<?php echo F::themeUrl() ?>/assets/js/application.js"></script>    </body></html>