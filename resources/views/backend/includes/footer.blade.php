    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>document.write(new Date().getFullYear())</script> © Skote.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-right d-none d-sm-block">
                        Design & Develop by MojoSolo
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </div>
    <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

      
    <!-- JAVASCRIPT -->
    <script src="{{ asset('backend/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/node-waves/waves.min.js') }}"></script>

    <!-- toastr plugin -->
    <script src="{{ asset('backend/assets/libs/toastr/build/toastr.min.js') }}"></script>

    <!-- toastr init -->
    <script src="{{ asset('backend/assets/js/pages/toastr.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('backend/assets/js/app.js') }}"></script>

    @stack('js')
    </body>

</html>