<h1>ログイン画面(Users/login.tpl)</h1>
<br><br>
{$this->Flash->render()}
{$this->Form->create('User',['novalidate' => true])}
<br><br>
    <fieldset>
        <legend>usernameとpasswordを入力してください。</legend>
        {$this->Form->input('username')}
        {$this->Form->input('password')}
    </fieldset>
{$this->Form->end('ログイン')}



                