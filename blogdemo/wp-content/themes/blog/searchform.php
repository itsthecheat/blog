
<form class="form-inline w-100" action="/" method="get">

        <label class="sr-only" for="inlineFormInputSearch">Search</label>
        <div class="input-group">
         <span><i type="submit" class="fa fa-search" aria-hidden="true"></i></span>
          <input class="form-control" type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
          <input type="hidden" value="post" name="post_type" id="post_type" />
        </div>

</form>

