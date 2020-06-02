const img_tete = document.querySelector('.img_tete');
const titre_gerant = document.querySelector('.titre_gerant');
const titre_client = document.querySelector('.titre_client');
const titre_presta = document.querySelector('.titre_presta');
const loca = document.querySelector('.loca');
const retour_haut = document.querySelector('.img_retour_haut');

window.addEventListener('scroll', () => {
    if(window.scrollY > 220) {
        titre_gerant.classList.add('scroll');
    } else {
        titre_gerant.classList.remove('scroll');
    }

    if(window.scrollY > 600) {
        titre_client.classList.add('scroll');
    } else {
        titre_client.classList.remove('scroll');
    }

    if(window.scrollY > 1100 ){
        titre_presta.classList.add('scroll');
    } else {
        titre_presta.classList.remove('scroll');
    }

    if(window.scrollY > 1800 ){
        loca.classList.add('scroll');
    } else {
        loca.classList.remove('scroll');
    }
});

retour_haut.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
});

/****** TRI PHOTOS ******/

$(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }
    });
    
    if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

});