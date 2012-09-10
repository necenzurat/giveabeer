<? 
header('Content-Type: text/xml');
ob_start ("ob_gzhandler");
header("Content-Encoding: gzip");
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>";
$date = date("Y-n-j");
?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"> 
   <url> 
      <loc>http://giveabeer.com/</loc> 
      <lastmod><?echo $date;?></lastmod> 
      <changefreq>always</changefreq>
      <priority>1.0</priority> 
   </url>
<?
$query = query("SELECT * FROM `beggers` ORDER BY `beggers`.`user` ASC"); //LIMIT 0, 30

while($row = mysql_fetch_array($query)){
  echo "\n   <url>
      <loc>";
  $user = $row["user"];
  echo "http://giveabeer.com/$user";
  echo "</loc>\n";
  echo "      <changefreq>always</changefreq>
      <lastmod>$date</lastmod>
      <priority>0.5</priority>\n   </url>\n";
}
?>
</urlset>