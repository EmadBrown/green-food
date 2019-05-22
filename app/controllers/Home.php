
<?php 

class Home extends Controller
{
    public function __construct()
    {
        $this->productModel = $this->model('Product');
    }

    public function index()
    {
        $data = ['products' => $this->productModel->fetchAllProducts()];
        return $this->view('home', $data);
    }

}

?>