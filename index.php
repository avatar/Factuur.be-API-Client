<?php

include "vendor/autoload.php";

use Factuur\FactuurAPI\FactuurAPI;

/**
 *        Methods
 *
 *    getProduct($id)
 *    getProducts($offset, $count)
 *    createProduct($data)
 *    updateProduct($id, $data)
 *    deleteProduct($id)
 *
 *    getClient($id)
 *    getClients($offset, $count)
 *    createClient($data)
 *    updateClient($id, $data)
 *    deleteClient($id)
 *
 *    getCategory($id)
 *    getCategories($offset, $count)
 *    createCategory($data)
 *    updateCategory($id, $data)
 *    deleteCategory($id)
 *
 *    getInvoice($id)
 *    getInvoices($offset, $count)
 *    createInvoice($data)
 *    deleteInvoice($id)
 *    payInvoice($id, $data)
 *    remindInvoice($id, $data)
 */

$api = new FactuurAPI();
$api->setToken('$2y$10$/Sk/XPF0xFcZL6Obxg9POeUcsAY9IdwBC'); //your account token
echo "<pre>";
print_r($api->getProduct('pr_2AZEaK2goW')); //your product id
echo "</pre>";
