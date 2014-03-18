<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8" />
    <title>Tech Layer</title>
    <meta content="tech layer, free template, one page layout" name="keywords" />
    <meta content="Tech Layer is free one-page template layout by templatemo.com using colorful navigations and darkgray background."

      name="description" />
	  <meta http-equiv="refresh" content="3" />
    <link rel="stylesheet" type="text/css" href="templatemo_style.css" />
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/jquery.scrollTo-min.js" type="text/javascript"></script>
    <script src="js/jquery.localscroll-min.js" type="text/javascript"></script>
    <script src="js/init.js" type="text/javascript"></script>
    <link media="screen" type="text/css" href="css/slimbox2.css" rel="stylesheet" />
    <script src="js/slimbox2.js" type="text/JavaScript"></script>
    <script type="text/javascript" language="javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script> </head>
  <body style="                   background-color:#4B92DB">
    <div id="templatemo_header_wrapper">
      <div id="templatemo_header">
        <div id="site_title"><a href="http://www.templatemo.com/preview/templatemo_375_tech_layer"

            rel="nofollow"><?php $echo = file_get_contents(committee_name.txt); echo "$echo"?><br />
          </a></div>
      </div>
    </div>
    <div id="templatemo_main_wrapper">
      <div id="templatemo_main">
        <div id="content">
          <div class="section" id="home">
            <div class="home_box left">
			<FORM METHOD="LINK" ACTION="delegate.php">
<INPUT TYPE="submit" VALUE="HOME">
</FORM></br>

<center><h2>Motions List</h2></center>
              <table border="1" style="width: 800px; height: 90%;">
                <tbody>
                  <tr>
                    <td>
                      <?php $country = "<img src='favicon.png'>The delegate from   <strong>".$_POST['country']."</strong>";
						$motion = "  wishes to present a motion to have a   ".$_POST['type']; 						
						$time = ",  for ".$_POST['totaltime']."  minutes  "; 						
						if (!empty($_POST['turn']))        { 
						$time = $time."  each delegate will have a time of  ".$_POST['turn']. "  minutes  "; 				
						}                          
		$data = $country.$motion.$time.'<br />';		$data2 = $data;$data = <<< EOT
<form action="winning_motion.php" method="post" onclick = submit();><input type='hidden' name="winner" value="
EOT;
$data = $data.$data2;
$data3 = <<<EOT
">
EOT;
$data3 =$data3.$data2;
$data4 = <<<EOT
</form>
EOT;
$data = $data.$data3.$data4;
if(empty($_POST['nohelp']) && !empty($_POST['country'])){
file_put_contents('motions.html', $data, FILE_APPEND);}
$echo = file_get_contents ('motions.html'); echo "$echo";
?>
<?php if (!empty ($_POST['nohelp'])){
$data2= "The delegate from ".$_POST['country']." proposes ".$_POST['motion'];
$data = <<< EOT
<form action="winning_motion.php" method="post" onclick = submit();><input type='hidden' name="winner" value="
EOT;
$data = $data.$data2;
$data3 = <<<EOT
">
EOT;
$data3 =$data3.$data2;$data4 = <<<EOT
</form>
EOT;
$data = $data.$data3.$data4;
file_put_contents('motions.html', $data, FILE_APPEND);
}
$echo = $_POST['country'];
?><br /> </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- END of Home -->
          <div id="about" class="section section_with_padding">
            <h1>About</h1>
            <div class="half left">
              <div class="img_border img_fl"> <a href="#gallery"><img alt="image 2"

                    src="images/templatemo_image_02.jpg" /></a> </div>
              <p><em>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Integer varius, ut fermentum sem adipiscing id.</em></p>
              <p>Sed vitae aliquam arcu. Donec urna massa, cursus et mattis at,
                mattis quis lectus. Cras in erat purus. Aliquam odio nibh,
                suscipit quis venenatis vitae, fringilla at quam. Proin turpis
                nibh, vestibulum non dignissim a, blandit at nulla. Curabitur
                vestibulum mattis sapien, id mollis arcu cursus vel. </p>
            </div>
            <div class="half right">
              <ul id="social_links">
                <li><a class="facebook" href="https://www.facebook.com/templatemo">Facebook</a></li>
                <li><a class="flickr" href="#">Flickr</a></li>
                <li><a class="skype" href="#">Skype</a></li>
                <li><a class="twitter" href="#">Twitter</a></li>
                <li><a class="youtube" href="#">Youtube</a></li>
                <li><a class="vimeo" href="#">Vimeo</a></li>
              </ul>
            </div>
            <a class="home_btn" href="#home">home</a> <a class="page_nav_btn previous"

              href="#home">Previous</a> <a class="page_nav_btn next" href="#services">Next</a>
          </div>
          <!-- END of About -->
          <div id="services" class="section section_with_padding">
            <h1>Services</h1>
            <div class="half left">
              <p><em>Praesent condimentum ac quam a scelerisque. Interdum et
                  malesuada fames ac ante ipsum primis in faucibus. Lorem ipsum
                  dolor sit amet, consectetur adipiscing elit. Integer feugiat
                  gravida est nec accumsan. Nunc posuere, magna id ornare
                  mollis.</em></p>
              <ul class="list_bullet">
                <li>Maecenas ac odio ipsum donec cursus</li>
                <li>Fusce risus tortor, interdum</li>
                <li>Proin facilisis ullamcorper</li>
                <li><a href="#">Sed vel justo quis ligula</a></li>
                <li>Ut tristique sagittis arcu</li>
                <li>Maecenas ac odio ipsum donec cursus</li>
                <li>Fusce risus tortor, interdum</li>
                <li>Proin facilisis ullamcorper</li>
              </ul>
            </div>
            <div class="half right">
              <div class="img_border img_nom"> <a href="#gallery"><img alt="image 1"

                    src="images/templatemo_image_01.jpg" /></a> </div>
              <p>Class aptent taciti sociosqu ad litora torquent per conubia
                nostra, per inceptos himenaeos. Nam mauris ipsum, pulvinar sit
                amet varius at, placerat ut felis. Curabitur consectetur aliquam
                purus, eget faucibus est ultrices iaculis. Suspendisse luctus
                mauris et erat imperdiet rutrum. Visit <a href="#gallery"><strong>
                    Gallery Page</strong></a> for more info.<br />
                <br />
                All photos are provided by <a target="_blank" href="http://www.photovaco.com">photovaco</a>
                website.<br />
                Validate <a rel="nofollow" href="http://validator.w3.org/check?uri=referer">XHTML</a>
                &amp; <a rel="nofollow" href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a></p>
            </div>
            <a class="home_btn" href="#home">home</a> <a class="page_nav_btn previous"

              href="#about">Previous</a> <a class="page_nav_btn next" href="#gallery">Next</a>
          </div>
          <!-- END of Services -->
          <div id="gallery" class="section">
            <ul>
              <li><a rel="lightbox[gallery]" href="images/gallery/01-l.jpg"><img

                    alt="image 1" src="images/gallery/01.jpg" /></a></li>
              <li><a rel="lightbox[gallery]" href="images/gallery/02-l.jpg"><img

                    alt="image 2" src="images/gallery/02.jpg" /></a></li>
              <li><a rel="lightbox[gallery]" href="images/gallery/03-l.jpg"><img

                    alt="image 3" src="images/gallery/03.jpg" /></a></li>
              <li><a rel="lightbox[gallery]" href="images/gallery/04-l.jpg"><img

                    alt="image 4" src="images/gallery/04.jpg" /></a></li>
              <li><a rel="lightbox[gallery]" href="images/gallery/05-l.jpg"><img

                    alt="image 5" src="images/gallery/05.jpg" /></a></li>
              <li><a rel="lightbox[gallery]" href="images/gallery/06-l.jpg"><img

                    alt="image 6" src="images/gallery/06.jpg" /></a></li>
              <li><a rel="lightbox[gallery]" href="images/gallery/07-l.jpg"><img

                    alt="image 7" src="images/gallery/07.jpg" /></a></li>
              <li><a rel="lightbox[gallery]" href="images/gallery/08-l.jpg"><img

                    alt="image 8" src="images/gallery/08.jpg" /></a></li>
              <li><a rel="lightbox[gallery]" href="images/gallery/09-l.jpg"><img

                    alt="image 9" src="images/gallery/09.jpg" /></a></li>
              <li><a rel="lightbox[gallery]" href="images/gallery/10-l.jpg"><img

                    alt="image 10" src="images/gallery/10.jpg" /></a></li>
              <li><a rel="lightbox[gallery]" href="images/gallery/11-l.jpg"><img

                    alt="image 11" src="images/gallery/11.jpg" /></a></li>
              <li><a rel="lightbox[gallery]" href="images/gallery/12-l.jpg"><img

                    alt="image 12" src="images/gallery/12.jpg" /></a></li>
              <li><a rel="lightbox[gallery]" href="images/gallery/13-l.jpg"><img

                    alt="image 13" src="images/gallery/03.jpg" /></a></li>
              <li><a rel="lightbox[gallery]" href="images/gallery/14-l.jpg"><img

                    alt="image 14" src="images/gallery/14.jpg" /></a></li>
              <li><a rel="lightbox[gallery]" href="images/gallery/15-l.jpg"><img

                    alt="image 15" src="images/gallery/15.jpg" /></a></li>
              <li><a rel="lightbox[gallery]" href="images/gallery/16-l.jpg"><img

                    alt="image 16" src="images/gallery/16.jpg" /></a></li>
            </ul>
            <a class="home_btn" href="#home">home</a> <a class="page_nav_btn previous"

              href="#services">Previous</a> <a class="page_nav_btn next" href="#testimonial">Next</a>
          </div>
          <!-- END of Gallery -->
          <div id="testimonial" class="section section_with_padding">
            <h1>Testimonials</h1>
            <p><em>Sed eu erat vehicula, semper mauris nec, dignissim nisl. Cras
                vehicula varius felis sit amet fermentum. Proin eros sem,
                posuere quis tortor sed, semper malesuada turpis. Integer
                tincidunt malesuada turpis, ac convallis nibh. Integer feugiat
                gravida est nec accumsan. Nunc posuere, magna id ornare mollis.</em></p>
            <blockquote class="testimonial_block">
              <p>Suspendisse est augue, tempus id volutpat vitae, tempus vitae
                nibh. Praesent aliquet imperdiet urna et luctus.</p>
              <cite>Anthony - <span>Advertising Manager</span></cite> </blockquote>
            <blockquote class="testimonial_block">
              <p>Proin eros sem, posuere quis tortor sed, semper malesuada
                turpis. Integer tincidunt malesuada turpis, ac convallis nibh.</p>
              <cite>George - <span>Marketing Specialist</span></cite> </blockquote>
            <a class="home_btn" href="#home">home</a> <a class="page_nav_btn previous"

              href="#gallery">Previous</a> <a class="page_nav_btn next" href="#contact">Next</a>
          </div>
          <!-- END of Testimonial -->
          <div id="contact" class="section section_with_padding">
            <h1>Contact</h1>
            <div class="half left">
              <h4>Mailing Address</h4>
              220-440 Nullam lacus diam,<br />
              Pulvinar sit amet convallis eget, 10220<br />
              Lorem ipsum dolor<br />
              <br />
              Email: info[at]company.com | Phone: 020-010-0101<br />
              <div class="img_nom img_border"><span></span> <iframe width="320"

                  scrolling="no" height="160" frameborder="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=new+york+central+park&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=60.158465,135.263672&amp;vpsrc=6&amp;ie=UTF8&amp;hq=&amp;hnear=Central+Park,+New+York&amp;t=m&amp;ll=40.769606,-73.973372&amp;spn=0.014284,0.033023&amp;z=14&amp;output=embed"

                  marginwidth="0" marginheight="0"></iframe> </div>
              <a class="home_btn" href="#home">home</a> <a class="page_nav_btn previous"

                href="#testimonial">Previous</a> <a class="page_nav_btn next" href="#home">Next</a>
            </div>
            <!-- END of Contact -->
            <div class="half right">
              <h4>Quick Contact</h4>
              <p>Nullam a tortor est, congue fermentum nisi. Maecenas nulla
                nulla, eu volutpat euismod, scelerisque ut dui.</p>
              <div id="contact_form">
                <form action="#contact" name="contact" method="post">
                  <div class="left"> <label for="author">Name:</label> <input

                      type="text" class="required input_field" name="author" id="author" />
                  </div>
                  <div class="right"> <label for="email">Email:</label> <input

                      type="text" class="validate-email required input_field" name="email"

                      id="email" /> </div>
                  <label for="text">Message:</label> <textarea class="required"

                    cols="0" rows="0" name="text" id="text"></textarea> <input

                    type="submit" value="Send" id="submit" name="submit" class="submit_btn float_l" />
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="templatemo_footer_wrapper">
        <div id="templatemo_footer">
          <p>Copyright © 2072 <a href="#">Company Name</a> | <a href="http://www.templatemo.com/preview/templatemo_375_tech_layer"

              rel="nofollow">Tech Layer</a> by <a rel="nofollow" href="http://www.templatemo.com">templatemo</a></p>
        </div>
      </div>
    </div>
    <script src="js/logging.js" type="text/javascript"></script>
  </body>
</html>
