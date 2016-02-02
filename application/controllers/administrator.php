<?php

class Administrator extends CI_Controller {

    public function __construct() {
        parent::__construct();
        header('Cache-Control: no-cache, no-store, must-revalidate');
    }

    public function index() {
        $this->load->view('administrator/login');
    }

    public function validate() {
        if ($this->input->post('username')) {
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));

            $this->db->select("*")
                    ->from("admin")
                    ->where("username", $username)
                    ->where("password", $password)
                    ->limit(1);
            $query = $this->db->get();
//            print_r($query->num_rows());
            if ($query->num_rows() > 0) {
//                echo 'yes';
                $data = $query->result();
//                echo "<pre>";
//                print_r($data);
                $this->session->set_userdata('admin', $data[0]->id);
                redirect('administrator/home');
//                echo $this->session->userdata('admin');
            } else {
                $this->session->set_flashdata('status', 'Username/Password is Incorrect');
                redirect('administrator');
            }
        } else {
            $this->session->set_flashdata('status', 'Username/Password is Incorrect');
            redirect('administrator');
        }
        //$this->load->view('administrator/login');
    }

    public function checkSession() {
        if (!$this->session->userdata('admin')) {
            $this->session->set_flashdata('status', 'Please Login');
            redirect('administrator');
        }
    }

    public function home() {
        $this->checkSession();
        $this->load->view('administrator/home');
		
    }
   public function donations()
   {
	   $this->checkSession();
	   if ($this->input->post('id')) {
//            print_r($_REQUEST);
            $id = $this->input->post('id');
            $sql = " SELECT * FROM `donate` WHERE id=$id";
            $sql = mysql_query($sql);
            $data = mysql_fetch_array($sql);
//            print_r($data);
//            exit;

            
            $sql = "DELETE FROM donate where id= $id";
            mysql_query($sql);
            $this->session->set_flashdata('status', 'Donations deleted');
            redirect('administrator/donations');
        }

	   
	   
	   
	   
	   $this->load->view('administrator/donations');
	   
   }
    public function logout() {
        $this->session->sess_destroy();
        redirect('administrator');
    }
	
    public function gallery() {
        $this->checkSession();
//        echo "<pre>";
//print_r($_FILES['file']);
        if (isset($_FILES['file']['error'])) {
            //  upload file
//            echo "<pre>";
//            print_r($_FILES['file']);
//            exit;
//            
            if ($_FILES['file']['error'] > 0) {
                $this->session->set_flashdata('status', 'Image Error');
                redirect('administrator/gallery');
            } else {
                $imageName = time() . rand() . $_FILES['file']['name'];
                move_uploaded_file($_FILES['file']['tmp_name'], 'gallery/' . $imageName);

                $sql = "INSERT INTO `gallery` (`id`, `img_path`) VALUES  (NULL, '$imageName');";
                mysql_query($sql);
                $this->session->set_flashdata('status', 'Image Uploaded Successfully');
                redirect('administrator/gallery');
            }
        }

        if ($this->input->post('id')) {
//            print_r($_REQUEST);
            $id = $this->input->post('id');
            $sql = " SELECT * FROM `gallery` WHERE id=$id";
            $sql = mysql_query($sql);
            $data = mysql_fetch_array($sql);
            unlink('gallery/' . $data['img_name']);
            $sql = "DELETE FROM gallery where id= $id";
            mysql_query($sql);
            $this->session->set_flashdata('status', 'Image Deleted');
            redirect('administrator/gallery');
        }

        $this->load->view('administrator/gallery');
    }

    public function news() {
        $this->checkSession();
        if ($this->input->post('title')) {

            if ($_FILES['file']['error'] > 0) {
                $imageName = '';
            } else {
                $imageName = time() . rand() . $_FILES['file']['name'];
                move_uploaded_file($_FILES['file']['tmp_name'], 'news/' . $imageName);
            }

            $title = mysql_real_escape_string($this->input->post('title'));
            $body = mysql_real_escape_string($this->input->post('body'));
            $sql = "INSERT INTO `news` (`id`, `title`, `body`, `img_path`) VALUES (NULL, '$title', '$body', '$imageName');";
            mysql_query($sql);
//            exit;
            $this->session->set_flashdata('status', 'News Added Successfully');
            redirect('administrator/news');
        }

        if ($this->input->post('id')) {
//            print_r($_REQUEST);
            $id = $this->input->post('id');
            $sql = " SELECT * FROM `news` WHERE id=$id";
            $sql = mysql_query($sql);
            $data = mysql_fetch_array($sql);
//            print_r($data);
//            exit;

            unlink('news/' . $data['img_path']);
            $sql = "DELETE FROM news where id= $id";
            mysql_query($sql);
            $this->session->set_flashdata('status', 'News Deleted');
            redirect('administrator/news');
        }


        $this->load->view('administrator/news');
    }
	public function careers (){
		 $this->checkSession();
		if ($this->input->post('id')) {
//            print_r($_REQUEST);
            $id = $this->input->post('id');
            $sql = " SELECT * FROM `jobs` WHERE id=$id";
            $sql = mysql_query($sql);
            $data = mysql_fetch_array($sql);
//           print_r($data);
//            exit;

            //unlink('news/' . $data['img_path']);
            $sql = "DELETE FROM jobs where id= $id";
//			echo $sql;
            mysql_query($sql);
            $this->session->set_flashdata('status', 'Job Deleted');
            redirect('administrator/careers');
        }
		$this->load->view('administrator/careers');
	}
	public function applicants() {
			$this->checkSession();
			$this->load->view('administrator/applicants');
		}

}
