<?php $this->load->view('include/include_form'); ?>

<style>
  div.error {
    color: red;
  }
</style>

<!--
<h3>This is form helper</h3>
<h4>This is form without helper</h4>
<form action="" method="post" class="" id="" enctype="multipart/form-data">

    <input type="text" placeholder="Name"/>
    <input type="email" placeholder="Email"/>

    <button>Submit</button>
    
    By default, button is of type "submit".
    No need to do <button type ="submit"> 
    

</form>


<h4>This is form WITH helper</h4>
<?php echo form_open(site_url('helpers/form-submit'), array(
  'method' => 'post',
  'class' => 'form-class',
  'id' => 'form-id',
  'enctype' => 'multipart/form-data'
)); ?>

    <input type="text" placeholder="Name" name="txt_name"/>
    <input type="email" placeholder="Email" name="txt_email"/>

    <button>Submit</button>

<?php echo form_close(); ?>
-->

<div class="container">

  <?php if ($this->session->flashdata('success')) : ?>
    <div class="btn btn-success">
      <?php echo $this->session->flashdata('success'); ?>
    </div>
  <?php else : ?>
    <div class="btn btn-failure">
      <?php echo $this->session->flashdata('error'); ?>
    </div>
  <?php endif; ?>
  <p>
  </p>
  <a href="<?php echo site_url('users/list') ?>" class="btn btn-primary pull-right">List Users</a>
  <h3>User Form</h3>
  <?php echo form_open(site_url('helpers/form-submit')); ?>
  <div class="form-group">
    <label for="txt_name">Name:</label>
    <input type="text" value="<?php echo set_value('txt_name') ?>" class="form-control" name="txt_name" id="name" placeholder="Enter name">
    <?php echo form_error('txt_name', '<div class="error">', '</div>'); ?>
  </div>
  <div class="form-group">
    <label for="txt_email">Email:</label>
    <input type="email" value="<?php echo set_value('txt_email') ?>" class="form-control" id="email" placeholder="Enter email" name="txt_email">
    <?php echo form_error('txt_email', '<div class="error">', '</div>'); ?>
  </div>
  <div class="form-group">
    <label for="txt_phone">Phone no:</label>
    <input type="text" value="<?php echo set_value('txt_phone') ?>" class="form-control" name="txt_phone" id="phone" placeholder="Enter phone number">
    <?php echo form_error('txt_phone', '<div class="error">', '</div>'); ?>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
  <?php echo form_close(); ?>
</div>
</body>

</html>