<?php include '../view/header.php'; ?>
<main>
    <h1>Category List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>&nbsp;</th>
        </tr>        
        
        <?php foreach ($categories as $category) : ?> 
         <tr>
            <td><?php echo $category['categoryName']; ?></td>

            <td>
                <form action="." method="post">
                    <input type="hidden" name="category_id" value="<?php echo $category['categoryID']; ?>">
                    <input type="submit" value="Delete">
                    <input type="hidden" name="action" value="delete_category">
                </form>
            </td>
         </tr>
         <?php endforeach; ?>
    </table>

    <h2>Add Category</h2>
    <form action="." method="post">
        <label for="category_name">Name:</label>
        <input type="text" id="category_name" name="category_name">
        <input type="submit" value="Add">
        <input type="hidden" name="action" value="list_categories">
    </form>

    <p><a href="index.php?action=list_products">List Products</a></p>

</main>
<?php include '../view/footer.php'; ?>
