<?php include ('inc/header.php') ?>

<form method="post" action="create.php">
    <div class="form-group">
        <label>Topic Title</label>
        <input type="text" class="form-control" name="title" placeholder="Enter Post Title">
    </div>
    <div class="form-group">
        <label>Category</label>
        <select class="form-control" name="category">
            <?php foreach (getCategories() as $category) : ?>
                <option value="<?php echo $category->id ?>"><?php echo $category->name ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label>Topic Body</label>
        <textarea name="body" class="form-control" id="body" cols="80" rows="10"></textarea>
        <script>CKEDITOR.replace( 'body', {
                extraPlugins: 'easyimage',
                removePlugins: 'image',
                cloudServices_tokenUrl: 'https://example.com/cs-token-endpoint',
                cloudServices_uploadUrl: 'https://your-organization-id.cke-cs.com/easyimage/upload/'
            } );</script>
    </div>
    <button type="submit" name="do_create" class="btn btn-default">Submit</button>
</form>

<?php include ('inc/footer.php') ?>
