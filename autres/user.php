    HtmlRenderer.class.php
    <?php
    class HtmlRenderer {
        function htmlStart ($xmlns)
        {
            echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";
            echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">\n";
            $string = "<html xmlns=\"".$xmlns."\">\n";
            echo $string;
        }
        function htmlEnd ()
        {
            echo "</html>\n";
        }
        function headStart ()
        {
            $string = "<head>\n";
            echo $string;
        }
        function headEnd ()
        {
            echo "</head>\n";
        }
        function bodyStart ()
        {
            echo "<body>\n";
        }
        function bodyEnd ()
        {
            echo "</body>\n";
        }
        function formStart ($class, $action, $method, $enctype)
        {
            $string = "<form class=\"".$class."\" action=\"".$action."\" method=\"".$method."\" enctype=\"".$enctype."\">\n";
            echo $string;
        }
        function formEnd ()
        {
            echo "</form>\n";
        }
    }
    ?>