<?php

// interface
// crud => create read update delete
interface crud {
    function create();
    function read();
    function update($id);
    function delete($id);
}

interface data {
    function export();
    function import();
}
# php single inheritance , multiple implements
class products implements crud,data{
    public function create()
    {
       echo "create product";
    }
    public function read()
    {
       echo "read product";
    }
    public function update($id)
    {
       echo "update product";
    }
    public function delete($id)
    {
       echo "delete product";
    }

    public function import()
    {
       echo "import product";
    }
    public function export()
    {
       echo "export product";
    }
}
$product = new products;
$product->create();
class users implements crud,data {
    public function create()
    {
       echo "create users";
    }
    public function read()
    {
       echo "read users";
    }
    public function update($id)
    {
       echo "update users";
    }
    public function delete($id)
    {
       echo "delete users";
    }
    public function import()
    {
       echo "import users";
    }
    public function export()
    {
       echo "export users";
    }
}
$users = new users;
$users->create();