<div style="text-align: center;">
<?
if ($done[1])
{
$beers = query("SELECT beers FROM `beggers` WHERE `user` = '$user'");
$beers = mysql_fetch_array($beers);
$beers = $beers[0];
echo "<br /><br /><br /><br /><br />
<strong>$user</strong> thanks you for the beer<br /><br />and has in total <strong>$beers</strong> beers / sixpacks / kegs<br /><br />You could give him another beer at <br /><br /><a href=\"http://giveabeer.com/$user\">http://giveabeer.com/$user</a><br /><br /><br /><br /><br /><br /><br /><br />" ;
}
else
{?>
<h3>Give a Beer to</h3> <h1><?=$user?></h1>
 <br /><br /><a href="http://twitter.com/share" class="twitter-share-button" data-url="http://giveabeer.com/<?=$user?>?utm_source=Twitter&utm_medium=share%2Bbutton&utm_campaign=Social%2BMedia" data-text="Donate a beer to <?=$user?> on @giveabeer" data-count="horizontal">Tweet</a>
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>

<br /><br />

 <div class="begging">
        <div class="beg">
		<p>Give a beer&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
		   <form action="go" method="post">
                <input type="hidden" name="who" value="<?=$user?>">
                <input type="hidden" name="what" value="beer"/>
                <input type="image" src="gfx/pint.png" border="0" name="submit" title="Give a Beer"
                       alt="Give a Beer via PayPal">
            </form>
        </div>

        <div class="beg">
		<p>Give a six-pack</p>
            <form action="go" method="post">
                <input type="hidden" name="who" value="<?=$user?>">
                <input type="hidden" name="what" value="sixpack"/>
                <input type="image" src="gfx/six-pack.png" border="0" name="submit" title="Give a six-pack"
                       alt="Give a Beer via PayPal">
            </form>
        </div>

        <div class="beg">
		<p>or a Keg</p>
            <form action="go" method="post">
                <input type="hidden" name="who" value="<?=$user?>">
                <input type="hidden" name="what" value="keg"/>
                <input type="image" src="gfx/keg.png" border="0" name="submit" title="Give a keg"
                       alt="Give a Beer via PayPal">
            </form>
        </div>

    </div>
</div>
<?}?>