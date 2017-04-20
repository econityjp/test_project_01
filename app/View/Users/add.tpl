<h1>ユーザー登録画面(Users/add.tpl)</h1>
<br><br>
{$this->Form->create('User')}
    <fieldset>
        <legend>ユーザー情報</legend>
        {$this->Form->input('username')}
        {$this->Form->input('password')}
        {$this->Form->input('login_user_name')}
        {$this->Form->input('orgs_id',['type' => 'select','options' => $orgs_list])}
        {$this->Form->input('places_id',['type' => 'select','options' => $places_list])}
    </fieldset>
{$this->Form->end('登録')}
                