<!DOCTYPE html>
<html lang='fr'>
	<head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>PHP ex 3.1 boucle</title>
    </head>
    <body >
        <ul>
            <?php
                for ($idx=0; $idx <10; $idx++)
                {
            ?>
            <li>
                <?php
                    echo nl2br($idx."\n");
                }
                ?>
            </li>
       </ul>
    </body>
</html>