<?php

session_start();

if (isset($_SESSION["email"])) {


    include "includes/head.php";

    include "includes/menu.php";

    if (isset($_SESSION["role"]) != 'admin' || isset($_SESSION["role"]) != 'manager') {
        echo "Sorry, You can not access this page! <a href='index.php'>Go Back!</a>";
    } else {

        $file = "userData.json";
        $users = file_exists($file) ? json_decode(file_get_contents($file), true) : [];


        if (isset($_POST['update-role'])) {
            $email = $_POST['email'];
            $newRole = $_POST['newRole'];

            $users[$email]['role'] = $newRole;

            file_put_contents($file, json_encode($users, JSON_PRETTY_PRINT));
            header('location: crew_list.php');
        }


?>
        <table class="table table-bordered">
            <thead>
                <th>Username</th>
                <th>Email</th>
                <th>Role</th>
                <?php
                if ($_SESSION["role"] == "admin") {
                    echo "<th>Action</th>";
                }
                ?>
            </thead>

            <tbody>
                <?php
                foreach ($users as $email => $user) {
                    $role = $user['role'] == '' ? 'Pending' : $user['role'];
                    $ifYou = $email == $_SESSION['email'] ? '(You)' : '';
                ?>
                    <tr>
                        <td><?= "{$user['username']} {$ifYou}" ?></td>
                        <td><?= $email ?></td>
                        <td><?= "<button class='btn {$role}'>{$role}</button>" ?></td>

                        <?php
                        if ($_SESSION["role"] == "admin") {
                        ?>
                            <td>
                                <form method="post" action="" style="display: inline-flex;gap: 5px;">
                                    <input name='email' readonly hidden value='<?= $email ?>'>
                                    <select style="width: max-content;" class="form-control" name='newRole' required>
                                        <option value>Update Role</option>
                                        <option value='admin'>Admin</option>
                                        <option value='manager'>Manager</option>
                                        <option value='user'>User</option>
                                        <option value='pending'>Pending</option>
                                    </select>
                                    <input class="btn btn-info" type="submit" name="update-role" value="Update">
                                </form>
                            </td>
                        <?php
                        }
                        ?>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

<?php
    }





    include "includes/footer.php";
} else {
    header("location: login.php");
}
