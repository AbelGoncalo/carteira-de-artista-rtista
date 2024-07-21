
<!-- Footer -->

<!-- End of Footer -->

    <!-- Bootstrap core JavaScript-->
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="/assets/site/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="/assets/site/js/sb-admin-2.min.js"></script>

<script src="{{asset('assets/admin/js/select2.min.js')}}"></script>
<script src="{{asset('assets/admin/js/intlTelInput.min.js')}}"></script>



<script>
    $(document).ready(function () {
        $('#provincia').select2({
            theme: 'bootstrap4',
            width:'100%'
         });

        $('#artista-contrato').select2({
            theme: 'bootstrap4',
            width:'100%'
        });
            

        $('#promotor-contrato').select2({
            theme: 'bootstrap4',
            width: '100%'
        });

        $('#evento-contrato').select2({
            theme: 'bootstrap4',
            width: '100%'
        });

        $('#artista-convite').select2({            
            width: '100%'
        });

        $('#promotor-convite').select2({            
            width: '100%'
        }); 
        
        $('#evento-convite').select2({
            theme: 'bootstrap4',
            width:'100%'
        });

       
    });

</script>

</body>

</html>



