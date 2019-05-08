<?php
    echo form_open_multipart(''); // isinya untuk nembak post
    
    echo form_label('Username', 'username');
    $Username = array(
        'type' => 'text',
        'name' => 'loginUsername',
        'placeholder' => 'Input Your Username...',
        'class' => 'form-control'
    );
    echo form_input($Username);

    echo form_label('Password', 'passwd');
    $password = array(
        'name' => 'loginPassword',
        'class' => 'form-control',
        'placeholder' => 'Input Your Password...'
    );
    echo form_password($password);

    $btnSubmit = array(
        'class' => 'btn btn-primary'
    );
    echo form_submit($btnSubmit);

    echo form_close();

?>