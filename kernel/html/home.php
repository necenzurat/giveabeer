 <div class="left">
        <form name="form" action="submit" method="POST">
            <p class="input">
                <label for="user">Username:</label>
                <input type="text" name="user" id="user" class="input"/><br/>
                <span class="message">Your username, for something like<br/><em id="target-url">giveabeer.com/username</em>
                <br />(only letters, numbers and _ please)</span>
            </p>

            <p class="input">
                <label for="mail">Mail:</label>
                <input type="text" name="mail" id="mail" class="input"/>
                <span class="message">The email needs to be associated with a <a
                        href="https://www.paypal.com/ro/mrb/pal=CNRCVGX9JJLC6" rel="nofollow">PayPal Account</a>. Read More</span>
            </p>

            <p class="input">
                <label for="submit">and then </label>
                <input type="submit" value="Go!" name="sumit" id="submit" class="button"/>
            </p>
        </form>
    </div>
<script type="text/javascript"> 
    $("#user").keyup(function(event) {        
        $("#target-url").html("giveabeer.com/" + $($("#user")[0]).val());
    });
    $("#user").keypress(function(event) {
      var x = String.fromCharCode ( event.which || event.keyCode );
        if ( x.match(/[^a-zA-Z0-9_]/) ) { 
            event.stopPropagation();
            return false;
        }
    });
</script> 

    <div class="right">
<iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FGiveabeercom%2F165111556857758&amp;width=300&amp;colorscheme=light&amp;connections=10&amp;stream=false&amp;header=false&amp;height=255&width=464" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:464px; height:255px;" allowTransparency="true"></iframe>
</div>
