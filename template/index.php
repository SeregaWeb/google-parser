
    <div class="container">
        <div class="wrapper">
        <form action="#" method="post">
            <div>
                <h1 class="google-prosti">
                    <span>Not</span>
                    <span>G</span>
                    <span>o</span>
                    <span>o</span>
                    <span>g</span>
                    <span>l</span>      
                    <span>e</span>      
                </h1>
            </div>
            <div class="search">
            <input class="search-input" type="text" name="query" >
            <button class="btn" ><img class="btn-img" src="static/img/spotlight.png" alt="search"></button>
            </div>
        </form>
        <?

        for($i = 0; $i < 10 ; $i++){
            $str = strval($url[1][$i]);
            $link = @iconv('Windows-1251', 'UTF-8//TRANSLIT//IGNORE', $str);
            $str = strval($title[1][$i]);
            $tit =  @iconv('Windows-1251', 'UTF-8//TRANSLIT//IGNORE', $str);
            $str = strval($text[1][$i]);
            $txt = @iconv('Windows-1251', 'UTF-8//TRANSLIT//IGNORE', $str);
        ?>
            <div class="result">
                <h2 class="result-title"><? echo $tit ?></h1>
                <a href="<?echo $link ?>" class="result-link"><? echo $url[1][$i]; ?></a>
                <p class="result-text"><? echo $txt; ?></p>
            </div>
        
        <?
        }
        ?>
        </div>
    </div>
