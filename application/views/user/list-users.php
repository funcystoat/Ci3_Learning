<!DOCTYPE html>
<html lang="en">

<head>
    <title>Listing All Users</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container" style="margin-top:4%">
        <a href="<?php echo site_url('helpers/form') ?>" class="btn btn-primary pull-right">Back to Form</a>
        <h2>List All Users</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID Number</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                </tr>
            </thead>
            <tbody>

                <?php
                if (count($all_users) > 0) {

                    foreach ($all_users as $index => $user) {
                ?>
                        <tr>
                            <td><?php echo $user->id ?></td>
                            <td><?php echo $user->name ?></td>
                            <td><?php echo $user->email ?></td>
                            <td><?php echo $user->phone_no ?></td>
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>