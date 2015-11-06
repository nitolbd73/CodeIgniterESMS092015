
  
            	
 <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            YUpdate Students
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url();?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">Blank page</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
			<div class="col-md-8">
          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Hi !</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" title="Collapse"></button>
                <button class="btn btn-box-tool" title="Remove"></button>
              </div>
            </div>
            <div class="box-body">
            
             <?php if ($this->session->flashdata('flashSuccess')) { ?>
        <div id='alert alert-warning'  class="alert alert-info"> <?= $this->session->flashdata('flashSuccess') ?> </div>
    <?php } ?>	
      
      <?php if ($this->session->flashdata('flashFail')) { ?>
        <div id='alert alert-warning'  class="alert-alert-warning"> <?= $this->session->flashdata('flashFail') ?> </div>
    <?php } ?>	
      
      
            <?php $attributes = array("name" => "registerstudentform");
            echo form_open("Student/update")?>
   
     <div class="form-group">
				<label>Register Number</label>      
     <?php $data = array(
          'name'        => 'id',
           'value'          => $student->id,
          'class'       => 'form-control',
          'style'       => 'height:30px',
          'placeholder' => 'Eg: 12345678',
          'required' => 'required',
		  'readonly'=>'readonly'
          
        );
     echo form_input($data);   ?> 
	
      </div>
   
       <div class="form-group">
				<label>Student Name</label>      
     <?php $data = array(
          'name'        => 'name',
           'value'      => $student->name,
          'class'       => 'form-control',
          'style'       => 'height:30px',
          'placeholder' => 'Eg: Thasneem ILM',
          'required' => 'required'
        );
     echo form_input($data);   ?> 
	 <?php echo form_error('name'); ?>
      </div>
     
      <div class="form-group">
				<label>Parent Name</label>      
     <?php $data = array(
          'name'        => 'parentname',
           'value'          => $student->parentname,
          'class'       => 'form-control',
          'style'       => 'height:30px',
          'placeholder' => 'Eg: Ibura Lebbe',
           'required' => 'required'
        );
     echo form_input($data);   ?> 
	 <?php echo form_error('parentname'); ?>
      </div> 
			
	
	 <div class="form-group">
				<label>Address</label>      
     <?php $data = array(
          'name'        => 'address',
          'value'          => $student->address,
          'class'       => 'form-control',
          'placeholder' => 'Eg: No 350, Hijra mawatha, kekunagolla',
           'required' => 'required'
          );
     echo form_input($data);   ?> 
	 <?php echo form_error('address'); ?>
      </div> 
			
	 <div class="form-group">
				<label>Phone Number</label>      
     <?php $data = array(
          'name'        => 'phonenumber',
          'value'          => $student->phonenumber,
          'class'       => 'form-control',
          'style'       => 'height:30px',
          'placeholder' => 'Eg: 0711585515',
           'required' => 'required'
        );
     echo form_input($data);   ?> 
	 <?php echo form_error('phonenumber'); ?>
      </div> 
      
      
      	
      
      
      
      
      
      
      
      
      
	  <div class="form-group">
                
      <input name="submit" type="submit" class="btn btn-primary" value="Send" />
      <button type="reset" class="btn btn-primary">Reset</button>
           
      </div>
            
    <?php echo form_close(); ?>	
            	
            	
            	
            	
            	
            	
            	
            	
            	
            	
            	
            	
            	
           
            </div><!-- /.box-body -->
           
          </div><!-- /.box -->
  </div><!-- /.box -->
        </section><!-- /.content -->