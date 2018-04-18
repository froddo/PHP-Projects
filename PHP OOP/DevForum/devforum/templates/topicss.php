<?php include ('inc/header.php') ?>
<ul id="topics">
    <li id="main-topic" class="topic topic">
        <div class="row">
            <div class="col-md-2">
                <div class="user-info">
                    <img class="avatar pull-left" src="<?php echo BASE_URI; ?>img/avatars/<?php echo $topic->avatar; ?>" />
                    <ul>
                        <li><strong><?php echo $topic->username; ?></strong></li>
                        <li><?php echo userPostCount($topic->user_id); ?>Posts</li>
                        <li><a href="<?php echo BASE_URI; ?>topics.php?user=<?php echo $topic->user_id; ?>">View Topic</a>
                    </ul>
                </div>
            </div>
            <div class="col-md-10">
                <div class="topic-content pull-right">
                    <?php echo $topic->body; ?>
                </div>
            </div>
        </div>
    </li>

    <?php foreach ($replies as $reply) : ?>
    <li class="topic topic">
        <div class="row">
            <div class="col-md-2">
                <div class="user-info">
                    <img class="avatar pull-left" src="<?php echo BASE_URI; ?>img/avatars/<?php echo $reply->avatar; ?>" />
                    <ul>
                        <li><strong><?php echo $reply->username; ?></strong></li>
                        <li><?php echo userPostCount($reply->user_id); ?>Posts</li>
                        <li><a href="<?php echo BASE_URI; ?>topics.php?user=<?php echo $reply->user_id; ?>">View Topic</a>
                    </ul>
                </div>
            </div>
            <div class="col-md-10">
                <div class="topic-content pull-right">
                    <?php echo $reply->body; ?>
                </div>
            </div>
        </div>
    </li>
    <?php endforeach; ?>
</ul>
<h3>Reply To Topic</h3>
<?php if(isLoggedIn()) : ?>
<form role="form" method="post" action="topic.php?id=<?php echo $topic->id; ?>">

    <div class="form-group">
        <input type="hidden" name="hidden" value="<?php echo $topic->id; ?>">
        <textarea name="body" id="reply" class="form-control" cols="80" rows="10"></textarea>
        <script>CKEDITOR.replace( 'reply', {
                extraPlugins: 'easyimage',
                removePlugins: 'image',
                cloudServices_tokenUrl: 'https://example.com/cs-token-endpoint',
                cloudServices_uploadUrl: 'https://your-organization-id.cke-cs.com/easyimage/upload/'
            } );</script>
    </div>
    <input type="submit" name="do_reply" class="btn btn-default" value="Submit">
</form>
<?php else: ?>
<p>Please login to reply</p>
<?php endif; ?>
<?php include ('inc/footer.php') ?>
