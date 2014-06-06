<?php

//WPテキストからimgを表示
function replaceImagePath($arg) {
	$content = str_replace('"images/', '"' . get_bloginfo('template_directory') . '/images/', $arg);
	return $content;
}  
add_action('the_content', 'replaceImagePath');

/*---------------------------------

		WPアイキャッチ表示

---------------------------------*/
// アイキャッチ画像を利用できるようにします。
add_theme_support('post-thumbnails');
// 管理画面用画像
set_post_thumbnail_size(90, 90 ,true);
// サムネイル用画像
add_image_size('large_thumbnail', 200, 200, true);
// 記事内画像
add_image_size('article_image', 500, 400, true);

//ブログ・カテゴリー名のrelタグを削除
add_filter('the_category', 'remove_rel');
function remove_rel( $relTag ) {
$relTag = str_replace(' rel="category tag"', "", $relTag);
return $relTag;
}
/*---------------------------------

		  カスタムメニュー

---------------------------------*/
register_nav_menus(
	array(
    	'place_global' => 'グローバル',
    )
);
