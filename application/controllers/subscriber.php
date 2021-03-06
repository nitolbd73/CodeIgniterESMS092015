<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Subscriber extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('Datatables');
        $this->load->library('table');
        $this->load->database();
		
    }
    function index()
    {

        //set table id in table open tag
        $tmpl = array ( 'table_open'  => '<table id="big_table" border="1" cellpadding="2" cellspacing="1" class="mytable">' );
        $this->table->set_template($tmpl); 
        
        $this->table->set_heading('Number','Name','Parent Name','Address','Phone Number');

        $this->load->view('studentListView');
    }
    //function to handle callbacks
    function datatable()
    {
        $this->datatables->select('id,name,parentname,address,phonenumber')
      //  ->unset_column('id')
        ->from('subscriber');
        
        echo $this->datatables->generate();
    }
}