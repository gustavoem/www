<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" 
"http://www.w3.org/TR/html4/strict.dtd"> 
<html> 
<head> 
    <title>Resultados</title>        
</head> 
<body> 

<? 
    function stripFormSlashes($arr) { 
        if (!is_array($arr))
            return stripslashes($arr); 
        else 
            return array_map('stripFormSlashes', $arr); 
    } 
    
    echo("se liga:");
    echo($_GET);
    echo($_POST);
    echo("fim :)");
    if (get_magic_quotes_gpc()) { 
        $_GET  = stripFormSlashes($_GET); 
        $_POST = stripFormSlashes($_POST); 
    }
                
    echo ("<br/>"); 
    echo ("<pre>"); 
    echo ("POST info:\n"); 
    print_r($_POST); 
    echo("</pre>"); 

    echo ("<br/>"); 
    echo ("<pre>"); 
    echo ("GET info:\n"); 
    print_r($_GET); 
    echo("</pre>"); 
    
    if($_GET['name']) 
        { 
        $name = $_GET['name']; 
        }             
    echo($name); 
?> 

<p>
    <a><input type="button" value="back" onclick="history.go(-1)"></a>
</p> 

</body> 
</html>