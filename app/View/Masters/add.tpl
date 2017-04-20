<h1>{$screen_name}</h1>
<br><br>
{$this->Flash->render()}
<br><br>
{$this->Form->create('Maker',['novalidate' => true])}
    <fieldset>
        <legend>メーカー情報を入力してください。</legend>
        {$this->Form->input('name',['label' => $items['name']])}
        {$this->Form->input('furigana',['label' => $items['furigana']])}
        {$this->Form->input('remarks',['label' => $items['remarks']])}
    </fieldset>
{$this->Form->end('登録')}
