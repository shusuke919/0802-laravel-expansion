{"filter":false,"title":"AppServiceProvider.php","tooltip":"/cms/app/Providers/AppServiceProvider.php","ace":{"folds":[],"scrolltop":309,"scrollleft":0,"selection":{"start":{"row":28,"column":1},"end":{"row":28,"column":1},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"hash":"b17db54e9d66b25dc69f56b76c6c20c4f00625ac","mime":"application/octet-stream","undoManager":{"mark":2,"position":2,"stack":[[{"start":{"row":4,"column":39},"end":{"row":5,"column":0},"action":"insert","lines":["",""],"id":2}],[{"start":{"row":5,"column":0},"end":{"row":5,"column":44},"action":"insert","lines":["use Illuminate\\Routing\\UrlGenerator;//この行を追加"],"id":3}],[{"start":{"row":24,"column":4},"end":{"row":27,"column":5},"action":"remove","lines":["public function boot()","    {","        //","    }"],"id":4},{"start":{"row":24,"column":4},"end":{"row":28,"column":1},"action":"insert","lines":["//bootメソッドを以下に変更"," public function boot(UrlGenerator $url)","{","    $url->forceScheme('https');","}"]}]]},"timestamp":1659244929979}