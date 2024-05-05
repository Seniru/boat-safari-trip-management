<?php
    function handlePagination($type, $direction, $source) {
        if ($direction == "pre") {
            $_SESSION[$type . "_offset"] = max(0, $_SESSION[$type . "_offset"] - 1);
            // remove the query parameters to stop calculating the page twice
            header("Location: $source");
            exit();
        } elseif ($direction == "next") {
            $_SESSION[$type . "_offset"] = $_SESSION[$type . "_offset"] + 1;
            // remove the query parameters to stop calculating the page twice
            header("Location: $source");
            exit();
        }
    }
?>
