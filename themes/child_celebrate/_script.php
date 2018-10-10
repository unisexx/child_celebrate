<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="themes/child_celebrate/css/template.css"/>
<script type="text/javascript" src="themes/child_celebrate/js/cufon/cufon-yui.js"></script>
<script type="text/javascript" src="themes/child_celebrate/js/cufon/supermarket_400.font.js"></script>
<script type="text/javascript">
	Cufon.replace('h1, h2, h3, h4, #menu');

</script>

<!-- Colorbox jquery -->
<script src="themes/child_celebrate/js/jquery.colorbox.js"></script>
<link media="screen" rel="stylesheet" href="themes/child_celebrate/css/colorbox.css" />
<script>
			$(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements
				$(".inline").colorbox({inline:true, width:"90%"});
				$(".inline2").colorbox({inline:true, width:"50%"});
				$(".callbacks").colorbox({
					onOpen:function(){ alert('onOpen: colorbox is about to open'); },
					onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
					onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
					onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
					onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
				});

				$('.non-retina').colorbox({rel:'group5', transition:'none'})
				$('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
				
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
			});
</script>

<!-- Tooltip jquery -->
<script type="text/javascript" src="themes/child_celebrate/js/vtip.js"></script>
<link rel="stylesheet" type="text/css" href="themes/child_celebrate/css/vtip.css" />

<!-- number format -->
<script type="text/javascript" src="themes/child_celebrate/js/jquery.number.js"></script>
<script type="text/javascript">
$(function(){
	$('input.numDecimal').number( true, 2 );
	$('input.numInt').number( true, 0 );
	
	$('input.numOnly').bind('keypress', function(e) {
    	return ( e.which!=8 && e.which!=0 && (e.which<48 || e.which>57)) ? false : true ;
	});
});
</script>

<!-- Input format -->
<script type="text/javascript" src="themes/child_celebrate/js/jquery.maskedinput.js"></script>
<script type="text/javascript">
jQuery(function($){
   $(".fdate").mask("99/99/9999");
   $(".fmobile").mask("(999) 999-9999");
   $(".fidcard").mask("9-9999-99999-99-9");
   $(".fnum").mask("999,999,999");
   $(".ftime").mask("99:99");
});
</script>


<!-- Listbox show/hide -->
<script type="text/javascript">
$(document).ready(function(){
	$("#groupchild").hide();
    $("select[name=type]").change(function(){
        $(this).find("option:selected").each(function(){
			
			if($(this).attr("value")=="1" || $(this).attr("value")=="2"){
                $("#personalchild").show();
				$("#groupchild").hide();
            }
            if($(this).attr("value")=="3" || $(this).attr("value")=="4"){
                $("#personalchild").hide();
				$("#groupchild").show();
            }
           
        });
    }).change();
});
</script>


<!-- bootstrap CSS -->
<link rel="stylesheet" href="themes/child_celebrate/css/bootstrap.min.css">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="themes/child_celebrate/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="themes/child_celebrate/css/navbar-fixed-top.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="themes/child_celebrate/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<link rel="stylesheet" href="themes/child_celebrate/css/bootstrap-select.css">
<script src="themes/child_celebrate/js/bootstrap-select.js"></script>
<script src="media/js/jquery-validation-1.17.0/dist/jquery.validate.js"></script>
<script src="media/js/jquery-validation-1.17.0/dist/additional-methods.js"></script>
