<div class="search-form__inner">

    <form
        class="search-form"
        role="search"
        method="get"
        id="searchform"
        action="<?php echo home_url('/') ?>"
    >
        <input
            class="search-form__input"
            type="text"
            value="<?php echo get_search_query() ?>"
            name="s" id="s"
            placeholder="Поиск"
            autocomplete="off"
        />

        <input type="hidden" value="animals" name="post_type">

        <button class="btn btn_more btn_search" type="submit" id="searchsubmit">
           <i class="search-form__icon icon-search"></i>
        </button>

        <ul class="ajax-search"></ul>
    </form>
</div>
