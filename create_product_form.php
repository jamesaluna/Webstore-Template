<?php 
include_once 'Includes/dbh.inc.php';

?>

<form action="Includes/postproduct.inc.php" method='POST' class='create_product'>
<h2>Create Product</h2>
<div class='create_product_form_component'>
  <div class='create_product_form_image_wrap'>
    <object class='create_product_form_image'>
      <input type='file' onchange='uploadImage(this)' name='product_image' />
    </object>
  </div>
  <div class='create_product_form_info_wrap'>
    <div class='create_product_form'>
    <label>
    Product Name
      <div>
      <input type='text' name='product_name' class='create_product_form_input' size='large' />
      </div>
    </label>
    <label>
    Product Type
      <div>
      <input class='create_product_form_input' name='product_type' size='regular' />
      </div>
    </label>
    <label>
    Product Price
      <div>
      <input class='create_product_form_input' name='product_price' size='regular' />
      </div>
    </label>
    <label>
    Author
      <div>
      <input class='create_product_form_input' name='product_author' size='regular' />
      </div>
    </label>
    <label>
    Category
      <div>
      <input class='create_product_form_input' name='product_category' size='regular' />
      </div>
    </label>
    <label>
    Description
      <div>
      <textarea class='create_product_form_input' name='product_description' size='large'></textarea>
      </div>
    </label>
      </div>
    </div>
  </div>
  <button type='submit' name='submit' ><span>Publish</span></button>
</div>
</form>