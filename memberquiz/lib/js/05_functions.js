jQuery(function($){
  var model = [       
        {display: '', name : 'check', width : 15, sortable : false, align: 'left',align_body:'left',listable:false}, /* not change this line */
        {display: 'ID', name : 'id', width : 30, sortable : true, align: 'left'},
        {display: 'Title', name : 'name', width : 250, sortable : true, align: 'left'},
		{display: 'Creation Date', name : 'creation_date', width : 80, sortable : true, align: 'center'},
		{display: 'Status', name : 'status', width : 50, sortable : true, align: 'center'},
		{display: 'Actions', name : 'actions', width : 120, sortable : false, align: 'center',valign:'center',selezioneclick:false}
		];
  $("#table_scroll").flexigrid({
	url: 'json_list.php',
	sortname: 'creation_date',
	sortorder: 'desc',		
	colModel : model,	
	onSuccess:post_success,
	title: '<img src="ico.png" alt="" align="absmiddle" style="margin-right:5px" />QUIZZES LIST',
	afterDrag:reload_tab,
	afterCollResize:reload_tab,
	afterSelect: after_Select,
	afterUnSelect: after_UnSelect,
	afterSelectSingle : after_Select_Single
  }); 
$('.flexigrid').css({'text-align':'left','width':'100%'});  
$('.pDiv2').find('.pGroup:first,.btnseparator:first').remove();  
$('<a href="log_out.php" style="margin-left:20px;" class="buttonizza"><img src="img/logout.png" alt="" style="vertical-align:middle;margin-right:5px" />Log Out</a>').insertAfter($('.pPageStat').closest('div'))
});
/********************************************/
function ckeditor_replace(){
  for(var name in CKEDITOR.instances) {
   delete CKEDITOR.instances[name]
  }	 
  $( '#quiz_content').ckeditor();   
  $( '#cont_error,#result_message').ckeditor({
   toolbar_MyToolbar : [
		{ name: 'document', items : [ 'Source' ] },
		{ name: 'insert', items : ['Undo','Redo', 'Image','Table','HorizontalRule','Smiley','SpecialChar','Link','Unlink'] },
		{ name: 'basicstyles', items : ['NumberedList','BulletedList','-','TextColor','BGColor','-', 'Bold','Italic','Underline','Strike','-','RemoveFormat','-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock' ] }
   ]
  });
}
/*/////////////////FUNCTIONS TO adjust size of flexigrid //////////////*/
function adjust_size(){
      $('.bDiv').css('height',$('#table_scroll').outerHeight()+'px');
      $('.cDrag div').css('height', $('#table_scroll').outerHeight()+$('.hDiv').outerHeight()+'px');
      $('.bDiv table').addClass('autoht');
}


/* answares system */
          function num_answare_text(){
            $('.input_container').each(function(){
            $(this).find('.answare_num').each(function(i){
              i++
              $(this).text(i+') ');
            }); 
            });         
          } 
var add_answer_click = function(){
 $(this).click(function(){
  add_answare($(this));
 });
}

$('.add_answer').livequery(add_answer_click);

$('.delete_answer').live('click',function(){
 var container = $(this).closest('.input_container'),
     question_id = container.find('[rel="question"]').attr('id');
 $(this).closest('.ass').remove();
 container.find('.ass').each(function(){
   var ass_num = $(this).index()+1,
    attr = 'answare_'+ass_num+'_'+question_id;
   $(this).find('input:text').attr({'id':attr,'name':attr});
   $(this).find('input:radio').attr({'id':'right_'+ass_num+'_'+question_id}).val(attr).next('label').attr('for','right_'+ass_num+'_'+question_id); 
 });
 if(container.find('.ass').length == 0) container.find('.text_answer').html('');
 num_answare_text();
 if(!container.find('.ass:first').find('.right_answare').is(':checked')){
  container.find('.ass:first').find('.right_answare').click().click();
 } 
});

function add_answare(button_add){
var answare_length = button_add.closest('.input_container').find('.ass').length+1
 , append_input = button_add.closest('.input_container').find('[rel="question"]')
 , answer_area = button_add.closest('.input_container').find('.answer_area');
   if(button_add.closest('.input_container').find('.ass').length == 0){
     $(answer_area).append('<div class="ass"><br/><span class="answare_num"></span>\
     <input type="radio" class="right_answare buttonizza" name="right_'+append_input.attr('id')+'" id="right_'+answare_length+'_'+append_input.attr('id')+'" value="answare_'+answare_length+'_'+append_input.attr('id')+'" />\
     <label for="right_'+answare_length+'_'+append_input.attr('id')+'">right</label>\
     <input type="text" id="answare_'+answare_length+'_'+append_input.attr('id')+'" name="answare_'+answare_length+'_'+append_input.attr('id')+'" style="width:70%;" class="required" />\
     <img src="'+img_QeU+'/no.png" alt="" class="delete_answer" style="cursor:pointer;" title="Delete Answer"/></div>');
     button_add.closest('.input_container').find('.right_answare').prop('checked',true);
   }else{
     $('<div class="ass"><br/><span class="answare_num"></span>\
      <input type="radio" class="right_answare buttonizza" name="right_'+append_input.attr('id')+'" id="right_'+answare_length+'_'+append_input.attr('id')+'" value="answare_'+answare_length+'_'+append_input.attr('id')+'" />\
      <label for="right_'+answare_length+'_'+append_input.attr('id')+'">right</label>\
      <input type="text" id="answare_'+answare_length+'_'+append_input.attr('id')+'" name="answare_'+answare_length+'_'+append_input.attr('id')+'" style="width:70%;" class="required" />\
      <img src="'+img_QeU+'/no.png" alt="" class="delete_answer" style="cursor:pointer;" title="Delete Answer"/></div>')
     .insertAfter(button_add.closest('.input_container').find('.ass').last());   
   }
   $('.text_answer').html('Your Answers<hr/>');
   button_add.closest('.input_container').find('.right_answare').click(function(){
     button_add.closest('.input_container').find('.right_answare').not(this).button('destroy').button();
   });
   num_answare_text();   
}

/********************************************/
function add_new_question(){
 $('#general_input_container').addInput({
   Button_Add : '.add_up',    
   Container_Cloned:'.input_container',
   Start_Attribute :'alt', 
   Delete_Class : 'delete_input',
   First_Visible : true,
   Post_Insert:function(){
    $('.postbuttonizza').addClass('buttonizza').removeClass('.postbuttonizza'); 
   },
   Post_Remove:function(){
    $('.input_container .ass').each(function(){
      var ass_num = $(this).index()+1,
      attr = $(this).closest('.input_container').find('[rel="question"]').attr('id');
      $(this).find('input:text').attr({'id':attr,'name':'answare_'+ass_num+'_'+attr});
      $(this).find('input:radio').attr({'id':'right_'+ass_num+'_'+attr}).val('answare_'+ass_num+'_'+attr).next('label').attr('for','right_'+ass_num+'_'+attr); ;    
    });    
   }
 });
} 
function add_item(){ 
        add_new_question();
        $('#add_new_file').validate({ignore: ":hidden",errorPlacement: function(error, element) {}});           
         $('.add_file').click(function(){
          $('#add_new_file').submit();                
         });
         $('#add_new_file').ajaxForm({
            type:'POST',
            url:'add.php',
            data:$('#add_new_file').serialize(),
            beforeSerialize:function(){
             $('#add_new_file').validate({ignore: ":hidden",errorPlacement: function(error, element) {}}).form();                       
            },
            beforeSend: function() {  
              var no_answer = $('.answer_area').filter(function(){         
                 return $(this).html().replace(/\s+/g,"") == "";
              }).length;  
              var message = '';                                        
              if($('iframe').contents().find('body').html().replace(/(<([^>]+)>)/ig,"") == ''){   
              message = 'You can\'t leave content blanck';                                                               
              }
              if (no_answer > 0){
              message = 'You can\'t leave questions without an answer';                                       
              }    
              if($('#type_qui').prop('checked') == true && $('#active_min_answer').prop('checked') == true){
               if($('[name="min_answer"]').val() > $('[id^="question_"]').length){
                message = '"Min. Correct Answers" option must be <= Questions number';
               }
              }   
              if($('#randomize_questions').prop('checked') == true){
               if($('#number_random').val() > $('[id^="question_"]').length){
                message = '"Number of Visible Questions" option must be <= Questions number';
               }
              }                                     
              if(message != ''){ 
              $.dialogize({
               content:message,
               closable:true,
               resizable:false
              });  
              return false; 
              }else{              
              $('.add_file').prop('disabled',true);              
              $.dialogize({
               content:'Please Wait...',
               closable:false,
               resizable:false,
               draggable:false
              }); 
              }                                                   
            },
            complete:function(){
             $('.add_file').prop('disabled',false).button('refresh');
             $.dialogize('destroy');
            },        
            dataType:'html',
            success:function(data){ 
             if($(data).filter('.error_alert').length != 0){      
              $('#result_insert').html('<div class="error_message">'+data+'</div>');      
              setTimeout(function(){$('#result_insert').find('div').fadeOut(2000,function(){$(this).remove()})},1000);               
             }else{
              $('#result_insert').html('<div class="success_message">Operation successfully</div>');
              $('#add_new_file input:text,#add_new_file textarea').not('#cont_error,#admin_email').val('');
              $('.text_answer').html('');
              var cont = $('.input_container').length-1;
              for(i=(-cont);i<0;i++){
               $('.input_container').eq(i*-1).remove();
              }
              $('.delete_input').css('display','none');
              $('.answer_area').html('');
              setTimeout(function(){$('#result_insert').find('div').fadeOut(2000,function(){$(this).remove();})},1000);
             }
            }
         });
}         
//});         
/***************************************************************/

/*/////////////////FUNCTIONS TO ADD AN ITEM //////////////*/
function add_new_item(){  
   clearTimeout(function(){$('#result_insert').find('div').fadeOut(1000);});
   $('#result_insert').html('');
   $.ajax({
    type:'POST',
    url:'form_add.php',
    success:function(data){
     $('#tab_flex').fadeOut('fast',
       function(){
        $('#tab_add_new td').html(data);
        $('#tab_add_new').fadeIn('fast');
        go_back();
        add_item();
        ckeditor_replace();
       }
     );   
    }
   });
}
/*/////////////////FUNCTIONS ON BUTTONS//////////////*/
function button_functions(com, grid){
 var check_all = $('.selectall').text()
    ,uncheck_all = $('.unselectall').text()
    ,delete_select = $('.deleteselected').text()
    ,add_new = $('.add_new').text();    
 if(com == check_all){
  $('#table_scroll tr').addClass('trSelected').find('.check_selezione').attr('checked','checked');
 }
 if(com == uncheck_all){
  $('#table_scroll tr').removeClass('trSelected').find('.check_selezione').removeAttr('checked'); 
 }
 if(com == add_new){
        add_new_item();
        go_back();
 } 
 if(com == delete_select){
   if($('#table_scroll tr').find('.check_selezione:checked').length > 0){
     $.dialogize({
       type:'confirm',    
       content:'<br/>Are you sure to delete selected items?<br/><br/><br/>',
       draggable:false,
       resizable:false,
       before_open_dial:function(){
        $('.dial_button_confirm,.dial_button_unconfirm').button();
       },
       confirm:function(){
         $.ajax({
           type:'POST',
           url: 'delete.php',
           data: $('#table_scroll *').serialize()+'&type=multy',
           success:function(data){   
             $('#table_scroll').flexReload();
             adjust_size();
             $.dialogize('destroy'); 
           }
        });       
       }
     });  
   }else{
    $.dialogize({
      content:'No item/s selected',
      delay_close:1500,
       draggable:false,
       resizable:false
    });
   }  
 } 
}
/* ******************* FUNCTION TO GET CODE ***********************/
function get_code(){
 $('img[class="getcode"]').click(function(){
  var rel = $(this).attr('rel');
      $.dialogize({
        content:'Copy and paste this ShortCode where you whant see the Quiz<br/><br/><span style="color:#0099ff">&lt?php @include(\''+rel+'\'); ?></span>',
        resizable:false,
        draggable:false
      });  
 });
}
/* ******************* FUNCTION TO EDIT A ITEM ***********************/
function edit_item(){
 $('img[class="edit"]').click(function(){
 obj_id = $(this).attr('id');
/**********************************************/
   $.ajax({
    type:'POST',
    url: 'form_edit.php',
    data: ({id:obj_id}),
    success:function(data){
     $('#tab_flex').fadeOut('fast',
       function(){
        $('#tab_add_new td').html(data);
        $('#tab_add_new').fadeIn('fast');
        go_back();
        add_new_question();
        ckeditor_replace();
        /*********************************************/
        $('#add_new_file').validate({ignore: ":hidden",errorPlacement: function(error, element) {}});           
         $('.add_file').click(function(){
          $('#add_new_file').submit();    
         });
         $('#add_new_file').ajaxForm({
            type:'POST',
            url:'edit.php',
            data:$('#add_new_file').serialize(),
            beforeSerialize:function(){
             $('#add_new_file').validate({ignore: ":hidden",errorPlacement: function(error, element) {}}).form();                       
            },
            beforeSend: function() {   
              var no_answer = $('.answer_area').filter(function(){         
                 return $(this).html().replace(/\s+/g,"") == "";
              }).length;      
              var message = '';                                        
              if($('iframe').contents().find('body').html().replace(/(<([^>]+)>)/ig,"") == ''){   
              message = 'You can\'t leave content blanck';                                                               
              }
              if (no_answer > 0){
              message = 'You can\'t leave questions without an answer';                                       
              }
              if($('#type_qui').prop('checked') == true && $('#active_min_answer').prop('checked') == true){
               if($('[name="min_answer"]').val() > $('[id^="question_"]').length){
                message = '"Min. Correct Answers" option must be <= Questions number';
               }
              }    
              if($('#randomize_questions').prop('checked') == true){
               if($('#number_random').val() > $('[id^="question_"]').length){
                message = '"Number of Visible Questions" option must be <= Questions number';
               }
              }                              
              if(message != ''){ 
              $.dialogize({
               content:message,
               closable:true,
               resizable:false
              });  
              return false; 
              }else{              
              $('.add_file').prop('disabled',true);              
              $.dialogize({
               content:'Please Wait...',
               closable:false,
               resizable:false,
               draggable:false
              }); 
              }  
            },
            complete:function(){
             $.dialogize('destroy');
             $('.add_file').prop('disabled',false).button('refresh');             
            },       
            dataType:'html',
            success:function(data){                         
             if($(data).filter('.error_alert').length != 0){      
              $('#result_insert').html('<div class="error_message">'+data+'</div>');      
              setTimeout(function(){$('#result_insert').find('div').fadeOut(2000,function(){$(this).remove()})},1000);               
             }else{
              $.dialogize({
                content:'Operation is successful!',   
                closable:false,
                resizable:false,
                draggable:false,
                delay_close: 1500             
              });             
              $('#tab_add_new').fadeOut('fast',function(){$('#tab_flex').fadeIn('fast');$('#tab_add_new td').html('');reload_tab();  });     
             }
            }
         }); 
        /*********************************************/
        $('.add_new_item').click(function(){
         $('.like_flexigrid').fadeOut('fast',function(){
          $('.add_new').click();
         });
        }); 
       }
     );   
    }
   });
/************************************************/ 
});
}
function go_back(){
        $('.back_list').click(function(){ 
          $('#tab_add_new').fadeOut('fast',
             function(){
               $('#tab_add_new td').html('');
               $('#tab_flex').fadeIn('fast',function(){reload_tab();});
             }
           );
        }); 
}
/*/////////////////CALLBACK FUNCTIONS WHE AN ELEMENT IS SELECTED//////////////*/
function after_Select(){
 $(this).find('.check_selezione').attr('checked','checked');
}
function after_UnSelect(){
 $(this).find('.check_selezione').removeAttr('checked');
}
function after_Select_Single(){
 $('.trSelected').find('.check_selezione').removeAttr('checked');
 if($(this).hasClass('trSelected')){
  $(this).find('.check_selezione').attr('checked','checked');
 }else{
  $(this).find('.check_selezione').removeAttr('checked');
 }
}

/*/////////////////RELOAD FLEXIGRID//////////////*/
function reload_tab(){
 $('#table_scroll').flexReload();
}
/*/////////////////FUNCTION TO DELETE ELEMENTS//////////////*/
function delete_item(){
   $('img[class="delete"]').click(function(){
     var id = $(this).attr('id');
     $.dialogize({
       type:'confirm',
       class_button_yes : 'buttonizza',
       class_button_no : 'buttonizza',
       before_open_dial:function(){
        $('.dial_button_confirm,.dial_button_unconfirm').button();
       },       
       content:'<br/>Are you sure to delete this item?<br/><br/><br/>',
       draggable:false,
       resizable:false,       
       confirm:function(){
        $.ajax({
          type:'POST',
          url:'delete.php',
          data: ({id:id,type:'unique'}),
          success:function(data){
            $('#table_scroll').flexReload();
            adjust_size();
          }
        });
        $.dialogize('destroy');     
       }
     });      
   }); 
}
/*/////////////////FUNCTION AFTER INIT OF FLEXIGRID//////////////*/
function post_success(){ 
     /** "add_postusuccess()" will be an additional function (it will be active only if you write it) that will call on success function **/
     if (typeof add_postusuccess == 'function' ) {add_postusuccess();}
    edit_item();
   delete_item();
   adjust_size();
   get_code();
 /*------------------------- FUNCTION TO HIGHLIGHT RESULT OF ADVANCED SEARCH ---------------*/
     $('#advanced_search input:text,#advanced_search select,#advanced_search textarea').each(function(){
       if($(this)[0].tagName == 'SELECT'){
        var high = $('#'+$(this).attr('id')+' option:selected').text().split(' ')
       }else{
        var high = $(this).val().split(' ')
       }
        for(i=0;i<=high.length;i++){
          if (high[i] != '' && high[i] != 'undefined' && high[i] != null)
           if($(this).attr('abbr_r') != 'undefined' && $(this).attr('abbr_r') != null && $(this).attr('abbr_r') != ''){ 
            for(ii=0;ii<=$(this).attr('abbr_r').split(' ').length;ii++){
             $('#table_scroll [abbrn="'+$(this).attr('abbr_r').split(' ')[ii]+'"]').highlight(high[i])
            }
           }
          }   
        });
}
setTimeout(function(){$('#table_scroll').flexReload();},500);
/******************************************************************/          

    
