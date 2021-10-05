<!-- 3.Get two input number using Text box ,Select operator using select option- 
use submit button to perform particular operation.  -->

<?php 
$result = "";
class calculator
{
    var $a;
    var $b;

    function userOperation($operator)
    {
        switch($operator)
        {
            case '+':
            return $this->a + $this->b;
            break;

            case '-':
            return $this->a - $this->b;
            break;

            case '*':
            return $this->a * $this->b;
            break;

            case '/':
            return $this->a / $this->b;
            break;

            default:
            return "Selected Operator not found";
        }   
    }
    function output($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        return $this->userOperation($c);
    }
}

$cal = new calculator();
if(isset($_POST['submit']))
{   
    $result = $cal->output($_POST['n1'],$_POST['n2'],$_POST['userOP']);
}
?>

<form method="POST">
<table align="center" cellpadding="10" cellspacing="0">
    <tr>
        <td>Enter 1st Number : </td>
        <td><input type="text" name="n1"><br></td>
    </tr>

    <tr>
        <td>Enter 2nd Number : </td>
        <td><input type="text" name="n2"><br></td>
    </tr>

    <tr>
        <td>Select Operator</td>
        <td><select name="userOP">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select></td>
    </tr>

    <tr>
        <td><input type="submit" name="submit" value="Submit button"></td>
    </tr>

    <tr>
        <td>
            <?php echo 'Answer = ' . '<b>' .$result .'</b>'; ?>
        </td>
    </tr>

</table>
</form>