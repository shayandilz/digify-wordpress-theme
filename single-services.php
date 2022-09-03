<?php
get_header();



//this part i tried to classify services into 4 main patterns
//1. marketing
//2. delivery / customer-club / payment
//3. storage / accounting / reports
//4. council

if (get_field( 'choose_service' ) == 'marketing' ) {
	get_template_part( 'template-parts/services-template/template-marketing' );
} else if ( get_field( 'choose_service' ) == 'delivery' || get_field( 'choose_service' ) == 'customer club'|| get_field( 'choose_service' ) == 'payment' ) {
	get_template_part( 'template-parts/services-template/template-delivery' );
}else if ( get_field( 'choose_service' ) == 'accounting' || get_field( 'choose_service' ) == 'storage'|| get_field( 'choose_service' ) == 'reports' ) {
	get_template_part( 'template-parts/services-template/template-accounting' );
}else if ( get_field( 'choose_service' ) == 'counsil' ) {
	get_template_part( 'template-parts/services-template/template-council' );
}


get_footer();
