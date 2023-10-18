<html>
    <head>
        <?php $this->load->view('include/header_other')?>
    </head>
    <body>
        <?php $this->load->view('site/home_content')?>

        <?php $this->load->view('include/footer_other', array(
            'name' => $name,
            'email_footer' => $email
        ))?>
    </body>
</html>