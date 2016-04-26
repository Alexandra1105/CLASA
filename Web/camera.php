<!DOCTYPE html>
<html>
<head>
<title>Clasa</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<!--<link rel="stylesheet" href="css/base.css" type="text/css" media="screen"> -->
<style>

</style>
</head>

<body>
        <div class="container">
            <h1>Camera API</h1>

            <section class="main-content">
                <p>A demo of the Camera API, currently implemented in Firefox and Google Chrome on Android. Choose to take a picture with your device's camera and a preview will be shown through createObjectURL or a FileReader object (choosing local files supported too).</p>

                <form action="upload.php" method="post" enctype="multipart/form-data">

                  <input type="file" name="uploadedfile" accept="image/*" capture>

                  <input type="submit" value="Upload">

                </form>


                <h2>Preview:</h2>
                <p>
                    <img src="about:blank" alt="" id="show-picture">
                </p>

                <p id="error"></p>

            </section>






        </div>


<!--        <script src="js/base.js"></script> -->


<!-- Javascript -->
	<script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
	<script>

	</script>
</body>
</html>
