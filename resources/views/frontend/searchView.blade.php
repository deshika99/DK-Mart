@extends ('frontend.master')

@section('content')

<div class="container">
    <?php if (count($products) > 0): ?>
        <h2><?php echo $products[0]->product_name; ?></h2>
    <?php else: ?>
        <h4 style="margin-top:30px;">No products found</h4>
    <?php endif; ?>

    <?php if (count($products) == 0): ?>
        <p>No products found for your search.</p>
    <?php else: ?>
        <?php foreach ($products as $product): ?>
            <div class="product-item">
                <h2><?php echo $product->product_name; ?></h2>
                
                <div>
                    <p><strong>Product ID:</strong> <?php echo $product->product_id; ?></p>
                    <p><strong>Description:</strong> <?php echo isset($product->product_description) ? $product->product_description : 'No description available'; ?></p>
                    <p><strong>Category ID:</strong> <?php echo $product->category_id; ?></p>
                    <p><strong>Subcategory ID:</strong> <?php echo isset($product->subcategory_id) ? $product->subcategory_id : 'N/A'; ?></p>
                    <p><strong>Sub-subcategory ID:</strong> <?php echo isset($product->sub_subcategory_id) ? $product->sub_subcategory_id : 'N/A'; ?></p>
                    <p><strong>Quantity:</strong> <?php echo isset($product->quantity) ? $product->quantity : 'N/A'; ?></p>
                    <p><strong>Tags:</strong> <?php echo isset($product->tags) ? $product->tags : 'No tags available'; ?></p>
                    <p><strong>Normal Price:</strong> $<?php echo number_format($product->normal_price, 2); ?></p>

                    <?php if ($product->is_affiliate): ?>
                        <p><strong>Affiliate Price:</strong> $<?php echo number_format($product->affiliate_price, 2); ?></p>
                        <p><strong>Commission Percentage:</strong> <?php echo $product->commission_percentage; ?>%</p>
                    <?php endif; ?>

                    <p><strong>Total Price:</strong> $<?php echo number_format($product->total_price, 2); ?></p>
                </div>
            </div>
            <hr>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

@endsection