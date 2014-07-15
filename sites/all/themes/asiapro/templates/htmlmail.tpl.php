<?php

/**
 * @file
 * Default template for HTML Mail
 *
 * ========================================================= Begin instructions.
 *
 * When formatting an email message with a given $module and $key, [1]HTML
 * Mail will use the first template file it finds from the following list:
 *  1. htmlmail--$module--$key.tpl.php
 *  2. htmlmail--$module.tpl.php
 *  3. htmlmail.tpl.php
 *
 * For each filename, [2]HTML Mail looks first in the chosen Email theme
 * directory, then in its own module directory, before proceeding to the
 * next filename.
 *
 * For example, if example_module sends mail with:
 * drupal_mail("example_module", "outgoing_message" ...)
 *
 *
 * the possible template file names would be:
 *  1. htmlmail--example_module--outgoing_message.tpl.php
 *  2. htmlmail--example_module.tpl.php
 *  3. htmlmail.tpl.php
 *
 * Template files are cached, so remember to clear the cache by visiting
 * admin/config/development/performance after changing any .tpl.php files.
 *
 * The following variables available in this template:
 *
 * $body
 *        The message body text.
 *
 * $module
 *        The first argument to [3]drupal_mail(), which is, by convention,
 *        the machine-readable name of the sending module.
 *
 * $key
 *        The second argument to [4]drupal_mail(), which should give some
 *        indication of why this email is being sent.
 *
 * $message_id
 *        The email message id, which should be equal to
 *        "{$module}_{$key}".
 *
 * $headers
 *        An array of email (name => value) pairs.
 *
 * $from
 *        The configured sender address.
 *
 * $to
 *        The recipient email address.
 *
 * $subject
 *        The message subject line.
 *
 * $body
 *        The formatted message body.
 *
 * $language
 *        The language object for this message.
 *
 * $params
 *        Any module-specific parameters.
 *
 * $template_name
 *        The basename of the active template.
 *
 * $template_path
 *        The relative path to the template directory.
 *
 * $template_url
 *        The absolute URL to the template directory.
 *
 * $theme
 *        The name of the Email theme used to hold template files. If the
 *        [5]Echo module is enabled this theme will also be used to
 *        transform the message body into a fully-themed webpage.
 *
 * $theme_path
 *        The relative path to the selected Email theme directory.
 *
 * $theme_url
 *        The absolute URL to the selected Email theme directory.
 *
 * $debug
 *        TRUE to add some useful debugging info to the bottom of the
 *        message.
 *
 * Other modules may also add or modify theme variables by implementing a
 * MODULENAME_preprocess_htmlmail(&$variables) [6]hook function.
 *
 * References
 *
 * 1. http://drupal.org/project/htmlmail
 * 2. http://drupal.org/project/htmlmail
 * 3. http://api.drupal.org/api/drupal/includes--mail.inc/function/drupal_mail/7
 * 4. http://api.drupal.org/api/drupal/includes--mail.inc/function/drupal_mail/7
 * 5. http://drupal.org/project/echo
 * 6. http://api.drupal.org/api/drupal/modules--system--theme.api.php/function/hook_preprocess_HOOK/7
 *
 * =========================================================== End instructions.
 */
  $my_site_path = $GLOBALS['base_url'] . $GLOBALS['base_path'];
  $template_name = basename(__FILE__);
  $current_path = realpath(NULL);
  $current_len = strlen($current_path);
  $template_path = realpath(dirname(__FILE__));
  if (!strncmp($template_path, $current_path, $current_len)) {
    $template_path = substr($template_path, $current_len + 1);
  }
  $template_url = url($template_path, array('absolute' => TRUE));
?>



<html style="background-color:#d3d3d3;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;" >
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
@media only screen and (max-device-width: 480px) {
table[class=w0], td[class=w0] {
	width: 0 !important;
}
table[class=w10], td[class=w10], img[class=w10] {
	width:10px !important;
}
table[class=w15], td[class=w15], img[class=w15] {
	width:5px !important;
}
table[class=w30], td[class=w30], img[class=w30] {
	width:10px !important;
}
table[class=w60], td[class=w60], img[class=w60] {
	width:10px !important;
}
table[class=w125], td[class=w125], img[class=w125] {
	width:80px !important;
}
table[class=w130], td[class=w130], img[class=w130] {
	width:55px !important;
}
table[class=w140], td[class=w140], img[class=w140] {
	width:90px !important;
}
table[class=w160], td[class=w160], img[class=w160] {
	width:180px !important;
}
table[class=w170], td[class=w170], img[class=w170] {
	width:100px !important;
}
table[class=w180], td[class=w180], img[class=w180] {
	width:80px !important;
}
table[class=w195], td[class=w195], img[class=w195] {
	width:80px !important;
}
table[class=w220], td[class=w220], img[class=w220] {
	width:80px !important;
}
table[class=w240], td[class=w240], img[class=w240] {
	width:180px !important;
}
table[class=w255], td[class=w255], img[class=w255] {
	width:185px !important;
}
table[class=w275], td[class=w275], img[class=w275] {
	width:135px !important;
}
table[class=w280], td[class=w280], img[class=w280] {
	width:135px !important;
}
table[class=w300], td[class=w300], img[class=w300] {
	width:140px !important;
}
table[class=w325], td[class=w325], img[class=w325] {
	width:95px !important;
}
table[class=w360], td[class=w360], img[class=w360] {
	width:140px !important;
}
table[class=w410], td[class=w410], img[class=w410] {
	width:180px !important;
}
table[class=w470], td[class=w470], img[class=w470] {
	width:200px !important;
}
table[class=w580], td[class=w580], img[class=w580] {
	width:280px !important;
}
table[class=w640], td[class=w640], img[class=w640] {
	width:300px !important;
}
table[class=hide], td[class=hide], img[class=hide], p[class=hide], span[class=hide], .hide {
	display:none !important;
}
table[class=h0], td[class=h0] {
	height: 0 !important;
}
p[class=footer-content-left] {
	text-align: center !important;
}
#headline p {
	font-size: 30px !important;
}
}
#outlook a {
	padding: 0;
}
body {
	width: 100% !important;
}
.ReadMsgBody {
	width: 100%;
}
.ExternalClass {
	width: 100%;
	display:block !important;
}
html, body {
	background-color: #d3d3d3;
	margin: 0;
	padding: 0;
}
img {
	height: auto;
	line-height: 100%;
	outline: none;
	text-decoration: none;
	display: block;
}
br, strong br, b br, em br, i br {
	line-height:100%;
}
h1, h2, h3, h4, h5, h6 {
	line-height: 100% !important;
	-webkit-font-smoothing: antialiased;
}
h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {
	color: blue !important;
}
h1 a:active, h2 a:active, h3 a:active, h4 a:active, h5 a:active, h6 a:active {
	color: red !important;
}
h1 a:visited, h2 a:visited, h3 a:visited, h4 a:visited, h5 a:visited, h6 a:visited {
	color: purple !important;
}
table td, table tr {
	border-collapse: collapse;
}
.yshortcuts, .yshortcuts a, .yshortcuts a:link, .yshortcuts a:visited, .yshortcuts a:hover, .yshortcuts a span {
	color: black;
	text-decoration: none !important;
	border-bottom: none !important;
	background: none !important;
}
#background-table {
	background-color: #d3d3d3;
}
#top-bar {
	border-radius:6px 6px 0px 0px;
	-moz-border-radius: 6px 6px 0px 0px;
	-webkit-border-radius:6px 6px 0px 0px;
	-webkit-font-smoothing: antialiased;
	background-color: #37424a;
	color: #888888;
}
#top-bar a {
	font-weight: bold;
	color: #eeeeee;
	text-decoration: none;
}
#footer {
	border-radius:0px 0px 6px 6px;
	-moz-border-radius: 0px 0px 6px 6px;
	-webkit-border-radius:0px 0px 6px 6px;
	-webkit-font-smoothing: antialiased;
}
body {
	font-family: Calibri, Arial, Helvetica, Geneva, sans-serif;
}
.header-content, .footer-content-left, .footer-content-right {
	-webkit-text-size-adjust: none;
	-ms-text-size-adjust: none;
}
.header-content {
	font-size: 12px;
	color: #888888;
}
.header-content a {
	font-weight: bold;
	color: #eeeeee;
	text-decoration: none;
}
#headline p {
	color: #FFFFFF;
	font-family: Calibri, Arial, Helvetica, Geneva, sans-serif;
	font-size: 36px;
	text-align: left;
	margin-top:0px;
	margin-bottom:30px;
}
#headline p a {
	color: #FFFFFF;
	text-decoration: none;
}
.articletitle td {
	height: 24px;
	vertical-align: middle;
	background-color: #37424A;
}
.article-title {
	font-size: 14px;
	font-weight:bold;
	margin-top:0px;
	margin-bottom:0;
	font-family: Calibri, Arial, Helvetica, Geneva, sans-serif;
	background-color: #37424A;
	color: #fff;
	text-indent:8px;
	text-transform: uppercase;
	font-style: italic;
	padding-bottom: 5px;
	padding-top:5px;
	line-height: 14px;
}
.article-title a {
	color: #37424A;
	text-decoration: none;
}
.article-content {
	margin-top: 0px;
	margin-bottom: 18px;
}
.article-content, .article-content th, .article-content td {
	font-size: 13px;
	line-height: 18px;
	color: #444444;
	font-family: Calibri, Arial, Helvetica, Geneva, sans-serif;
	vertical-align: top;
	text-align: left
}
.article-content th {
	font-weight: bold
}
.article-content a {
	color: #5596c0;
	font-weight:bold;
	text-decoration:none;
}
.article-content ol, .article-content ul {
	margin-top:0px;
	margin-bottom:18px;
	margin-left:19px;
	padding:0;
}
.article-content li {
	font-size: 13px;
	line-height: 18px;
	color: #444444;
}
.article-content li a {
	color: #5596c0;
	text-decoration:underline;
}
.article-content p {
	margin-bottom: 15px;
}
.footer-content-left {
	font-size: 12px;
	line-height: 15px;
	color: #888888;
	margin-top: 0px;
	margin-bottom: 15px;
}
.footer-content-left a {
	color: #eeeeee;
	font-weight: bold;
	text-decoration: none;
}
.footer-content-right {
	font-size: 11px;
	line-height: 16px;
	color: #888888;
	margin-top: 0px;
	margin-bottom: 15px;
}
.footer-content-right a {
	color: #eeeeee;
	font-weight: bold;
	text-decoration: none;
}
#footer {
	background-color: #37424a;
	color: #888888;
}
#footer a {
	color: #eeeeee;
	text-decoration: none;
	font-weight: bold;
}
#disclaimer {
	font-size: 11px;
}
#street-address {
	color: #ffffff;
}
#partnership {
	font-size: 11px;
	color: #666;
}
</style>

<!--[if gte mso 9]>
<style>
.article-content ol, .article-content ul {
   margin: 0 0 0 24px;
   padding: 0;
   list-style-position: inside;
}

</style>
<![endif]-->
<meta name="robots" content="noindex,nofollow">
</meta>
<meta property="og:title" content="test">
</meta>
</head>
<body style="width:100% !important;background-color:#d3d3d3;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;font-family:Calibri, Arial, Helvetica, Geneva, sans-serif;" >
<table width="100%" cellpadding="0" cellspacing="0" border="0" id="background-table" style="background-color:#d3d3d3;" >
  <tbody>
    <tr style="border-collapse:collapse;" >
      <td align="center" bgcolor="#d3d3d3" style="border-collapse:collapse;" ><table class="w640" width="640" cellpadding="0" cellspacing="0" border="0" style="border: 10px solid #d3d3d3;">
          <tbody>
            <tr style="border-collapse:collapse;" >
              <td class="w640" width="640" height="20" style="border-collapse:collapse;" ></td>
            </tr>
            <tr style="border-collapse:collapse;" >
              <td class="w640" width="640" style="border-collapse:collapse;" ><table id="top-bar" class="w640" width="640" cellpadding="0" cellspacing="0" border="0" bgcolor="#5596c0" style="border-radius:6px 6px 0px 0px;-moz-border-radius:6px 6px 0px 0px;-webkit-border-radius:6px 6px 0px 0px;-webkit-font-smoothing:antialiased;background-color:#37424a;color:#888888;" >
                  <tbody>
                    <tr style="border-collapse:collapse;" >
                      <td class="w15" width="15" style="border-collapse:collapse;" ></td>
                      <td class="w325" width="350" valign="middle" align="left" style="border-collapse:collapse;" ><table class="w325" width="350" cellpadding="0" cellspacing="0" border="0">
                          <tbody>
                            <tr style="border-collapse:collapse;" >
                              <td class="w325" width="350" height="8" style="border-collapse:collapse;" ></td>
                            </tr>
                          </tbody>
                        </table>
                        <div class="header-content" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;font-size:12px;color:#888888;" >Communication from <a href="<?php print $my_site_path; ?>" style="font-weight:bold;color:#eeeeee;text-decoration:none;" >VECCI</a></div>
                        <table class="w325" width="350" cellpadding="0" cellspacing="0" border="0">
                          <tbody>
                            <tr style="border-collapse:collapse;" >
                              <td class="w325" width="350" height="8" style="border-collapse:collapse;" ></td>
                            </tr>
                          </tbody>
                        </table></td>
                      <td class="w30" width="30" style="border-collapse:collapse;" ></td>
                      <td class="w255" width="255" valign="middle" align="right" style="border-collapse:collapse;" ><table class="w255" width="255" cellpadding="0" cellspacing="0" border="0">
                          <tbody>
                            <tr style="border-collapse:collapse;" >
                              <td class="w255" width="255" height="8" style="border-collapse:collapse;" ></td>
                            </tr>
                          </tbody>
                        </table>
                        <table cellpadding="0" cellspacing="0" border="0">
                          <tbody>
                            <tr style="border-collapse:collapse;" ></tr>
                          </tbody>
                        </table>
                        <table class="w255" width="255" cellpadding="0" cellspacing="0" border="0">
                          <tbody>
                            <tr style="border-collapse:collapse;" >
                              <td class="w255" width="255" height="8" style="border-collapse:collapse;" ></td>
                            </tr>
                          </tbody>
                        </table></td>
                      <td class="w15" width="15" style="border-collapse:collapse;" ></td>
                    </tr>
                  </tbody>
                </table></td>
            </tr>
            <tr style="border-collapse:collapse;" >
              <td id="header" class="w640" width="640" align="center" bgcolor="#5596c0" style="border-collapse:collapse;" ><div align="center" style="text-align:center; color: #fff; font-size: 30px;"><img src="<?php print $theme_url; ?>/email/header.png" name="customHeaderImage" width="640" height="141" border="0" align="top" class="w640" id="customHeaderImage" alt=" VECCI" style="display:inline;height:auto;line-height:100%;outline-style:none;text-decoration:none;" ></div></td>
            </tr>
            <tr style="border-collapse:collapse;" >
              <td class="w640" width="640" height="30" bgcolor="#ffffff" style="border-collapse:collapse;" ></td>
            </tr>
            <tr id="simple-content-row" style="border-collapse:collapse;" >
              <td class="w640" width="640" bgcolor="#ffffff" style="border-collapse:collapse;" ><table class="w640" width="640" cellpadding="0" cellspacing="0" border="0">
                  <tbody>
                    <tr style="border-collapse:collapse;" >
                      <td class="w30" width="30" style="border-collapse:collapse;" ></td>
                      <td class="w580" width="580" style="border-collapse:collapse;" ><table class="w580" width="580" cellpadding="0" cellspacing="0" border="0">
                          <tbody>
                            <tr style="border-collapse:collapse;" >
                              <td class="w580" width="580" style="border-collapse:collapse;" ><table class="articletitle" width="580" cellpadding="0" cellspacing="0" border="0">
                                  <tbody>
                                    <tr style="border-collapse:collapse;" >
                                      <td width="580" height="24" valign="middle" style="border-collapse:collapse;height:24px;vertical-align:middle;background-color:#37424A;" ><p align="left" class="article-title" style="font-size:14px;font-weight:bold;margin-top:0px;margin-bottom:0;font-family:Calibri, Arial, Helvetica, Geneva, sans-serif;background-color:#37424A;color:#fff;text-indent:8px;text-transform:uppercase;font-style:italic;padding-bottom:5px;padding-top:5px;line-height:14px;" ><?php echo $subject; ?></p></td>
                                    </tr>
                                  </tbody>
                                </table></td>
                            </tr>
                            <tr style="border-collapse:collapse;" >
                              <td class="w580" width="580" height="10" style="border-collapse:collapse;" ></td>
                            </tr>
                            <tr style="border-collapse:collapse;" >
                              <td class="w580" width="580" style="border-collapse:collapse;" ><div align="left" class="article-content" style="margin-top:0px;margin-bottom:18px;font-size:13px;line-height:18px;color:#444444;font-family:Calibri, Arial, Helvetica, Geneva, sans-serif;vertical-align:top;text-align:left;" >

<?php 
	//if a module outputs plain text use check_markup to format it that way so line breaks etc are rendered.
	if ($module == 'user' || $module == 'webform') {
		echo check_markup($body, 'plain_text');
	} else {
		echo $body;
	}
?>

                                </div></td>
                            </tr>
                            <tr style="border-collapse:collapse;" >
                              <td class="w580" width="580" height="10" style="border-collapse:collapse;" ></td>
                            </tr>
                          </tbody>
                        </table></td>
                      <td class="w30" width="30" style="border-collapse:collapse;" ></td>
                    </tr>
                  </tbody>
                </table></td>
            </tr>
            <tr style="border-collapse:collapse;" >
              <td class="w640" width="640" height="15" bgcolor="#ffffff" style="border-collapse:collapse;" ></td>
            </tr>
            <tr style="border-collapse:collapse;" >
              <td class="w640" width="640" style="border-collapse:collapse;" ><table id="footer" class="w640" width="640" cellpadding="0" cellspacing="0" border="0" bgcolor="#37424a" style="border-radius:0px 0px 6px 6px;-moz-border-radius:0px 0px 6px 6px;-webkit-border-radius:0px 0px 6px 6px;-webkit-font-smoothing:antialiased;background-color:#37424a;color:#888888;" >
                  <tbody>
                    <tr style="border-collapse:collapse;" >
                      <td class="w30" width="30" style="border-collapse:collapse;" ></td>
                      <td class="w580 h0" width="360" height="30" style="border-collapse:collapse;" ></td>
                      <td class="w0" width="60" style="border-collapse:collapse;" ></td>
                      <td class="w0" width="160" style="border-collapse:collapse;" ></td>
                      <td class="w30" width="30" style="border-collapse:collapse;" ></td>
                    </tr>
                    <tr style="border-collapse:collapse;" >
                      <td class="w30" width="30" style="border-collapse:collapse;" ></td>
                      <td class="w580" width="360" valign="top" style="border-collapse:collapse;" ><span class="hide">
                        <p id="permission-reminder" align="left" class="footer-content-left" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;font-size:12px;line-height:15px;color:#888888;margin-top:0px;margin-bottom:15px;" >You're receiving this because you were signed up at <a href="<?php print $my_site_path; ?>" style="color:#eeeeee;text-decoration:none;font-weight:bold;">our website</a>.</p>
                        </span> <span class="hide">
                        <p id="disclaimer" align="left" class="footer-content-left" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;line-height:15px;color:#888888;margin-top:0px;margin-bottom:15px;font-size:11px;" ><strong>DISCLAIMER: </strong>The information and advice provided is of a general nature only. Readers should ensure that they obtain advice from an appropriately qualified professional before acting, or deciding not to act, on the basis of the information in this publication. To find out more about VECCI or provide feedback on our services, please visit <a href="<?php print $my_site_path; ?>" style="color:#eeeeee;text-decoration:none;font-weight:bold;" >VECCI</a>.</p>
                        <p align="left" class="footer-content-left" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;font-size:12px;line-height:15px;color:#888888;margin-top:0px;margin-bottom:15px;" ><a href="<?php print $my_site_path; ?>" style="color:#eeeeee;text-decoration:none;font-weight:bold;">Privacy policy</a></p>
                        </span></td>
                      <td class="hide w0" width="60" style="border-collapse:collapse;"></td>
                      <td class="hide w0" width="160" valign="top" style="border-collapse:collapse;"><p id="street-address" align="right" class="footer-content-right" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;font-size:11px;line-height:16px;margin-top:0px;margin-bottom:15px;color:#ffffff;"><img src="<?php print $theme_url; ?>/email/logosml.png" alt="VECCI" style="height:auto;line-height:100%;outline-style:none;text-decoration:none;display:block;" ><br />
                          486 Albert Street<br />
                          East Melbourne<br />
                          Victoria 3002 Australia<br />
                          Phone (03) 8662 5333<br />
                          Fax (03) 8662 5462</p></td>
                      <td class="w30" width="30" style="border-collapse:collapse;" ></td>
                    </tr>
                    <tr style="border-collapse:collapse;" >
                      <td class="w30" width="30" style="border-collapse:collapse;" ></td>
                      <td class="w580 h0" width="360" height="15" style="border-collapse:collapse;" ></td>
                      <td class="w0" width="60" style="border-collapse:collapse;" ></td>
                      <td class="w0" width="160" style="border-collapse:collapse;" ></td>
                      <td class="w30" width="30" style="border-collapse:collapse;" ></td>
                    </tr>
                  </tbody>
                </table></td>
            </tr>
            <tr style="border-collapse:collapse;" >
              <td class="w640" width="640" height="60" style="border-collapse:collapse;" ></td>
            </tr>
          </tbody>
        </table></td>
    </tr>
  </tbody>
</table>
</body>
</html>




<?php if ($debug):
  $module_template = "htmlmail--$module.tpl.php";
  $message_template = "htmlmail--$module--$key.tpl.php";
?>
<hr />
<div class="htmlmail-debug">
  <dl><dt><p>
    To customize this message:
  </p></dt><dd><ol><li><p><?php if (empty($theme)): ?>
    Visit <u>admin/config/system/htmlmail</u>
    and select a theme to hold your custom email template files.
  </p></li><li><p><?php elseif (empty($theme_path)): ?>
    Visit <u>admin/appearance</u>
    to enable your selected
    <u><?php echo drupal_ucfirst($theme); ?></u> theme.
  </p></li><li><?php endif;
if ("$template_path/$template_name" == "$theme_path/$message_template"): ?><p>
    Edit your<br />
    <code><?php echo "$template_path/$template_name"; ?></code>
    <br />file.
  </p></li><li><?php
else:
  if (!file_exists("$theme_path/htmlmail.tpl.php")): ?><p>
    Copy<br />
    <code><?php echo "$module_path/htmlmail.tpl.php"; ?></code>
    <br />to<br />
    <code><?php echo "$theme_path/htmlmail.tpl.php"; ?></code>
  </p></li><li><?php
  endif;
  if (!file_exists("$theme_path/$module_template")): ?><p>
    For module-specific customization, copy<br />
    <code><?php echo "$module_path/htmlmail.tpl.php"; ?></code>
    <br />to<br />
    <code><?php echo "$theme_path/$module_template"; ?></code>
  </p></li><li><?php
  endif;
  if (!file_exists("$theme_path/$message_template")): ?><p>
    For message-specific customization, copy<br />
    <code><?php echo "$module_path/htmlmail.tpl.php"; ?></code>
    <br />to<br />
    <code><?php echo "$theme_path/$message_template"; ?></code>
  </p></li><li><?php endif; ?><p>
    Edit the copied file.
  </p></li><li><?php
endif; ?><p>
    Send a test message to make sure your customizations worked.
  </p></li><li><p>
    If you think your customizations would be of use to others,
    please contribute your file as a feature request in the
    <a href="http://drupal.org/node/add/project-issue/htmlmail">issue queue</a>.
  </p></li></ol></dd><?php if (!empty($params)): ?><dt><p>
    The <?php echo $module; ?> module sets the <u><code>$params</code></u>
    variable.  For this message,
  </p></dt><dd><p><code><pre>
$params = <?php echo check_plain(print_r($params, 1)); ?>
  </pre></code></p></dd><?php endif; ?></dl>
</div>
<?php endif;
