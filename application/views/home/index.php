<!-- Getting Started -->
<section id="component-search">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>Search for Nails Components</h1>
                        <p>
                            Nails is built around components. Bring extra functionality to your Nails application by installing
                            components, be it modules, skins or drivers.
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <p>
                                    <strong>Installation</strong>
                                </p>
                                <p>
                                    Install a component to your application using the
                                    <a href="https://github.com/nailsapp/command-line-tool">Command Line Tool</a>:
                                </p>
                                <div class="codeblock">
                                    <code>nails install vendor/component</code>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
    <li class="type-{{type}} subtype-{{subtype}}">
        <div class="panel panel-default">
            <div class="panel-body">
                <p>
                    <strong>
                        <b title="This component is a module" class="icon icon-module fa fa-puzzle-piece"></b>
                        <b title="This component is a driver" class="icon icon-driver fa fa-wrench"></b>
                        <b title="This component is a skin" class="icon icon-skin fa fa-picture-o"></b>
                        {{name}}
                    </strong>
                    <span class="pull-right hidden-xs">
                        <b class="icon icon-home fa fa-home"></b>
                        <a href="{{homepage}}" target="_blank">{{homepage}}</a>
                    </span>
                </p>
                <p class="clearfix">
                    {{description}}
                </p>
                <p class="hidden-sm hidden-md hidden-lg">
                    <b class="icon icon-home fa fa-home"></b>
                    <a href="{{homepage}}" target="_blank">{{homepage}}</a>
                </p>
            </div>
        </div>
    </li>
</script>