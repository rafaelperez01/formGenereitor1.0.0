<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include_once 'includes/bootstrap.php'; ?>

    <title>FormGenereitor 2.0</title>
    <style>
        body {
            padding-top: 70px;
        }
    </style>
  </head>
  <body>

        <main>
            
            <!-- navBar -->
            <?php include_once 'includes/navBar.php'; ?>
            <!-- /navBar -->
            
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Form Genereitor 2.0</h1>
                        <?php 
                        
                        require_once 'Field.php';
                        require_once 'Fieldset.php';
                        require_once 'Form.php';

                        use formGenereitor\{Field, Fieldset, Form};
                        
                        $fields = ['submit', 'button', 'reset', 'text', 'tel', 'textarea', 'password', 'select', 'checkbox', 'radio', 'color', 'date', 'datetime-local', 'month', 'week', 'number', 'email', 'file', 'hidden', 'image', 'range', 'search',  'time', 'url',];
                        
                        echo "<h3>Creando todos los campo</h3>";
                        
                        foreach ($fields as $value) {
                            $field = new Field($value, $value, $value);
                            echo $field;
                        }
                        
                        ?>
                    </div>
                </div>
            </div>
        </main>
    
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>
