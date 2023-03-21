<script>
    function commitingSoon() {
        var snackbarbtn = document.getElementById("snackbar");
        snackbarbtn.className = "show";
        snackbarbtn.style.backgroundColor = "blue";
        snackbarbtn.innerHTML = "This feature is coming soon!";
        setTimeout(function() {
            snackbarbtn.className = snackbarbtn.className.replace("show", "");
        }, 3000);
    }
</script>
</div>
<div class="d-flex flex-column" style="min-height: 1vh; ">
    <script>
       (function () {
      CKEDITOR.disableAutoInline = false;
      var config = {
        extraPlugins: 'codesnippet',
        toolbar: [
          ['Bold', 'Italic', 'Underline'], ['CodeSnippet'], ['NumberedList', 'BulletedList'], ['Blockquote'],['link'], ['Undo', 'Redo']
        ],
        codeSnippet_theme: 'monokai_sublime'
      };

      CKEDITOR.replace('diviteditor', config);

      CKEDITOR.inline('editable', CKEDITOR.tools.extend({}, config, {
        extraPlugins: 'codesnippet'
      }, true));

      initThemeChange();

      function initThemeChange() {
        var templates = [
          'monokai_sublime', 'default', 'arta', 'ascetic', 'atelier-dune.dark', 'atelier-dune.light', 'atelier-forest.dark', 'atelier-forest.light', 'atelier-heath.dark', 'atelier-heath.light', 'atelier-lakeside.dark', 'atelier-lakeside.light', 'atelier-seaside.dark', 'atelier-seaside.light', 'brown_paper', 'dark', 'docco', 'far', 'foundation', 'github', 'googlecode', 'idea', 'ir_black', 'magula', 'mono-blue', 'monokai', 'obsidian', 'paraiso.dark', 'paraiso.light', 'pojoaque', 'railscasts', 'rainbow', 'school_book', 'solarized_dark', 'solarized_light', 'sunburst', 'tomorrow-night-blue', 'tomorrow-night-bright', 'tomorrow-night-eighties', 'tomorrow-night', 'tomorrow', 'vs', 'xcode', 'zenburn'
        ],
          pre = CKEDITOR.document.getById('sampleConfig'),
          select = CKEDITOR.document.getById('select'),
          codeTemplate = 'CKEDITOR.replace( \'diviteditor\', {\n' +
            '	<strong>extraPlugins: \'codesnippet\',</strong>\n' +
            '	codeSnippet_theme: \'{tpl}\'\n' +
            '} );',
          name, option;

        while ((name = templates.shift())) {
          option = CKEDITOR.document.createElement('option', {
            attributes: {
              value: name
            }
          });

          option.setText(name);
          select.append(option);
        }

        select.$.onchange = function () {
          if (CKEDITOR.instances.diviteditor)
            CKEDITOR.instances.diviteditor.destroy();

          CKEDITOR.replace('diviteditor', CKEDITOR.tools.extend({}, config, {
            codeSnippet_theme: this.value
          }, true));

          pre.setHtml(codeTemplate.replace('{tpl}', this.value));
        };
      }

      if (CKEDITOR.env.ie && CKEDITOR.env.version == 8)
        CKEDITOR.document.getById('ie8-warning').addClass('warning');
    }());
    </script>
    <footer class="bg-primary text-white py-3 mt-auto">
        <div class="container">
            <p class="text-center m-0">
                keDevForum v1.0 developed by
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
