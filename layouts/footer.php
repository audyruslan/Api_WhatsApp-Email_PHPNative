<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/additional-methods.min.js"></script>
<!-- Sweetalert -->
<script src="assets/js/sweetalert2.all.min.js"></script>

<?php
    if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
    ?>
<script>
Swal.fire({
    title: '<?= $_SESSION['status'];  ?>',
    icon: '<?= $_SESSION['status_icon'];  ?>',
    text: '<?= $_SESSION['status_info'];  ?>'
});
</script>
<?php
        unset($_SESSION['status']);
    }
    ?>

<script>
$(function() {
    $('#quickForm').validate({
        rules: {
            nama_lengkap: {
                required: true,
            },
            email: {
                required: true,
                email: true,
            },
            no_hp: {
                required: true,
            },
            alamat: {
                required: true,
            },
            keperluan: {
                required: true,
            },
        },
        messages: {
            nama_lengkap: {
                required: "Form Nama Lengkap Tidak Boleh Kosong!"
            },
            email: {
                required: "Form Email Tidak Boleh Kosong!",
                email: "Email Tidak Valid!"
            },
            no_hp: {
                required: "Form No.Hp Tidak Boleh Kosong!"
            },
            alamat: {
                required: "Form Alamat Tidak Boleh Kosong!"
            },
            keperluan: {
                required: "Form Keperluan Tidak Boleh Kosong!"
            },
        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function(element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });
});
</script>
</body>

</html>