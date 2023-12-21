<?php
// <!-- <h1>Post</h1> -->
// <!-- <p>Post data: <?php echo $_POST['name']; </p>
?>

<?php
function get_raw_http_request() {

  $request = "$_SERVER[REQUEST_METHOD] $_SERVER[REQUEST_URI] $_SERVER[SERVER_PROTOCOL]\r\n";

  foreach (getallheaders() as $name => $value) {
    $request .= "$name: $value\r\n";
  }

  $request .= "\r\n" . file_get_contents('php://input');

  return $request;
}

echo get_raw_http_request();
echo "\n---------------------\n";
var_dump($_POST);
// POST /post.php HTTP/1.1
// Host: localhost:8080
// Content-Type: application/x-www-form-urlencoded
// Content-Length: 21

// username=test&password=123
