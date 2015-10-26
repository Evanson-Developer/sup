(function($){  
 $.qeu_ready = function() {  
              $(".Quiz_answers_container").on("click",function(){ 
                $(this).closest("[id^='fstep_']").find(".Quiz_answers_container").removeClass("Quiz_answers_selected").find("input:checkbox").prop("checked",false);
                $(this).addClass("Quiz_answers_selected").find("input:checkbox").prop("checked",true);
              });
              $(".Quiz_answers_container").on({
                mouseenter:function(){
                 $(this).addClass("Quiz_answers_over");
                },
                mouseleave:function(){
                 $(this).removeClass("Quiz_answers_over");
                }
              });
              $('.Quiz_submit').click(function(){
               $(this).closest('form').validate();
              });              
              $("[id^='Quizform_']").validate();
              $("[id^='Quizform_']").submit(function(){
               var id_form = $('#'+$(this).attr('id'));
               if(id_form.find(".data_step").length == 0){
                 var no_answer = id_form.find("[id^='fstep_']").find("input:checkbox.r_ans").filter(function(){
                        return $(this).prop("checked");
                 }).length;
                 var steps_length = id_form.find("[id^='fstep_']").length;
               }else{
                 var no_answer = id_form.find("[id^='fstep_']").not(':first').find("input:checkbox.r_ans").filter(function(){
                        return $(this).prop("checked");
                 }).length;  
                 var steps_length = id_form.find("[id^='fstep_']").length-1;             
               }
               if (no_answer != steps_length){
                 if(id_form.closest(".container_quiz").find('.questions_counter').length == 0){
                   alert("You must choose at least one answer for each Question");
                 }else{
                    id_form.closest(".container_form").find(".er_choose").hide().fadeIn("fast");
                    setTimeout(function () {
                        id_form.closest(".container_form")
                            .find(".er_choose")
                            .fadeOut("fast");
                    }, 1500);
                    return false;                 
                 }
               }else{
               if(id_form.find(".data_step").length == 0){
                var total_q = id_form.find("[id^='fstep_']").length;
               }else{
                var total_q = id_form.find("[id^='fstep_']").length-1;
               }               
               $.ajax({
                type:"POST",
                url:QeU_dir+"/result_quiz.php",
                data:id_form.serialize()+"&total_questions="+total_q,
                beforeSend:function(){
                  return id_form.validate().form();
                },
                success:function(data){
                  id_form.closest(".container_quiz").fadeOut("slow",function(){
                   $(this).prev(".container_content_quiz").html(data).fadeIn("slow");
                  });
                }
               });
               }
               return false;
              });
              $(".container_quiz").each(function(){
                 var total_questions = $(this).find("[id^='fstep_']").length;
               $(this).find(".q_total").html("/"+total_questions);
              });
 };  
})(jQuery);            