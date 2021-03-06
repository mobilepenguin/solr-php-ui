<div id="top-bar" class="top-bar">

	<div class="top-bar-left">

		<ul class="dropdown menu" data-dropdown-menu>
      		<li class="menu-text">Open Semantic Search</li>
		    <li><a href="./"><?php echo t("Newest documents"); ?></a></li>
		    <li><a href="#" data-toggle="searchoptions"><?php echo t("advanced_search"); ?></a></li>
		    <li><a target="_blank" title="Search with a list if there are results for each list entry" href="/search-apps/search-list/"><?php echo t("search_by_list"); ?></a></li>
    		<li><a target="_blank" title="Manage structure, navigation and interactive filters by ontologies like thesauri or lists of named entities like organizations, persons or locations" href="/search-apps/thesaurus/"><?php echo t("manage_structure"); ?></a></li>
    		<li><a target="_blank" title="Manage datasources" href="/search-apps/datasources/"><?php echo t("manage_datasources"); ?></a></li>
		</ul>
	</div>
    
	<div class="top-bar-right">
    	<ul class="menu">
    		<li><a target="_blank" href="<?=$uri_help?>"><?php echo t("Help"); ?></a></li>
    	</ul>
	</div>
</div>