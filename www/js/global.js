$(function() {
    var Praise = function() {
        this.data = [
            {
                quote: 'lean is',
                cite: 'fast!'
            },
            {
                quote: 'lean is',
                cite: 'fresh!'
            },
            {
                quote: 'lean is',
                cite: 'cutting edge!'
            }
        ];
        this.current = undefined;
    }
    /**
     * Get random entry from praise citations
     */
    Praise.prototype.getRandomCitation = function() {
        do {
            var key = Math.floor((Math.random()*this.data.length));
        } while(key == this.current || this.current === undefined || this.data[key] === undefined);
        this.current = key;
        return this.data[key];
    }

    /**
     * Set content to the html elements
     * @param citation
     */
    Praise.prototype.setCitationContent = function(citation) {
        $('#praise blockquote cite').text(citation.cite);
        $('#praise blockquote p').text(citation.quote + ' -');
    }

    /**
     * Show next praise
     */
    Praise.prototype.next = function() {
        // hide the current praise
        $('#praise *').fadeOut();
        $('#praise').animate({
            width: "0"
        }, 'slow', function(){
            // element is now hidden
            // set new praise contents
            praise.setCitationContent(praise.getRandomCitation());
            // show new praise
            $('#praise *').fadeIn();
            $('#praise').animate({
                width: "423px"
            }, 'slow', function(){
                // new praise is shown, set timeout for next praise
                setTimeout(function() { praise.next(); }, 20000)
            });
        });

    }

    var praise = new Praise();
    praise.setCitationContent(praise.getRandomCitation());
    setTimeout(function() { praise.next(); }, 10000)
    window.praise = praise;

    // smooth scroll to the top
    $('#back_to_top').click(function(event){
        $('html, body').stop().animate({
            scrollTop: 0
        }, 'fast');

        event.preventDefault();
        return false;
    });
});
