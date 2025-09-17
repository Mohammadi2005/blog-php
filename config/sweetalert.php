<?php if(isset($_GET['login'])) { ?>
    <script>
        Swal.fire({
            title: "Good job!",
            text: "user login!",
            icon: "success"
        });
    </script>
<?php } elseif (isset($_GET['notUser'])) { ?>
    <script>
        Swal.fire({
            title: "Oh!",
            text: "user is not logged in!",
            icon: "error"
        });
    </script>
<?php } elseif (isset($_GET['logout'])) { ?>
    <script>
        Swal.fire({
            title: "logged out!",
            text: "logout from your account!",
            icon: "info"
        });
    </script>
<?php } ?>