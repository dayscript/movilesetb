jQuery(window).scroll(function() {

    limite = jQuery( "body" ).height() - jQuery(".container-footer").height() - jQuery("#block-tellamamos-2").height() - 250;

    if ( jQuery( window ).scrollTop() >= 473 ) {

        if ( jQuery( window ).scrollTop() < limite ) {
            jQuery("#block-tellamamos-2").removeClass("fix-bottom");
            jQuery("#block-tellamamos-2").addClass("fix-top");
        } else {
            jQuery("#block-tellamamos-2").removeClass("fix-top");
            jQuery("#block-tellamamos-2").addClass("fix-bottom");
        }

    } else {
        jQuery("#block-tellamamos-2").removeClass("fix-top");
    }    

});



jQuery( document ).ready(function() {

    jQuery( ".button.pidelo" ).click(function() {
      jQuery( "#edit-ingresa-tu-telefono-de-contacto-movil-o-fijo" ).focus();

      if ( jQuery( window ).width() <= 600 ) {

        jQuery( window ).scrollTop( jQuery("#block-tellamamos-2").offset().top );
        
      }

    });

    jQuery( "#edit-acepto-uso-de-datos-personales-aplica-terminos-y-condiciones--2--description a" ).click(function() {
      jQuery( "#edit-processed-text-01--2" ).toggle();
    });

    jQuery( "#edit-acepto-uso-de-datos-personales-aplica-terminos-y-condiciones--description a" ).click(function() {
      jQuery( "#edit-processed-text-01" ).toggle();
    });

    jQuery( ".banner.pidelo" ).click(function() {
      jQuery( "#edit-ingresa-tu-telefono-de-contacto-movil-o-fijo" ).focus();
      jQuery( window ).scrollTop( jQuery("#block-tellamamos-2").offset().top );        

    });

    // if ( jQuery( ".planes footer" ).length > 0 ) {
        altura = jQuery( ".planes .views-row:last .plans-card" ).height();
        jQuery( ".planes footer .footer-container" ).height( altura );
        
        // if ( jQuery(".owl-wrapper-outer").lenght > 0 ) {
            altura_mob = jQuery( ".planes .owl-item:first-child" ).height();
            jQuery( ".planes .owl-item:last-child .plans-card" ).height( altura_mob - 34 );
        // }
    // }

   
});


