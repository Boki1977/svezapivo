    
<script type="text/javascript" src="ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>

<script src="fancybox/jquery.fancybox-1.3.4.pack.js" type="text/javascript" ></script>







<script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>
<script>
CKEDITOR.replace( 'editor-ckeditor' ,{
	filebrowserBrowseUrl : 'filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
	filebrowserUploadUrl : 'filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
	filebrowserImageBrowseUrl : 'filemanager/dialog.php?type=1&editor=ckeditor&fldr='
});
</script>

<script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea.normal",
    theme: "modern",
    skin: "light",
    width: 680,
    height: 300,
    link_list: [
        {title: 'My page 1', value: 'http://www.tinymce.com'},
        {title: 'My page 2', value: 'http://www.tecrail.com'}
    ],
    plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak",
         "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking spellchecker",
         "table contextmenu directionality emoticons paste textcolor responsivefilemanager youtube codemirror qrcode flickr picasa easyColorPicker"
   ],
    relative_urls: false,
    browser_spellcheck : true ,
    filemanager_title:"Responsive Filemanager",
    external_filemanager_path:"/filemanager/",
    external_plugins: { "filemanager" : "/filemanager/plugin.min.js"},
    codemirror: {
    indentOnInit: true, // Whether or not to indent code on init. 
    path: 'CodeMirror'
  },
  
   image_advtab: true,
   toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
   toolbar2: "| responsivefilemanager | image | media | link unlink anchor | print preview code  | youtube | qrcode | flickr | picasa | easyColorPicker"
 });



tinymce.init({
    selector: "textarea.crossdomain",
    theme: "modern",
    width: 680,
    height: 300,
    plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak",
         "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking spellchecker",
         "table contextmenu directionality emoticons paste textcolor responsivefilemanager "
   ],
    relative_urls: false,

    filemanager_title:"Responsive Filemanager",
    filemanager_crossdomain: true,
    external_filemanager_path:"http://test.albertoperipolli.com/secondaryserver/filemanager/",
    external_plugins: { "filemanager" : "http://test.albertoperipolli.com/secondaryserver/filemanager/plugin.min.js"},
  
   image_advtab: true,
   toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
   toolbar2: "| responsivefilemanager | image | media | link unlink anchor | print preview"
 });





jQuery(document).ready(function ($) {
      $('.iframe-btn').fancybox({
			  'width'	: 880,
			  'height'	: 570,
			  'type'	: 'iframe',
			  'autoScale'   : false
      });
      
 
			//
			// Handles message from ResponsiveFilemanager
			//
			function OnMessage(e){
			  var event = e.originalEvent;
			   // Make sure the sender of the event is trusted
			   if(event.data.sender === 'responsivefilemanager'){
			      if(event.data.field_id){
			      	var fieldID=event.data.field_id;
			      	var url=event.data.url;
							$('#'+fieldID).val(url).trigger('change');
							$.fancybox.close();

							// Delete handler of the message from ResponsiveFilemanager
							$(window).off('message', OnMessage);
			      }
			   }
			}

		  // Handler for a message from ResponsiveFilemanager
			$('.iframe-btn').on('click',function(){
			  $(window).on('message', OnMessage);
			});


      
      $('#download-button').on('click', function() {
	    ga('send', 'event', 'button', 'click', 'download-buttons');      
      });
      $('.toggle').click(function(){
	    var _this=$(this);
	    $('#'+_this.data('ref')).toggle(200);
	    var i=_this.find('i');
	    if (i.hasClass('icon-plus')) {
		  i.removeClass('icon-plus');
		  i.addClass('icon-minus');
	    }else{
		  i.removeClass('icon-minus');
		  i.addClass('icon-plus');
	    }
      });
});



function open_popup(url)
{
        var w = 880;
        var h = 570;
        var l = Math.floor((screen.width-w)/2);
        var t = Math.floor((screen.height-h)/2);
        var win = window.open(url, 'ResponsiveFilemanager', "scrollbars=1,width=" + w + ",height=" + h + ",top=" + t + ",left=" + l);
}

</script>

<script type="text/javascript">
	jQuery('#my-tab a').click(function (e) {
  e.preventDefault();
  jQuery(this).tab('show');
})
</script>











<!--Basic Scripts-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/slimscroll/jquery.slimscroll.min.js"></script>

    <!--Beyond Scripts-->
    <script src="assets/js/beyond.js"></script>
  <!--Bootstrap Tags Input-->
    <script src="assets/js/tagsinput/bootstrap-tagsinput.js"></script>

   <!--Page Related Scripts-->
    <script src="assets/js/datatable/jquery.dataTables.min.js"></script>
    <script src="assets/js/datatable/ZeroClipboard.js"></script>
    <script src="assets/js/datatable/dataTables.tableTools.min.js"></script>
    <script src="assets/js/datatable/dataTables.bootstrap.min.js"></script>
    
    <?php
    if (strpos($url,'pregled_sadrzaja') !== false) {

    ?>
    <script src="assets/js/datatable/datatables-init.js"></script>
    <?php
 }
 ?>
 
 
      <?php
    if (strpos($url,'trgovina_proizvodi') !== false) {

    ?>
    <script src="assets/js/datatable/datatables-init.js"></script>
    <?php
 }
 ?>




 
    
        <?php
    if (strpos($url,'pregled_kategorije') !== false) {

    ?>
    <script src="assets/js/datatable/datatables-init-2.js"></script>
    <?php
 }
 ?>
 
         <?php
    if (strpos($url,'pregled_potkategorije') !== false) {

    ?>
    <script src="assets/js/datatable/datatables-init-2.js"></script>
    <?php
 }
 ?>
 
          <?php
    if (strpos($url,'trgovina_potkategorija') !== false) {

    ?>
    <script src="assets/js/datatable/datatables-init-2.js"></script>
    <?php
 }
 ?>
 
           <?php
    if (strpos($url,'trgovina_kategorija') !== false) {

    ?>
    <script src="assets/js/datatable/datatables-init-2.js"></script>
    <?php
 }
 ?>
 
 
    <script>
        InitiateSimpleDataTable.init();
        InitiateEditableDataTable.init();
        InitiateExpandableDataTable.init();
        InitiateSearchableDataTable.init();
    </script>
    
    <!--Page Related Scripts-->
    <script src="assets/js/validation/bootstrapValidator.js"></script>

    <script>
        $(document).ready(function () {

            $("#registrationForm").bootstrapValidator();

            $('#togglingForm').bootstrapValidator({
                message: 'This value is not valid',
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                submitHandler: function (validator, form, submitButton) {
                    // Do nothing
                },
                fields: {
                    firstName: {
                        validators: {
                            notEmpty: {
                                message: 'The first name is required'
                            }
                        }
                    },
                    lastName: {
                        validators: {
                            notEmpty: {
                                message: 'The last name is required'
                            }
                        }
                    },
                    company: {
                        validators: {
                            notEmpty: {
                                message: 'The company name is required'
                            }
                        }
                    },
                    // These fields will be validated when being visible
                    job: {
                        validators: {
                            notEmpty: {
                                message: 'The job title is required'
                            }
                        }
                    },
                    department: {
                        validators: {
                            notEmpty: {
                                message: 'The department name is required'
                            }
                        }
                    },
                    mobilePhone: {
                        validators: {
                            notEmpty: {
                                message: 'The mobile phone number is required'
                            },
                            digits: {
                                message: 'The mobile phone number is not valid'
                            }
                        }
                    },
                    // These fields will be validated when being visible
                    homePhone: {
                        validators: {
                            digits: {
                                message: 'The home phone number is not valid'
                            }
                        }
                    },
                    officePhone: {
                        validators: {
                            digits: {
                                message: 'The office phone number is not valid'
                            }
                        }
                    }
                }
            })
            .find('button[data-toggle]')
            .on('click', function () {
                var $target = $($(this).attr('data-toggle'));
                // Show or hide the additional fields
                // They will or will not be validated based on their visibilities
                $target.toggle();
                if (!$target.is(':visible')) {
                    // Enable the submit buttons in case additional fields are not valid
                    $('#togglingForm').data('bootstrapValidator').disableSubmitButtons(false);
                }
            });


            $('#accountForm').bootstrapValidator({
                // Only disabled elements are excluded
                // The invisible elements belonging to inactive tabs must be validated
                excluded: [':disabled'],
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                submitHandler: function (validator, form, submitButton) {
                    // Do nothing
                },
                fields: {
                    fullName: {
                        validators: {
                            notEmpty: {
                                message: 'The full name is required'
                            }
                        }
                    },
                    company: {
                        validators: {
                            notEmpty: {
                                message: 'The company name is required'
                            }
                        }
                    },
                    address: {
                        validators: {
                            notEmpty: {
                                message: 'The address is required'
                            }
                        }
                    },
                    city: {
                        validators: {
                            notEmpty: {
                                message: 'The city is required'
                            }
                        }
                    }
                }
            });

            $('#html5Form').bootstrapValidator();
        });
    </script>
    
    
   <script type="text/javascript">

		

$(document).ready(function(){



 $('#subcategoryID').change(function(){


$("#potkategorija_trenutna").hide();
$('#potkategorija_trenutna').val("");
 var id = $(this).val();



$.post('potkat_list.php', {id: id},



function(data){





$("#potkategorija").html(data);

$("#potkategorija").hide();

$("#potkategorija").fadeIn('slow'); //Fade in the data given by the insert.php file







});

return false;



});



});





		</script>
		



  <script type="text/javascript">

		

$(document).ready(function(){



 $('#kategorija').change(function(){


$("#potkategorija_shop_trenutna").hide();
$('#potkategorija_shop_trenutna').val("");
 var id = $(this).val();



$.post('potkat_list_shop.php', {id: id},



function(data){





$("#potkategorija_shop").html(data);

$("#potkategorija_shop").hide();

$("#potkategorija_shop").fadeIn('slow'); //Fade in the data given by the insert.php file







});

return false;



});



});





		</script>

















		
		<script type="text/javascript">

		

$(document).ready(function(){



 $('.fotka_refresh').click(function(){




 var id = $(this).val();



$.post('image_show.php', {id: id},



function(data){





$("#show_image").html(data);

$("#show_image").hide();

$("#show_image").fadeIn('slow'); //Fade in the data given by the insert.php file










});

return false;



});



});




$(document).ready(function(){



 $('#pozicija_select').change(function(){




 var id = $(this).val();



$.post('pozicija_list.php', {id: id},



function(data){





$("#pozicija").html(data);

$("#pozicija").hide();

$("#pozicija").fadeIn('slow'); //Fade in the data given by the insert.php file







});

return false;



});



});


	


$(document).ready(function(){



 $('.cekanje').click(function(){



 var id = $(this).attr('id');
var status_article='1';
$.post('article_status.php', {id: id, status_article: status_article});

$('#row_' + id).toggle("slow");

$('#row2_' + id).toggle("slow");




});




 $('.objavi').click(function(){



 var id = $(this).attr('id');
var status_article='0';
$.post('article_status.php', {id: id, status_article: status_article});


$('#row2_' + id).toggle("slow");

$('#row_' + id).toggle("slow");




});







});





		</script>




    
    