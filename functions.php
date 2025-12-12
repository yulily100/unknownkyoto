<?php
	//アイキャッチ画像を使用する
	add_theme_support('post-thumbnails');

	// entry page
	add_image_size('entry-top',740, 416, true);

	// member page
	add_image_size( 'member-thumb', 400, 400, true );

	// title
	add_theme_support( 'title-tag' );

	// カスタム投稿タイプ
	function register_plan () {
		$args = array(
			'label' => 'プラン',
			'labels' => array(
				'name' => 'プラン一覧',
				'add_new' => '新しいプランを追加',
				'add_new_item' => '新しいプランを追加',
			),
			'public' => true,
			'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields'),
			'menu_position' => 5,
			'menu_icon'   => 'dashicons-welcome-edit-page',
			'has_archive' => 'true',
			'rewrite' => array('with_front' => false), // パーマリンク書き換え、設定空更新必要
		);
		register_post_type( "plan", $args);

		$tags = array(
			'label' => 'タグ',
			'public' => true,
		);
		register_taxonomy( 'plan_tags', 'plan', $tags);

		$categories = array(
			'label' => 'カテゴリー',
			'public' => true,
		);
		register_taxonomy( 'plan_categories', 'plan', $categories);
	}
	add_action('init', 'register_plan');



	// ダッシュボードのメニューをカスタマイズ
	function remove_menus () {
		global $menu;
		unset($menu[25]); // コメント
	}
	add_action('admin_menu', 'remove_menus');

	// 日本語URL禁止
	function auto_post_slug( $slug, $post_ID, $post_status, $post_type ) {
    if ( preg_match( '/(%[0-9a-f]{2})+/', $slug ) ) {
        $slug = utf8_uri_encode( $post_type ) . '-' . $post_ID;
    }
    return $slug;
	}
	add_filter( 'wp_unique_post_slug', 'auto_post_slug', 10, 4  );


	// エディターのスタイルを追加する
	add_editor_style('editor.css');


	add_action('customize_register', function($wp_customize){

	// セクション追加
	$wp_customize->add_section('hotel_price_section', [
		'title'    => '料金設定',
		'priority' => 30,
	]);

	// 金額一覧（key => 初期値）
	$prices = [
		'single1'     => '8,800',
		'single4day'     => '23,320',
		'relax1day'      => '9,350',
		'relax4day'      => '26,400',
		'double1day'     => '11,000',
		'double4day'     => '31,680',
		'deluxe1day'     => '13,200',
		'deluxe4day'     => '39,160',
		'dormitory1day'  => '4,180',
		'dormitory4day'  => '11,000',
	];

	foreach ($prices as $key => $default) {

		$wp_customize->add_setting($key, [
		'default' => $default,
		'sanitize_callback' => function($value){
			// 数字とカンマのみ許可
			return preg_replace('/[^0-9,]/', '', (string)$value);
		},
		]);

		$wp_customize->add_control($key, [
		'label'   => strtoupper($key) . ' 料金',
		'section' => 'hotel_price_section',
		'type'    => 'text',
		]);
	}
	});

	function hotel_price($key) {
	$defaults = [
		'single1'     => '8,800',
		'single4'     => '23,320',
		'relax1'      => '9,350',
		'relax4'      => '26,400',
		'double1'     => '11,000',
		'double4'     => '31,680',
		'deluxe1'     => '13,200',
		'deluxe4'     => '39,160',
		'dormitory1'  => '4,180',
		'dormitory4'  => '11,000',
	];

	$default = $defaults[$key] ?? '';
	return esc_html( get_theme_mod($key, $default) );
	}
?>
