<?php
class Learnhelpers extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper(array('array', 'string', 'form'));
        $this->load->library('session');
    }

    public function my_custom_helper() {
        $this->load->helper("app");
        echo get_string_length("Hello, World!");
    }

    public function my_call_inflector() {
        $this->load->helper("inflector");

        $singular_word = "Mouse";
        echo plural($singular_word);
    }

    public function my_working_directory() {
        $this->load->helper('download');

        $download_path = "./files/client_side_data.xlsx";

        $file_name = "welcome.txt";
        $data = "Welcome. I want to play a game.";
        force_download($file_name, $data);

        /*
        if (file_exists($download_path)) {
            force_download($download_path, null);
        }
        
        $directory_path = "./application";
        $all_dirs = directory_map($directory_path, FALSE, TRUE);

        echo "<pre />";
        print_r($all_dirs);
        */
    }

    public function my_file_helper() {
        $this->load->helper("file");
        $file_path = "./files/";

        //$all_files  = get_dir_file_info("./application/config");
        $all_files  = get_file_info("./application/config/config.php");
        echo "<pre />";
        print_r($all_files);
        //Read file
        //$file_contents = file_get_contents($file_path);

        //print_r($file_contents);
        //$updated_content = "Hey, this is the NEW NEW text! HAHAH!";
        //$write_status = write_file($file_path, $updated_content);

        //echo $write_status;

        //echo delete_files($file_path);
    }

    public function my_captcha_form() {
        $this->load->helper('captcha');
        $config = array(
            'img_path'      => 'captcha_images/',
            'img_url'       => base_url() . 'captcha_images/',
            'font_path'     => 'system/fonts/texb.ttf',
            'img_width'     => '180',
            'img_height'    => 90,
            'word_length'   => 8,
            'font_size'     => 18,
        );

        $cap = create_captcha($config);

        $this->session->set_userdata("code", $cap['word']);

        $data['cap_img'] = $cap['image'];
        $this->load->view('my_captcha_form', $data);
    }

    public function my_captcha_form_submit() {
        $form_code = $this->input->post('txt_code');
        $saved_value = $this->session->userdata('code');
        if ($form_code == $saved_value) {
            echo "Captcha Validated!";
        } else {
            echo "Captcha Mismatched...";
        }
    }

    public function my_form() {
        $this->load->view("myform");
    }

    public function learn_captcha() {
        $this->load->helper('captcha');
        $config = array(
            'img_path'      => 'captcha_images/',
            'img_url'       => base_url() . 'captcha_images/',
            'font_path'     => 'system/fonts/texb.ttf',
            'img_width'     => '260',
            'img_height'    => 150,
            'word_length'   => 12,
            'font_size'     => 18,
        );

        $cap = create_captcha($config);
        $data['cap_img'] = $cap['image'];
        $this->load->view("show_captcha", $data);
    }

    public function string_helper() {
        $str = random_string('alnum', 25);
        print_r($str);
        echo "<br/>";
        $string = 'file_1'; //file_2, file_3, ... etc.
        echo ($string = increment_string($string)) . "<br/>";
        echo ($string = increment_string($string)) . "<br/>";

        $arr = array_map(function ($x) {
            return $x;
        }, range(0, 9));

        for ($i = 0; $i < 10; $i++) {
            echo alternator($arr[0], $arr[1], $arr[2]);
            echo "<br/>";
        }
    }

    public function helper_class() {
        //element => array helper method
        $std_arr = array(
            'name' => 'Funcy Stoat',
            'email' => 'funcy.stoat@gmail.com',
            'roll_no' => 21,
            'phone_no' => 6665554231
        );
        //echo element('roll_no', $std_arr);
        //$data = elements(array('roll_no', 'email'), $std_arr);

        $data  = random_element($std_arr);
        print_r($data);
    }
}
