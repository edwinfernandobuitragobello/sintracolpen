        <script src="{{ asset('jsAdmin/vendor/jquery-2.2.4.min.js') }}"></script>
        <script src="{{ asset('jsAdmin/bootstrap-filestyle.min.js') }}"></script>
        <script src="{{ asset('jsAdmin/vendor/bootstrap.min.js') }}"></script>
        <script src="{{ asset('jsAdmin/plugins.js') }}"></script>
        <script src="{{ asset('jsAdmin/app.js') }}"></script>
        <script src="{{ asset('jsAdmin/pages/readyDashboard.js') }}"></script>
        <script>$(function(){ ReadyDashboard.init(); });</script>
    </body>
</html>

<script type="text/javascript">
    $(document).ready(function (){
        $('.soloNumero').keyup(function (){
            this.value = (this.value + '').replace(/[^0-9]/g, '');
        });
    });
</script>