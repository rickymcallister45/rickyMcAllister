<?php
addCategory();

echo "<h1 class='page-header'>
        Product Categories
      </h1>
      <div class='col-md-4'>
        <form action='' method='post'>
          <div class='form-group'>
            <label for='category-title'>Title</label>
            <input name='category_title' type='text' class='form-control'>
          </div>
          <div class='form-group'>
            <input  name='add_category' type='submit' class='btn btn-primary' value='Add Category'>
          </div>      
        </form>
      </div>
      <div class='col-md-8'>
        <table class='table'>
          <thead>
            <tr>
              <th>id</th>
              <th>Title</th>
            </tr>
          </thead>
          <tbody>";
            
adminShowCategories();

    echo "</tbody>
        </table>
      </div>";
?>
