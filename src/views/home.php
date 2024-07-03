<?php

include_once "common/header.php";
include_once "common/navbar.php";
?>

    <main>
        <h1>Welcome to the Application!</h1>

        <div class="card-container">

            <div class="card">
                <img src="/resources/img/user.png" alt="User" style="width:20%">
                <div class="container">
                    <h4><b>Users</b></h4>
                    <a href="/users">List Users</a>
                </div>
            </div>

            <div class="card">
                <img src="/resources/img/advertisement.png" alt="Advertisement" style="width:20%">
                <div class="container">
                    <h4><b>Advertisements</b></h4>
                    <a href="/advertisements">List Advertisements</a>
                </div>
            </div>
        </div>
    </main>

<?php
include_once "common/footer.php";
?>