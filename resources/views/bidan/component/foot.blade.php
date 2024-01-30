<!-- Jasny -->
<script src="{{ asset('template/js/plugins/jasny/jasny-bootstrap.min.js') }}"></script>

<!-- DROPZONE -->
<script src="{{ asset('template/js/plugins/dropzone/dropzone.js') }}"></script>

<!-- CodeMirror -->
<script src="{{ asset('template/js/plugins/codemirror/codemirror.js') }}"></script>
<script src="{{ asset('template/js/plugins/codemirror/mode/xml/xml.js') }}"></script>

<script src="{{ asset('template/js/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('template/js/popper.min.js') }}"></script>
<script src="{{ asset('template/js/bootstrap.js') }}"></script>
<script src="{{ asset('template/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
<script src="{{ asset('template/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

<script src="{{ asset('template/js/plugins/dataTables/datatables.min.js') }}"></script>
<script src="{{ asset('template/js/plugins/dataTables/dataTables.bootstrap4.min.js') }}"></script>

<!-- Custom and plugin javascript -->
<script src="{{ asset('template/js/inspinia.js') }}"></script>
<script src="{{ asset('template/js/plugins/pace/pace.min.js') }}"></script>
<script src="{{ asset('template/js/plugins/iCheck/icheck.min.js')}}"></script>


<!-- ChartJS-->
<script src="{{ asset('template/js/plugins/chartJs/Chart.min.js') }}"></script>
<script src="{{ asset('template/js/demo/chartjs-demo.js') }}"></script>

<!-- Page-Level Scripts -->
<script>
    Dropzone.options.dropzoneForm = {
        paramName: "file", // The name that will be used to transfer the file
        maxFilesize: 2, // MB
        dictDefaultMessage: "<strong>Drop files here or click to upload. </strong></br> (This is just a demo dropzone. Selected files are not actually uploaded.)",
    };

    $(document).ready(function() {
        var editor_one = CodeMirror.fromTextArea(
            document.getElementById("code1"), {
                lineNumbers: true,
                matchBrackets: true,
            }
        );

        var editor_two = CodeMirror.fromTextArea(
            document.getElementById("code2"), {
                lineNumbers: true,
                matchBrackets: true,
            }
        );

        var editor_two = CodeMirror.fromTextArea(
            document.getElementById("code3"), {
                lineNumbers: true,
                matchBrackets: true,
            }
        );

        var editor_two = CodeMirror.fromTextArea(
            document.getElementById("code4"), {
                lineNumbers: true,
                matchBrackets: true,
            }
        );

        $(".custom-file-input").on("change", function() {
            let fileName = $(this).val().split("\\").pop();
            $(this)
                .next(".custom-file-label")
                .addClass("selected")
                .html(fileName);
        });
    });
</script>
<script src="{{ asset('template/js/plugins/iCheck/icheck.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $(".i-checks").iCheck({
            checkboxClass: "icheckbox_square-green",
            radioClass: "iradio_square-green",
        });
    });
</script>

</html>
