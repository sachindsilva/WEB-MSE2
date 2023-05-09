<!-- Write a PHP script that accepts filename, extension, text content and writes into file. -->

<!DOCTYPE html>
<html>
    <head>
        <title>FILE EXTENSION</title>
    </head>
    <body>
        
        <form action="" method="POST">
            <label for="fileName">File Name :</label>
            <input type="text" name="fileName" id="">
            <br>
            <br>
            <label for="extension">Enter the extension :</label>
            <select name="extension" id="">
                <option value="txt">txt</option>
                <option value="docx">docx</option>
                <option value="pdf">pdf</option>
                <option value="doc">doc</option>
                <option value="odt">odt</option>
            </select>
            <br>
            <br>
            <label for="textContent">Enter the text :</label>
            <br>
            <br>
            <textarea name="textContent"  cols="20" rows="5"></textarea>
            <br>
            <br>
            <input type="submit" value="submit">
            <?php 

            if(isset($_POST["submit"])){
                

                $fileName  = $_POST["fileName"];
                $extension = $_POST["extension"];
                $content = $_POST["textContent"];

                echo file_put_contents($fileName.".".$extension,$content) or die("Unable to open");
            }
            ?>
        </form>
    </body>
</html>