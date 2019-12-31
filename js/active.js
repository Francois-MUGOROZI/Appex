
$(document).ready(function(){
    $('.nav-link').removeClass('active');
    var ref = document.location.pathname.split('/').pop();
    var links = document.getElementsByClassNames('nav-link');

    for(i=0;i<links.length;i++){
        if($(links[i]).attr('href')===ref){
            $(links[i]).addClass('active');
            break;
        }
    }
});
