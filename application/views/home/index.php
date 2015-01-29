<!-- Getting Started -->
<section id="component-search">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p>
                    Nails is built around components. Bring extra functionality to your Nails application by installing
                    components, be it modules, skins or drivers.
                </p>
                <hr />
                <div class="well">
                    <div class="form-group">
                        <input type="text" id="search-term" class="form-control" placeholder="Begin your search here...">
                    </div>
                    <div class="form-group">
                        Include:&nbsp;&nbsp;
                        <label class="checkbox-inline">
                            <input type="checkbox" id="include-module" checked="checked"/>Modules
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" id="include-driver" checked="checked"/>Drivers
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" id="include-skin" checked="checked"/>Skins
                        </label>
                    </div>
                </div>
                <hr />
                <div id="search-searching">
                    <div class="search-box">
                        <b class="fa fa-spin fa-spinner"></b>
                    </div>
                </div>
                <ul id="search-results" class="list-unstyled"></ul>
            </div>
        </div>
    </div>
</section>
<script type="text/textmplate" id="tplResult">
    <li>
        <div class="panel panel-default">
            <div class="panel-body">
                <p>
                    <strong>{{name}}</strong>
                    {{#homepage}}
                        <a href="{{homepage}}" class="pull-right" target="_blank">{{homepage}}</a>
                    {{/homepage}}
                    {{^homepage}}
                        {{#repository}}
                            <a href="{{repository}}" class="pull-right" target="_blank">{{repository}}</a>
                        {{/repository}}
                    {{/homepage}}
                </p>
                <p>
                    {{description}}
                </p>
            </div>
        </div>
    </li>
</script>