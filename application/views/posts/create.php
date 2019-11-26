<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('posts/create'); ?> <!-- multipart utk bisa upload file -->
  <button type="submit" class="btn btn-primary" style="float: right">Submit</button><br>
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title"placeholder="Add title">
  </div>
  <div class="form-group">
    <label>Body</label>
    <textarea id="editor1" class="form-control" name="body" placeholder="Add Body"></textarea>
  </div>
  <div class="form-group">
  	<label>Category</label>
  	<select name="category_id" class="form-control">
  		<?php foreach($categories as $category): ?>
  			<option value="<?php echo $category['id']; ?>">
  				<?php echo $category['name']; ?>
  			</option>
  		<?php endforeach; ?>
  </div>
  <div class="form-group">
  	<label>
  		Upload Image
  	</label>
  	<input type="file" name="postimage" size="20">
  </div>
</form>