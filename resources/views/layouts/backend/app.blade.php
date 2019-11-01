<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>EXPOSURE | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="/backend/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/backend/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/backend/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/backend/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="/backend/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="/backend/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="/backend/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="/backend/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/backend/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="/backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <link rel="stylesheet" href="{{asset('vendor/laraberg/css/laraberg.css')}}">


  <link rel="stylesheet" href="/backend/css/main.css?v={{uniqid()}}">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!--HEADER-->

@include('layouts.backend.include.header')
  <!---SIDEBAR-->
@include('layouts.backend.include.sidebar')

  <!-- Content Wrapper. Contains page content -->

  @yield('content')

@include('layouts.backend.include.footer')

  <!--FOOTER-->

  <script src="https://unpkg.com/react@16.8.6/umd/react.production.min.js"></script>

<script src="https://unpkg.com/react-dom@16.8.6/umd/react-dom.production.min.js"></script>

<script src="{{ asset('vendor/laraberg/js/laraberg.js') }}"></script>

<script>
        Laraberg.init('editorgut');





( function(
	blocks,
	blockEditor,
	element,
) {
	var el = element.createElement;
	var InnerBlocks = blockEditor.InnerBlocks;
	blocks.registerBlockType( 'mwp/inner-blocks', {
		title: 'bootstrap col 2',
		category: 'layout',
		attributes: {},
		edit: function( props ) {
			return el(
				'div',
				{ },
				'',
				el( 'div', { style: {  }  }, el( InnerBlocks ) ),
				''
			);
		},
		save: function( props ) {
            return el(
				'div',
				{ className:"col-md-2"},
				'',
				el( 'div', { style: {  }  }, el( InnerBlocks.Content ) ),
				''
			);
		},
	} )
} ) (
	window.wp.blocks,
	window.wp.blockEditor,
	window.wp.element,
);

( function(
	blocks,
	blockEditor,
	element,
) {
	var el = element.createElement;
	var InnerBlocks = blockEditor.InnerBlocks;
	blocks.registerBlockType( 'mwp/inner-blocks2', {
		title: 'bootstrap col 3',
		category: 'layout',
		attributes: {},
		edit: function( props ) {
			return el(
				'div',
				{},
				'',
				el( 'div', { style: {  }  }, el( InnerBlocks ) ),
				''
			);
		},
		save: function( props ) {
            return el(
				'div',
				{ className:"col-md-3"},
				'',
				el( 'div', { style: {  }  }, el( InnerBlocks.Content ) ),
				''
			);
		},
	} )
} ) (
	window.wp.blocks,
	window.wp.blockEditor,
	window.wp.element,
);

( function(
	blocks,
	blockEditor,
	element,
) {
	var el = element.createElement;
	var InnerBlocks = blockEditor.InnerBlocks;
	blocks.registerBlockType( 'mwp/inner-blocks4', {
		title: 'bootstrap col 4',
		category: 'layout',
		attributes: {},
		edit: function( props ) {
			return el(
				'div',
				{ },
				'',
				el( 'div', { style: {  }  }, el( InnerBlocks ) ),
				''
			);
		},
		save: function( props ) {
            return el(
				'div',
				{ className:"col-md-4"},
				'',
				el( 'div', { style: {  }  }, el( InnerBlocks.Content ) ),
				''
			);
		},
	} )
} ) (
	window.wp.blocks,
	window.wp.blockEditor,
	window.wp.element,
);

( function(
	blocks,
	blockEditor,
	element,
) {
	var el = element.createElement;
	var InnerBlocks = blockEditor.InnerBlocks;
	blocks.registerBlockType( 'mwp/inner-blocks5', {
		title: 'bootstrap col 5',
		category: 'layout',
		attributes: {},
		edit: function( props ) {
			return el(
				'div',
				{ },
				'',
				el( 'div', { style: {  }  }, el( InnerBlocks ) ),
				''
			);
		},
		save: function( props ) {
            return el(
				'div',
				{ className:"col-md-5"},
				'',
				el( 'div', { style: {  }  }, el( InnerBlocks.Content ) ),
				''
			);
		},
	} )
} ) (
	window.wp.blocks,
	window.wp.blockEditor,
	window.wp.element,
);

( function(
	blocks,
	blockEditor,
	element,
) {
	var el = element.createElement;
	var InnerBlocks = blockEditor.InnerBlocks;
	blocks.registerBlockType( 'mwp/inner-blocks6', {
		title: 'bootstrap col 6',
		category: 'layout',
		attributes: {},
		edit: function( props ) {
			return el(
				'div',
				{ },
				'',
				el( 'div', { style: {  }  }, el( InnerBlocks ) ),
				''
			);
		},
		save: function( props ) {
            return el(
				'div',
				{ className:"col-md-6"},
				'',
				el( 'div', { style: {  }  }, el( InnerBlocks.Content ) ),
				''
			);
		},
	} )
} ) (
	window.wp.blocks,
	window.wp.blockEditor,
	window.wp.element,
);

( function(
	blocks,
	blockEditor,
	element,
) {
	var el = element.createElement;
	var InnerBlocks = blockEditor.InnerBlocks;
	blocks.registerBlockType( 'mwp/inner-blocks7', {
		title: 'bootstrap col 7',
		category: 'layout',
		attributes: {},
		edit: function( props ) {
			return el(
				'div',
				{ },
				'',
				el( 'div', { style: {  }  }, el( InnerBlocks ) ),
				''
			);
		},
		save: function( props ) {
            return el(
				'div',
				{ className:"col-md-7"},
				'',
				el( 'div', { style: {  }  }, el( InnerBlocks.Content ) ),
				''
			);
		},
	} )
} ) (
	window.wp.blocks,
	window.wp.blockEditor,
	window.wp.element,
);

( function(
	blocks,
	blockEditor,
	element,
) {
	var el = element.createElement;
	var InnerBlocks = blockEditor.InnerBlocks;
	blocks.registerBlockType( 'mwp/inner-blocks8', {
		title: 'bootstrap col 8',
		category: 'layout',
		attributes: {},
		edit: function( props ) {
			return el(
				'div',
				{},
				'',
				el( 'div', { style: {  }  }, el( InnerBlocks ) ),
				''
			);
		},
		save: function( props ) {
            return el(
				'div',
				{ className:"col-md-8"},
				'',
				el( 'div', { style: {  }  }, el( InnerBlocks.Content ) ),
				''
			);
		},
	} )
} ) (
	window.wp.blocks,
	window.wp.blockEditor,
	window.wp.element,
);
( function(
	blocks,
	blockEditor,
	element,
) {
	var el = element.createElement;
	var InnerBlocks = blockEditor.InnerBlocks;
	blocks.registerBlockType( 'mwp/inner-blocks9', {
		title: 'bootstrap col 9',
		category: 'layout',
		attributes: {},
		edit: function( props ) {
			return el(
				'div',
				{ },
				'',
				el( 'div', { style: {  }  }, el( InnerBlocks ) ),
				''
			);
		},
		save: function( props ) {
            return el(
				'div',
				{ className:"col-md-9"},
				'',
				el( 'div', { style: {  }  }, el( InnerBlocks.Content ) ),
				''
			);
		},
	} )
} ) (
	window.wp.blocks,
	window.wp.blockEditor,
	window.wp.element,
);

( function(
	blocks,
	blockEditor,
	element,
) {
	var el = element.createElement;
	var InnerBlocks = blockEditor.InnerBlocks;
	blocks.registerBlockType( 'mwp/inner-blocks10', {
		title: 'bootstrap col 10',
		category: 'layout',
		attributes: {},
		edit: function( props ) {
			return el(
				'div',
				{ },
				'',
				el( 'div', { style: {  }  }, el( InnerBlocks ) ),
				''
			);
		},
		save: function( props ) {
            return el(
				'div',
				{ className:"col-md-10"},
				'',
				el( 'div', { style: {  }  }, el( InnerBlocks.Content ) ),
				''
			);
		},
	} )
} ) (
	window.wp.blocks,
	window.wp.blockEditor,
	window.wp.element,
);
( function(
	blocks,
	blockEditor,
	element,
) {
	var el = element.createElement;
	var InnerBlocks = blockEditor.InnerBlocks;
	blocks.registerBlockType( 'mwp/inner-blocks11', {
		title: 'bootstrap col 11',
		category: 'layout',
		attributes: {},
		edit: function( props ) {
			return el(
				'div',
				{},
				'',
				el( 'div', { style: {  }  }, el( InnerBlocks ) ),
				''
			);
		},
		save: function( props ) {
            return el(
				'div',
				{ className:"col-md-11"},
				'',
				el( 'div', { style: {  }  }, el( InnerBlocks.Content ) ),
				''
			);
		},
	} )
} ) (
	window.wp.blocks,
	window.wp.blockEditor,
	window.wp.element,
);

( function(
	blocks,
	blockEditor,
	element,
) {
	var el = element.createElement;
	var InnerBlocks = blockEditor.InnerBlocks;
	blocks.registerBlockType( 'mwp/inner-blocks12', {
		title: 'bootstrap col 12',
		category: 'layout',
		attributes: {},
		edit: function( props ) {
			return el(
				'div',
				{ },
				'',
				el( 'div', { style: {  }  }, el( InnerBlocks ) ),
				''
			);
		},
		save: function( props ) {
            return el(
				'div',
				{ className:"col-md-12"},
				'',
				el( 'div', { style: {  }  }, el( InnerBlocks.Content ) ),
				''
			);
		},
	} )
} ) (
	window.wp.blocks,
	window.wp.blockEditor,
	window.wp.element,
);


( function(
	blocks,
	blockEditor,
	element,
) {
	var el = element.createElement;
	var InnerBlocks = blockEditor.InnerBlocks;
	blocks.registerBlockType( 'mwp/inner-container', {
		title: 'bootstrap container',
		category: 'layout',
		attributes: {},
		edit: function( props ) {
			return el(
				'div',
				{ },
				'',
				 el( InnerBlocks ) ,
				''
			);
		},
		save: function( props ) {
            return el(
				'div',
				{ className:"container"},
				'',
				 el( InnerBlocks.Content ),
				''
			);
		},
	} )
} ) (
	window.wp.blocks,
	window.wp.blockEditor,
	window.wp.element,
);

//container fluid
( function(
	blocks,
	blockEditor,
	element,
) {
	var el = element.createElement;
	var InnerBlocks = blockEditor.InnerBlocks;
	blocks.registerBlockType( 'mwp/inner-container-fluid', {
		title: 'bootstrap container-fluid',
		category: 'layout',
		attributes: {},
		edit: function( props ) {
			return el(
				'div',
				{ },
				'',
				 el( InnerBlocks ) ,
				''
			);
		},
		save: function( props ) {
            return el(
				'div',
				{ className:"container-fluid"},
				'',
				 el( InnerBlocks.Content ),
				''
			);
		},
	} )
} ) (
	window.wp.blocks,
	window.wp.blockEditor,
	window.wp.element,
);


//row bootstrap

( function(
	blocks,
	blockEditor,
	element,
) {
	var el = element.createElement;
	var InnerBlocks = blockEditor.InnerBlocks;
	blocks.registerBlockType( 'mwp/inner-row', {
		title: 'bootstrap row',
		category: 'layout',
		attributes: {},
		edit: function( props ) {
			return el(
				'div',
				{ },
				'',
				 el( InnerBlocks ) ,
				''
			);
		},
		save: function( props ) {
            return el(
				'div',
				{ className:"row"},
				'',
				 el( InnerBlocks.Content ),
				''
			);
		},
	} )
} ) (
	window.wp.blocks,
	window.wp.blockEditor,
	window.wp.element,
);
        </script>
<!-- jQuery 3 -->
<script src="/backend/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/backend/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="/backend/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="/backend/bower_components/raphael/raphael.min.js"></script>
<script src="/backend/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="/backend/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="/backend/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/backend/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="/backend/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/backend/bower_components/moment/min/moment.min.js"></script>
<script src="/backend/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="/backend/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="/backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="/backend/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/backend/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/backend/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/backend/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/backend/js/dropzone.js"></script>

<script src="/backend/js/demo.js?v={{uniqid()}}"></script>
</body>
</html>







