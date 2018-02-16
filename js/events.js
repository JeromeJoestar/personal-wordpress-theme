jQuery('#seeMoreProjects').click(function(){
    var self = jQuery(this);
    jQuery('.projectListContainer ul.hiddenProjectList').first().removeClass('hiddenProjectList');
});jQuery('#mobileMenuIcon').click(function(){
    var menu = jQuery('#mobileNavBar');
    if(menu.hasClass('menuOpen')){
        closeMobileMenu(menu);
    }
    else{
        openMobileMenu(menu);
    }
});

jQuery('#content, #mobileNavBar li a').click(function(){
    var menu = jQuery('#mobileNavBar');
    if(menu.hasClass('menuOpen')){
        closeMobileMenu(menu);
    }

});
