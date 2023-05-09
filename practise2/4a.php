<!DOCTYPE html>
<html>

<head>
    <title>Document</title>
</head>

<body>
    <form action="" method="GET">
        <label for="fileName">File Name</label>
        <input type="text" name="fileName" id="">
        <br>
        <br>
        <label for="extension">Extension</label>
       <select name="extension" id="">
                <option value="txt">txt</option>
                <option value="docx">docx</option>
                <option value="pdf">pdf</option>
                <option value="doc">doc</option>
                <option value="odt">odt</option>
            </select>
        <br>
        <br>
        <label for="content">Content</label>
        <input type="text" name="content" id="">
        <input type="submit" value="submit">
        <br>
        <br>

        <?php
     
            $fileName = $_GET["fileName"];
            $extension = $_GET["extension"];
            $content = $_GET["content"];

            echo file_put_contents($fileName . "." . $extension, $content."<br>");
            echo file_get_contents($fileName . "." . $extension);

        ?>
    </form>
</body>

</html>