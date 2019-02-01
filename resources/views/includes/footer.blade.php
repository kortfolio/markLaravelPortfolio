<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js">
</script>
<script>
    $('#imagemodal').on("show.bs.modal", function () {
    $('.lazy_load').each(function(){
        var img = $(this);
        img.attr('src', img.data('src'));
    });
});   
</script>

<footer class="footer">
    <div class="container-fluid">
        <a href="https://www.linkedin.com/in/mark-myounghun-kang-91a645a2" class="navbar-right" target="_blank"><img
                    src="{{URL::to('public/images/snsIcons/linkedInIcon.png') }}" style="margin: 10px"></a>
        <a href="https://github.com/kortfolio" class="navbar-right" target="_blank"><img
                    src="{{URL::to('public/images/snsIcons/githubIcon.png') }}" style="margin: 10px"></a>
    </div><!-- /.container-fluid -->
</footer>


