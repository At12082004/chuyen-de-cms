<?php
/**
 * Custom Search Template (Theo mẫu thầy - đầy đủ 13, 5, 14, 15)
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 */
get_header();
?>

<style>
/* ===============================
   SEARCH PAGE LAYOUT
   =============================== */
.search-page {
    background-color: #f9f9f9;
    padding: 50px 0;
    font-family: "Segoe UI", sans-serif;
}
.search-layout {
    display: grid;
    grid-template-columns: 1fr 3fr 1.2fr; /* 13 - 5 - 14 */
    gap: 25px;
}
@media (max-width: 992px) {
    .search-layout {
        grid-template-columns: 1fr;
    }
}

/* ===============================
   MODULE 13 - BÀI VIẾT NỔI BẬT
   =============================== */
.sidebar-left {
    background: #fff;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.05);
}
.sidebar-left h4 {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 20px;
    text-align: center;
}
.featured-post {
    margin-bottom: 20px;
    display: flex;
    flex-direction: column;
    gap: 10px;
    border-bottom: 1px solid #eee;
    padding-bottom: 15px;
}
.featured-post:last-child {
    border-bottom: none;
}
.featured-post img {
    width: 100%;
    height: 160px;
    border-radius: 8px;
    object-fit: cover;
}
.featured-post a {
    color: #333;
    font-weight: bold;
    text-decoration: none;
}
.featured-post a:hover {
    color: #007bff;
}

/* ===============================
   MODULE 5 - KẾT QUẢ TÌM KIẾM (mỗi bài 1 hàng)
   =============================== */
.search-results-box {
    background: #fff;
    border-radius: 10px;
    padding: 25px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
}
.search-results-box h2 {
    text-align: center;
    font-size: 24px;
    margin-bottom: 25px;
}

.search-results-list {
    display: flex;
    flex-direction: column;
    gap: 25px;
}
.search-row {
    display: flex;
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 2px 6px rgba(0,0,0,0.05);
    transition: all 0.3s ease;
}
.search-row:hover {
    transform: translateY(-4px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}
.search-thumb {
    flex: 0 0 250px;
}
.search-thumb img {
    width: 100%;
    height: 180px;
    object-fit: cover;
}
.search-info {
    display: flex;
    align-items: flex-start;
    gap: 15px;
    padding: 20px;
    flex: 1;
}
.date-box {
    width: 70px;
    background: #f3f6ff;
    border-radius: 10px;
    text-align: center;
    padding: 10px 0;
    line-height: 1.2;
    box-shadow: 0 1px 4px rgba(0,0,0,0.1);
}
.date-box .day {
    font-size: 22px;
    font-weight: 700;
    color: #007bff;
}
.date-box .month {
    font-size: 12px;
    color: #555;
    font-weight: 600;
    text-transform: uppercase;
}
.text-box {
    flex: 1;
}
.text-box h3 {
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 6px;
}
.text-box h3 a {
    color: #007bff;
    text-decoration: none;
}
.text-box h3 a:hover {
    text-decoration: underline;
}
.text-box .search-desc {
    font-size: 14px;
    color: #444;
    line-height: 1.5;
}
@media (max-width: 768px) {
    .search-row {
        flex-direction: column;
    }
    .search-thumb {
        flex: none;
    }
    .search-info {
        flex-direction: column;
        align-items: flex-start;
    }
}

/* ===============================
   MODULE 14 - BÌNH LUẬN NỔI BẬT
   =============================== */
.sidebar-right {
    background: #fff;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.05);
}
.sidebar-right h4 {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 20px;
    text-align: center;
}
.comment-box {
    display: flex;
    flex-direction: column;
    gap: 15px;
}
.comment {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    background: #f9f9f9;
    border-radius: 6px;
    padding: 10px;
}
.comment.reply {
    margin-left: 40px;
    background: #f2f2f2;
}
.comment .avatar img {
    border-radius: 50%;
}
.comment .content {
    flex: 1;
}
.comment .content strong {
    font-weight: bold;
    color: #333;
}
.comment .content p {
    font-size: 14px;
    color: #444;
    line-height: 1.5;
    margin: 5px 0 0 0;
}
.comment .content a {
    font-size: 13px;
    color: #007bff;
}

/* ===============================
   MODULE 15 - LATEST NEWS (Dưới cùng)
   =============================== */
.latest-news-box {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 3px 10px rgba(0,0,0,0.05);
    padding: 30px 40px;
    margin-top: 40px;
}
.latest-news-box h2 {
    font-size: 22px;
    font-weight: bold;
    color: #222;
    margin-bottom: 25px;
    position: relative;
}
.latest-news-box h2::after {
    content: "";
    position: absolute;
    bottom: -8px;
    left: 0;
    width: 50px;
    height: 3px;
    background: #007bff;
    border-radius: 3px;
}
.news-item {
    display: flex;
    align-items: flex-start;
    gap: 15px;
    position: relative;
    padding: 15px 0;
    border-left: 2px solid #007bff20;
}
.news-icon {
    width: 15px;
    height: 15px;
    background-color: #007bff;
    border-radius: 50%;
    position: absolute;
    left: -8px;
    top: 25px;
}
.news-content {
    margin-left: 20px;
    flex: 1;
}
.news-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.news-title {
    font-size: 16px;
    font-weight: 600;
    color: #007bff;
    text-decoration: none;
}
.news-title:hover {
    text-decoration: underline;
}
.news-date {
    font-size: 13px;
    color: #999;
}
.news-excerpt {
    font-size: 15px;
    color: #444;
    line-height: 1.6;
    margin-top: 5px;
}
@media (max-width: 600px) {
    .news-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 4px;
    }
}

/* ===============================
   PHÂN TRANG
   =============================== */
.pagination {
    margin-top: 30px;
    text-align: center;
}
</style>

<section class="search-page">
    <div class="container">

        <!-- Hàng chính: 13 - 5 - 14 -->
        <div class="search-layout">

            <!-- MODULE 13 -->
            <div class="sidebar-left">
                <h4>Bài viết nổi bật</h4>
                <?php
                $featured_posts = get_posts([
                    'numberposts' => 3,
                    'post_status' => 'publish'
                ]);
                foreach ($featured_posts as $post) :
                ?>
                    <div class="featured-post">
                        <a href="<?php echo get_permalink($post->ID); ?>">
                            <?php if (has_post_thumbnail($post->ID)) : ?>
                                <?php echo get_the_post_thumbnail($post->ID, 'medium'); ?>
                            <?php else : ?>
                                <img src="https://via.placeholder.com/400x250?text=No+Image" alt="">
                            <?php endif; ?>
                            <div class="featured-title"><?php echo esc_html($post->post_title); ?></div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- MODULE 5 -->
            <div class="search-results-box">
                <h2>Kết quả tìm kiếm cho: "<strong><?php echo get_search_query(); ?></strong>"</h2>

                <?php if (have_posts()) : ?>
                    <div class="search-results-list">
                        <?php while (have_posts()) : the_post(); ?>
                            <?php 
                                $day = get_the_date('d');
                                $month = strtoupper(date_i18n('F', strtotime(get_the_date('Y-m-d'))));
                            ?>
                            <div class="search-row">
                                <div class="search-thumb">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php if (has_post_thumbnail()) {
                                            the_post_thumbnail('medium');
                                        } else {
                                            echo '<img src="https://via.placeholder.com/400x250?text=No+Image" alt="">';
                                        } ?>
                                    </a>
                                </div>
                                <div class="search-info">
                                    <div class="date-box">
                                        <div class="day"><?php echo esc_html($day); ?></div>
                                        <div class="month">THÁNG <?php echo esc_html(date_i18n('m')); ?></div>
                                    </div>
                                    <div class="text-box">
                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <p class="search-desc"><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>

                    <div class="pagination">
                        <?php the_posts_pagination([
                            'mid_size' => 2,
                            'prev_text' => __('← Trước'),
                            'next_text' => __('Sau →'),
                        ]); ?>
                    </div>
                <?php else : ?>
                    <div class="no-results">
                        <p>😕 Không tìm thấy kết quả phù hợp với từ khóa của bạn.</p>
                        <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
                            <input type="search" name="s" placeholder="Nhập từ khóa..." value="<?php echo get_search_query(); ?>">
                            <button type="submit">Tìm kiếm</button>
                        </form>
                    </div>
                <?php endif; ?>
            </div>

            <!-- MODULE 14 -->
            <div class="sidebar-right">
                <h4>Bình luận nổi bật</h4>
                <div class="comment-box">
                    <?php
                    $recent_comments = get_comments([
                        'number' => 5,
                        'status' => 'approve',
                        'post_status' => 'publish'
                    ]);
                    if ($recent_comments) :
                        foreach ($recent_comments as $comment) :
                            $avatar = get_avatar($comment->comment_author_email, 45);
                            $author = $comment->comment_author;
                            $excerpt = wp_trim_words($comment->comment_content, 15, '...');
                            $post_link = get_permalink($comment->comment_post_ID);
                            $is_reply = $comment->comment_parent > 0 ? 'reply' : '';
                    ?>
                        <div class="comment <?php echo $is_reply; ?>">
                            <div class="avatar"><?php echo $avatar; ?></div>
                            <div class="content">
                                <strong><?php echo esc_html($author); ?></strong>
                                <p><?php echo esc_html($excerpt); ?></p>
                                <a href="<?php echo esc_url($post_link); ?>">Xem bài viết</a>
                            </div>
                        </div>
                    <?php endforeach;
                    else :
                        echo '<p>Chưa có bình luận nào.</p>';
                    endif;
                    ?>
                </div>
            </div>
        </div> <!-- end .search-layout -->

        <!-- MODULE 15 - Latest News (Dưới cùng) -->
        <div class="latest-news-box">
            <h2>Latest News</h2>
            <?php
            $recent_posts = get_posts([
                'numberposts' => 3,
                'post_status' => 'publish'
            ]);
            if ($recent_posts) :
                foreach ($recent_posts as $post) :
            ?>
                <div class="news-item">
                    <div class="news-icon"></div>
                    <div class="news-content">
                        <div class="news-header">
                            <a href="<?php echo get_permalink($post->ID); ?>" class="news-title">
                                <?php echo esc_html($post->post_title); ?>
                            </a>
                            <span class="news-date"><?php echo get_the_date('d M, Y', $post->ID); ?></span>
                        </div>
                        <p class="news-excerpt">
                            <?php echo wp_trim_words(get_the_excerpt($post->ID), 20, '...'); ?>
                        </p>
                    </div>
                </div>
            <?php endforeach; endif; ?>
        </div>

    </div>
</section>

<?php get_footer(); ?>
i