<?php
 
if (!defined('ABSPATH')) { 
    exit; 
}

class Tx_Default_Action_Hooks 
{        
    public static function init() 
    { 
        add_action('upload_mimes', [__CLASS__, 'allow_svg']);
        add_action('archipress_authorbox', [__CLASS__, 'author_box']);
        add_action('archipress_single_navigation', [__CLASS__, 'single_nav']);
        add_action('archipress_share_tags', [__CLASS__, 'share_tag']);
        add_action('archipress_pagination', [__CLASS__, 'pagination']);
        add_filter('wpcf7_autop_or_not', '__return_false');

    }

    public static function allow_svg( $upload_mimes ) {

        $upload_mimes['svg'] = 'image/svg+xml';
        $upload_mimes['svgz'] = 'image/svg+xml';
        return $upload_mimes;
    }

    public static function pagination(){

        global $wp_query;
        $big = 999999999; 
        $pages = paginate_links( array(
                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format' => '?paged=%#%',
                'current' => max( 1, get_query_var('paged') ),
                'total' => $wp_query->max_num_pages,
                'prev_next' => false,
                'type'  => 'array',
                'prev_next'   => TRUE,
                'prev_text' => '<i class="fal fa-long-arrow-left"></i>',
                'next_text' => '<i class="fal fa-long-arrow-right"></i>',
            ) );
            if( is_array( $pages ) ) {

                echo '<div class="clenix-pagination ul-li"><ul>';
                foreach ( $pages as $page ) {
                        echo "<li>$page</li>";
                }
               echo '</ul></div>';
            }

    }

    public static function fashmag_social_post_share(){

        if( has_post_thumbnail() ){
            $share_image = wp_get_attachment_image_src( get_post_thumbnail_id(), '' );
            $share_image= $share_image[0];
            $share_image_portrait= wp_get_attachment_image_src( get_post_thumbnail_id(), '' );
            $share_image_portrait= $share_image_portrait[0];
        }else{
            $share_image= '';
            $share_image_portrait= '';
        }
        $share_excerpt = strip_tags( get_the_excerpt(), '<b><i><strong><a>' );
        $html = '<ul>
            <li><a class="fb-bg" href="http://www.facebook.com/sharer.php?u='.rawurlencode( get_the_permalink() ).'" ><i class="fab fa-facebook-f"></i></a></li>
            <li><a class="tw-bg" href="http://twitter.com/intent/tweet?text='.rawurlencode( get_the_title() ) .'&amp;url='.rawurlencode( get_the_permalink() ).'"><i class="fab fa-twitter"></i></a></li>
            <li><a class="yt-bg" href="http://www.linkedin.com/shareArticle?mini=true&amp;url='.rawurlencode( get_the_permalink() ).'&amp;title='.rawurlencode( get_the_title() ).'&amp;summary='.rawurlencode ( $share_excerpt ).'&amp;source='.rawurlencode( get_bloginfo('name') ).'"><i class="fab fa-linkedin"></i></a></li>
            <li><a class="bh-bg" href="http://pinterest.com/pin/create/button/?url='.rawurlencode( get_the_permalink() ).'&amp;media='.rawurlencode( $share_image_portrait ).'&amp;description='.rawurlencode( get_the_title() ).'"><i class="fab fa-pinterest"></i></a></li>
            
        </ul>';
        return $html;
    } 

    public static function share_tag(){

        $output = '';
        $categories = get_the_tags();
        if($categories){
          foreach($categories as $category) {
              $output.= '<a href="'.get_term_link( $category->term_id ).'">#'.$category->name.'</a>';
          }
        }

        echo '
            <div class="clenix-blog-share-tag d-flex justify-content-between ul-li align-items-center">
                <div class="blog-share d-flex align-items-center">
                    <span>Share</span>
                    '.self::fashmag_social_post_share().'
                </div>
                <div class="blog-hash-tag">
                    '.$output.'
                </div>
            </div>        
        ';
    }

    public static function get_previous_post_id( $post_id ) {

        global $post;
        $oldGlobal = $post;
        $post = get_post( $post_id );
        $previous_post = get_previous_post();
        $post = $oldGlobal;
        if ( '' == $previous_post )
            return false;
        return $previous_post->ID;
    }
    
    public static function get_next_post_id( $post_id ) {
    
        global $post;
        $oldGlobal = $post;
        $post = get_post( $post_id );
        $next_post = get_next_post();
        $post = $oldGlobal;
        if ( '' == $next_post )
            return false;
        return $next_post->ID;
    }

    public static function single_nav(){

        $post_id = $GLOBALS['post']->ID;
        $pid = self::get_previous_post_id($post_id);
        $nid = self::get_next_post_id($post_id);
        $plink = get_permalink($pid);
        $nlink= get_permalink($nid);
        $pbtn = $pid ? '<a class="d-flex align-items-center justify-content-center" href="'.$plink.'"><span>Previous Post</span></a>' : '';
        $nbtn = $nid ? '<a class="d-flex align-items-center justify-content-center" href="'.$nlink.'"><span>Next Post</span></a>' : '';
    ?>

    <div class="clenix-blog-next-prev-btn d-flex justify-content-between">
        <div class="clenix-btn">
            <?php echo $pbtn;?>
        </div>
        <div class="clenix-btn">
            <?php echo $nbtn;?>
        </div>
    </div> 

    <?php }
    
    
    public static function author_box(){

        $authorid = get_the_author_meta('ID');
        $user_meta = get_user_meta( $authorid, 'tx_profile_', true );
        $title = isset($user_meta["heading"]) ? '<h4>'.$user_meta["heading"].'</h4>' : '';
        $fb = isset($user_meta["fb"]) ? '<a href="'.esc_url($user_meta["fb"]).'"><i class="fab fa-facebook-f"></i></a>' : '';
        $tw = isset($user_meta["tw"]) ? '<a href="'.esc_url($user_meta["tw"]).'"><i class="fab fa-twitter"></i></a>' : '';
        $be = isset($user_meta["be"]) ? '<a href="'.esc_url($user_meta["be"]).'"><i class="fab fa-behance"></i></a>' : '';
        $yt = isset($user_meta["yt"]) ? '<a href="'.esc_url($user_meta["yt"]).'"><i class="fab fa-youtube"></i></a>' : '';
        $avatar = isset($user_meta["avatar"]) ? wp_get_attachment_image($user_meta["avatar"]["id"],'full') : '';
        if ($avatar) {
            echo '
            <div class="clenix-blog-author d-flex">
                <div class="inner-img">
                    ' . $avatar . '
                </div> 
                <div class="inner-text headline pera-content">
                    ' . $title . '
                    <p>' . get_the_author_meta( 'description', $authorid ) . '</p>
                    <div class="inner-social">
                        ' . $fb . $tw . $be . $yt . '
                    </div>
                </div>
            </div>        
            ';
        }
    }


}                           

Tx_Default_Action_Hooks::init();

