

(function($){
$(document).ready(function(){
	    
var heading = $('.smoke .elementor-widget-container').children()

heading.each(function(){
    $(this).html($(this).text().replace(/\S/g, '<span>$&</span>'))  
})

var headingLetter = heading.find('span')

headingLetter.on('mouseover', function(){
    $(this).removeClass('back').addClass('active')
})

headingLetter.on('animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd', function(e){
    if ( $(e.target).hasClass('active')  ){
        $(this).removeClass('active').addClass('back')
    }else{
        $(this).removeClass('back')
    }
})
		
})
}
