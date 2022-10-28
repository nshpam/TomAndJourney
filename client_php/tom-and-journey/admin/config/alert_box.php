<html lang="en">
<body>
    <script src="admin/js/sweetalert.js"></script>
    <!-- <script>
        swal("Good job!", "You clicked the button!", "success");
    </script> -->
    <?php
    if(isset($_SESSION['status']) && $_SESSION['status'] !='')
    {
        ?>
            <script>
                swal({
                    title: "<?php echo $_SESSION['status'] ?>",
                    text: "<?php echo $_SESSION['status_detail'] ?>!",
                    icon: "<?php echo $_SESSION['status_code'] ?>",
                    button: "OK",
                    
                });
            </script>
    
        <?php
        unset($_SESSION['status']);
    }
    ?>
    
    
    
</body>
</html>