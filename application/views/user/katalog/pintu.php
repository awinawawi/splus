<!DOCTYPE html>
<html>
  <head>
    <title>e-Katalog Pintu - S-Plus</title>
    <meta charset="utf-8">
  </head>
  <body>

    <style type="text/css">
      body {
        background-color: #333;
        margin: 0;
        padding: 0;
      }
      .container {
        height: 100vh;
        /* width: 95%;
        margin: 20px auto; */
      }
      .fullscreen {
        background-color: #333;
      }
    </style>
    <div class="container" id="container">

    </div>

    <script src="<?=base_url('assets/flipbook/js/libs/jquery.min.js')?>"></script>
    <script src="<?=base_url('assets/flipbook/js/libs/html2canvas.min.js')?>"></script>
    <script src="<?=base_url('assets/flipbook/js/libs/three.min.js')?>"></script>
    <script src="<?=base_url('assets/flipbook/js/libs/pdf.min.js')?>"></script>

    <script src="<?=base_url('assets/flipbook/js/dist/3dflipbook.js')?>"></script>
    <script type="text/javascript">
      function countKatalog(n) {
        return {
          type: 'image',
          src: '<?=base_url('assets/')?>flipbook/public/katalog-pintu/'+(n+1)+'.jpg',
          interactive: false
        };
      }

      $('#container').FlipBook({
        pageCallback: countKatalog,
        pages: 28,
        propertiesCallback: function(props) {
          props.cover.color = 0x000000;
          return props;
        },
        template: {
          html: '<?=base_url('assets/flipbook/templates/default-book-view.html')?>',
          styles: [
            '<?=base_url('assets/flipbook/css/short-white-book-view.css')?>'
          ],
          links: [
            {
              rel: 'stylesheet',
              href: '<?=base_url('assets/flipbook/css/font-awesome.min.css')?>'
            }
          ],
          script: '<?=base_url('assets/flipbook/js/default-book-view.js')?>',
          sounds: {
            startFlip: '<?=base_url('assets/flipbook/sounds/start-flip.mp3')?>',
            endFlip: '<?=base_url('assets/flipbook/sounds/end-flip.mp3')?>'
          }
        }
      });
    </script>

  </body>
</html>
