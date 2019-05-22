
<?php 

class Event extends Controller
{
    public function __construct()
    {
        $this->blogModel = $this->model('Blog');
    }

    public function index()
    {
        $data = ['blogs' => $this->blogModel->fetchAllBlogs()];
        return $this->view('blog/index', $data);
    }

    public function blog()
    {
        $slug = $_GET['slug'];
        $data = ['blog' => $this->blogModel->getSingleBlog($slug)];
        return $this->view('/blog/blog', $data );
    } 
    
}

?>