// JavaScript Document

$(document).ready(function(){
	var base_url = "http://localhost/aluminator/index.php/";
	$("textarea#chat_message").keypress(function(e){
		if(e.which == 13){
			$("#submit_message").click();
			return false;
		}
		});
		
		
	$("#submit_message").click(function(){
		var chat_message_content = $("textarea#chat_message").val();
		var chat_id = $("input#chat_id").val();
		var user_id = $("input#user_id").val();
		if(chat_message_content == "") 
		{ 
		return false; 
		}
		$.post(base_url + "chat/ajax_add_chat_message",
		{chat_message_content : chat_message_content , chat_id : chat_id, user_id : user_id},function(data){	
		
		if(data.status == 'ok')
				{
					$("div#chat_viewport").html(data.content);
				}
				else
				{
					alert('technical error');
				}
			
		},"json");
		
		$("textarea#chat_message").val("");
		
		return false;
		});
		
		
});




$(document).ready(function(){
	setInterval(get_message,2000);
	var base_url = "http://localhost/aluminator/index.php/";
	
		var chat_message_content = $("textarea#chat_message").val();
		var chat_id = $("input#chat_id").val();
		var user_id = $("input#user_id").val();
		function get_message(){
		$.post(base_url + "chat/ajax_get_chat_message", {chat_id : chat_id}, function(data){
				
				if(data.status == 'ok')
				{
					$("div#chat_viewport").html(data.content);
				}
				else
				{
					alert('technical error');
				}
				
				},"json");
		}
		
		});
		
		
$(document).ready(function(){
  
    $("#animate").fadeIn(3000);
 
});
