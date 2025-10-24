<?php
/**
 * Custom Single Post Template (No Image - Clean News Style)
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 */

get_header();
?>

<style>
/* ===============================
   SINGLE POST PAGE - CLEAN STYLE
   =============================== */
.single-layout {
    background-color: #f5f6fa;
    padding: 70px 0;
    font-family: "Segoe UI", sans-serif;
}

/* Card tổng */
.post-box {
    background: #fff;
    border-radius: 18px;
    box-shadow: 0 5px 25px rgba(0, 0, 0, 0.05);
    padding: 40px;
}

/* ===============================
   BÀI VIẾT CHÍNH (Không có ảnh)
   =============================== */
.news-card {
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.08);
    padding: 30px 35px;
    margin-bottom: 40px;
    position: relative;
}

/* Ô ngày tròn vàng */
.news-card .date-circle {
    position: absolute;
    top: 20px;
    right: 25px;
    background: #ffdf63;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    color: #222;
    font-weight: bold;
    text-align: center;
    line-height: 1.2;
    box-shadow: 0 3px 6px rgba(0,0,0,0.15);
    border: 2px solid #fff;
}
.news-card .date-circle .day {
    font-size: 18px;
    margin-top: 8px;
}
.news-card .date-circle .month {
    font-size: 11px;
    text-transform: uppercase;
}

/* Tiêu đề */
.news-card h1 {
    font-size: 24px;
    font-weight: 700;
    color: #1a1a1a;
    margin-bottom: 15px;
    padding-right: 80px; /* chừa khoảng trống cho ô ngày */
}

/* Meta */
.news-card .meta {
    font-size: 14px;
    color: #777;
    margin-bottom: 15px;
}

/* Nội dung */
.news-card .text {
    font-size: 16px;
    color: #333;
    line-height: 1.8;
}
.news-card .text p {
    margin-bottom: 15px;
}
.news-card .text em {
    color: #666;
}

/* Nguồn */
.news-card .source {
    text-align: right;
    font-style: italic;
    color: #555;
    font-size: 14px;
    margin-top: 10px;
}

/* ===============================
   SIDEBAR TRÁI
   =============================== */
.sidebar-left {
    background: #ffffff;
    border-radius: 10px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.05);
    padding: 20px;
}
.sidebar-left h5 {
    font-weight: bold;
    text-transform: uppercase;
    margin-bottom: 15px;
    color: #007bff;
    font-size: 1.1rem;
    border-bottom: 2px solid #007bff;
    padding-bottom: 8px;
}

/* ===============================
   CATEGORIES STYLING
   =============================== */
.categories-list {
    margin-bottom: 15px;
}

.category-item {
    margin-bottom: 8px;
    transition: all 0.3s ease;
}

.category-item:hover {
    transform: translateX(5px);
}

.category-link {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 12px;
    background: #f8f9fa;
    border-radius: 6px;
    text-decoration: none;
    color: #333;
    transition: all 0.3s ease;
    border-left: 3px solid #007bff;
}

.category-link:hover {
    background: #e3f2fd;
    color: #007bff;
    text-decoration: none;
    box-shadow: 0 2px 8px rgba(0,123,255,0.15);
}

.category-name {
    font-weight: 500;
    font-size: 0.9rem;
}

.category-count {
    background: #007bff;
    color: white;
    padding: 2px 8px;
    border-radius: 12px;
    font-size: 0.75rem;
    font-weight: 600;
    min-width: 25px;
    text-align: center;
}

.category-link:hover .category-count {
    background: #0056b3;
}

/* Button styling */
.btn-outline-primary {
    border-color: #007bff;
    color: #007bff;
    font-size: 0.8rem;
    padding: 6px 12px;
    border-radius: 20px;
    transition: all 0.3s ease;
}

.btn-outline-primary:hover {
    background: #007bff;
    border-color: #007bff;
    color: white;
    transform: translateY(-1px);
}

/* ===============================
   SIDEBAR PHẢI
   =============================== */
.sidebar-right {
    background: #007bff;
    border-radius: 10px;
    color: #fff;
    padding: 20px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}
.sidebar-right h5 {
    font-weight: bold;
    text-transform: uppercase;
    margin-bottom: 15px;
}
.sidebar-right a {
    color: #fff;
    text-decoration: none;
    font-weight: 500;
}
.sidebar-right a:hover {
    text-decoration: underline;
    color: #ffe97f;
}

/* ===============================
   PREV / NEXT POSTS
   =============================== */
.custom-prev-next {
    margin-top: 50px;
    padding-top: 25px;
    border-top: 1px solid #eee;
}
.date-box {
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 6px;
    width: 55px;
    height: 55px;
    text-align: center;
    line-height: 1.2;
    display: flex;
    flex-direction: column;
    justify-content: center;
    font-weight: bold;
    font-size: 15px;
    box-shadow: 0 1px 4px rgba(0,0,0,0.05);
}
.date-box span {
    font-size: 11px;
    color: #888;
}
.title-link {
    text-decoration: none;
    font-size: 16px;
    color: #222;
    font-weight: 500;
}
.title-link:hover {
    color: #007bff;
    text-decoration: underline;
}

/* ===============================
   COMMENT SECTION
   =============================== */
.comment-section {
    margin-top: 60px;
    padding-top: 30px;
    border-top: 1px solid #eee;
}
.comment-section h3 {
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 15px;
}

/* ===============================
   RESPONSIVE DESIGN
   =============================== */
@media (max-width: 768px) {
    .sidebar-left {
        margin-bottom: 20px;
    }
    
    .category-link {
        padding: 8px 10px;
    }
    
    .category-name {
        font-size: 0.85rem;
    }
    
    .category-count {
        font-size: 0.7rem;
        padding: 1px 6px;
    }
}

@media (max-width: 576px) {
    .categories-list {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 8px;
    }
    
    .category-item {
        margin-bottom: 0;
    }
    
    .category-link {
        flex-direction: column;
        text-align: center;
        padding: 8px;
    }
    
    .category-count {
        margin-top: 4px;
    }
}
</style>

<section class="single-layout">
    <div class="container">
        <div class="row gy-4">

            <!-- SIDEBAR TRÁI -->
            <div class="col-md-3">
                <div class="sidebar-left">
                    <h5>Categories</h5>
                    <?php 
                    $categories = get_categories(array(
                        'orderby' => 'count',
                        'order' => 'DESC',
                        'number' => 8,
                        'hide_empty' => true
                    ));
                    
                    if (!empty($categories)) : ?>
                        <div class="categories-list">
                            <?php foreach ($categories as $category) : 
                                $post_count = $category->count;
                                $category_link = get_category_link($category->term_id);
                            ?>
                                <div class="category-item">
                                    <a href="<?php echo esc_url($category_link); ?>" class="category-link">
                                        <span class="category-name"><?php echo esc_html($category->name); ?></span>
                                        <span class="category-count">(<?php echo $post_count; ?>)</span>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        
                        <!-- View All Categories Button -->
                        <div class="text-center mt-3">
                            <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="btn btn-outline-primary btn-sm">
                                Xem tất cả
                            </a>
                        </div>
                    <?php else : ?>
                        <p class="text-muted">Chưa có danh mục nào.</p>
                    <?php endif; ?>
                </div>
            </div>

            <!-- NỘI DUNG CHÍNH -->
            <div class="col-md-6">
                <div class="post-box">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <?php 
                            $day = get_the_date('d');
                            $month = strtoupper(date_i18n('M', strtotime(get_the_date('Y-m-d'))));
                        ?>

                        <div class="news-card">
                            <div class="date-circle">
                                <div class="day"><?php echo esc_html($day); ?></div>
                                <div class="month"><?php echo esc_html($month); ?></div>
                            </div>

                            <h1><?php the_title(); ?></h1>
                            <div class="meta">
                                Đăng ngày: <?php echo get_the_date('d/m/Y'); ?> | 
                                Tác giả: <?php the_author(); ?>
                            </div>

                            <div class="text">
                                <?php the_content(); ?>
                            </div>

                            <div class="source">(Theo <?php echo get_bloginfo('name'); ?>)</div>
                        </div>

                        <!-- PREV / NEXT POSTS -->
                        <div class="custom-prev-next">
                            <?php
                            $prev_post = get_previous_post();
                            $next_post = get_next_post();
                            ?>
                            <?php if ($prev_post): ?>
                                <div class="d-flex align-items-center mb-4">
                                    <div class="date-box me-3">
                                        <strong><?php echo get_the_date('d', $prev_post); ?></strong>
                                        <span><?php echo get_the_date('m', $prev_post); ?></span>
                                    </div>
                                    <a href="<?php echo get_permalink($prev_post); ?>" class="title-link">
                                        <?php echo get_the_title($prev_post); ?>
                                    </a>
                                </div>
                            <?php endif; ?>

                            <?php if ($next_post): ?>
                                <div class="d-flex align-items-center">
                                    <div class="date-box me-3">
                                        <strong><?php echo get_the_date('d', $next_post); ?></strong>
                                        <span><?php echo get_the_date('m', $next_post); ?></span>
                                    </div>
                                    <a href="<?php echo get_permalink($next_post); ?>" class="title-link">
                                        <?php echo get_the_title($next_post); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>

                        <!-- COMMENT SECTION -->
                        <div class="comment-section">
                            <?php comments_template(); ?>
                        </div>

                    <?php endwhile; endif; ?>
                </div>
            </div>

            <!-- SIDEBAR PHẢI -->
            <div class="col-md-3">
                <div class="sidebar-right">
                    <h5>Recent Posts</h5>
                    <?php
                    $recent_posts = wp_get_recent_posts(array(
                        'numberposts' => 3,
                        'post_status' => 'publish'
                    ));
                    if (!empty($recent_posts)) :
                        foreach ($recent_posts as $post) : ?>
                            <div class="d-flex align-items-center border-bottom border-light pb-2 mb-2">
                                <div class="recent-date text-center me-3 bg-light text-dark rounded px-2 py-1">
                                    <strong><?php echo get_the_date('d', $post['ID']); ?></strong><br>
                                    <small><?php echo get_the_date('m', $post['ID']); ?></small>
                                </div>
                                <a href="<?php echo get_permalink($post['ID']); ?>" class="flex-grow-1">
                                    <?php echo esc_html($post['post_title']); ?>
                                </a>
                            </div>
                        <?php endforeach; ?>
                        <div class="text-center mt-3">
                            <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="btn btn-light btn-sm text-uppercase fw-bold">
                                Xem tất cả tin tức
                            </a>
                        </div>
                    <?php else : ?>
                        <p>Chưa có bài viết nào.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
