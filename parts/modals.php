<?php
$additions = db_select(
    from:'products',
    columns:"id,title,price, quantity",
    conditions:"is_option is TRUE and quantity > 0",
    order:"price" //от меньшего к большему
);
/*dd($additions);*/
?>
<!--<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#buy" data-bs-whatever="@mdo">Open modal for @mdo</button>-->
<div class="modal fade" id="buy" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="buy-form" action="/" method="POST">
        <input type="hidden" value="buy" name="type" />
          <div class="modal-header">
              <h5 class="modal-title text-center" id="exampleModalLabel">Window coffee</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
      <div class="modal-body">
        <div class="row product-block">
          <div class="col-4">Product</div>
            <div class="col-4">Price</div>
              <div class="col-4">Total</div>
        </div>
      <div class="col-4 product-name"><b></b></div>
            <div class="col-4 product-price"></div>
              <div class="col-4 product-total"></div>
      </div>

          <div class = "row">
            <div class="col-12">
            <label for="">Quantity</label>
                <input type ="hidden"name="product_id"class="product"/>
                <input type ="number"name="quantity"class="quantity-field form-control"min="1"value="1"
                />
                  <hr>
                  <h3>Addiditions:</h3>
            <?php foreach ($additions as $additions): ?>
                  <div class="form-check form-switch">
                    <input class="form-check-input additions-chek"
                    type="checkbox"
                    role="switch"
                    name="additions[]"
                    id="additions<?=$additions['id']?>"
                    value="<?=$additions['id']?>"
                    >
                      <label class="form-check-labefor="additions<?=$additions['id']?><?=$additions['title']?>
                      -<b class="price"><?=$additions['price']?></b><b>$</b>
                      -<b class="additions-total"></b>
                      </label>
                      <input type ="number"
                        class="form-control additions-qnty"
                        min="0"max="<?=['quantity']?>"
                        name="additions_qnty[]"disabled/>
                  </div>
            <?php endforeach;?>
            </div>
            <div class="cal-12 text-rigth">
                 Total: <b class="final-price"></b>
            </div>
          </div>
      </form>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>
