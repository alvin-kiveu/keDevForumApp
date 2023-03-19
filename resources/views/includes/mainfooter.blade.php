
</div>
<div class="d-flex flex-column" style="min-height: 100vh; ">
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {
                toolbar: ['bold', 'italic', 'link', 'undo', 'redo', 'bulletedList', 'numberedList', 'blockQuote']
            })
            .catch(error => {
                console.error(error);
            });
    </script>
    <footer class="bg-primary text-white py-3 mt-auto">
        <div class="container">
            <p class="text-center m-0">
                keDevForum developed by
                <a href="https://umeskiasoftwares.com/" class="text-white font-weight-bold">Umeskia Softwares</a>
                &copy; <?php echo date('Y'); ?>
            </p>
        </div>
    </footer>
</div>

</div>

</div>


</div>
</div>
<script>
    const hoverbar = document.getElementById('bar');
    const hovermain = document.getElementById('main');
    const cancelbtn = document.getElementById('cancel');

    hoverbar.addEventListener('click', () => {
        hovermain.style.display = 'block';
    });

    cancelbtn.addEventListener('click', () => {
        hovermain.style.display = 'none';
    });


</script>
</body>

</html>
