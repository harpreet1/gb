<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
if (function_exists('pspell_new')) {
        $pspell_link = pspell_new("en");
        if (!pspell_check($pspell_link, "testt")) {
                $suggestions = pspell_suggest($pspell_link, "testt");
                foreach ($suggestions as $suggestion) {
                        echo "Possible spelling: $suggestion<br />";
                }
        }
} else {
        echo "pspell is not installed";
}
?>
</body>
</html>