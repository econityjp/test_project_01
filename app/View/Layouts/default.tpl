<html>
    <!-- <head>タグ -->
    {$this->element('head')}

    <!-- <body>タグ -->
    <body>
        <!-- メイン -->
        {$content_for_layout}

        <!-- フッタ -->
        {$this->element('footer')}
    </body>
</html>