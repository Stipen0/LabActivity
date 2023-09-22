<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            font-family:Verdana, Geneva, Tahoma, sans-serif;
        }
        label{
            font-size: x-large;
            font-family: 'Courier New', Courier, monospace;
        }
        .btn{
            font-size: x-large;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            border-radius: 10px;
        }
        fieldset{
            border-radius: 20px;
        }
        table{
            font-size: x-large;
            text-align: center;
            width: 100%;
        }
        ul{
            font-size: x-large;
        }
        select{
            font-size: 14.5px;
        }
    </style>
</head>
<body>
<fieldset>
        <legend><h1>Product Information</h1></legend>
    <form action="/save" method="post">
            <input type="hidden" name= "id" value="<?= isset($pro['id']) ? $pro['id'] : '' ?>"   >
            
            <label>Product Name</label>
            <input type="text" name= "ProductName" placeholder="Name" value="<?= isset($pro['ProductName']) ? $pro['ProductName'] : '' ?>"   >
            
            <label style="padding-left: 200px;">Product Description</label>
            <input type="text" name= "ProductDescription" placeholder="Description" value="<?= isset($pro['ProductDescription']) ? $pro['ProductDescription'] : '' ?>" >
            
            <label style="padding-left: 200px;">Product Category</label>
            <select name="ProductCategory" value="<?= isset($pro['ProductDescription']) ? $pro['ProductDescription'] : '' ?>">

            <option value="Electronics"<?= isset($pro['ProductCategory']) && $prod['ProductCategory'] === 'Electronics' ? 'selected' : '' ?>>Electronics</option>
            <option value="Pet Supplies"<?= isset($pro['ProductCategory']) && $prod['ProductCategory'] === 'Pet Supplies' ? 'selected' : '' ?>>Pet Supplies</option>
            <option value="Media"<?= isset($pro['ProductCategory']) && $prod['ProductCategory'] === 'Media' ? 'selected' : '' ?>>Media</option>
            <option value="Food and Beverage"<?= isset($pro['ProductCategory']) && $prod['ProductCategory'] === 'Food and Beverage' ? 'selected' : '' ?>>Food and Beverage</option>
            <option value="Health and Beauty"<?= isset($pro['ProductCategory']) && $prod['ProductCategory'] === 'Health and Beauty' ? 'selected' : '' ?>>Health and Beauty</option>
            <option value="Clothing and Accessories"<?= isset($prod['ProductCategory']) && $prod['ProductCategory'] === 'Clothing and Accessories' ? 'selected' : '' ?>>Clothing and Accessories</option>
            <option value="Home and Kitchen Appliances"<?= isset($prod['ProductCategory']) && $prod['ProductCategory'] === 'Home and Kitchen Appliances' ? 'selected' : '' ?>>Home and Kitchen Appliances</option>
            <option value="Auto Parts and Accessories"<?= isset($prod['ProductCategory']) && $prod['ProductCategory'] === 'Auto Parts and Accessories' ? 'selected' : '' ?>>Auto Parts and Accessories</option>
            <option value="Home Improvement"<?= isset($prod['ProductCategory']) && $prod['ProductCategory'] === 'Home Improvement' ? 'selected' : '' ?>>Home Improvement</option>
            <option value="Sporting Goods"<?= isset($prod['ProductCategory']) && $prod['ProductCategory'] === 'Sporting Goods' ? 'selected' : '' ?>>Sporting Goods</option>
            <option value="Personal Care"<?= isset($prod['ProductCategory']) && $prod['ProductCategory'] === 'Personal Care' ? 'selected' : '' ?>>Personal Care</option>
            <option value="Toys and Games"<?= isset($prod['ProductCategory']) && $prod['ProductCategory'] === 'Toys and Games' ? 'selected' : '' ?>>Toys and Games</option>

            </select>
            
            <label style="padding-left: 200px;">Product Quantity</label>
            <input type="number" name= "ProductQuantity" placeholder="Quantity" value="<?= isset($pro['ProductQuantity']) ? $pro['ProductQuantity'] : '' ?>" >
            
            <label style="padding-left: 200px;">Product Price</label>
            <input type="text" name= "ProductPrice" placeholder="Price" value="<?= isset($pro['ProductPrice']) ? $pro['ProductPrice'] : '' ?>" >
            <br>
            
            <input type="submit" value="submit">
        </form>
</fieldset>
    <h1>Products</h1>
    <table border ="1">
        <tr>
            <th>Product Name</th>
            <th>Product Description</th>
            <th>Product Category</th>
            <th>Product Quantity</th>
            <th>Product Price</th>
            <th>Controls</th>
        </tr>
        <?php foreach($product as $pr):?>
            <tr>
                <td><?= $pr ['ProductName'] ?></td>
                <td><?= $pr ['ProductDescription'] ?></td>
                <td><?= $pr ['ProductCategory'] ?></td>
                <td><?= $pr ['ProductQuantity'] ?></td>
                <td><?= $pr ['ProductPrice'] ?></td>
                <td><a href="/delete/<?= $pr['id'] ?>">Delete</a> || <a href="/edit/<?= $pr['id'] ?>">Update</a></td>
            </tr>
        
        <?php endforeach; ?>
    </table>
    <h1>Product List</h1>
<ul>
    <?php foreach($product as $pr):?>
        <li>
            <strong>Product Name:</strong> <?= $pr ['ProductName'] ?>
            <br>
            <strong>Product Description:</strong> <?= $pr ['ProductDescription'] ?>
            <br>
            <strong>Product Category:</strong> <?= $pr ['ProductCategory'] ?>
            <br>
            <strong>Product Quantity:</strong> <?= $pr ['ProductQuantity'] ?>
            <br>
            <strong>Product Price:</strong> <?= $pr ['ProductPrice'] ?>
        </li>
        <br>
    <?php endforeach; ?>
</ul>

</body>
</html>