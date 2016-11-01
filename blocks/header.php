<div class="header-container">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="header">
                    <h1 class="logo" style="float: left; ">
                        <strong>Mitsubishi ISAMCO</strong>
                        <a href="" title="Mitsubishi ISAMCO" class="logo">
                            <img width="100%" src="img/header/logo.jpg" alt="Mitsubishi ISAMCO"/>
                        </a>                        
                    </h1>
                    <div style="float: left;margin-left: 20px; ">
                        <img width="100%" src="img/header/ten-cty.png"/>
                    </div>
                    
                        <p class="welcome-msg">Hotline : 0909 293 414 (Mr.Loc) </p>
                        
                        <form id="search_mini_form" action="catalogsearch/result/" method="get">
                            <div class="form-search">
                                <label for="search">Tìm kiếm:</label>
                                <input id="search" type="text" name="q" value="" class="input-text" maxlength="128"/>
                                <button type="submit" title="Tìm kiếm" class="button"><span><span>Tìm kiếm</span></span></button>
                                <div id="search_autocomplete" class="search-autocomplete"></div>
                                <script type="text/javascript">
                                    //<![CDATA[
                                    var searchForm = new Varien.searchForm('search_mini_form', 'search', '');
                                    searchForm.initAutocomplete('catalogsearch/ajax/suggest/', 'search_autocomplete');
                                    //]]>
                                </script>
                            </div>
                        </form>
                    
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>