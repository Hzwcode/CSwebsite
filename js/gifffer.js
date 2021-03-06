var Gifffer = function() {
    var el, d = document, ga = 'getAttribute', sa = 'setAttribute';
    el = d.querySelectorAll('[data-gifffer]')[0];
    var createContainer = function(w, h, el) {
        var con = d.createElement('DIV'), cls = el[ga]('class'), id = el[ga]('id');
        cls ? con[sa]('class', el[ga]('class')) : null;
        id ? con[sa]('id', el[ga]('id')) : null;
//        con[sa]('style', 'position:relative;cursor:pointer;width:' + w + 'px;height:' + h + 'px;');
        con[sa]('style', 'position:relative;cursor:pointer;width: 100%;');
        // dom placement
        el.parentNode.replaceChild(con, el);
        return con;
    };

    var url, con, c, w, h, duration,play, gif, playing = false, isC, durationTimeout;
    url = el[ga]('data-gifffer');
    w = el[ga]('data-gifffer-width');
    h = el[ga]('data-gifffer-height');
    duration = el[ga]('data-gifffer-duration');
    el.style.display = 'block';
    c = document.createElement('canvas');
    isC = !!(c.getContext && c.getContext('2d'));
    if(w && h && isC) con = createContainer(w, h, el);
    el.onload = function() {
        if(isC) {
            w = w || el.width;
            h = h || el.height;
            // creating the container
            if(!con) con = createContainer(w, h, el);
            con[sa]('class', 'gif2');
            con.addEventListener('click', function() {
                clearTimeout(durationTimeout);
                if(!playing) {
                    playing = true;
                    gif = d.createElement('IMG');
//                    gif[sa]('style', 'width:' + w + 'px;height:' + h + 'px;');
                    gif[sa]('style', 'width: 100%;');
                    gif[sa]('data-uri', Math.floor(Math.random()*100000) + 1);
                    setTimeout(function() {
                        gif.src = url;
                    }, 0);                        
                    con.removeChild(c);
                    con.appendChild(gif);
                    if(parseInt(duration) > 0) {
                        durationTimeout = setTimeout(function() {
                            playing = false;
                            con.removeChild(gif);
                            con.appendChild(c);
                            gif = null;
                        }, duration);
                    }
                } else {
                    playing = false;
                    con.removeChild(gif);
                    con.appendChild(c);
                    gif = null;
                }
            });
            // canvas
            c.width = w;
            c.height = h;
            c.getContext('2d').drawImage(el, 0, 0, w, h);
            con.appendChild(c);
        }
    }
    el.src = url;
}