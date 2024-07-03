<?php


include_once "common/header.php";
include_once "common/navbar.php";
?>

    <h1>List of Users</h1>

<?php $users = (new UserController)->listUsers() ?>

    <table>
        <thead>
        <tr>
            <th>Username</th>
        </tr>
        </thead>
        <tbody>
        <?php if (!empty($users)): ?>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo htmlspecialchars($user->getName()); ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="2">No users found.</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>


<?php
include_once "common/footer.php";
?>