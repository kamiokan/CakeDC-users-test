<?php
/**
 * Copyright 2010 - 2017, Cake Development Corporation (https://www.cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2010 - 2017, Cake Development Corporation (https://www.cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$activationUrl = [
    '_full' => true,
    'plugin' => 'CakeDC/Users',
    'controller' => 'Users',
    'action' => 'validateEmail',
    isset($token) ? $token : ''
];
?>
この度はユーザー登録いただき、ありがとうございます。
本人認証用のURLをお送りします。

次のアドレスをブラウザにコピー＆ペーストしてアクセスください。
<?= __d(
    'CakeDC/Users',
    "{0}",
    $this->Url->build($activationUrl)
) ?>

上記URLにアクセスすることで、
本人確認が完了し、ログインが可能となります。
よろしくお願いいたします。

*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-
激安店
〒XXX-XXXX
東京都渋谷区ひなみざわ17338
TEL XX-XXXX-XXXX
FAX XX-XXXX-XXXX
*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-
