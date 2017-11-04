<?php
add_action('wp_dashboard_setup', 'add_research_articles_dashboard_widget');
function research_dashboard_widget() {
	include(get_template_directory() . '/partials/dashboard_articles.php');
}
function add_research_articles_dashboard_widget() {
	wp_add_dashboard_widget('research_dashboard_widget', 'Research Articles Recent Post', 'research_dashboard_widget');
}
// end of add_research_articles_dashboard_widget

add_action('wp_dashboard_setup', 'add_application_dashboard_widget');
function application_dashboard_widget() {
	include(get_template_directory() . '/partials/dashboard_application_glossary.php');
}
function add_application_dashboard_widget() {
	wp_add_dashboard_widget('application_dashboard_widget', 'Application Glossary Recent Post', 'application_dashboard_widget');
}
// end of add_application_dashboard_widget

add_action('wp_dashboard_setup', 'add_products_dashboard_widget');
function products_dashboard_widget() {
	include(get_template_directory() . '/partials/dashboard_products.php');
}
function add_products_dashboard_widget() {
	wp_add_dashboard_widget('products_dashboard_widget', 'Products Recent Post', 'products_dashboard_widget');
}
// end of add_products_dashboard_widget