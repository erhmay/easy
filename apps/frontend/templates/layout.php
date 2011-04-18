<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
      <div id="page-wrap">
          <?php include_partial('global/header') ?>

          <div class="clear"></div>
            <div id="content">
            <div class="inner">
            <div id="maincontent">
            <form id="searchform" method="get" action="http://localhost/jobs/">
            <div>
            <input type="text" onblur="if (this.value == '') {this.value = 'Ажил хайх';}" onfocus="if (this.value == 'Ажил хайх') {this.value = '';}" value="Ажил хайх" name="s" title="" id="search" class="text" />
            <label for="search"><input type="image" class="submit" title="Хай" alt="Хай" src="/images/search.png"></label>
            </div>
            </form>
            <div class="clear"></div>

          <?php echo $sf_content ?>

            </div><!-- maincontent end -->

            <?php include_partial('homepage/rightSideBar') ?>

            <div class="clear"></div>
            </div><!-- inner end -->
            </div><!-- content end -->

          <?php include_partial('global/footer') ?>
      </div><!-- page-wrap end -->
  </body>
</html>
