# Nails Documentation

## Developer Documentation

Developer guides are intended to be human friendly documents which will help the developer
start using Nails, as well as be a thorough explanation of all functionality.

The Developer Documentation can be found [here](http://docs.nailsapp.co.uk).

## API Documentation

We generate Nail's API Documentation using [apigen](http://www.apigen.org/).

The API Documentation can be found [here](http://docs.nailsapp.co.uk/api).

### Installing apigen

	wget http://apigen.org/apigen.phar
	chmod +x apigen.phar
	mv apigen.phar /usr/local/bin/apigen
	apigen --version

### Generating Documentation

**Important:** Before generating or updating docs ensure that you have an up-to-date copy
*all* Nails modules. All repos should be consolidated under a single folder and not have
any other dependencies. A folder structure like this, for example:

	nailsapp/
	 - nails/
	 - common/
	 - module-admin/
	 - module-cdn/
	 - ...

Generate/update the API Documentation using the following command:

    apigen generate -s /path/to/nailsapp -d /path/to/site-docs/api --exclude common/CodeIgniter --template-theme bootstrap

**Note:** we are excluding the CodeIgniter files from documentation, for clarity.

