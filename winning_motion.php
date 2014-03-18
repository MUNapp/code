<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8" />
    <title>ASFGMUN</title>
    <meta name="keywords" content="tech layer, free template, one page layout" />
    <meta name="description" content="Tech Layer is free one-page template layout by templatemo.com using colorful navigations and darkgray background." />
    <link href="templatemo_style.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.scrollTo-min.js"></script>
    <script type="text/javascript" src="js/jquery.localscroll-min.js"></script>
    <script type="text/javascript" src="js/init.js"></script>
    <link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" />
    <script type="text/JavaScript" src="js/slimbox2.js"></script>
    <script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script> </head>
  <body>
    <div id="templatemo_header_wrapper">
      <div id="templatemo_header">
        <div id="site_title"><center><img width="50%" height="50%" src="logomun.gif" /><?php $echo = file_get_contents(committee_name.txt); echo "$echo"?></div>
        
      </div>
    </div>
    <div id="templatemo_main_wrapper">
      <div id="templatemo_main">
        <div id="content">
          <div id="home" class="section">
            <table width="85%" border="1" align="center">
              <tbody>
                <tr>
                  <td>
				  <FORM METHOD="LINK" ACTION="index.php">
<INPUT TYPE="submit" VALUE="HOME">
</FORM>
<center><h2>Current Motion</h2></center>
                    <h3>
                      <?php $winner = $_POST['winner']; echo "$winner";?> </h3>
                    <br />
                    <br />
                    <br />
                    <br />
                    <div style="margin: 0 199px;"> <param value="http://www.online-stopwatch.com/swf/online-stopwatch.swf"

                        name="movie" /><param value="high" name="quality" /><param

                        value="true" name="menu" /><embed width="400" height="220"

                        type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer"

                        quality="high" src="http://www.online-stopwatch.com/swf/online-stopwatch.swf" />
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
            <br />
            <!-- END of Home --> </div>
          <div class="section section_with_padding" id="about">
            <h1>About</h1>
            <div class="half left">
              <div class="img_border img_fl"> <a href="#gallery"><img src="images/templatemo_image_02.jpg"

                    alt="image 2" /></a> </div>
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
                <li><a href="https://www.facebook.com/templatemo" class="facebook">Facebook</a></li>
                <li><a href="#" class="flickr">Flickr</a></li>
                <li><a href="#" class="skype">Skype</a></li>
                <li><a href="#" class="twitter">Twitter</a></li>
                <li><a href="#" class="youtube">Youtube</a></li>
                <li><a href="#" class="vimeo">Vimeo</a></li>
              </ul>
            </div>
            <a href="#home" class="home_btn">home</a> <a href="#home" class="page_nav_btn previous">Previous</a>
            <a href="#services" class="page_nav_btn next">Next</a> </div>
          <!-- END of About -->
          <div class="section section_with_padding" id="services">
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
              <div class="img_border img_nom"> <a href="#gallery"><img src="images/templatemo_image_01.jpg"

                    alt="image 1" /></a> </div>
              <p>Class aptent taciti sociosqu ad litora torquent per conubia
                nostra, per inceptos himenaeos. Nam mauris ipsum, pulvinar sit
                amet varius at, placerat ut felis. Curabitur consectetur aliquam
                purus, eget faucibus est ultrices iaculis. Suspendisse luctus
                mauris et erat imperdiet rutrum. Visit <a href="#gallery"><strong>
                    Gallery Page</strong></a> for more info.<br />
                <br />
                All photos are provided by <a href="http://www.photovaco.com" target="_blank">photovaco</a>
                website.<br />
                Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow">XHTML</a>
                &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer"

                  rel="nofollow">CSS</a></p>
            </div>
            <a href="#home" class="home_btn">home</a> <a href="#about" class="page_nav_btn previous">Previous</a>
            <a href="#gallery" class="page_nav_btn next">Next</a> </div>
          <!-- END of Services -->
          <div class="section" id="gallery">
            <ul>
              <li><a href="images/gallery/01-l.jpg" rel="lightbox[gallery]"><img

                    src="images/gallery/01.jpg" alt="image 1" /></a></li>
              <li><a href="images/gallery/02-l.jpg" rel="lightbox[gallery]"><img

                    src="images/gallery/02.jpg" alt="image 2" /></a></li>
              <li><a href="images/gallery/03-l.jpg" rel="lightbox[gallery]"><img

                    src="images/gallery/03.jpg" alt="image 3" /></a></li>
              <li><a href="images/gallery/04-l.jpg" rel="lightbox[gallery]"><img

                    src="images/gallery/04.jpg" alt="image 4" /></a></li>
              <li><a href="images/gallery/05-l.jpg" rel="lightbox[gallery]"><img

                    src="images/gallery/05.jpg" alt="image 5" /></a></li>
              <li><a href="images/gallery/06-l.jpg" rel="lightbox[gallery]"><img

                    src="images/gallery/06.jpg" alt="image 6" /></a></li>
              <li><a href="images/gallery/07-l.jpg" rel="lightbox[gallery]"><img

                    src="images/gallery/07.jpg" alt="image 7" /></a></li>
              <li><a href="images/gallery/08-l.jpg" rel="lightbox[gallery]"><img

                    src="images/gallery/08.jpg" alt="image 8" /></a></li>
              <li><a href="images/gallery/09-l.jpg" rel="lightbox[gallery]"><img

                    src="images/gallery/09.jpg" alt="image 9" /></a></li>
              <li><a href="images/gallery/10-l.jpg" rel="lightbox[gallery]"><img

                    src="images/gallery/10.jpg" alt="image 10" /></a></li>
              <li><a href="images/gallery/11-l.jpg" rel="lightbox[gallery]"><img

                    src="images/gallery/11.jpg" alt="image 11" /></a></li>
              <li><a href="images/gallery/12-l.jpg" rel="lightbox[gallery]"><img

                    src="images/gallery/12.jpg" alt="image 12" /></a></li>
              <li><a href="images/gallery/13-l.jpg" rel="lightbox[gallery]"><img

                    src="images/gallery/03.jpg" alt="image 13" /></a></li>
              <li><a href="images/gallery/14-l.jpg" rel="lightbox[gallery]"><img

                    src="images/gallery/14.jpg" alt="image 14" /></a></li>
              <li><a href="images/gallery/15-l.jpg" rel="lightbox[gallery]"><img

                    src="images/gallery/15.jpg" alt="image 15" /></a></li>
              <li><a href="images/gallery/16-l.jpg" rel="lightbox[gallery]"><img

                    src="images/gallery/16.jpg" alt="image 16" /></a></li>
            </ul>
            <a href="#home" class="home_btn">home</a> <a href="#services" class="page_nav_btn previous">Previous</a>
            <a href="#testimonial" class="page_nav_btn next">Next</a> </div>
          <!-- END of Gallery -->
          <div class="section section_with_padding" id="testimonial">
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
            <a href="#home" class="home_btn">home</a> <a href="#gallery" class="page_nav_btn previous">Previous</a>
            <a href="#contact" class="page_nav_btn next">Next</a> </div>
          <!-- END of Testimonial -->
          <div class="section section_with_padding" id="contact">
            <h1>Contact</h1>
            <div class="half left">
              <h4>Mailing Address</h4>
              220-440 Nullam lacus diam,<br />
              Pulvinar sit amet convallis eget, 10220<br />
              Lorem ipsum dolor<br />
              <br />
              Email: info[at]company.com | Phone: 020-010-0101<br />
              <div class="img_nom img_border"><span></span> <iframe width="320"

                  scrolling="no" height="160" frameborder="0" marginheight="0" marginwidth="0"

                  src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=new+york+central+park&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=60.158465,135.263672&amp;vpsrc=6&amp;ie=UTF8&amp;hq=&amp;hnear=Central+Park,+New+York&amp;t=m&amp;ll=40.769606,-73.973372&amp;spn=0.014284,0.033023&amp;z=14&amp;output=embed"></iframe>
              </div>
              <a href="#home" class="home_btn">home</a> <a href="#testimonial"

                class="page_nav_btn previous">Previous</a> <a href="#home" class="page_nav_btn next">Next</a>
            </div>
            <!-- END of Contact -->
            <div class="half right">
              <h4>Quick Contact</h4>
              <p>Nullam a tortor est, congue fermentum nisi. Maecenas nulla
                nulla, eu volutpat euismod, scelerisque ut dui.</p>
              <div id="contact_form">
                <form method="post" name="contact" action="#contact">
                  <div class="left"> <label for="author">Name:</label> <input

                      type="text" id="author" name="author" class="required input_field" />
                  </div>
                  <div class="right"> <label for="email">Email:</label> <input

                      type="text" id="email" name="email" class="validate-email required input_field" />
                  </div>
                  <label for="text">Message:</label> <textarea id="text" name="text"

                    rows="0" cols="0" class="required"></textarea> <input type="submit"

                    class="submit_btn float_l" name="submit" id="submit" value="Send" />
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="templatemo_footer_wrapper">
        <div id="templatemo_footer">
          <p>Copyright © 2072 <a href="#">Company Name</a> | <a rel="nofollow"

              href="http://www.templatemo.com/preview/templatemo_375_tech_layer">Tech
              Layer</a> by <a href="http://www.templatemo.com" rel="nofollow">templatemo</a></p>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="js/logging.js"></script>
  </body>
</html>
