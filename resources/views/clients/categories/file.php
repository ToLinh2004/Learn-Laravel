<h1>Upload file</h1>
<form method="POST" action="<?php echo route('categories.upload');?>"enctype="multipart/formdata">
    <div>
        <input type="file" name="photo"id="">
    </div>
    <?php echo csrf_field(); ?>
    <?php echo csrf_token();?>
    <button type="submit">upload</button>

</form>