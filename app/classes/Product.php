<?php


namespace App\classes;


class Product
{
    protected $products = [];
    public function getAllProduct()
    {
        return [
            0 => [
                'id'  =>  '1',
                'name'  =>  'T-shirt',
                'category'  =>  'Man Fashion',
                'brand'  =>  'Yellow',
                'price'  =>  '3500',
                'description'  =>  'A dress shirt, button shirt, button-front, button-front shirt, or button-up shirt, is a garment with a collar and a full-length opening at the front, which is fastened using buttons or shirt studs. ',
                'image'  =>  's4.jpg',
            ],
            1 => [
                'id'  =>  '2',
                'name'  =>  'smart watch',
                'category'  =>  'Electronic',
                'brand'  =>  'Yellow',
                'price'  =>  '12000',
                'description'  =>  'Fitbit Sense Smart Watch with 6+ Day Battery Life, Fast Charging, Carbon/Graphite',
                'image'  =>  'x1.jpg',
            ],
            2 => [
                'id'  =>  '3',
                'name'  =>  'key ring',
                'category'  =>  'Fashion',
                'brand'  =>  'casio',
                'price'  =>  '500',
                'description'  =>  'New products doll pendant 3D acrylic keychain accessories squid game keychain',
                'image'  =>  'x2.jpg',
            ],
            3 => [
                'id'  =>  '4',
                'name'  =>  'Electronic',
                'category'  =>  'remot',
                'brand'  =>  'Yellow',
                'price'  =>  '3500',
                'description'  =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad animi aut dicta doloribus exercitationem expedita impedit in iusto minus, mollitia nisi officia omnis optio perspiciatis quo ratione reiciendis, rerum!',
                'image'  =>  'x4.jpg',
            ],
        ];
    }

    public function getAllProductById($id)
    {
        $this->products = $this->getAllProduct();
        foreach ($this->products as $product)
        {
            if ($product['id'] ==$id)
            {
                return $product;
            }
        }
    }

}