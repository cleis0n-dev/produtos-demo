<!-- Rodapé/Interação JS -->

            <script src="{{ asset('js/app.js') }}"></script>
            <script src="{{ asset('js/jquery.min.js') }}"></script>
            <script src="{{ asset('js/jquery.mask.money.js') }}"></script>
            <script src="{{ asset('js/all.min.js') }}"></script>
            <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
            <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.2/r-2.2.9/sp-1.4.0/sl-1.3.3/datatables.min.js"></script>
            <script>
                $(document).ready( function () { $('#myTable').DataTable();});
            </script>
            @include('sweetalert::alert')
    </body>
</html>