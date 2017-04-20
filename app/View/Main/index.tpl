<h1>メインの画面(Main/index.tpl)</h1>
<br><br>
ログインユーザー：{$auth['login_user_name']|escape:"html"}
<br><br>
{$this->Html->link('ユーザー登録', ['controller' => 'users', 'action' => 'add'])}
<br><br>
{$this->Html->link('メーカーマスタ登録', ['controller' => 'screen', 'action' => 'index',{$smarty.const.SCR_MASTERS_ADD}])}
<br><br>
{$this->Html->link('メーカーマスタ一覧', ['controller' => 'screen', 'action' => 'index',{$smarty.const.SCR_MASTERS_LIST}])}
<br><br>
{$this->Html->link('ログアウト', ['controller' => 'users', 'action' => 'logout'])}
