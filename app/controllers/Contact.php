
<?php 

class Contact extends Controller
{

    public function __construct(){
        $this->demoModel = $this->model('Demo');
    }

    public function index()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data =[
                'name' => $this->clean($_POST['name']),
                'email' => $this->clean($_POST['email']),
                'message' => $this->clean($_POST['message']),
                'error_message' => '',
                'success_message' =>'',
            ];
             
            // 
            if($this->demoModel->contact($data))
            {
                $data['success_message'] = 'Your message has been submitted successfully';
            } 
            else {
                $data['error_message'] = 'Something went wrong';
            }

            // Load view
            $this->view('contact', $data);
        }
        else{
            $data =[    
                'name' =>   '',
                'email' =>  '',
                'message' => '',
                'error_message' => '',
                'success_message' =>'', 
            ];
            return $this->view('contact', $data);
        }
    }
}

?>