<?

class negoogle
{   
    private $url;
    private $title;
    private $text;

    function search($query){
        $url = "https://www.google.ru/search?num=10&q=$query";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_USERAGENT, "");
        curl_setopt($ch, CURLOPT_FAILONERROR, 1);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_REFERER, "http://www.google.ru/"); 
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); 
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_POST, 0);
        $data = curl_exec($ch);
        $this->setUrl($data);
        $this->setTitle($data);
        $this->setText($data);
    }

    private function setUrl($data){
        preg_match_all("/<cite>(.+?)<\/cite>/is",$data,$url, PREG_PATTERN_ORDER , PREG_SET_ORDER ); 
        $this->url = $url;
    }

    public function getUrl(){
        return $this->url;
    }

    private function setTitle($data){
	    preg_match_all('/<h3 class="r">(.+?)<\/h3>/is',$data, $title, PREG_PATTERN_ORDER , PREG_SET_ORDER);
        $this->title = $title;
    }

    public function getTitle(){
        return $this->title;
    }

    private function setText($data){
        preg_match_all('/<span class="st">(.+?)<\/span>/is',$data, $text, PREG_PATTERN_ORDER , PREG_SET_ORDER);
        $this->text = $text;
    }

    public function getText(){
        return $this->text;
    }
}