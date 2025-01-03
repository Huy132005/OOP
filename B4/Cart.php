<?php

class Cart
{
    private $items = [];

    public function addProduct(Product $product, $quantity = 1)
    {
        $productID = $product->getId();
        if (isset($this->items[$productID])) {
            $currentQuantity = $this->items[$productID]->getQuantity();
            $this->items[$productID]->setQuantity($currentQuantity + $quantity);
        } else {
            $this->items[$productID] = new CartItem($product, $quantity);
        }
    }
    public function removeProduct($productID)
    {
        if (isset($this->items[$productID])) {
            unset($this->items[$productID]);
        }
    }
    public function getTotal()
    {
        $total = 0;

        foreach ($this->items as $item) {
            $total += $item->getTotalPrice();
        }
        return $total;
    }
    public function displayCart()
    {
        foreach ($this->items as $item) {
            $product = $item->getProduct();

            echo $product->getName() . " - Giá sản phẩm: " . $product->getPrice() . " - So luong" . $item->getQuantity() . " - Thanh tien " . $item->getTotalPrice() . "VND\n";

        }
        echo "Tong tien: " . $this->getTotal() . "VND";
    }
}