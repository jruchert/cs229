<?php
    // get the data from the form
       $product_description = $_POST['product_description'];
       $list_price = $_POST['list_price'];
       $discount_percent = $_POST['discount_percent'];
       
       // calculate the discount
       $discount = $list_price * $discount_percent * .01;
       $discount_price = $list_price - $discount;