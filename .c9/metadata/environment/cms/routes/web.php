{"filter":false,"title":"web.php","tooltip":"/cms/routes/web.php","undoManager":{"mark":48,"position":48,"stack":[[{"start":{"row":2,"column":37},"end":{"row":3,"column":0},"action":"insert","lines":["",""],"id":2}],[{"start":{"row":3,"column":0},"end":{"row":3,"column":45},"action":"insert","lines":["use App\\Http\\Controllers\\TeamsController;//追記"],"id":3}],[{"start":{"row":16,"column":16},"end":{"row":17,"column":25},"action":"remove","lines":["function () {","    return view('welcome'"],"id":4},{"start":{"row":16,"column":16},"end":{"row":16,"column":49},"action":"insert","lines":["[TeamsController::class, 'index']"]}],[{"start":{"row":17,"column":2},"end":{"row":17,"column":3},"action":"remove","lines":[";"],"id":5},{"start":{"row":17,"column":1},"end":{"row":17,"column":2},"action":"remove","lines":[")"]},{"start":{"row":17,"column":0},"end":{"row":17,"column":1},"action":"remove","lines":["}"]}],[{"start":{"row":16,"column":51},"end":{"row":17,"column":0},"action":"insert","lines":["",""],"id":6}],[{"start":{"row":17,"column":0},"end":{"row":17,"column":51},"action":"insert","lines":["Route::get('/', [TeamsController::class, 'index']);"],"id":7}],[{"start":{"row":17,"column":9},"end":{"row":17,"column":10},"action":"remove","lines":["t"],"id":8},{"start":{"row":17,"column":8},"end":{"row":17,"column":9},"action":"remove","lines":["e"]},{"start":{"row":17,"column":7},"end":{"row":17,"column":8},"action":"remove","lines":["g"]}],[{"start":{"row":17,"column":7},"end":{"row":17,"column":8},"action":"insert","lines":["p"],"id":9},{"start":{"row":17,"column":8},"end":{"row":17,"column":9},"action":"insert","lines":["o"]},{"start":{"row":17,"column":9},"end":{"row":17,"column":10},"action":"insert","lines":["s"]},{"start":{"row":17,"column":10},"end":{"row":17,"column":11},"action":"insert","lines":["t"]}],[{"start":{"row":17,"column":13},"end":{"row":17,"column":14},"action":"remove","lines":["/"],"id":10}],[{"start":{"row":17,"column":13},"end":{"row":17,"column":14},"action":"insert","lines":["t"],"id":11},{"start":{"row":17,"column":14},"end":{"row":17,"column":15},"action":"insert","lines":["e"]}],[{"start":{"row":17,"column":13},"end":{"row":17,"column":15},"action":"remove","lines":["te"],"id":12},{"start":{"row":17,"column":13},"end":{"row":17,"column":18},"action":"insert","lines":["teams"]}],[{"start":{"row":17,"column":51},"end":{"row":17,"column":52},"action":"remove","lines":["x"],"id":13},{"start":{"row":17,"column":50},"end":{"row":17,"column":51},"action":"remove","lines":["e"]},{"start":{"row":17,"column":49},"end":{"row":17,"column":50},"action":"remove","lines":["d"]},{"start":{"row":17,"column":48},"end":{"row":17,"column":49},"action":"remove","lines":["n"]}],[{"start":{"row":17,"column":48},"end":{"row":17,"column":49},"action":"insert","lines":["s"],"id":14}],[{"start":{"row":17,"column":48},"end":{"row":17,"column":49},"action":"remove","lines":["s"],"id":15},{"start":{"row":17,"column":47},"end":{"row":17,"column":48},"action":"remove","lines":["i"]}],[{"start":{"row":17,"column":47},"end":{"row":17,"column":48},"action":"insert","lines":["s"],"id":16},{"start":{"row":17,"column":48},"end":{"row":17,"column":49},"action":"insert","lines":["t"]},{"start":{"row":17,"column":49},"end":{"row":17,"column":50},"action":"insert","lines":["o"]},{"start":{"row":17,"column":50},"end":{"row":17,"column":51},"action":"insert","lines":["r"]},{"start":{"row":17,"column":51},"end":{"row":17,"column":52},"action":"insert","lines":["e"]}],[{"start":{"row":17,"column":0},"end":{"row":17,"column":56},"action":"remove","lines":["Route::post('teams', [TeamsController::class, 'store']);"],"id":17},{"start":{"row":17,"column":0},"end":{"row":17,"column":56},"action":"insert","lines":["Route::post('teams', [TeamsController::class, 'store']);"]}],[{"start":{"row":17,"column":56},"end":{"row":18,"column":0},"action":"insert","lines":["",""],"id":18}],[{"start":{"row":18,"column":0},"end":{"row":18,"column":1},"action":"insert","lines":["R"],"id":20},{"start":{"row":18,"column":1},"end":{"row":18,"column":2},"action":"insert","lines":["o"]},{"start":{"row":18,"column":2},"end":{"row":18,"column":3},"action":"insert","lines":["u"]},{"start":{"row":18,"column":3},"end":{"row":18,"column":4},"action":"insert","lines":["t"]},{"start":{"row":18,"column":4},"end":{"row":18,"column":5},"action":"insert","lines":["e"]}],[{"start":{"row":18,"column":5},"end":{"row":18,"column":6},"action":"insert","lines":[":"],"id":21},{"start":{"row":18,"column":6},"end":{"row":18,"column":7},"action":"insert","lines":[":"]}],[{"start":{"row":18,"column":7},"end":{"row":18,"column":8},"action":"insert","lines":["g"],"id":22},{"start":{"row":18,"column":8},"end":{"row":18,"column":9},"action":"insert","lines":["e"]},{"start":{"row":18,"column":9},"end":{"row":18,"column":10},"action":"insert","lines":["t"]}],[{"start":{"row":18,"column":10},"end":{"row":18,"column":63},"action":"insert","lines":["('team/{team_id}', [TeamsController::class, 'join']);"],"id":23}],[{"start":{"row":18,"column":63},"end":{"row":19,"column":0},"action":"insert","lines":["",""],"id":24}],[{"start":{"row":19,"column":0},"end":{"row":19,"column":65},"action":"insert","lines":["Route::get('teamedit/{team}', [TeamsController::class, 'edit']); "],"id":25}],[{"start":{"row":19,"column":65},"end":{"row":20,"column":0},"action":"insert","lines":["",""],"id":26}],[{"start":{"row":20,"column":0},"end":{"row":20,"column":65},"action":"insert","lines":["Route::post('teams/update',  [TeamsController::class, 'update']);"],"id":27}],[{"start":{"row":20,"column":65},"end":{"row":21,"column":0},"action":"insert","lines":["",""],"id":28}],[{"start":{"row":21,"column":0},"end":{"row":21,"column":13},"action":"insert","lines":["Route:;get();"],"id":29}],[{"start":{"row":21,"column":6},"end":{"row":21,"column":7},"action":"remove","lines":[";"],"id":30}],[{"start":{"row":21,"column":6},"end":{"row":21,"column":7},"action":"insert","lines":[":"],"id":31}],[{"start":{"row":21,"column":11},"end":{"row":21,"column":13},"action":"insert","lines":["''"],"id":32}],[{"start":{"row":21,"column":12},"end":{"row":21,"column":13},"action":"insert","lines":["t"],"id":33},{"start":{"row":21,"column":13},"end":{"row":21,"column":14},"action":"insert","lines":["e"]},{"start":{"row":21,"column":14},"end":{"row":21,"column":15},"action":"insert","lines":["a"]},{"start":{"row":21,"column":15},"end":{"row":21,"column":16},"action":"insert","lines":["m"]},{"start":{"row":21,"column":16},"end":{"row":21,"column":17},"action":"insert","lines":["s"]}],[{"start":{"row":21,"column":17},"end":{"row":21,"column":18},"action":"insert","lines":["/"],"id":34}],[{"start":{"row":21,"column":18},"end":{"row":21,"column":19},"action":"insert","lines":["{"],"id":35},{"start":{"row":21,"column":19},"end":{"row":21,"column":20},"action":"insert","lines":["}"]}],[{"start":{"row":21,"column":19},"end":{"row":21,"column":20},"action":"insert","lines":["t"],"id":36},{"start":{"row":21,"column":20},"end":{"row":21,"column":21},"action":"insert","lines":["e"]},{"start":{"row":21,"column":21},"end":{"row":21,"column":22},"action":"insert","lines":["a"]}],[{"start":{"row":21,"column":19},"end":{"row":21,"column":22},"action":"remove","lines":["tea"],"id":37},{"start":{"row":21,"column":19},"end":{"row":21,"column":24},"action":"insert","lines":["teams"]}],[{"start":{"row":21,"column":23},"end":{"row":21,"column":24},"action":"remove","lines":["s"],"id":38}],[{"start":{"row":21,"column":25},"end":{"row":21,"column":26},"action":"insert","lines":[","],"id":39}],[{"start":{"row":21,"column":26},"end":{"row":21,"column":27},"action":"insert","lines":[" "],"id":40}],[{"start":{"row":21,"column":27},"end":{"row":21,"column":29},"action":"insert","lines":["[]"],"id":41}],[{"start":{"row":21,"column":28},"end":{"row":21,"column":29},"action":"insert","lines":["T"],"id":42},{"start":{"row":21,"column":29},"end":{"row":21,"column":30},"action":"insert","lines":["e"]}],[{"start":{"row":21,"column":28},"end":{"row":21,"column":30},"action":"remove","lines":["Te"],"id":43},{"start":{"row":21,"column":28},"end":{"row":21,"column":43},"action":"insert","lines":["TeamsController"]}],[{"start":{"row":21,"column":43},"end":{"row":21,"column":44},"action":"insert","lines":[":"],"id":44},{"start":{"row":21,"column":44},"end":{"row":21,"column":45},"action":"insert","lines":[":"]},{"start":{"row":21,"column":45},"end":{"row":21,"column":46},"action":"insert","lines":["c"]}],[{"start":{"row":21,"column":46},"end":{"row":21,"column":47},"action":"insert","lines":["l"],"id":45},{"start":{"row":21,"column":47},"end":{"row":21,"column":48},"action":"insert","lines":["a"]},{"start":{"row":21,"column":48},"end":{"row":21,"column":49},"action":"insert","lines":["s"]},{"start":{"row":21,"column":49},"end":{"row":21,"column":50},"action":"insert","lines":["s"]},{"start":{"row":21,"column":50},"end":{"row":21,"column":51},"action":"insert","lines":[","]}],[{"start":{"row":21,"column":51},"end":{"row":21,"column":52},"action":"insert","lines":[" "],"id":46}],[{"start":{"row":21,"column":52},"end":{"row":21,"column":54},"action":"insert","lines":["''"],"id":47}],[{"start":{"row":21,"column":53},"end":{"row":21,"column":54},"action":"insert","lines":["s"],"id":48},{"start":{"row":21,"column":54},"end":{"row":21,"column":55},"action":"insert","lines":["h"]},{"start":{"row":21,"column":55},"end":{"row":21,"column":56},"action":"insert","lines":["o"]},{"start":{"row":21,"column":56},"end":{"row":21,"column":57},"action":"insert","lines":["w"]}],[{"start":{"row":21,"column":0},"end":{"row":21,"column":61},"action":"remove","lines":["Route::get('teams/{team}', [TeamsController::class, 'show']);"],"id":50},{"start":{"row":21,"column":0},"end":{"row":21,"column":61},"action":"insert","lines":["Route::get('teams/{team}', [TeamsController::class, 'show']);"]}],[{"start":{"row":21,"column":61},"end":{"row":22,"column":0},"action":"insert","lines":["",""],"id":51}],[{"start":{"row":21,"column":61},"end":{"row":22,"column":0},"action":"remove","lines":["",""],"id":52}]]},"ace":{"folds":[],"scrolltop":236.5,"scrollleft":0,"selection":{"start":{"row":21,"column":61},"end":{"row":21,"column":61},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":5,"state":"php-comment","mode":"ace/mode/php"}},"timestamp":1659426427140,"hash":"ff77b8a37a4fc8f5a4bd8d90f1127fdab67bddec"}