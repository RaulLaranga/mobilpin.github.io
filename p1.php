<section id="container">
<ul class="ProductList">
<li data-product="30">
  <a href="https://store.margaretriverbeverages.com.au/cart.php?action=add&amp;product_id=32"
     class="tc_view_single_product">
  </a><a href="https://store.margaretriverbeverages.com.au/triple-g/"><img
      src="https://cdn1.bigcommerce.com/server4500/e9906/products/32/images/137/005-MRBCo-160223-JWyld__31586.1467359528.1125.1125.jpg?c=2"
      alt="Triple G"></a>
  <h3 class="tc_product_title"><?php
  $query = $connection->query('SELECT * FROM  model');

  while ($red = $query->fetch()) {
    echo $red['naziv'],"<br>",$red['marka'],"<br>";

  }
?></h3>

  <p class="tc_price"><?php
  $query = $connection->query('SELECT * FROM  model');

  while ($red = $query->fetch()) {
    echo $red['cena'],"<br>";

  }
?></p>
  <div class="ProductActionAdd">
      <a href="https://store.margaretriverbeverages.com.au/cart.php?action=add&amp;product_id=32"
         class="button icon-Add To Cart" title="Add To Cart">Add To Cart</a>
  </div>

</li>
<


</ul>
</section>
?>
