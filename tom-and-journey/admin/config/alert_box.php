<html lang="en">

<body>

    <!-- import sweetalert.js -->
    <script src="/tom-and-journey/dist/js/tomandjourney/sweetalert.js"></script>

    <!-- get data from another file -->
    <?php
    if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
    ?>

        <!-- sweet alert -->
        <script>
            swal({
                title: "<?php echo $_SESSION['status'] ?>",
                text: "<?php echo $_SESSION['status_detail'] ?>!",
                icon: "<?php echo $_SESSION['status_code'] ?>",
                button: "OK",
            });
        </script>

    <?php
        // delete this variable from session storage
        unset($_SESSION['status']);
    }
    ?>
</body>

</html>