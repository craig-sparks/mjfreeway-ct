<html>
    <head>
        <title>MJ Freeway Caffine Code Test</title>
        <style>
            body {
                font-family: Arial;
            }
            .input {
                width: 50px;
            }
            .result {
                margin-top: 50px;
            }
        </style>
    </head>
</html>
<body>
    <div class="container">
        <div class="select">
            <select name="types" id="drinkSelect">
                <?php
                    foreach($types as $key => $type) {
                        echo '<option value="'."$key".'">' . $type['name'] . "</option>>";
                    }
                ?>
            </select>
            <input type="number" class="input" name="qty" id="qty" placeholder="QTY">
            <button type="submit" name="submit" id="submit">Calculate</button>
        </div>
        <div class="result">
            RESULT: <span class="result-span" id="result"></span>
        </div>
    </div>
    <script
            src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"></script>
    <script>
        $('#submit').on('click', function( data ){
            var values = {
              'type': jQuery('#drinkSelect').val(),
              'qty': jQuery('#qty').val(),
            };
            $.post( "/process", values )
                .done(function( data ) {
                  jQuery(".result-span").html('You can have ' + data + ' more');
                });
            });
    </script>
</body>