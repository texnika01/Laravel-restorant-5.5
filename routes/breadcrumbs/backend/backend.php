<?php

Breadcrumbs::register('admin.dashboard', function ($breadcrumbs) {
    $breadcrumbs->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});

// Home > Menu
Breadcrumbs::register('admin.menu', function ($breadcrumbs) {
	$breadcrumbs->parent('admin.dashboard');
	$breadcrumbs->push('Menu', route('admin.menu'));
});
// Menu > create
Breadcrumbs::register('admin.menu.create', function ($breadcrumbs) {
	$breadcrumbs->parent('admin.menu');
	$breadcrumbs->push('Menu create', route('admin.menu.create'));
});




// Home > Events
Breadcrumbs::register('admin.event', function ($breadcrumbs) {
	$breadcrumbs->parent('admin.dashboard');
	$breadcrumbs->push('Events', route('admin.event'));
});
Breadcrumbs::register('admin.event.create', function ($breadcrumbs) {
	$breadcrumbs->parent('admin.dashboard');
	$breadcrumbs->push('Events Create', route('admin.event.create'));
});


// Home > Blog
Breadcrumbs::register('admin.blog', function ($breadcrumbs) {
	$breadcrumbs->parent('admin.dashboard');
	$breadcrumbs->push('Blog', route('admin.blog'));
});
Breadcrumbs::register('admin.blog.create', function ($breadcrumbs) {
	$breadcrumbs->parent('admin.dashboard');
	$breadcrumbs->push('Blog Create', route('admin.blog.create'));
});



// Home > Category
Breadcrumbs::register('admin.category', function ($breadcrumbs) {
	$breadcrumbs->parent('admin.dashboard');
	$breadcrumbs->push('Category', route('admin.category'));
});
Breadcrumbs::register('admin.category.create', function ($breadcrumbs) {
	$breadcrumbs->parent('admin.dashboard');
	$breadcrumbs->push('Category Create', route('admin.category.create'));
});

// Home >Menu Category
Breadcrumbs::register('admin.menu_category', function ($breadcrumbs) {
	$breadcrumbs->parent('admin.dashboard');
	$breadcrumbs->push('Menu Category', route('admin.menu_category'));
});
Breadcrumbs::register('admin.menu_category.create', function ($breadcrumbs) {
	$breadcrumbs->parent('admin.dashboard');
	$breadcrumbs->push('Menu Category Create', route('admin.menu_category.create'));
});

require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';

// Home > Menu > [Category]
/**Breadcrumbs::register('category', function ($breadcrumbs, $category) {
$breadcrumbs->parent('blog');
$breadcrumbs->push($category->title, route('category', $category->id));
});
// Home > Blog > [Category] > [Post]
Breadcrumbs::register('post', function ($breadcrumbs, $post) {
$breadcrumbs->parent('category', $post->category);
$breadcrumbs->push($post->title, route('post', $post));
}); */