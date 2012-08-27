        <div id="createItem" class="mainContent">
                <?php echo form_open('listings/create'); ?>

<fieldset>
<?php if(isset($returnMessage)) echo $returnMessagel ?><br />
<?php echo validation_errors(); ?>

<label for='name'>Name</label>
<input type="text" name="name" value="<?php echo set_value('name'); ?>"  size='12'/> <br /> 

<label for='description'>Description</label>
<textarea name='description' height='30' width='100'>
</textarea><br />

<label for='categoryID'>Category</label> 
<select name='categoryID'>
	<?php foreach ($categories as $subCat): ?>
		<option value='<?=$subCat['id'];?>'><?=$subCat['name'];?></option>
	<?php endforeach ?>
</select><br />

<label for='price'>Price</label>
<input type='text' name='price' value='<?php echo set_value('description'); ?>' size='12' /><br />

<label for='currency'>Currency</label>
<select name='currency'>
	<?php foreach ($currencies as $currency): ?>
		<option value='<?=$currency['id'];?>'><?=$currency['name'];?> (<?=$currency['symbol'];?>)</option>
	<?php endforeach ?>
</select><br />

<br />
<label for='submit'><input type="submit" value="Submit" /></label>
</fieldset>
</form>
</div>

