</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>BP Monitoring Management System</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

<!-- Scroll to Top Button-->
<?= $this->include("layout/footer2") ?>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url() ?>public/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url() ?>public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url() ?>public/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url() ?>public/js/sb-admin-2.min.js"></script>

<script>
    $(document).ready(function() {
        $('#emailid').on('keyup', function() {
            var email = $(this).val();
            if (email.length > 0) {
                $.ajax({
                    url: '<?= site_url('registration/checkemail') ?>',
                    type: 'post',
                    data: {
                        emailid: email
                    },
                    success: function(response) {
                        if (response === 'exists') {
                            $('#email-availability-status').html('<span style="color:red;">Email already exists</span>');
                            $('#submit').attr('disabled', true);
                        } else {
                            $('#email-availability-status').html('<span style="color:green;">Email available</span>');
                            $('#submit').attr('disabled', false);
                        }
                    }
                });
            } else {
                $('#email-availability-status').html('');
                $('#submit').attr('disabled', false);
            }
        });
    });
</script>

</body>

</html>