<form action="<?php echo site_url('submit-form-data'); ?>" method="post" class="" id="" enctype="multipart/form-data">

</form>

<?php
echo form_open_multipart("submit-form-data", array(
    'class' => 'my-class',
    'id' => 'my-id',
    //'enctype' => 'multipart/form-data' is auto-added by using form_open_multipart
));

echo form_hidden("first_hidden", "OWT");

$input_attr = array(
    "name" => "first_input",
    'value' => "OWT",
    'class' => "input-class",
    'id' => "input-id"
);
echo form_input($input_attr);

$file_attr = array('class' => 'file-class', 'id' => 'file-id', 'name' => 'txt_file_upload');
echo form_upload($file_attr);

echo form_textarea('first_textarea', 'We can pass our value...');
$options = array(
    'plugin' => 'Plugin Tutorial',
    'framework' => 'CodeIgniter Tutorial',
    'vue-js' => 'Vue JS'
);
echo "<br/>";
echo form_dropdown('dd_select', $options);

?>

<?php
echo form_close("");
?>