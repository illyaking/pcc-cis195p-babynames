<?php



function output_form($method, $action)
{
    echo "<form method='{$method}' action='{$action}'>";
    echo"<p><b>Year:</b> <input type='text' name='" . USER_INPUT_KEY . "'></p>\n";
    echo"<p><b>Gender:</b>   \n";
    echo"    Male <input type='radio' value='M' name='" . USER_INPUT_KEY_TWO . "'>\n";
    echo"    Female <input type='radio' value='F' name='" . USER_INPUT_KEY_TWO . "'></p>\n";
    echo"<p>How many names do you want (type <b>'all'</b> if you want every name)? <input type='text' name='" . USER_INPUT_KEY_THREE . "'></p>\n";
    echo"<input type='submit' value='SUBMIT'>\n";
    echo"   </form>\n";
}