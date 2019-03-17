
<div id="productStatus"></div>
<form id="productForm">
    <div class="form-group">
        <label for="wepProductName">Product Name</label>
        <input type="text" class="form-control" id="wepProductName" name="wepProductName" placeholder="Product name">
    </div>

    WEPRODUCT_DESCRIPTION_EDITOR

    <div class="form-group">
        <label for="weproductDetails">Product Details</label>
        <textarea class="form-control" id="wepProductDetails" name="wepProductDetails" rows="3" placeholder="Product details"></textarea>
    </div>

    <div class="form-group">
        <label for="wepProductType">Product Type</label>
        <select class="form-control" id="wepProductType" name="wepProductType">
        <option value ="1">1</option>
        <option value ="2">2</option>
        <option value ="3">3</option>
        <option value ="4">4</option>
        <option value ="5">5</option>
        </select>
    </div>

    <!--<div class="form-group">
        <div class="row">
            <label class="col-sm-4" for="wepProductCategory">Product Category</label>
            <div class="col-sm-8">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="wepProductCategory1" name="wepProductCategory[]" value="1" <?php echo $weproduct_data['category'] === "1" ? "checked" : '' ;?>>
                    <label class="form-check-label" for="wepProductCategory1">1</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="wepProductCategory2" name="wepProductCategory[]" value="2"  <?php echo $weproduct_data['category'] === "2" ? "checked" : '' ;?>>
                    <label class="form-check-label" for="wepProductCategory2">2</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="wepProductCategory3" name="wepProductCategory[]" value="3" <?php echo $weproduct_data['category'] === "3" ? "checked" : '' ;?>>
                    <label class="form-check-label" for="wepProductCategory3">3</label>
                </div>
            </div>
        </div>
    </div>-->

    <div class="form-group">
        <label for="wepProductImage">Product Image</label>
        <div class="input-group mb-3">
            <input type="text" class="form-control" id="wepProductImage" name="wepProductImage" placeholder="Product image">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button" id="js-wepProductImage"><?php _e('Upload', 'weproduct'); ?></button>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="wepProductPrice">Product Price</label>
        <input type="text" class="form-control" id="wepProductPrice" name="wepProductPrice" placeholder="Product price">
    </div>
    <div class="form-group">
        <label for="weproductSKU">Product SKU</label>
        <input type="text" class="form-control" id="wepProductSKU" name="wepProductSKU" placeholder="Product SKU">
    </div>
    
    <fieldset class="form-group">
        <div class="row">
        <legend class="col-form-label col-sm-4 pt-0">Product Stock</legend>
        <div class="col-sm-6">
            <div class="form-check">
            <label class="form-check-label" for="wepProductInStock">
                In Stock
                </label>
                <input class="form-check-input" type="radio" name="wepProductStock" id="wepProductInStock">
            </div>

            <div class="form-check">
            <label class="form-check-label" for="wepProductOutOfStock">
                Out of stock
                </label>
                <input class="form-check-input" type="radio" name="wepProductStock" id="wepProductOutOfStock">
            </div> 
        </div>
        </div>
    </fieldset>

    <div class="form-group form-check">
        <label class="form-check-label" for="wepFeaturedProduct">Featured Product</label>
        <input type="checkbox" class="form-check-input" id="wepFeaturedProduct" name="wepFeaturedProduct">
    </div>
    <input id ="submit" class="btn btn-dark" type="submit" value="Submit Submit product">
</form>