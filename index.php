
<!DOCTYPE html>
<html><div id="in-page-channel-node-id" data-channel-name="in_page_channel_PIAMW7"></div><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Cyb0x1 Chall</title>

    <link rel="stylesheet" href="css/docs.css">

    <link rel="stylesheet" href="css/codemirror.css">
    <script src="js/codemirror.js"></script>
    <script src="js/matchbrackets.js"></script>
    <script src="js/htmlmixed.js"></script>
    <script src="js/xml.js"></script>
    <script src="js/javascript.js"></script>
    <script src="js/css.js"></script>
    <script src="js/clike.js"></script>
    <script src="js/php.js"></script>
</head>
<body>
<article>
    <img src="cyb0x1.png" alt="" height="200" width="500">
    <h2>Jangan ngaku heker kalo ngoding aja gabisa :p</h2>
    <form method="POST" target="index.php">
        <textarea name="code" id="code">
            <?php
            if(isset($_POST["code"])){
                $strip_code = stripslashes($_POST["code"]);
echo <<<EOT
$strip_code
EOT;

            }else{
echo
<<<EOT

<?php echo 'Hello World!';

EOT;

            }
            ?>
        </textarea>
        <input type="submit" value="Submit">
    </form>
    <div class="result">
        <?php
        require_once('helper_functions.php');
        error_reporting(E_ALL);
        global $evil_functions_array;
        $code = $_POST["code"] ?? "<?php echo 'Hello World!';";
        $code = stripslashes($code);
        if (isset($_POST["code"])) {
            $code = str_replace("<?php", '', $code);
            try {
                $is_evil_there = strposa(strtolower($code), $evil_functions_array);
                if ($is_evil_there !== false) {
                    echo "Hengker banget lu bang?";
                } else {
                    try {
                        $code = stripslashes($code);
                        try {
                            $response = @eval($code);
                        }
                        catch (Exception $e) {
                            $parser_error_message = $e->getMessage();
                            echo $parser_error_message;
                        }
                        if (error_get_last()){
                            $get_server_error = error_get_last();
                            if(!empty($get_server_error)) {
                                if($get_server_error['type'] != '8') {
                                    $error_msg = $get_server_error['message'];
                                    $error_msg = str_replace('/var/www/html/helper_functions.php', '', $error_msg);
                                    $error_msg = str_replace('/var/www/html/index.php(61)', '', $error_msg);
                                    $error_msg = str_replace('/var/www/html/index.php', '', $error_msg);
                                    echo (isset($get_server_error['message']) ? $error_msg : '') . (isset($get_server_error['line']) ? ' on line ' . $get_server_error['line'] : '');
                                }
                            }
                        }
                    } catch (Exception $e) {
                        echo 'Caught exception: '.$e->getMessage()."\n";
                    }
                }
            } catch(Exception $e) {
                print '<pre>'; print_r($e); print '</pre>'; die;
            }
        } else {
            @eval("echo 'Hello World!';");
        }
        ?>
    </div>
    <script>
        CodeMirror.fromTextArea(document.getElementById("code"), {
            lineNumbers: true,
            matchBrackets: true,
            mode: "application/x-httpd-php",
            indentUnit: 4,
            indentWithTabs: true
        });
    </script>
</article>
</body>
</html>