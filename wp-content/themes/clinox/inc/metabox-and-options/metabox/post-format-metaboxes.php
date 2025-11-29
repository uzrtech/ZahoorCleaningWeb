<?php
// Video Post Meta
$clinox_video_post_meta = 'clinox_video_post_format_meta';

CSF::createMetabox( $clinox_video_post_meta, array(
	'title'        => esc_html__('Video Post Format Options', 'clinox' ),
	'post_type'    => 'post',
	'post_formats' => array('video'),
) );

CSF::createSection( $clinox_video_post_meta, array(
	'fields' => array(

		array(
			'id'    => 'post_video_url',
			'type'  => 'text',
			'title' => esc_html__('Video URL', 'clinox' ),
			'desc'    => esc_html__( 'Paste video URL here', 'clinox' ),
		),

	)
));

// Audio Post Meta
$clinox_audio_post_meta = 'audio_post_format_meta';

CSF::createMetabox( $clinox_audio_post_meta, array(
	'title'        => esc_html__('Audio Post Format Options', 'clinox' ),
	'post_type'    => 'post',
	'post_formats' => array('audio'),
) );

CSF::createSection( $clinox_audio_post_meta, array(
	'fields' => array(

		array(
			'id'    => 'audio_embed_code',
			'type'  => 'code_editor',
			'settings' => array(
				'theme'  => 'monokai',
				'mode'   => 'htmlmixed',
			),
			'title' => esc_html__('Audio Embed Code', 'clinox' ),
			'desc'    => esc_html__( 'Paste sound cloud audio embed code here', 'clinox' ),
		),

	)
));


// Gallery Post Meta
$clinox_gallery_post_meta = 'gallery_post_format_meta';

CSF::createMetabox( $clinox_gallery_post_meta, array(
	'title'        => esc_html__('Gallery Post Format Options', 'clinox' ),
	'post_type'    => 'post',
	'post_formats' => array('gallery'),
) );

CSF::createSection( $clinox_gallery_post_meta, array(
	'fields' => array(

		array(
			'id'          => 'post_gallery_images',
			'type'        => 'gallery',
			'title' => esc_html__('Gallery Images', 'clinox' ),
			'add_title'   => esc_html__('Upload Gallery Images', 'clinox'),
			'edit_title'  => esc_html__('Edit Gallery Images', 'clinox'),
			'clear_title' => esc_html__('Remove Gallery Images', 'clinox'),
			'desc'    => esc_html__( 'Upload gallery images from here', 'clinox' ),
		),

	)
));