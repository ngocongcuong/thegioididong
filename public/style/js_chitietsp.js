$(function () {
	$(".rateyo").rateYo().on("rateyo.change", function(e, data) {
		var rating = data.rating;
		$(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
		$(this).parent().find('.result').text('rating :'+ rating);
		$(this).parent().find('input[name=rating]').val(rating);// add rating value to input field
	});
});
$(document).ready(function(){
  $("#show-sp").click(function(){
  	$(".content-main").css("height", "auto");
    $(this).hide();
    $("#hide-sp").show();
  });
  $("#hide-sp").click(function(){
  	$(".content-main").css("height", "1055px");
    $("#show-sp").show();
    $(this).hide();
  });
});
