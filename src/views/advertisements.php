<?php
include_once "common/header.php";
include_once "common/navbar.php";
?>

    <h1>List of Advertisements</h1>

<?php $advertisements = (new AdvertisementController)->listAdvertisements() ?>

    <table>
        <thead>
        <tr>
            <th>Advertisement Title</th>
            <th>Username</th>
        </tr>
        </thead>
        <tbody>
        <?php if (!empty($advertisements)): ?>
            <?php foreach ($advertisements as $advertisement): ?>
                <tr>
                    <td><?php echo htmlspecialchars($advertisement->getTitle()); ?></td>
                    <td><?php echo htmlspecialchars($advertisement->getUsername()); ?></td>
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