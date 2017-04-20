<head>
    {$this->Html->charset()}

    {$this->Html->script('//code.jquery.com/jquery.min.js')}
    {$this->Html->script('bootstrap.min')}
    {$this->Html->css('bootstrap.min')}
    {$this->Html->css('bootstrap')}
    {$this->Html->css('test')}
    
    {$this->fetch('meta')}
    {$this->fetch('css')}
    {$this->fetch('script')}
    
    <title>テスト</title>
</head>