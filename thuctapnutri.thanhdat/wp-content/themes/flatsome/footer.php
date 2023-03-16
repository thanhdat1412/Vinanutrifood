<?php
/**
 * The template for displaying the footer.
 *
 * @package          Flatsome\Templates
 * @flatsome-version 3.16.0
 */

global $flatsome_opt;
?>

</main>

<footer id="footer" class="footer-wrapper">

	<?php do_action('flatsome_footer'); ?>

</footer>

</div>

<?php wp_footer(); ?>
<style>.float-contact {
position: fixed;
bottom: 40px;
left: 20px;
z-index: 99999;
}
.chat-zalo {
background: #60b940;
border-radius: 20px;
padding: 0 18px;
color: white;
display: block;
margin-bottom: 6px;
}
.chat-face {
background: #125c9e;
border-radius: 20px;
padding: 0 18px;
color: white;
display: block;
margin-bottom: 6px;
}
.float-contact .hotline {
background: #007f3d!important;
border-radius: 20px;
padding: 0 18px;
color: white;
display: block;
margin-bottom: 6px;
}
.chat-zalo a, .chat-face a, .hotline a {
font-size: 15px;
color: white;
font-weight: 400;
text-transform: none;
line-height: 0;
}
	.float-contact .chat-zalo:hover, .float-contact .chat-face:hover, .float-contact .hotline:hover{
box-shadow: -3px 2px 2px 1px #121111;
}
@media (max-width: 549px){
.float-contact{
/* display:none */
}
}</style>
<div class="float-contact">
<button class="chat-zalo">
<a href="http://zalo.me/0945.887.xxx">Chat Zalo</a>
</button>
<button class="chat-face">
<a href="https://www.facebook.com/truongthanhdat00001/">Chat Facebook</a>
</button>
<button class="hotline">
<a href="tel:0945.887.xxx">Hotline: 0945.887.xxx</a>
</button>
</div>

</body>
</html>
