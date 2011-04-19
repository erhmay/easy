<form id="searchform" method="get" action="http://localhost/jobs/">
    <div>
        <input type="text" onblur="if (this.value == '') {this.value = 'Ажил хайх';}" onfocus="if (this.value == 'Ажил хайх') {this.value = '';}" value="Ажил хайх" name="s" title="" id="search" class="text" />
        <label for="search"><input type="image" class="submit" title="Хай" alt="Хай" src="/images/search.png"></label>
    </div>
</form>
<div class="clear"></div>
<?php include_component('job', 'latest') ?>

