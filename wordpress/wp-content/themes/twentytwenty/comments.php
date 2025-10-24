<?php
/**
 * Custom Comment Template (Group C)
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

/* Nếu bài viết có mật khẩu mà chưa nhập thì không hiển thị comment */
if (post_password_required()) {
    return;
}
?>

<style>
/* ===============================
   CUSTOM COMMENT AREA
   =============================== */
.comment-area {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 3px 10px rgba(0,0,0,0.05);
    max-width: 800px;
    margin: 60px auto;
    padding: 25px 35px;
    font-family: "Segoe UI", sans-serif;
}

.comment-area h3 {
    font-size: 20px;
    font-weight: 600;
    color: #333;
    margin-bottom: 15px;
}

.comment-form textarea {
    width: 100%;
    border: 1px solid #ccc;
    border-radius: 6px;
    padding: 12px;
    font-size: 15px;
    resize: none;
    height: 120px;
    background: #fafafa;
    transition: all 0.2s ease;
}

.comment-form textarea:focus {
    background: #fff;
    border-color: #007bff;
    outline: none;
}

.comment-form input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 25px;
    border-radius: 6px;
    font-size: 15px;
    cursor: pointer;
    margin-top: 10px;
}

.comment-form input[type="submit"]:hover {
    background-color: #0056b3;
}

/* Nếu chưa đăng nhập */
.comment-login-message {
    text-align: center;
    font-size: 16px;
    color: #777;
    padding: 40px;
    background: #fafafa;
    border-radius: 8px;
    margin: 40px auto;
    border: 1px dashed #ccc;
}

/* Danh sách bình luận */
.comment-list {
    list-style: none;
    padding: 0;
    margin-top: 40px;
}

.comment-list li {
    border-bottom: 1px solid #eee;
    padding: 15px 0;
}

.comment-author {
    font-weight: 600;
    color: #333;
}

.comment-metadata {
    font-size: 13px;
    color: #777;
}
</style>

<div class="comment-area">
    <?php if (have_comments()) : ?>
        <h3><?php echo get_comments_number(); ?> Comments</h3>
        <ul class="comment-list">
            <?php
            wp_list_comments([
                'style' => 'ul',
                'avatar_size' => 50,
                'short_ping' => true,
            ]);
            ?>
        </ul>
    <?php endif; ?>

    <?php if (comments_open()) : ?>
        <?php if (is_user_logged_in()) : ?>
            <h3>Make a Post</h3>
            <form action="<?php echo site_url('/wp-comments-post.php'); ?>" method="post" class="comment-form">
                <textarea name="comment" placeholder="What are you thinking..."></textarea>
                <input type="hidden" name="comment_post_ID" value="<?php echo get_the_ID(); ?>" id="comment_post_ID">
                <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                <input type="submit" name="submit" value="Share">
            </form>
        <?php else : ?>
            <div class="comment-login-message">
                🚫 You must <a href="<?php echo wp_login_url(get_permalink()); ?>">log in</a> to post a comment.
            </div>
        <?php endif; ?>
    <?php else : ?>
        <div class="comment-login-message">
            Comments are closed.
        </div>
    <?php endif; ?>
</div>
