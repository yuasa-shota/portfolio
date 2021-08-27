<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width">



	<?php wp_head(); ?>
</head>

<body id ="body_contact" <?php body_class(); ?>>
	<?php get_header(); ?>
	<?php 
	/*Template Name:contact*/
	 ?>
<div id="wrapper">
 <section> <h2>お問合せ</h2>
  <form method="post" action="#">
    <table>
      <tbody>
        <tr>
          <td>貴社名</td>
          <td><input type="text"></td>
        </tr>
        <tr>
          <td>お名前(必須)</td>
          <td><input type="text" required></td>
        </tr>
        <tr>
          <td>連絡先(必須)</td>
          <td><input type="text" required></td>
        </tr>
        <tr>
          <td>件名</td>
          <td><input type="text"></td>
        </tr>
        <tr>
          <td>本文(必須)</td>
          <td><textarea required></textarea></td>
        </tr>
        <tr>
          <td><input type="submit"></td>
          <td><input type="reset"></td>
        </tr>
      </tbody>
    </table>
  </form></section>
</div>
<?php get_footer(); ?>
	<?php wp_footer(); ?>
</body>
</html>