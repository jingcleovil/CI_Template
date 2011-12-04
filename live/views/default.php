<?php 
    $this->load->view('layout/header');
    if(isset($content)) echo $content;
    $this->load->view('layout/footer');
?>