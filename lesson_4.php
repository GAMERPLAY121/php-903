<form method="post" action="first.php">
    <input name="operand1" value="<?= $operand1 ?>">
    <select name="operator">
        <option value="+" <?php if($operator == '+'): ?>selected<?php endif ?>>+</option>
        <option value="-" <?php if($operator == '-'): ?>selected<?php endif ?>>-</option>
        <option value="*" <?php if($operator == '*'): ?>selected<?php endif ?>>*</option>
        <option value="/" <?php if($operator == '/'): ?>selected<?php endif ?>>/</option>
        <input name="operand2" value="<?= $operand2 ?>">
    </select>
<button type="submit">=</button>
    <?= $resault ?>
</form>